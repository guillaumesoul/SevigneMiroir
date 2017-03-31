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
        $response = new JsonResponse();
        $response->setData(array(
            'data' => 123
        ));
        return $response;
    }

    /*
     * Cette fonction permet de retourner l'affichage en fonction de l'heure
     *
     * // TODO déterminer sous quel forme retourner l'affichage (url?, code html, json...?)
     * */
    public function getAffichageAction()
    {
        $em = $this->getDoctrine()->getManager();

        // TODO gestion des conflits sur les période, on peut ajouter 2 series sur la meme plage horaire
        $nowHoursMinSec = date('H:i:s');
        $date = new \DateTime('1970-01-01 ' . $nowHoursMinSec);
        $series = $em->getRepository('AppBundle:Serie')->getActiveSerie($date);

        // recuperer l'affichage en fonction de l'heure
        $serializer = $this->get('jms_serializer');
        $json = $serializer->serialize($series, 'json');

        $response = new JsonResponse();
        $response->setJson($json);
        return $response;

    }
}
