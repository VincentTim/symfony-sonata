<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Service\Format;

/**
 * Poke
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HaslifecycleCallbacks
 */
class Poke extends Format
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
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=255)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="string", length=255)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="vie", type="string", length=255)
     */
    private $vie;

    /**
     * @var string
     *
     * @ORM\Column(name="attaque", type="string", length=255)
     */
    private $attaque;

    /**
     * @var string
     *
     * @ORM\Column(name="defense", type="string", length=255)
     */
    private $defense;

    /**
     * @var string
     *
     * @ORM\Column(name="attaque_speciale", type="string", length=255)
     */
    private $attaqueSpeciale;

    /**
     * @var string
     *
     * @ORM\Column(name="defense_speciale", type="string", length=255)
     */
    private $defenseSpeciale;

    /**
     * @var string
     *
     * @ORM\Column(name="vitesse", type="string", length=255)
     */
    private $vitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    
    /**
    * @ORM\ManyToOne(targetEntity="Genre", inversedBy="pokes")
    */
    private $genre;


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
     * @return Poke
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
     * Set format
     *
     * @param string $format
     * @return Poke
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Poke
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return Poke
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param string $poids
     * @return Poke
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set vie
     *
     * @param string $vie
     * @return Poke
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get vie
     *
     * @return string 
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set attaque
     *
     * @param string $attaque
     * @return Poke
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return string 
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set defense
     *
     * @param string $defense
     * @return Poke
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return string 
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set attaqueSpeciale
     *
     * @param string $attaqueSpeciale
     * @return Poke
     */
    public function setAttaqueSpeciale($attaqueSpeciale)
    {
        $this->attaqueSpeciale = $attaqueSpeciale;

        return $this;
    }

    /**
     * Get attaqueSpeciale
     *
     * @return string 
     */
    public function getAttaqueSpeciale()
    {
        return $this->attaqueSpeciale;
    }

    /**
     * Set defenseSpeciale
     *
     * @param string $defenseSpeciale
     * @return Poke
     */
    public function setDefenseSpeciale($defenseSpeciale)
    {
        $this->defenseSpeciale = $defenseSpeciale;

        return $this;
    }

    /**
     * Get defenseSpeciale
     *
     * @return string 
     */
    public function getDefenseSpeciale()
    {
        return $this->defenseSpeciale;
    }

    /**
     * Set vitesse
     *
     * @param string $vitesse
     * @return Poke
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return string 
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Poke
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     * @return Poke
     */
    public function setGenre(\AppBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->format = $this->Format($this->nom);
        return $this->format;
    }
}
