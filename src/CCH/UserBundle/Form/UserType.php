<?php

namespace CCH\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstname', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Prénom *')))
                ->add('name', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Nom *')))
                ->add('username', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Pseudo *')))
                ->add('email', EmailType::class, array('label' => false, 'translation_domain' => 'FOSUserBundle', 'attr' => array('placeholder' => 'Email *')))
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => false, 'attr' => ['placeholder' => 'Mot de passe *']),
                    'second_options' => array('label' => false, 'attr' => ['placeholder' => 'Confirmer mot de passe *']),
                    'invalid_message' => 'Mot de passe ne correspond pas',
                ))
                ->add('phone', TextType::class, array('label' => false, 'attr' => ['placeholder' => 'Numéro de téléphone']))
                ->add('birthdate', DateType::class, array('label'=>false,'widget'=>'single_text','placeholder'=>'Date de naissance'))
                ->add('country', TextType::class, array('label' => false, 'attr' => ['placeholder' => 'Pays']))
                ->add('city', TextType::class, array('label' => false, 'attr' => ['placeholder' => 'Ville']))
                ->add('submit', SubmitType::class, array('label' => 'S\'inscire', 'attr' => ['class' => 'awe-btn awe-btn-1 awe-btn-medium']))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CCH\UserBundle\Entity\User'
        ));
    }

}
