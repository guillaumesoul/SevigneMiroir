<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DisplayController extends Controller
{


    public function indexAction(Request $request)
    {
        //$json = $this->json(array('test' => 'test'));
        $response = new JsonResponse();
        $response->setData(array(
            'data' => 123
        ));
        return $response;
        /*return $this->render('display/test.html.twig', [
            'toto' => 'toto'
        ]);*/
    }

    /*
     * Cette fonction permet de retourner l'affichage en fonction de l'heure
     *
     * // TODO déterminer sous quel forme retourner l'affichage (url?, code html, json...?)
     * */
    public function getAffichageAction()
    {
        //je check l'instant présent
        //je regarde en base quelles sont les séries qui correspondent
        // TODO gestion des conflits sur les période, on peut ajouter 2 series sur la meme plage horaire
        //je récupère l'affichage qui correspond au moment précis
        $em = $this->getDoctrine()->getManager();
        $nowHoursMinSec = date('H:i:s');
        $date = new \DateTime('1970-01-01 ' . $nowHoursMinSec);
        $series = $em->getRepository('AppBundle:Serie')->getActiveSerie($date);

        /*return $this->render('display/test.html.twig', [
            'toto' => 'toto'
        ]);*/

        // recuperer l'affichage en fonction de l'heure
        // TODO vaut il mieux envoyer toute la serie ou affichage par affichage?
        //je pense qu'il vaut mieux envoyer toute la serie
        $serializer = $this->get('jms_serializer');
        $json = $serializer->serialize($series, 'json');
        //$data = $serializer->deserialize($inputStr, $typeName, $format);

        $response = new JsonResponse();
        $response->setJson($json);
        return $response;

    }
}
