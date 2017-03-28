<?php

namespace AppBundle\Entity;

/**
 * Presentation
 */
class Presentation
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
     * @var string
     */
    private $url;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $category;


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
     * @return Presentation
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
     * Set url
     *
     * @param string $url
     *
     * @return Presentation
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Presentation
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Presentation
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affichagesPresentation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affichagesPresentation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add affichagesPresentation
     *
     * @param \AppBundle\Entity\Affichage $affichagesPresentation
     *
     * @return Presentation
     */
    public function addAffichagesPresentation(\AppBundle\Entity\Affichage $affichagesPresentation)
    {
        $this->affichagesPresentation[] = $affichagesPresentation;

        return $this;
    }

    /**
     * Remove affichagesPresentation
     *
     * @param \AppBundle\Entity\Affichage $affichagesPresentation
     */
    public function removeAffichagesPresentation(\AppBundle\Entity\Affichage $affichagesPresentation)
    {
        $this->affichagesPresentation->removeElement($affichagesPresentation);
    }

    /**
     * Get affichagesPresentation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAffichagesPresentation()
    {
        return $this->affichagesPresentation;
    }
}
