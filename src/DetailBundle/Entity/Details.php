<?php

namespace DetailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Details
 *
 * @ORM\Table(name="details", indexes={@ORM\Index(name="idtests", columns={"idtest"}), @ORM\Index(name="idquestions", columns={"idquestion"})})
 * @ORM\Entity
 */
class Details
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=false)
     */
    private $ordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \TestBundle\Entity\Tests
     *
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\Tests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtest", referencedColumnName="idTest")
     * })
     */
    private $idtest;

    /**
     * @var \QuestionBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="QuestionBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquestion", referencedColumnName="idQuestion")
     * })
     */
    private $idquestion;


}

