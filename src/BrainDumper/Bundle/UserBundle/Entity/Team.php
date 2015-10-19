<?php

namespace BrainDumper\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

/**
 * Class Team
 *
 * @package BrainDumper\Bundle\UserBundle\Entity
 *
 * @ORM\Table(name="`team`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\UserBundle\Repository\TeamRepository")
 *
 * @DoctrineAssert\UniqueEntity(fields={"acronym", "name"})
 */
class Team
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Team $parentTeam
     *
     * @ORM\ManyToOne(targetEntity="BrainDumper\Bundle\UserBundle\Entity\Team")
     * @ORM\JoinColumn(name="parent_team_id", referencedColumnName="id", nullable=true)
     */
    protected $parentTeam;

    /**
     * @var Team[] $subTeams
     *
     * @ORM\OneToMany(targetEntity="BrainDumper\Bundle\UserBundle\Entity\Team", mappedBy="parentTeam", indexBy="id")
     */
    protected $subTeams;

    /**
     * @var string $acronym
     *
     * @ORM\Column(name="acronym", type="string", length=25, nullable=false)
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="25")
     */
    protected $acronym;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="25")
     */
    protected $name;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false)
     *
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"active", "inactive"})
     */
    protected $status = self::STATUS_ACTIVE;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Team
     */
    public function getParentTeam()
    {
        return $this->parentTeam;
    }

    /**
     * @param Team $parentTeam
     *
     * @return $this
     */
    public function setParentTeam($parentTeam)
    {
        $this->parentTeam = $parentTeam;

        return $this;
    }

    /**
     * @return Team[]
     */
    public function getSubTeams()
    {
        return $this->subTeams;
    }

    /**
     * @param Team[] $subTeams
     *
     * @return $this
     */
    public function setSubTeams($subTeams)
    {
        $this->subTeams = $subTeams;

        return $this;
    }

    /**
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * @param string $acronym
     *
     * @return $this
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}