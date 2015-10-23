<?php

namespace BrainDumper\Bundle\UserBundle\Entity;

use BrainDumper\Bundle\MoodGraphBundle\Entity\Mood;
use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class User
 *
 * @package BrainDumper\Bundle\UserBundle\Entity
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\UserBundle\Repository\UserRepository")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Team $team
     *
     * @ORM\ManyToOne(targetEntity="BrainDumper\Bundle\UserBundle\Entity\Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="acronym", nullable=false)
     *
     * @Assert\Type(type="BrainDumper\Bundle\UserBundle\Entity\Team")
     */
    protected $team;

    /**
     * @var Mood $currentMood
     *
     * @ORM\OneToOne(targetEntity="BrainDumper\Bundle\MoodGraphBundle\Entity\Mood")
     * @ORM\JoinColumn(name="current_mood_id", referencedColumnName="id", nullable=true)
     *
     * @Assert\Type(type="BrainDumper\Bundle\MoodGraphBundle\Entity\Mood")
     */
    protected $currentMood;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param Team $team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @return Mood
     */
    public function getCurrentMood()
    {
        return $this->currentMood;
    }

    /**
     * @param Mood $currentMood
     *
     * @return $this
     */
    public function setCurrentMood($currentMood)
    {
        $this->currentMood = $currentMood;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return empty($this->getId());
    }
}