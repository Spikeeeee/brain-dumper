<?php

namespace BrainDumper\Bundle\UserBundle\Repository;

use BrainDumper\Bundle\UserBundle\Entity\Team;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class TeamRepository
 *
 * @package BrainDumper\Bundle\UserBundle\Repository
 */
class TeamRepository  extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        $queryBuilder = $this->createQueryBuilder('team');

        return $queryBuilder;
    }

    /**
     * @return Team[]
     */
    public function getForList()
    {
        $queryBuilder = $this->getQueryBuilder();

        $queryBuilder->addOrderBy('team.status');
        $queryBuilder->addOrderBy('team.name');

        return $queryBuilder->getQuery()->getResult();
    }
}