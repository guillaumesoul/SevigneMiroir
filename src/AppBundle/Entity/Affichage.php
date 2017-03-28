<?php

namespace AppBundle\Entity;

/**
 * Affichage
 */
class Affichage
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentationsAffichage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentationsAffichage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add presentationsAffichage
     *
     * @param \AppBundle\Entity\Presentation $presentationsAffichage
     *
     * @return Affichage
     */
    public function addPresentationsAffichage(\AppBundle\Entity\Presentation $presentationsAffichage)
    {
        $this->presentationsAffichage[] = $presentationsAffichage;

        return $this;
    }

    /**
     * Remove presentationsAffichage
     *
     * @param \AppBundle\Entity\Presentation $presentationsAffichage
     */
    public function removePresentationsAffichage(\AppBundle\Entity\Presentation $presentationsAffichage)
    {
        $this->presentationsAffichage->removeElement($presentationsAffichage);
    }

    /**
     * Get presentationsAffichage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresentationsAffichage()
    {
        return $this->presentationsAffichage;
    }
}
