<?php

namespace BrainDumper\Bundle\AgileBoardBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AgileBoardController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="agile_board_index", path="/agile-board")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
