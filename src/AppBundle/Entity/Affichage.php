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
    private $heurdeFin;


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
     * Set heurdeFin
     *
     * @param \DateTime $heurdeFin
     *
     * @return Affichage
     */
    public function setHeurdeFin($heurdeFin)
    {
        $this->heurdeFin = $heurdeFin;

        return $this;
    }

    /**
     * Get heurdeFin
     *
     * @return \DateTime
     */
    public function getHeurdeFin()
    {
        return $this->heurdeFin;
    }
}
