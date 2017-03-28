<?php

namespace AppBundle\Entity;

/**
 * Serie
 */
class Serie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $position;

    /**
     * @var \AppBundle\Entity\Affichage
     */
    private $affichage;

    /**
     * @var \AppBundle\Entity\Presentation
     */
    private $presentation;


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
     * Set position
     *
     * @param integer $position
     *
     * @return Serie
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }


    /**
     * Set affichage
     *
     * @param \AppBundle\Entity\Affichage $affichage
     *
     * @return Serie
     */
    public function setAffichage(\AppBundle\Entity\Affichage $affichage = null)
    {
        $this->affichage = $affichage;

        return $this;
    }

    /**
     * Get affichage
     *
     * @return \AppBundle\Entity\Affichage
     */
    public function getAffichage()
    {
        return $this->affichage;
    }

    /**
     * Set presentation
     *
     * @param \AppBundle\Entity\Presentation $presentation
     *
     * @return Serie
     */
    public function setPresentation(\AppBundle\Entity\Presentation $presentation = null)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return \AppBundle\Entity\Presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
