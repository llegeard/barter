<?php

namespace LL\BarterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LL\BarterBundle\Entity\OffreRepository")
 */
class Offre {

    /**

     * @ORM\ManyToOne(targetEntity="LL\BarterBundle\Entity\Category")

     * @ORM\JoinColumn(nullable=false)

     */
    private $category;

    /**
     * @ORM\OneToOne(targetEntity="LL\BarterBundle\Entity\Document", cascade={"persist"})
     */
    private $document = null;

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="devis", type="boolean")
     */
    private $devis;

    /**
     * @var integer
     *
     * @ORM\Column(name="barter", type="integer")
     */
    private $barter;

    /**
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = true;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Offre
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Offre
     */
    public function setMontant($montant) {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Set devis
     *
     * @param boolean $devis
     * @return Offre
     */
    public function setDevis($devis) {
        $this->devis = $devis;

        return $this;
    }

    /**
     * Get devis
     *
     * @return boolean
     */
    public function getDevis() {
        return $this->devis;
    }

    /**
     * Set barter
     *
     * @param integer $barter
     * @return Offre
     */
    public function setBarter($barter) {
        $this->barter = $barter;

        return $this;
    }

    /**
     * Get barter
     *
     * @return integer
     */
    public function getBarter() {
        return $this->barter;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Offre
     */
    public function setPublished($published) {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished() {
        return $this->published;
    }

    /**
     * Set category
     *
     * @param \LL\BarterBundle\Entity\Category $category
     * @return Offre
     */
    public function setCategory(\LL\BarterBundle\Entity\Category $category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \LL\BarterBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set document
     *
     * @param \LL\BarterBundle\Entity\Document $document
     * @return Offre
     */
    public function setDocument(\LL\BarterBundle\Entity\Document $document = null) {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \LL\BarterBundle\Entity\Document
     */
    public function getDocument() {
        return $this->document;
    }

}
