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
     * @Route(name="user_account", path="/account")
     * @Template()
     */
    public function accountAction()
    {
        return array();
    }

    /**
     * @return array
     *
     * @Route(name="user_settings", path="/settings")
     * @Template()
     */
    public function settingsAction()
    {
        return array();
    }
}
