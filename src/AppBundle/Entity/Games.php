<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Games
 *
 * @ORM\Table(name="Games", indexes={@ORM\Index(name="fk_Games_Categories1_idx", columns={"Categories_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\gamesRepository")
 */
class Games
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories", inversedBy="games")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categories_id", referencedColumnName="id")
     * })
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="script_location", type="string", length=45, nullable=true)
     */
    private $scriptLocation;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Games
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
     * Set description
     *
     * @param string $description
     *
     * @return Games
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categories
     *
     * @param \AppBundle\Entity\Categories $categories
     *
     * @return Games
     */
    public function setCategories(\AppBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \AppBundle\Entity\Categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return string
     */
    public function getScriptLocation()
    {
        return $this->scriptLocation;
    }

    /**
     * @param string $scriptLocation
     */
    public function setScriptLocation($scriptLocation)
    {
        $this->scriptLocation = $scriptLocation;
    }
}
