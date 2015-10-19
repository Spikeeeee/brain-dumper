<?php

namespace BrainDumper\Bundle\MoodGraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Mood
 *
 * @package BrainDumper\Bundle\MoodGraphBundle\Entity
 *
 * @ORM\Table(name="`mood`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\MoodGraphBundle\Repository\MoodRepository")
 */
class Mood
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $type
     *
     * ORM\ManyToOne(targetEntity="MoodType")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     *
     * @Assert\Type(type="BrainDumper\Bundle\MoodGraphBundle\Entity\MoodType")
     */
    protected $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     *
     * @Assert\Range(min="0", max="10")
     */
    protected $value;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}