<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipment
 *
 * @ORM\Table(name="equipment")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\EquipmentRepository")
 */
class Equipment
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
     * @ORM\Column(name="equipment", type="string", length=255)
     */
    private $equipment;

    /**
     * @ORM\OneToOne(targetEntity="CCH\CampBundle\Entity\Picture",cascade={"persist"})
     */
    private $imageUrl;


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
     * Set equipment
     *
     * @param string $equipment
     *
     * @return Equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return string
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Equipment
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->camp = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
