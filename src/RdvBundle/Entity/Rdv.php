<?php

namespace RdvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv", indexes={@ORM\Index(name="idCondidat", columns={"idCondidat"}), @ORM\Index(name="idMoniteur", columns={"idMoniteur"})})
 * @ORM\Entity
 */
class Rdv
{
    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=250, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=250, nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRdv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrdv;

    /**
     * @var \MoniteurBundle\Entity\Moniteur
     *
     * @ORM\ManyToOne(targetEntity="MoniteurBundle\Entity\Moniteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMoniteur", referencedColumnName="idMoniteur")
     * })
     */
    private $idmoniteur;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCondidat", referencedColumnName="id")
     * })
     */
    private $idcondidat;

   /* public function __toString(){
        // to show the name of the Category in the select
        return $this->idrdv;
        // to show the id of the Category in the select
        // return $this->id;
    }*/


}

