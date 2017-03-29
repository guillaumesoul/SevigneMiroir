<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PresentationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // TODO enregistrer une duree de presentation par defaut lorsque rien n'est saisi
        $builder
            ->add('name')
            ->add('url')
            ->add('active')
            ->add('slidesNumber', NumberType::class, array(
                'required' => false
            ))
            ->add('slideDuration', NumberType::class, array(
                'required' => false
            ))
            ->add('slideTransitionDuration', NumberType::class, array(
                'required' => false
            ))
            ->add('presentationDuration', TimeType::class , array(
                'with_seconds' => true,
                'required' => false
            ))
            ->add('save', SubmitType::class, array('label' => 'Save'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Presentation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_presentation';
    }


}
