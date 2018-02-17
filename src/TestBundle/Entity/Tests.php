<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table(name="tests", indexes={@ORM\Index(name="IdTypePermis", columns={"IdTypePermis"})})
 * @ORM\Entity
 */
class Tests
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeTest", type="integer", nullable=false)
     */
    private $typetest;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtest;

    /**
     * @var \TypepermisBundle\Entity\Typepermis
     *
     * @ORM\ManyToOne(targetEntity="TypepermisBundle\Entity\Typepermis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdTypePermis", referencedColumnName="idType")
     * })
     */
    private $idtypepermis;

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return int
     */
    public function getTypetest()
    {
        return $this->typetest;
    }

    /**
     * @param int $typetest
     */
    public function setTypetest($typetest)
    {
        $this->typetest = $typetest;
    }

    /**
     * @return int
     */
    public function getIdtest()
    {
        return $this->idtest;
    }

    /**
     * @param int $idtest
     */
    public function setIdtest($idtest)
    {
        $this->idtest = $idtest;
    }

    /**
     * @return \TypepermisBundle\Entity\Typepermis
     */
    public function getIdtypepermis()
    {
        return $this->idtypepermis;
    }

    /**
     * @param \TypepermisBundle\Entity\Typepermis $idtypepermis
     */
    public function setIdtypepermis($idtypepermis)
    {
        $this->idtypepermis = $idtypepermis;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idutilisateur
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", mappedBy="idtest")
     */
    private $idutilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->titre;
        // to show the id of the Category in the select
        // return $this->id;
    }
}

