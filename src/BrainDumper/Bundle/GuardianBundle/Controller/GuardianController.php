<?php

namespace BrainDumper\Bundle\GuardianBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GuardianController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="guardian_index", path="/guardian")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
