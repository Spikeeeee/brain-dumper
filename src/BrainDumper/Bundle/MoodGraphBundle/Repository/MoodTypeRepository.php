<?php

namespace BrainDumper\Bundle\MoodGraphBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class MoodTypeRepository
 *
 * @package Nexus\Bundle\MoodGraphBundle\Repository
 */
class MoodTypeRepository  extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        $queryBuilder = $this->createQueryBuilder('mood_type');

        return $queryBuilder;
    }
}