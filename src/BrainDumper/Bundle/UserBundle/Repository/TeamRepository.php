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
}