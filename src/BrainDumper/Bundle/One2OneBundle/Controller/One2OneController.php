<?php

namespace BrainDumper\Bundle\One2OneBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class One2OneController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="one_2_one_index", path="/one-2-one")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
