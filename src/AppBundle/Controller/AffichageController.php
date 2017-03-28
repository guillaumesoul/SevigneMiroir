<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Serie;
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

            $affichages = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($affichages);
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
    public function manageAction($affichageId, Request $request)
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        $affichage = $em->getRepository('AppBundle:Affichage')->find($affichageId);
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();

        $form = $this->createForm(AffichageType::class, $affichage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $affichages = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($affichages);
            $em->flush();

            return $this->redirectToRoute('affichage_index');
        }

        //si les presentation sont definies les enregistrees
        if($request->request->has('presentationOrder')) {
            $presentationOrder = $request->request->get('presentationOrder');
            //je veux donc enregistrer les relations series
            $selectedPresentations = $em->getRepository('AppBundle:Presentation')->findBy(array('id' => $presentationOrder));
            $indexedTabSelectedPresentations = [];
            foreach ($selectedPresentations as $pres) {
                $indexedTabSelectedPresentations[$pres->getId()] = $pres;
            }

            $position = 0;
            foreach ($presentationOrder as $presOrder) {
                //je cree une nouvelle serie
                $serie = new Serie();
                $serie->setPosition($position);
                $serie->setAffichage($affichage);
                if(isset($indexedTabSelectedPresentations[$presOrder])) {
                    $serie->setPresentation($indexedTabSelectedPresentations[$presOrder]);
                }
                $position++;
            }
            $za = 'sq';


        }

        return $this->render('presentation/manage.html.twig', [
            'presentations' => $presentations,
            'affichages' => $affichage,
            'form' => $form->createView()
        ]);
    }
}
