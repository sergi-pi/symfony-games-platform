<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Points
 *
 * @ORM\Table(name="Points", indexes={@ORM\Index(name="fk_Points_Players_idx", columns={"Players_id"}), @ORM\Index(name="fk_Points_Games1_idx", columns={"Games_id"})})
 * @ORM\Entity
 */
class Points
{
    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Games
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Games")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Games_id", referencedColumnName="id")
     * })
     */
    private $games;

    /**
     * @var \AppBundle\Entity\Players
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Players_id", referencedColumnName="id")
     * })
     */
    private $players;


    public function __toString() {
        return $this->getPlayers()->getName();
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Points
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
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
     * Set games
     *
     * @param \AppBundle\Entity\Games $games
     *
     * @return Points
     */
    public function setGames(\AppBundle\Entity\Games $games = null)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Get games
     *
     * @return \AppBundle\Entity\Games
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set players
     *
     * @param \AppBundle\Entity\Players $players
     *
     * @return Points
     */
    public function setPlayers(\AppBundle\Entity\Players $players = null)
    {
        $this->players = $players;

        return $this;
    }

    /**
     * Get players
     *
     * @return \AppBundle\Entity\Players
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
