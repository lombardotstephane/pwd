<?php

namespace CCH\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="CCH\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{ 
    public function __construct() {
        parent::__construct();
        $this->registerdate = new \Datetime();
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;
    
    /**
     * @var date
     * 
     * @ORM\Column(name="registerdate", type="date")
     */
    private $registerdate;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;
    
    /**
     * @var date
     * 
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="country", type="string", nullable=true)
     */
    private $country;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="city", type="string", nullable=true)
     */
    private $city;
    
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
     * @return Name
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Set registerdate
     *
     * @param date $registerdate
     *
     * @return Registerdate
     */
    public function setRegisterdate($registerdate)
    {
        $this->registerdate = $registerdate;

        return $this;
    }

    /**
     * Get registerdate
     *
     * @return date
     */
    public function getRegisterdate()
    {
        return $this->registerdate;
    }
    
    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Set birthdate
     *
     * @param date $birthdate
     *
     * @return Birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return date
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    
    /**
     * Set country
     *
     * @param string $country
     *
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Set city
     *
     * @param string $city
     *
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}

