<?php

namespace BrainDumper\Bundle\One2OneBundle\Controller;

use BrainDumper\Bundle\One2OneBundle\Entity\One2One;
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
    public function listAction()
    {
        $one2oneRepository = $this->getDoctrine()->getRepository("BrainDumperOne2OneBundle:One2One");

        $one2oneHostedList  = $one2oneRepository->getHostedForCurrentUser($this->getUser());
        $one2oneSubjectList = $one2oneRepository->getInvitedForCurrentUser($this->getUser());

        return array(
            'one2oneHostedList'    => $one2oneHostedList,
            'one2oneSubjectList' => $one2oneSubjectList
        );
    }

    /**
     * @param One2One $one2one
     *
     * @return array
     *
     * @Route(name="one_2_one_details", path="/one-2-one/{id}")
     * @Method("GET")
     *
     * @Template()
     */
    public function detailsAction(One2One $one2one)
    {
        return array(
            'one2one' => $one2one
        );
    }
}
