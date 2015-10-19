<?php

namespace BrainDumper\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\User as FOSUser;
use JMS\Serializer\Annotation as Serializer;
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
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Serializer\Groups({"common"})
     */
    protected $id;

    /**
     * {@inheritdoc}
     *
     * @Serializer\Groups({"common"})
     */
    protected $username;

    /**
     * {@inheritdoc}
     *
     * @Serializer\Groups({"lastLogin"})
     */
    protected $lastLogin;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false)
     *
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"active", "inactive"})
     */
    protected $status = self::STATUS_INACTIVE;

    public function __construct()
    {
        parent::__construct();
    }
}