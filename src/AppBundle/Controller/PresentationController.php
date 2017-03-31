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

            //TODO faire de la regex pour déterminer les valeur des param dans l'url
            $presentation = $form->getData();
            $url = $presentation->getUrl();
            preg_match('/https:.*delayms=\d+/',$url, $urlMatches);

            if (isset($urlMatches[0]) && filter_var($urlMatches[0], FILTER_VALIDATE_URL)) {
                $cleanUrl = $urlMatches[0];
            }



            $presentation = $form->getData();
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
