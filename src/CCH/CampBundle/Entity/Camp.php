<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Camp
 *
 * @ORM\Table(name="camp")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\CampRepository")
 */
class Camp
{
    public function __construct()
    {
        $this->dateAdded = new \Datetime();
    }
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="tent", type="boolean")
     */
    private $tent;

    /**
     * @var bool
     *
     * @ORM\Column(name="caravan", type="boolean")
     */
    private $caravan;

    /**
     * @var bool
     *
     * @ORM\Column(name="motorhome", type="boolean")
     */
    private $motorhome;

    /**
     * @var int
     *
     * @ORM\Column(name="general_price", type="integer")
     */
    private $generalPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="integer")
     */
    private $owner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="text")
     */
    private $rules;


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
     * Set name
     *
     * @param string $name
     *
     * @return Camp
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Camp
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tent
     *
     * @param boolean $tent
     *
     * @return Camp
     */
    public function setTent($tent)
    {
        $this->tent = $tent;

        return $this;
    }

    /**
     * Get tent
     *
     * @return bool
     */
    public function getTent()
    {
        return $this->tent;
    }

    /**
     * Set caravan
     *
     * @param boolean $caravan
     *
     * @return Camp
     */
    public function setCaravan($caravan)
    {
        $this->caravan = $caravan;

        return $this;
    }

    /**
     * Get caravan
     *
     * @return bool
     */
    public function getCaravan()
    {
        return $this->caravan;
    }

    /**
     * Set motorhome
     *
     * @param boolean $motorhome
     *
     * @return Camp
     */
    public function setMotorhome($motorhome)
    {
        $this->motorhome = $motorhome;

        return $this;
    }

    /**
     * Get motorhome
     *
     * @return bool
     */
    public function getMotorhome()
    {
        return $this->motorhome;
    }

    /**
     * Set generalPrice
     *
     * @param integer $generalPrice
     *
     * @return Camp
     */
    public function setGeneralPrice($generalPrice)
    {
        $this->generalPrice = $generalPrice;

        return $this;
    }

    /**
     * Get generalPrice
     *
     * @return int
     */
    public function getGeneralPrice()
    {
        return $this->generalPrice;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Camp
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return Camp
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return Camp
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set rules
     *
     * @param string $rules
     *
     * @return Camp
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }
}

