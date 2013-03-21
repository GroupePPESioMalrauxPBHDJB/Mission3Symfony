<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\InscriptionRepository")
 */
class Inscription
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $nbinscrit
     *
     * @ORM\Column(name="nbInscrit", type="integer", nullable=false)
     */
    private $nbinscrit;

    /**
     * @var integer $idOrganisation
     *
     * @ORM\Column(name="id_organisation", type="integer", nullable=false)
     */
    private $idOrganisation;

    /**
     * @var integer $idFormation
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     */
    private $idFormation;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbinscrit
     *
     * @param integer $nbinscrit
     */
    public function setNbinscrit($nbinscrit)
    {
        $this->nbinscrit = $nbinscrit;
    }

    /**
     * Get nbinscrit
     *
     * @return integer 
     */
    public function getNbinscrit()
    {
        return $this->nbinscrit;
    }

    /**
     * Set idOrganisation
     *
     * @param integer $idOrganisation
     */
    public function setIdOrganisation($idOrganisation)
    {
        $this->idOrganisation = $idOrganisation;
    }

    /**
     * Get idOrganisation
     *
     * @return integer 
     */
    public function getIdOrganisation()
    {
        return $this->idOrganisation;
    }

    /**
     * Set idFormation
     *
     * @param integer $idFormation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;
    }

    /**
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }
}