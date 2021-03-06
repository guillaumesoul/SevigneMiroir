<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Serie;
use AppBundle\Form\SerieType;
use AppBundle\Entity\Affichage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SerieController extends Controller
{


    /**
     * permet de lister tous les series enregistrés en base de données
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        //$series = $em->getRepository('AppBundle:Serie')->findAll();
        $series = $em->getRepository('AppBundle:Serie')->findByUser($this->getUser());

        return $this->render('serie/index.html.twig', [
            'series' => $series
        ]);

    }

    /* TODO P2: regrouper formulaire d'ajout et d'edition en une seul form classe dans dir form de resources/views */
    public function addAction(Request $request)
    {
        $form = $this->createForm(SerieType::class);
        $form->handleRequest($request);

        // TODO P1 : gestion durée serie si passage minuit (tours de l'horloge)
        // TODO P2 : gestion concurrence séries si chevauchement plage horaire
        // TODO P3 : gestion des series sur les jours de la semaine?
        if ($form->isSubmitted() && $form->isValid()) {

            $serie = $form->getData();
            $serie->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_index');
        }

        return $this->render('serie/add.html.twig', [
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
    public function manageAction($serieId, Request $request)
    {
        //il faut que je liste les présentations enregistrées
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('AppBundle:Serie')->find($serieId);
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();

        $form = $this->createForm(SerieType::class, $serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $series = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();

            return $this->redirectToRoute('serie_index');
        }

        //si les presentation sont definies les enregistrer
        if($request->request->has('presentationOrder')) {
            $presentationOrder = $request->request->get('presentationOrder');
            //je veux donc enregistrer les relations series
            $selectedPresentations = $em->getRepository('AppBundle:Presentation')->findBy(array('id' => $presentationOrder));
            $indexedTabSelectedPresentations = [];
            foreach ($selectedPresentations as $pres) {
                $indexedTabSelectedPresentations[$pres->getId()] = $pres;
            }

            //je supprime toutes les relations existantes et ajoute celle envoyées
            // TODO P3 : detection uniquement des changements, ne pas tout supprimer et tout ajouter comme un gros sac
            $existingAffichages = $serie->getAffichages();
            foreach ($existingAffichages as $existingAffichage) {
                $em->remove($existingAffichage);
            }

            $position = 0;
            foreach ($presentationOrder as $presOrder) {
                //je cree une nouvelle serie
                $affichage = new Affichage();
                $affichage->setPosition($position);
                $affichage->setSerie($serie);
                if(isset($indexedTabSelectedPresentations[$presOrder])) {
                    $affichage->setPresentation($indexedTabSelectedPresentations[$presOrder]);
                }
                $em->persist($affichage);
                $position++;
            }
            $em->flush();
        }

        return $this->render('serie/manage.html.twig', [
            'presentations' => $presentations,
            'serie' => $serie,
            'form' => $form->createView()
        ]);
    }
}
