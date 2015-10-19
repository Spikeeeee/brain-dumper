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
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => $this->getUser()->getUsername());
    }
}
