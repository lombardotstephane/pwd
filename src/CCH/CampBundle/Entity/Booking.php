<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\BookingRepository")
 */
class Booking
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
     * @var date
     *
     * @ORM\Column(name="date1", type="date")
     */
    private $date1;

    /**
     * @var date
     *
     * @ORM\Column(name="date2", type="date")
     */
    private $date2;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPeople", type="integer")
     */
    private $nbPeople;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmed", type="boolean")
     */
    private $confirmed;

    
    /**
     * @ORM\ManyToOne(targetEntity="CCH\UserBundle\Entity\User",cascade={"persist"})
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="CCH\CampBundle\Entity\Camp",cascade={"persist"})
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
     * Set date1
     *
     * @param \DateTime $date1
     *
     * @return Booking
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return \DateTime
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set date2
     *
     * @param string $date2
     *
     * @return Booking
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return string
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set nbPeople
     *
     * @param integer $nbPeople
     *
     * @return Booking
     */
    public function setNbPeople($nbPeople)
    {
        $this->nbPeople = $nbPeople;

        return $this;
    }

    /**
     * Get nbPeople
     *
     * @return int
     */
    public function getNbPeople()
    {
        return $this->nbPeople;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     *
     * @return Booking
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set user
     *
     * @param \CCH\UserBundle\Entity\User $user
     *
     * @return Booking
     */
    public function setUser(\CCH\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CCH\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set camp
     *
     * @param \CCH\CampBundle\Entity\Camp $camp
     *
     * @return Booking
     */
    public function setCamp(\CCH\CampBundle\Entity\Camp $camp = null)
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
