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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string $nomResponsable
     *
     * @ORM\Column(name="nom_responsable", type="string", length=255, nullable=false)
     */
    private $nomResponsable;

    /**
     * @var string $prenomResponsable
     *
     * @ORM\Column(name="prenom_responsable", type="string", length=255, nullable=false)
     */
    private $prenomResponsable;



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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
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
     * Set nomResponsable
     *
     * @param string $nomResponsable
     */
    public function setNomResponsable($nomResponsable)
    {
        $this->nomResponsable = $nomResponsable;
    }

    /**
     * Get nomResponsable
     *
     * @return string 
     */
    public function getNomResponsable()
    {
        return $this->nomResponsable;
    }

    /**
     * Set prenomResponsable
     *
     * @param string $prenomResponsable
     */
    public function setPrenomResponsable($prenomResponsable)
    {
        $this->prenomResponsable = $prenomResponsable;
    }

    /**
     * Get prenomResponsable
     *
     * @return string 
     */
    public function getPrenomResponsable()
    {
        return $this->prenomResponsable;
    }
}