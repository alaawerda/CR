<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examens
 *
 * @ORM\Table(name="examens")
 * @ORM\Entity
 */
class Examens
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=250, nullable=false)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtest;


}

