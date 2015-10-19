<?php

namespace BrainDumper\Bundle\MoodGraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class MoodType
 *
 * @package BrainDumper\Bundle\MoodGraphBundle\Entity
 *
 * @ORM\Table(name="`mood_type`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\MoodGraphBundle\Repository\MoodTypeRepository")
 */
class MoodType
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