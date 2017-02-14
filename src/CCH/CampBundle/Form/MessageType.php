<?php

namespace CCH\CampBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MessageType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstname', TextType::class, ['label' => false, 'attr' => ['placeholder' => 'Prénom']])
                ->add('name', TextType::class, ['label' => false, 'attr' => ['placeholder' => 'Nom']])
                ->add('mail', EmailType::class, ['label' => false, 'attr' => ['placeholder' => 'Email']])
                ->add('message', TextareaType::class, ['label' => false, 'attr' => ['placeholder' => 'Votre message']])
                ->add('submit', SubmitType::class, ['label' => 'Envoyer', 'attr' => ['class' => 'awe-btn awe-btn-1 awe-btn-lager']])
                ->setMethod('post')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CCH\CampBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'cch_campbundle_message';
    }

}
