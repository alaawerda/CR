<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="typeuser", type="string", length=255, nullable=false)
     */
    private $typeuser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaiss", type="string", length=255, nullable=false)
     */
    private $datenaiss;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }

    /**
     * @param string $typeuser
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;
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
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

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
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * @param string $datenaiss
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }

    /**
     * @return string
     */
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    /**
     * @param string $raisonsocial
     */
    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;
    }

    /**
     * @return string
     */
    public function getHorrairestravail()
    {
        return $this->horrairestravail;
    }

    /**
     * @param string $horrairestravail
     */
    public function setHorrairestravail($horrairestravail)
    {
        $this->horrairestravail = $horrairestravail;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdtest()
    {
        return $this->idtest;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idtest
     */
    public function setIdtest($idtest)
    {
        $this->idtest = $idtest;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="raisonsocial", type="string", length=255, nullable=false)
     */
    private $raisonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="HorrairesTravail", type="string", length=255, nullable=false)
     */
    private $horrairestravail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TestBundle\Entity\Tests", inversedBy="idutilisateur")
     * @ORM\JoinTable(name="utilisateurtest",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idTest", referencedColumnName="idTest")
     *   }
     * )
     */
    private $idtest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtest = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }

}

