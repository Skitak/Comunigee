<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=50)
     */
    private $nomEvent;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Particulier")
     */
    private $particulier;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_event", type="string", length=50)
     */
    private $lieuEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="date_event", type="string", length=20)
     */
    private $dateEvent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomEvent
     *
     * @param string $nomEvent
     *
     * @return Evenement
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    /**
     * Get nomEvent
     *
     * @return string
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Evenement
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set lieuEvent
     *
     * @param string $lieuEvent
     *
     * @return Evenement
     */
    public function setLieuEvent($lieuEvent)
    {
        $this->lieuEvent = $lieuEvent;

        return $this;
    }

    /**
     * Get lieuEvent
     *
     * @return string
     */
    public function getLieuEvent()
    {
        return $this->lieuEvent;
    }

    /**
     * Set dateEvent
     *
     * @param string $dateEvent
     *
     * @return Evenement
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return string
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }
}

