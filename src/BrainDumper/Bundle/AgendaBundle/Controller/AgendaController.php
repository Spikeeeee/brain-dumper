<?php

namespace BrainDumper\Bundle\AgendaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AgendaController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="agenda_index", path="/agenda")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
