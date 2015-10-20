<?php

namespace BrainDumper\Bundle\One2OneBundle\Entity;

use BrainDumper\Bundle\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class One2One
 *
 * @package BrainDumper\Bundle\One2OneBundle\Entity
 *
 * @ORM\Table(name="`one_2_one`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\One2OneBundle\Repository\One2OneRepository")
 */
class One2One
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var User $host
     *
     * @ORM\ManyToOne(targetEntity="BrainDumper\Bundle\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="host_id", referencedColumnName="id", nullable=false)
     *
     * @Assert\Type(type="BrainDumper\Bundle\UserBundle\Entity\User")
     */
    protected $host;

    /**
     * @var User $subject
     *
     * @ORM\ManyToOne(targetEntity="BrainDumper\Bundle\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id", nullable=false)
     *
     * @Assert\Type(type="BrainDumper\Bundle\UserBundle\Entity\User")
     */
    protected $subject;

    /**
     * @var \DateTime $plannedOn
     *
     * @ORM\Column(name="planned_on", type="datetime", nullable=false)
     *
     * @Assert\Type(type="\DateTime")
     */
    protected $plannedOn;

    public function __construct()
    {
        $this->plannedOn = new \DateTime();
    }

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
     * @return User
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param User $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return User
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param User $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPlannedOn()
    {
        return $this->plannedOn;
    }

    /**
     * @param \DateTime $plannedOn
     *
     * @return $this
     */
    public function setPlannedOn($plannedOn)
    {
        $this->plannedOn = $plannedOn;

        return $this;
    }
}