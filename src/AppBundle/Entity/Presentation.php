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
    private $affichages;

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
     * Add affichages
     *
     * @param \AppBundle\Entity\Affichage $affichages
     *
     * @return Presentation
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
}
