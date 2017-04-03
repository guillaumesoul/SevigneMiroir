<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Presentation;
use AppBundle\Form\PresentationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PresentationController extends Controller
{


    /**
     * permet de lister toutes les présentations enregistrées en base de données
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();

        return $this->render('presentation/index.html.twig', [
            'presentations' => $presentations
        ]);
    }


    /**
     * permet d'ajouter une nouvelle présentation
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $date = new \DateTime('1970-01-01 00:00:00');
        $timeStampOrigine = $date->getTimestamp();

        $presentation = new Presentation();
        $presentation->setActive(true);
        $presentation->setSliderAutostart(true);
        $presentation->setSliderLoop(true);
        $presentation->setSlideDuration(3000);

        $form = $this->createForm(PresentationType::class, $presentation);
        $form->handleRequest($request);

        //TODO P1 : duree presentation type integer pour nombre de seconde -> on fera 2 inputs dans le form d'ajout pour min et sec

        if ($form->isSubmitted() && $form->isValid()) {

            //https://docs.google.com/presentation/d/1lATcS1XSr8VnaB_rrZqXjAh6rKV3HMPV573HRFp2e6o/pub?start=false&loop=false&delayms=3000
            $presentation = $form->getData();
            $url = $presentation->getUrl();
            preg_match('/https:.*delayms=\d+/',$url, $urlMatches);

            if (isset($urlMatches[0]) && filter_var($urlMatches[0], FILTER_VALIDATE_URL)) {
                $cleanUrl = $urlMatches[0];
                preg_match('/((https)(.*)(presentation\/d\/))(?P<googleSlideId>.*)(\/)(\w+\?)(start=)(?P<start>.*)(&)(loop=)(?P<loop>.*)(&)(delayms=)(?P<delayms>.*)/', $cleanUrl, $paramsUrl);

                if(isset($paramsUrl['googleSlideId']))  $googleSlideId = $paramsUrl['googleSlideId'];
                if(isset($paramsUrl['start']))  ($paramsUrl['start'] == "false") ? $start = false : $start = true;
                if(isset($paramsUrl['loop']))  ($paramsUrl['loop'] == "false") ? $loop = false : $loop = true;
                if(isset($paramsUrl['delayms']))  $delayms = $paramsUrl['delayms'];

                if(isset($googleSlideId)) {
                    $presentation->setIdGoogleSlide($googleSlideId);
                }

                $presentation->setSliderAutostart(true);
                /*if(isset($loop)) {
                    $presentation->setSliderLoop($loop);
                }*/
                $presentation->setSliderLoop(true);
            }

            $presentationDurationMicroSec = $presentation->getSlideDuration() / 1000 * $presentation->getSlidesNumber();
            $presentationDurationTimeStamp = $timeStampOrigine + $presentationDurationMicroSec;

            $timeStampOrigine = $request->query->has('slideTransitionDuration');
            $transitionDuration = 0;
            if($presentation->getSlideTransitionDuration() != null) {
                $transitionDuration = $presentation->getSlideTransitionDuration();
            }
            $totalTransitionDuration = $transitionDuration/1000 * ($presentation->getSlidesNumber() - 1);
            $presentationDurationTimeStamp += $totalTransitionDuration;

            $datetimePresDuration = new \DateTime();
            $datetimePresDuration->setTimestamp($presentationDurationTimeStamp);
            $presentation->setPresentationDuration($datetimePresDuration);

            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('presentation_index');
        }

        $errors = $form->getErrors();

        return $this->render('presentation/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @param Request $request
     * @param $presentationId
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, $presentationId)
    {
        $em = $this->getDoctrine()->getManager();
        $presentation = $em->getRepository('AppBundle:Presentation')->find($presentationId);

        $form = $this->createForm(PresentationType::class, $presentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('presentation_index');
        }

        return $this->render('presentation/edit.html.twig', [
            'presentation' => $presentation,
            'form' => $form->createView(),
        ]);
    }

    public function deleteAction(Request $request, $presentationId)
    {
        $em = $this->getDoctrine()->getManager();
        $presentation = $em->getRepository('AppBundle:Presentation')->find($presentationId);
        // TODO P1 : gestion de la suppression avec lien avec serie : interdiction de supprimer tant que des series contiennent cette présentation faire message d'alerte pour indiquer les séries concernées

        $em->remove($presentation);
        $em->flush();
        return $this->redirectToRoute('presentation_index');
    }

}
