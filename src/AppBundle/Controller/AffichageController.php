<?php

namespace AppBundle\Controller;

use AppBundle\Form\AffichageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AffichageController extends Controller
{


    /**
     * permet de lister tous les affichages enregistrés en base de données
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        $affichages = $em->getRepository('AppBundle:Affichage')->findAll();

        $form = $this->createForm(AffichageType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $presentation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($presentation);
            $em->flush();

            return $this->redirectToRoute('affichage_index');
        }

        return $this->render('affichage/index.html.twig', [
            'affichages' => $affichages,
            'form' => $form->createView()
        ]);

    }

    /**
     * permet d'organiser les présentations
     * définir les présentations actives
     * faire des groupes de présentations (un groupe comprenant plusieurs présentations qui vont défiler les unes après les autres)
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function manageAction($affichageId)
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        $affichage = $em->getRepository('AppBundle:Affichage')->find($affichageId);
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();

        return $this->render('presentation/manage.html.twig', [
            'presentations' => $presentations,
            'affichages' => $affichage
        ]);
    }
}
