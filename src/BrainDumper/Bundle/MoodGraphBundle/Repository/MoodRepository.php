<?php

namespace BrainDumper\Bundle\MoodGraphBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class MoodRepository
 *
 * @package Nexus\Bundle\MoodGraphBundle\Repository
 */
class MoodRepository  extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        $queryBuilder = $this->createQueryBuilder('mood');

        return $queryBuilder;
    }
}