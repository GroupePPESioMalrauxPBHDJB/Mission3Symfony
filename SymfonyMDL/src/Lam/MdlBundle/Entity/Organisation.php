<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Organisation
 *
 * @ORM\Table(name="organisation")
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\OrganisationRepository")
 */
class Organisation
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
     * @var string $nomorganisation
     *
     * @ORM\Column(name="nomOrganisation", type="string", length=100, nullable=false)
     */
    private $nomorganisation;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var string $nomresponsable
     *
     * @ORM\Column(name="nomResponsable", type="string", length=50, nullable=false)
     */
    private $nomresponsable;

    /**
     * @var string $prenomresponsable
     *
     * @ORM\Column(name="prenomResponsable", type="string", length=50, nullable=false)
     */
    private $prenomresponsable;

    /**
     * @var Formation
     *
     * @ORM\ManyToMany(targetEntity="Formation", mappedBy="idorganistion")
     */
    private $idformation;

    public function __construct()
    {
        $this->idformation = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Set nomorganisation
     *
     * @param string $nomorganisation
     */
    public function setNomorganisation($nomorganisation)
    {
        $this->nomorganisation = $nomorganisation;
    }

    /**
     * Get nomorganisation
     *
     * @return string 
     */
    public function getNomorganisation()
    {
        return $this->nomorganisation;
    }

    /**
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nomresponsable
     *
     * @param string $nomresponsable
     */
    public function setNomresponsable($nomresponsable)
    {
        $this->nomresponsable = $nomresponsable;
    }

    /**
     * Get nomresponsable
     *
     * @return string 
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set prenomresponsable
     *
     * @param string $prenomresponsable
     */
    public function setPrenomresponsable($prenomresponsable)
    {
        $this->prenomresponsable = $prenomresponsable;
    }

    /**
     * Get prenomresponsable
     *
     * @return string 
     */
    public function getPrenomresponsable()
    {
        return $this->prenomresponsable;
    }

    /**
     * Add idformation
     *
     * @param Lam\MdlBundle\Entity\Formation $idformation
     */
    public function addFormation(\Lam\MdlBundle\Entity\Formation $idformation)
    {
        $this->idformation[] = $idformation;
    }

    /**
     * Get idformation
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdformation()
    {
        return $this->idformation;
    }
}