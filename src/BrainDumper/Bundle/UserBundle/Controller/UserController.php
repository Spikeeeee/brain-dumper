<?php

namespace BrainDumper\Bundle\UserBundle\Controller;

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
     * @return array
     *
     * @Route(name="user_list", path="/users")
     * @Template()
     */
    public function listAction()
    {
        $userRepository = $this->getDoctrine()->getEntityManager()->getRepository("BrainDumperUserBundle:User");

        $users = $userRepository->findAll();

        return array(
            'users' => $users
        );
    }
}