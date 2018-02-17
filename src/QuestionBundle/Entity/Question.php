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

