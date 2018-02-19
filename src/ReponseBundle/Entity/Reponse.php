<?php

namespace ReponseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="idQuestion", columns={"idQuestion"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param string $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }

    /**
     * @return string
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * @param string $valide
     */
    public function setValide($valide)
    {
        $this->valide = $valide;
    }

    /**
     * @return int
     */
    public function getIdreponse()
    {
        return $this->idreponse;
    }

    /**
     * @param int $idreponse
     */
    public function setIdreponse($idreponse)
    {
        $this->idreponse = $idreponse;
    }

    /**
     * @return \QuestionBundle\Entity\Question
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * @param \QuestionBundle\Entity\Question $idquestion
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=250, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="valide", type="string", length=250, nullable=false)
     */
    private $valide;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReponse", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var \QuestionBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="QuestionBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuestion", referencedColumnName="idQuestion")
     * })
     */
    private $idquestion;


    public function __toString(){
        // to show the name of the Category in the select
        return $this->reponse;
        // to show the id of the Category in the select
        // return $this->id;
    }


}

