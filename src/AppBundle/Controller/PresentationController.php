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
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function addAction()
    {
        /*return $this->render('presentation/add.html.twig', array(
            'variable_name' => 'variable_value',
        ));*/

        $presentation = new Presentation();

        $form = $this->createForm(PresentationType::class);

        /*$form = $this->createForm(PresentationType::class, $presentation, array(
            'action' => $this->generateUrl('profile_update'),
            'method' => 'POST'
        ));


        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();*/

        return $this->render('presentation/add.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}
