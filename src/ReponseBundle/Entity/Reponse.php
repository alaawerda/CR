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


}

