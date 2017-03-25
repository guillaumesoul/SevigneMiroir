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

            $presentation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('presentation_index');
        }

        return $this->render('presentation/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * permet d'organiser les présentations
     * définir les présentations actives
     * faire des groupes de présentations (un groupe comprenant plusieurs présentations qui vont défiler les unes après les autres)
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function manageAction()
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();

        return $this->render('presentation/manage.html.twig', [
            'presentations' => $presentations
        ]);
    }
}
