<?php

namespace BrainDumper\Bundle\UserBundle\Repository;

use BrainDumper\Bundle\UserBundle\Entity\Team;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class UserRepository
 *
 * @package BrainDumper\Bundle\UserBundle\Repository
 */
class UserRepository  extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        $queryBuilder = $this->createQueryBuilder('user');

        return $queryBuilder;
    }

    public function getForListByTeam(Team $team)
    {
        $queryBuilder = $this->getQueryBuilder();

        $queryBuilder->where('user.team = :team_acronym');
        $queryBuilder->setParameter('team_acronym', $team->getAcronym());

        $queryBuilder->addOrderBy('user.enabled', 'desc');
        $queryBuilder->addOrderBy('user.username');

        return $queryBuilder->getQuery()->getResult();
    }
}