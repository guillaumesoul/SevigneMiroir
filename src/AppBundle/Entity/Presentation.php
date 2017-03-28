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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentation = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add presentation
     *
     * @param \AppBundle\Entity\Serie $presentation
     *
     * @return Presentation
     */
    public function addPresentation(\AppBundle\Entity\Serie $presentation)
    {
        $this->presentation[] = $presentation;

        return $this;
    }

    /**
     * Remove presentation
     *
     * @param \AppBundle\Entity\Serie $presentation
     */
    public function removePresentation(\AppBundle\Entity\Serie $presentation)
    {
        $this->presentation->removeElement($presentation);
    }

    /**
     * Get presentation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
