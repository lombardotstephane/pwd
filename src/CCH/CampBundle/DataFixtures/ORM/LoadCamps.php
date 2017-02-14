<?php

namespace CCH\CampBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use CCH\CampBundle\Entity\Camp;
/**
 * Created by PhpStorm.
 * User: Stephane
 * Date: 11-12-16
 * Time: 14:53
 */
class LoadCamps implements FixtureInterface
{
    public function Load(ObjectManager $manager)
    {
        $camp = [
            [
                'name' => 'StephCamp',
                'description' => 'blablablabla',
                'tent' => true,
                'caravan' => false,
                'matorhome' => true,
                'general_price' => '4',
                'published' => true,
                'rules' => 'tatatattatiti titi hzhcgvsjdb',
                'country' => 'Belgium',
                'district' => 'la',
                'city' => 'ici'
            ],
            [
                'name' => 'AmeCamp',
                'description' => 'blabliiiblabla',
                'tent' => true,
                'caravan' => false,
                'matorhome' => true,
                'general_price' => '2',
                'published' => true,
                'rules' => 'er e rgzerg zerg zer g',
                'country' => 'Belgium',
                'district' => 'la',
                'city' => 'ici'
            ]
        ];
        foreach ($camp as $camp){
            $view = new Camp();
            $view
                ->setName($camp['name'])
                ->setDescription($camp['description'])
                ->setTent($camp['tent'])
                ->setCaravan($camp['caravan'])
                ->setMotorhome($camp['matorhome'])
                ->setGeneralPrice($camp['general_price'])
                ->setPublished($camp['published'])
                ->setRules($camp['rules'])
                ->setCountry($camp['country'])
                ->setDistrict($camp['district'])
                ->setCity($camp['city'])
            ;

            $manager->persist($view);
        }
        $manager->flush();
    }
}