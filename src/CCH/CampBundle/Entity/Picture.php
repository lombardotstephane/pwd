<?php

namespace CCH\CampBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Camp_picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="CCH\CampBundle\Repository\PictureRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Picture
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
     * @ORM\Column(name="image_ext", type="string", length=255)
     */
    private $imageExt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image_alt", type="string", length=255)
     */
    private $imageAlt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @ORM\ManyToOne(targetEntity="CCH\CampBundle\Entity\Camp", inversedBy="pictures", cascade={"persist"})
     * @ORM\JoinColumn(name="camp_id", referencedColumnName="id", nullable=true)
     */
    private $camp;
    
    
    private $file;
    
    private $tempFilename;
    
    
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
     * Set imageExt
     *
     * @param string $imageExt
     *
     * @return Picture
     */
    public function setImageExt($imageExt)
    {
        $this->imageExt = $imageExt;

        return $this;
    }

    /**
     * Get imageExt
     *
     * @return string
     */
    public function getImageExt()
    {
        return $this->imageExt;
    }
    
    /**
     * Set imageAlt
     *
     * @param string $imageAlt
     *
     * @return Picture
     */
    public function setImageAlt($imageAlt)
    {
        $this->imageAlt = $imageAlt;

        return $this;
    }

    /**
     * Get imageAlt
     *
     * @return string
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
    }
    
    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return Picture
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
     * Set camp
     *
     * @param string $camp
     *
     * @return Camp
     */
    public function setCamp($camp)
    {
        $this->camp = $camp;

        return $this;
    }

    /**
     * Get camp
     *
     * @return Camp
     */
    public function getCamp()
    {
        return $this->camp;
    }
    
    /**
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }
    
    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file) {
        $this->file = $file;
        
        if(null !== $this->imageExt) {
            $this->tempFilename = $this->imageExt;
            
            $this->imageExt = null;
            $this->alt = null;
        }
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if(null === $this->file) {
            return;
        }
        
        $this->imageExt = $this->file->guessExtension();
        $this->imageAlt = $this->file->getClientOriginalName();   
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }
        
        if(null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if(file_exists($oldFile)) {
                unlink($oldFile);
            }
        }
        $this->file->move(
                $this->getUploadRootDir(),
                $this->id.'.'.$this->imageExt
        );
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload(){
        $this->tempFilename = $this->getUploadRootDir().'.'.$this->id.'.'.$this->imageExt;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if(file_exists($this->tempFilename)) {
            unlink($this->tempFilename);
        }
    }
    
    public function getUploadDir() {
        return 'uploads/img';
    }
    
    public function getUploadRootDir() {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    public function getWebPath() {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getImageExt();
    }
}
