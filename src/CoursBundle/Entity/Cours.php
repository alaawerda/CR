<?php

namespace CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="idChapitre", columns={"idChapitre"}), @ORM\Index(name="TypeCours", columns={"Type"})})
 * @ORM\Entity
 */
class Cours
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
     * @ORM\Column(name="documents", type="string", length=250, nullable=false)
     */
    private $documents;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCours", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

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
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param string $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    /**
     * @return int
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * @param int $idcours
     */
    public function setIdcours($idcours)
    {
        $this->idcours = $idcours;
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
     * @return \TypepermisBundle\Entity\Typepermis
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \TypepermisBundle\Entity\Typepermis $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @var \ChapitreBundle\Entity\Chapitre
     *
     * @ORM\ManyToOne(targetEntity="ChapitreBundle\Entity\Chapitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChapitre", referencedColumnName="id")
     * })
     */
    private $idchapitre;

    /**
     * @var \TypepermisBundle\Entity\Typepermis
     *
     * @ORM\ManyToOne(targetEntity="TypepermisBundle\Entity\Typepermis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Type", referencedColumnName="idType")
     * })
     */
    private $type;


}

