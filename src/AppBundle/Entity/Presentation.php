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
     * @var integer
     */
    private $slideDuration;

    /**
     * @var integer
     */
    private $slidesNumber;

    /**
     * @var integer
     */
    private $slideTransitionDuration;

    /**
     * @var \DateTime
     */
    private $presentationDuration;

    /**
     * @var string
     */
    private $IdGoogleSlide;

    /**
     * @var boolean
     */
    private $sliderLoop;

    /**
     * @var boolean
     */
    private $sliderAutostart;

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


    /**
     * Set slidesNumber
     *
     * @param integer $slidesNumber
     *
     * @return Presentation
     */
    public function setSlidesNumber($slidesNumber)
    {
        $this->slidesNumber = $slidesNumber;

        return $this;
    }

    /**
     * Get slidesNumber
     *
     * @return integer
     */
    public function getSlidesNumber()
    {
        return $this->slidesNumber;
    }

    /**
     * Set slideTransitionDuration
     *
     * @param integer $slideTransitionDuration
     *
     * @return Presentation
     */
    public function setSlideTransitionDuration($slideTransitionDuration)
    {
        $this->slideTransitionDuration = $slideTransitionDuration;

        return $this;
    }

    /**
     * Get slideTransitionDuration
     *
     * @return integer
     */
    public function getSlideTransitionDuration()
    {
        return $this->slideTransitionDuration;
    }

    /**
     * Set presentationDuration
     *
     * @param \DateTime $presentationDuration
     *
     * @return Presentation
     */
    public function setPresentationDuration($presentationDuration)
    {
        $this->presentationDuration = $presentationDuration;

        return $this;
    }

    /**
     * Get presentationDuration
     *
     * @return \DateTime
     */
    public function getPresentationDuration()
    {
        return $this->presentationDuration;
    }

    /**
     * Add affichage
     *
     * @param \AppBundle\Entity\Affichage $affichage
     *
     * @return Presentation
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
     * Set slideDuration
     *
     * @param integer $slideDuration
     *
     * @return Presentation
     */
    public function setSlideDuration($slideDuration)
    {
        $this->slideDuration = $slideDuration;

        return $this;
    }

    /**
     * Get slideDuration
     *
     * @return integer
     */
    public function getSlideDuration()
    {
        return $this->slideDuration;
    }


    /**
     * Set idGoogleSlide
     *
     * @param string $idGoogleSlide
     *
     * @return Presentation
     */
    public function setIdGoogleSlide($idGoogleSlide)
    {
        $this->IdGoogleSlide = $idGoogleSlide;

        return $this;
    }

    /**
     * Get idGoogleSlide
     *
     * @return string
     */
    public function getIdGoogleSlide()
    {
        return $this->IdGoogleSlide;
    }


    /**
     * Set sliderLoop
     *
     * @param boolean $sliderLoop
     *
     * @return Presentation
     */
    public function setSliderLoop($sliderLoop)
    {
        $this->sliderLoop = $sliderLoop;

        return $this;
    }

    /**
     * Get sliderLoop
     *
     * @return boolean
     */
    public function getSliderLoop()
    {
        return $this->sliderLoop;
    }

    /**
     * Set sliderAutostart
     *
     * @param boolean $sliderAutostart
     *
     * @return Presentation
     */
    public function setSliderAutostart($sliderAutostart)
    {
        $this->sliderAutostart = $sliderAutostart;

        return $this;
    }

    /**
     * Get sliderAutostart
     *
     * @return boolean
     */
    public function getSliderAutostart()
    {
        return $this->sliderAutostart;
    }
}
