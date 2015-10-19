<?php

namespace BrainDumper\Bundle\UserBundle\Entity;

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
     * @ORM\JoinColumn(name="pteam_id", referencedColumnName="id", nullable=false)
     */
    protected $team;

    /**
     * {@inheritdoc}
     */
    protected $username;

    /**
     * {@inheritdoc}
     */
    protected $lastLogin;

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
}