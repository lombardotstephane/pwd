<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CCH\UserBundle\Entity\User as User;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\ReviewsRepository")
 */
class Reviews
{
    public function __construct() {
        $this->date = new \Datetime();
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
     * @var \DateTime
     * 
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var int
     *
     * @ORM\Column(name="notation", type="integer")
     */
    private $notation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="positive", type="string", length=255)
     */
    private $positive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="negative", type="string", length=255)
     */
    private $negative;
    
    /**
     * @var string
     *
     * @ORM\Column(name="reviews", type="text")
     */
    private $reviews;
    
    /**
     * @ORM\ManyToOne(targetEntity="CCH\CampBundle\Entity\Camp",cascade={"persist"})
     */
    private $camp;

    /**
     * @ORM\ManyToOne(targetEntity="CCH\UserBundle\Entity\User",cascade={"persist"})
     */
    private $user;
    
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set notation
     *
     * @param integer $notation
     *
     * @return Reviews
     */
    public function setNotation($notation)
    {
        $this->notation = $notation;

        return $this;
    }

    /**
     * Get notation
     *
     * @return int
     */
    public function getNotation()
    {
        return $this->notation;
    }
    
    /**
     * Set positive
     *
     * @param string $positive
     *
     * @return Reviews
     */
    public function setPositive($positive)
    {
        $this->positive = $positive;

        return $this;
    }

    /**
     * Get positive
     *
     * @return string
     */
    public function getPositive()
    {
        return $this->positive;
    }
    
    /**
     * Set negative
     *
     * @param string $negative
     *
     * @return Reviews
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Get negative
     *
     * @return string
     */
    public function getNegative()
    {
        return $this->negative;
    }
    
    /**
     * Set reviews
     *
     * @param string $reviews
     *
     * @return Reviews
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return string
     */
    public function getReviews()
    {
        return $this->reviews;
    }
    
    /**
     * Set camp
     *
     * @param Camp $camp
     *
     * @return Reviews
     */
    public function setCamp(Camp $camp)
    {
        $this->camp = $camp;

        return $this;
    }

    /**
     * Get camp
     *
     * @return camp
     */
    public function getCamp()
    {
        return $this->camp;
    }
    
    /**
     * Set user
     *
     * @param User $user
     *
     * @return Reviews
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return user
     */
    public function getUser()
    {
        return $this->user;
    }
}

