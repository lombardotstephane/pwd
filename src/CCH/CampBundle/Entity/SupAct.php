<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupAct
 *
 * @ORM\Table(name="sup_act")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\SupActRepository")
 */
class SupAct
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
     * @ORM\Column(name="supact", type="string", length=255)
     */
    private $supact;

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
     * Set supact
     *
     * @param string $supact
     *
     * @return SupAct
     */
    public function setSupact($supact)
    {
        $this->supact = $supact;

        return $this;
    }

    /**
     * Get supact
     *
     * @return string
     */
    public function getSupact()
    {
        return $this->supact;
    }

    /**
     * Set camp
     *
     * @param \CCH\CampBundle\Entity\Camp $camp
     *
     * @return SupAct
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
