<?php

namespace BrainDumper\Bundle\UserBundle\Controller;

use BrainDumper\Bundle\UserBundle\Entity\Team;
use BrainDumper\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class UserController
 *
 * @package BrainDumper\Bundle\UserBundle\Controller
 */
class UserController extends Controller
{
    /**
     * @param User $user
     *
     * @return array
     *
     * @Route(name="user_create", path="/users/save")
     * @Route(name="user_edit", path="/users/save/{id}")
     *
     * @Template()
     */
    public function saveAction(User $user = null)
    {
        if(!$user) {
            $user = new User();
        }

        return array(
            'user' => $user
        );
    }
}