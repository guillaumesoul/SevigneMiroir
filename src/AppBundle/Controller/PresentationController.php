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
        $presentation = new Presentation();
        $form = $this->createForm(PresentationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //https://docs.google.com/presentation/d/1lATcS1XSr8VnaB_rrZqXjAh6rKV3HMPV573HRFp2e6o/pub?start=false&loop=false&delayms=3000
            $presentation = $form->getData();
            $url = $presentation->getUrl();
            preg_match('/https:.*delayms=\d+/',$url, $urlMatches);

            /*if (isset($urlMatches[0]) && filter_var($urlMatches[0], FILTER_VALIDATE_URL)) {
                $cleanUrl = $urlMatches[0];
                preg_match('/((https)(.*)(presentation\/d\/))(?P<googleSlideId>.*)(\/)(\w+\?)(start=)(?P<start>.*)(&)(loop=)(?P<loop>.*)(&)(delayms=)(?P<delayms>.*)/', $cleanUrl, $paramsUrl);

                if(isset($paramsUrl['googleSlideId']))  $googleSlideId = $paramsUrl['googleSlideId'];
                if(isset($paramsUrl['start']))  ($paramsUrl['start'] == "false") ? $start = false : $start = true;
                if(isset($paramsUrl['loop']))  ($paramsUrl['loop'] == "false") ? $loop = false : $loop = true;
                if(isset($paramsUrl['delayms']))  $delayms = $paramsUrl['delayms'];

                $slideDuration = $presentation->getSlideDuration();
                if(isset($googleSlideId)) {
                    $presentation->setIdGoogleSlide($googleSlideId);
                }
                $presentation->setStart(true);
                if(isset($loop)) {
                    $presentation->setLoop($loop);
                }
                if($presentation->getSlideDuration() == null) {
                    $presentation->setSlideDuration($delayms);
                }
            }*/

            $presentation->setActive(true);
            $presentation->setSliderAutostart(true);
            $presentation->setSliderLoop(true);

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

    // TODO faire fonction edition presentation

}
