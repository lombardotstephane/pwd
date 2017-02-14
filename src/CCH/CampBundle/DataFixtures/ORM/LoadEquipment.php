<?php
/**
 * Created by PhpStorm.
 * User: stephlom
 * Date: 13/12/16
 * Time: 16:18
 */

namespace CCH\CampBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use CCH\CampBundle\Entity\Equipment;
class LoadEquipment implements FixtureInterface
{
    public function Load (ObjectManager $manager)
    {
        $equipment = [
            [
                'equipment' => 'Piscine',
                'image_url' => 'pisicne.png',
            ],
            [
                'equipment' => 'Table',
                'image_url' => 'table.png',
            ],
            [
                'equipment' => 'Electricité',
                'image_url' => 'ampoule.png',
            ]
        ];
        foreach ($equipment as $equip){
            $view = new Equipment();
            $view
                ->setEquipment($equip['equipment'])
                ->setImageUrl($equip['image_url'])
            ;

            $manager->persist($view);
        }
        $manager->flush();
    }
}