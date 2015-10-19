<?php

namespace BrainDumper\Bundle\UserBundle\Repository;

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
}