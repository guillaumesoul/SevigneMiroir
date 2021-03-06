<?php

namespace AppBundle\Entity;

/**
 * Affichage
 */
class Serie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $heureDebut;

    /**
     * @var \DateTime
     */
    private $heureFin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affichages;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affichages = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Affichage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Affichage
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Affichage
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }


    /**
     * Add affichages
     *
     * @param \AppBundle\Entity\Affichage $affichages
     *
     * @return Affichage
     */
    public function addAffichages(\AppBundle\Entity\Affichage $affichages)
    {
        $this->affichages[] = $affichages;

        return $this;
    }

    /**
     * Remove affichages
     *
     * @param \AppBundle\Entity\Affichage $affichages
     */
    public function removeAffichages(\AppBundle\Entity\Affichage $affichages)
    {
        $this->affichages->removeElement($affichages);
    }

    /**
     * Get affichages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAffichages()
    {
        return $this->affichages;
    }

    /**
     * Add affichage
     *
     * @param \AppBundle\Entity\Affichage $affichage
     *
     * @return Serie
     */
    public function addAffichage(\AppBundle\Entity\Affichage $affichage)
    {
        $this->affichages[] = $affichage;

        return $this;
    }

    /**
     * Remove affichage
     *
     * @param \AppBundle\Entity\Affichage $affichage
     */
    public function removeAffichage(\AppBundle\Entity\Affichage $affichage)
    {
        $this->affichages->removeElement($affichage);
    }


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Serie
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
