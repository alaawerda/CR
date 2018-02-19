<?php

namespace QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fkChapitreQuestion", columns={"idChapitre"}), @ORM\Index(name="fkChapitreTest", columns={"idTest"})})
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="idQuestion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

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
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * @param int $idquestion
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;
    }

    /**
     * @return \TestBundle\Entity\Tests
     */
    public function getIdtest()
    {
        return $this->idtest;
    }

    /**
     * @param \TestBundle\Entity\Tests $idtest
     */
    public function setIdtest($idtest)
    {
        $this->idtest = $idtest;
    }

    /**
     * @return \ChapitreBundle\Entity\Chapitre
     */
    public function getIdchapitre()
    {
        return $this->idchapitre;
    }

    /**
     * @param \ChapitreBundle\Entity\Chapitre $idchapitre
     */
    public function setIdchapitre($idchapitre)
    {
        $this->idchapitre = $idchapitre;
    }

    /**
     * @var \TestBundle\Entity\Tests
     *
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\Tests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTest", referencedColumnName="idTest")
     * })
     */
    private $idtest;

    /**
     * @var \ChapitreBundle\Entity\Chapitre
     *
     * @ORM\ManyToOne(targetEntity="ChapitreBundle\Entity\Chapitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChapitre", referencedColumnName="id")
     * })
     */
    private $idchapitre;

    public function __toString(){
        // to show the name of the Category in the select
        return $this->titre;
        // to show the id of the Category in the select
        // return $this->id;
    }


}

