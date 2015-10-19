<?php

namespace BrainDumper\Bundle\MoodGraphBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MoodController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="mood_index", path="/mood-graph")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
