<?php

namespace AppBundle\Entity;

/**
 * Serie
 */
class Affichage
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
     * @var \AppBundle\Entity\Serie
     */
    private $serie;

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
     * Set serie
     *
     * @param \AppBundle\Entity\Serie $serie
     *
     * @return Serie
     */
    public function setSerie(\AppBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \AppBundle\Entity\Serie
     */
    public function getSerie()
    {
        return $this->serie;
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
