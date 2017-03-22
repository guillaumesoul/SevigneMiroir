<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Presentation;
use AppBundle\Form\PresentationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PresentationController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('presentation/index.html.twig');
    }

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

            return $this->redirectToRoute('home');
        }

        return $this->render('presentation/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function manageAction()
    {
        return $this->render('presentation/manage.html.twig');
    }
}
