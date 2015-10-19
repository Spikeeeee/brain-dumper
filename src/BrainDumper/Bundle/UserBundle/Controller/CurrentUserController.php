<?php

namespace BrainDumper\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class CurrentUserController
 *
 * @package BrainDumper\Bundle\UserBundle\Controller
 */
class CurrentUserController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="current_user_account", path="/account")
     * @Template()
     */
    public function accountAction()
    {
        return array();
    }

    /**
     * @return array
     *
     * @Route(name="current_user_settings", path="/settings")
     * @Template()
     */
    public function settingsAction()
    {
        return array();
    }
}
