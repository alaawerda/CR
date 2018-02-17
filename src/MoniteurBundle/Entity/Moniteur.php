<?php

namespace MoniteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moniteur
 *
 * @ORM\Table(name="moniteur", indexes={@ORM\Index(name="idAutoEcole", columns={"IdAutoecole"})})
 * @ORM\Entity
 */
class Moniteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getDisponiblite()
    {
        return $this->disponiblite;
    }

    /**
     * @param int $disponiblite
     */
    public function setDisponiblite($disponiblite)
    {
        $this->disponiblite = $disponiblite;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return int
     */
    public function getIdmoniteur()
    {
        return $this->idmoniteur;
    }

    /**
     * @param int $idmoniteur
     */
    public function setIdmoniteur($idmoniteur)
    {
        $this->idmoniteur = $idmoniteur;
    }

    /**
     * @return \UserBundle\Entity\User
     */
    public function getIdautoecole()
    {
        return $this->idautoecole;
    }

    /**
     * @param \UserBundle\Entity\User $idautoecole
     */
    public function setIdautoecole($idautoecole)
    {
        $this->idautoecole = $idautoecole;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=250, nullable=false)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="disponiblite", type="integer", nullable=false)
     */
    private $disponiblite;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=250, nullable=false)
     */
    private $contact;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMoniteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmoniteur;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdAutoecole", referencedColumnName="id")
     * })
     */
    private $idautoecole;



    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }
}

