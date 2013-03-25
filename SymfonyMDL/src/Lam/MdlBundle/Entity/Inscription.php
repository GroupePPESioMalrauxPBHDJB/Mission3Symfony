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
     * @var Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id")
     * })
     */
    private $idFormation;

    /**
     * @var Organisation
     *
     * @ORM\ManyToOne(targetEntity="Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisation", referencedColumnName="id")
     * })
     */
    private $idOrganisation;



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
     * Set idFormation
     *
     * @param Lam\MdlBundle\Entity\Formation $idFormation
     */
    public function setIdFormation(\Lam\MdlBundle\Entity\Formation $idFormation)
    {
        $this->idFormation = $idFormation;
    }

    /**
     * Get idFormation
     *
     * @return Lam\MdlBundle\Entity\Formation 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set idOrganisation
     *
     * @param Lam\MdlBundle\Entity\Organisation $idOrganisation
     */
    public function setIdOrganisation(\Lam\MdlBundle\Entity\Organisation $idOrganisation)
    {
        $this->idOrganisation = $idOrganisation;
    }

    /**
     * Get idOrganisation
     *
     * @return Lam\MdlBundle\Entity\Organisation 
     */
    public function getIdOrganisation()
    {
        return $this->idOrganisation;
    }
}