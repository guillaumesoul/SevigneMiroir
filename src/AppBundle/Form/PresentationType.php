<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nom'
            ))
            ->add('url', TextType::class, array(
                'label' => 'Lien de publication du Google slide'
            ))
            //->add('active')
            //->add('sliderLoop')
            //->add('active')
            ->add('slidesNumber', NumberType::class, array(
                'label' => 'Nombre de slides'
            ))
            ->add('slideDuration', NumberType::class, array(
                'label' => 'Changer les diapositives toutes les (secondes)'
            ))
            ->add('slideTransitionDuration', NumberType::class, array(
                'required' => false,
                'label' => 'Durée de transition slides (secondes)'
            ))
            ->add('presentationDuration')
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
