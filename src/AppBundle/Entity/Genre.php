<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Service\Format as Format;

/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HaslifecycleCallbacks
 */
class Genre extends Format
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;
    
    /**
    * @ORM\OneToMany(targetEntity="Poke", mappedBy="genre")
    */
    private $pokes;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Genre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Genre
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pokes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pokes
     *
     * @param \AppBundle\Entity\Poke $pokes
     * @return Genre
     */
    public function addPoke(\AppBundle\Entity\Poke $pokes)
    {
        $this->pokes[] = $pokes;

        return $this;
    }

    /**
     * Remove pokes
     *
     * @param \AppBundle\Entity\Poke $pokes
     */
    public function removePoke(\AppBundle\Entity\Poke $pokes)
    {
        $this->pokes->removeElement($pokes);
    }

    /**
     * Get pokes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPokes()
    {
        return $this->pokes;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->slug = $this->textFormat($this->nom);
        return $this->slug;
    }
    
    
    
}
