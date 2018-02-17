<?php

namespace TypepermisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepermis
 *
 * @ORM\Table(name="typepermis")
 * @ORM\Entity
 */
class Typepermis
{
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
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * @param int $idtype
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtype;

    /**
     * Generates the magic method
     *
     */
    public function __toString(){
        // to show the name of the Category in the select
        return $this->titre;
        // to show the id of the Category in the select
        // return $this->id;
    }

}

