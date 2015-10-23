<?php

namespace BrainDumper\Bundle\One2OneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Entry
 *
 * @package BrainDumper\Bundle\One2OneBundle\Entity
 *
 * @ORM\Table(name="`one_2_one_entry`")
 * @ORM\Entity(repositoryClass="BrainDumper\Bundle\One2OneBundle\Repository\EntryRepository")
 */
class Entry
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var One2One $one2one
     *
     * @ORM\ManyToOne(targetEntity="BrainDumper\Bundle\One2OneBundle\Entity\One2One")
     * @ORM\JoinColumn(name="one_2_one_id", referencedColumnName="id", nullable=false)
     *
     * @Assert\Type(type="BrainDumper\Bundle\One2OneBundle\Entity\One2One")
     */
    protected $one2one;

    /**
     * @var array $tags
     */
    protected $tags;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     *
     * @Assert\NotBlank()
     */
    protected $content;

    /**
     * @var \DateTime $dueDate;
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     *
     * @Assert\Type(type="\DateTime")
     */
    protected $dueDate;

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
     * @return One2One
     */
    public function getOne2one()
    {
        return $this->one2one;
    }

    /**
     * @param One2One $one2one
     *
     * @return $this
     */
    public function setOne2one($one2one)
    {
        $this->one2one = $one2one;

        return $this;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}