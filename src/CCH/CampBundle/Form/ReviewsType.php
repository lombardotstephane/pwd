<?php

namespace CCH\CampBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReviewsType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('notation', IntegerType::class, array('label' => false, 'attr' => ['placeholder' => 'Notation / 10', 'max' => '10', 'min' => '0']))
                ->add('positive', TextType::class, array('label' => false, 'attr' => ['placeholder' => 'Points positifs']))
                ->add('negative', TextType::class, array('label' => false, 'attr' => ['placeholder' => 'Points negatifs']))
                ->add('reviews', TextareaType::class, array('label' => false, 'attr' => ['placeholder' => 'Explications']))
                ->add('submit', SubmitType::class, array('label' => 'Envoyer', 'attr' => ['class' => 'awe-btn awe-btn-1']))
                ->setMethod('POST')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CCH\CampBundle\Entity\Reviews'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'cch_campbundle_reviews';
    }

}
