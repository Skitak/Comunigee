<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\CentreRepository")
 */
class Centre
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
     * @ORM\Column(name="AdressePostale", type="string", length=50)
     */
    private $adressePostale;

    /**
     * @var int
     *
     * @ORM\Column(name="Capacite", type="integer")
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="HorraireOuverture", type="string", length=50)
     */
    private $horraireOuverture;

    /**
     * @var string
     *
     * @ORM\Column(name="HorraireFermeture", type="string", length=50)
     */
    private $horraireFermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="JourOuvert", type="string", length=50)
     */
    private $jourOuvert;

    /**
     * @var bool
     *
     * @ORM\Column(name="hygiene", type="boolean")
     */
    private $Hygiene;

    /**
     * @var bool
     *
     * @ORM\Column(name="nourriture", type="boolean")
     */
    private $Nourriture;

    /**
     * @var bool
     *
     * @ORM\Column(name="lit", type="boolean")
     */
    private $Lit;

    /**
     * @var bool
     *
     * @ORM\Column(name="sante", type="boolean")
     */
    private $Sante;


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
     * Set string
     *
     * @param string $string
     *
     * @return Centre
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set adressePostale
     *
     * @param string $adressePostale
     *
     * @return Centre
     */
    public function setAdressePostale($adressePostale)
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    /**
     * Get adressePostale
     *
     * @return string
     */
    public function getAdressePostale()
    {
        return $this->adressePostale;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Centre
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set horraireOuverture
     *
     * @param string $horraireOuverture
     *
     * @return Centre
     */
    public function setHorraireOuverture($horraireOuverture)
    {
        $this->horraireOuverture = $horraireOuverture;

        return $this;
    }

    /**
     * Get horraireOuverture
     *
     * @return string
     */
    public function getHorraireOuverture()
    {
        return $this->horraireOuverture;
    }

    /**
     * Set horraireFermeture
     *
     * @param string $horraireFermeture
     *
     * @return Centre
     */
    public function setHorraireFermeture($horraireFermeture)
    {
        $this->horraireFermeture = $horraireFermeture;

        return $this;
    }

    /**
     * Get horraireFermeture
     *
     * @return string
     */
    public function getHorraireFermeture()
    {
        return $this->horraireFermeture;
    }

    /**
     * Set jourOuvert
     *
     * @param string $jourOuvert
     *
     * @return Centre
     */
    public function setJourOuvert($jourOuvert)
    {
        $this->jourOuvert = $jourOuvert;

        return $this;
    }

    /**
     * Get jourOuvert
     *
     * @return string
     */
    public function getJourOuvert()
    {
        return $this->jourOuvert;
    }

    /**
     * Set hygien
     *
     * @param boolean $hygien
     *
     * @return Centre
     */
    public function setHygien($hygien)
    {
        $this->Hygiene = $hygien;

        return $this;
    }

    /**
     * Get hygien
     *
     * @return bool
     */
    public function getHygien()
    {
        return $this->Hygiene;
    }

    /**
     * Set nourriture
     *
     * @param boolean $nourriture
     *
     * @return Centre
     */
    public function setNourriture($nourriture)
    {
        $this->Nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return bool
     */
    public function getNourriture()
    {
        return $this->Nourriture;
    }

    /**
     * Set lit
     *
     * @param boolean $lit
     *
     * @return Centre
     */
    public function setLit($lit)
    {
        $this->Lit = $lit;

        return $this;
    }

    /**
     * Get lit
     *
     * @return bool
     */
    public function getLit()
    {
        return $this->Lit;
    }

    /**
     * Set sante
     *
     * @param boolean $sante
     *
     * @return Centre
     */
    public function setSante($sante)
    {
        $this->Sante = $sante;

        return $this;
    }

    /**
     * Get sante
     *
     * @return bool
     */
    public function getSante()
    {
        return $this->Sante;
    }
}

