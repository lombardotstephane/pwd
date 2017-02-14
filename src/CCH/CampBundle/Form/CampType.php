<?php

namespace CCH\CampBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use CCH\CampBundle\Form\PictureType;
use CCH\CampBundle\Form\SupEquipType;
use CCH\CampBundle\Form\SupActType;

class CampType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, ['label' => 'Nom du camping :', 'attr' => ['placeholder' => 'Nom du camping', 'maxlength' => '255']])
                ->add('tent', CheckboxType::class, ['label' => 'Tente', 'required' => false])
                ->add('caravan', CheckboxType::class, ['label' => 'Caravanne', 'required' => false])
                ->add('motorhome', CheckboxType::class, ['label' => 'Motorhome', 'required' => false])
                ->add('description', TextareaType::class, ['label' => 'Description :', 'attr' => ['placeholder' => 'Description du camping', 'rows' => '8']])
                ->add('generalPrice', IntegerType::Class, ['label' => 'Prix général', 'attr' => ['placeholder' => 'Prix général du camping']])
                ->add('rules', TextareaType::class, ['label' => 'Réglement', 'attr' => ['placeholder' => 'Réglement du camping', 'rows' => '8']])
                ->add('country', TextType::class, ['label' => 'Pays :', 'attr' => ['placeholder' => 'Pays du camping']])
                ->add('district', TextType::class, ['label' => 'Région :', 'attr' => ['placeholder' => 'Région du camping']])
                ->add('city', TextType::class, ['label' => 'Ville :', 'attr' => ['placeholder' => 'Ville du camping']])
                ->add('pictures', CollectionType::class, array(
                    'entry_type' => PictureType::class,
                    'allow_add' => true,
                    'allow_delete' => true
                ))
                ->add('equipment', EntityType::class, array(
                    'class' => 'CCHCampBundle:Equipment',
                    'choice_label' => 'equipment',
                    'label' => 'Equipments',
                    'multiple' => true,
                    'expanded' => true
                ))
                ->add('activity', EntityType::class, array(
                    'class' => 'CCHCampBundle:Activity',
                    'choice_label' => 'activity',
                    'label' => 'Activités',
                    'multiple' => true,
                    'expanded' => true
                ))
                ->add('supequips', CollectionType::class, array(
                    'entry_type' => SupEquipType::class,
                    'allow_add' => true,
                    'allow_delete' => true
                ))
                ->add('supacts', CollectionType::class, array(
                    'entry_type' => SupActType::class,
                    'allow_add' => true,
                    'allow_delete' => true
                ))
                ->add('submit', SubmitType::class, array('label' => 'Terminer', 'attr' => ['class' => 'btn btn-success btn-lg pull-right']))
                ->setMethod('post');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CCH\CampBundle\Entity\Camp'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'cch_campbundle_camp';
    }

}
