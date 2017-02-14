<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupEquip
 *
 * @ORM\Table(name="sup_equip")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\SupEquipRepository")
 */
class SupEquip
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="supequip", type="string", length=255)
     */
    private $supequip;

    /**
     * @ORM\ManyToOne(targetEntity="CCH\CampBundle\Entity\Camp", inversedBy="pictures", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $camp;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set supequip
     *
     * @param string $supequip
     *
     * @return SupEquip
     */
    public function setSupequip($supequip)
    {
        $this->supequip = $supequip;

        return $this;
    }

    /**
     * Get supequip
     *
     * @return string
     */
    public function getSupequip()
    {
        return $this->supequip;
    }

    /**
     * Set camp
     *
     * @param \CCH\CampBundle\Entity\Camp $camp
     *
     * @return SupEquip
     */
    public function setCamp(\CCH\CampBundle\Entity\Camp $camp)
    {
        $this->camp = $camp;

        return $this;
    }

    /**
     * Get camp
     *
     * @return \CCH\CampBundle\Entity\Camp
     */
    public function getCamp()
    {
        return $this->camp;
    }
}
