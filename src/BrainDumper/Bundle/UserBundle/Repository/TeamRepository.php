<?php

namespace BrainDumper\Bundle\UserBundle\Repository;

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

    public function getForList()
    {
        $queryBuilder = $this->getQueryBuilder();

        $queryBuilder->addOrderBy('team.status');
        $queryBuilder->addOrderBy('team.name');

        return $queryBuilder->getQuery()->getResult();
    }
}