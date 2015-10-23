<?php

namespace BrainDumper\Bundle\UserBundle\Controller;

use BrainDumper\Bundle\UserBundle\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class TeamController
 *
 * @package BrainDumper\Bundle\UserBundle\Controller
 */
class TeamController extends Controller
{
    /**
     * @return array
     *
     * @Route(name="team_list", path="/teams")
     * @Template()
     */
    public function listAction()
    {
        $teamRepository = $this->getDoctrine()->getEntityManager()->getRepository("BrainDumperUserBundle:Team");

        $teams = $teamRepository->getForList();

        return array(
            'teams'  => $teams
        );
    }

    /**
     * @param Team $team
     *
     * @return array
     *
     * @Route(name="team_details", path="/teams/{acronym}")
     * @Template()
     */
    public function detailsAction(Team $team)
    {
        $userRepository = $this->getDoctrine()->getEntityManager()->getRepository("BrainDumperUserBundle:User");

        $users = $userRepository->getForListByTeam($team);

        return array(
            'team'  => $team,
            'users' => $users
        );
    }
}