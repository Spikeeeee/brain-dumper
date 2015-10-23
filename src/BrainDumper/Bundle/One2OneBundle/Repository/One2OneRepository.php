<?php

namespace BrainDumper\Bundle\One2OneBundle\Repository;

use BrainDumper\Bundle\One2OneBundle\Entity\One2One;
use BrainDumper\Bundle\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class One2OneRepository
 *
 * @package BrainDumper\Bundle\One2OneBundle\Repository
 */
class One2OneRepository extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        $queryBuilder = $this->createQueryBuilder('one_2_one');

        return $queryBuilder;
    }

    /**
     * @param User $user
     *
     * @return One2One[]
     */
    public function getHostedForCurrentUser(User $user)
    {
        $queryBuilder = $this->getQueryBuilder();

        $queryBuilder->where('one_2_one.host = :hostId');
        $queryBuilder->setParameter('hostId', $user->getId());

        $queryBuilder->orderBy('one_2_one.subject');
        $queryBuilder->addOrderBy('one_2_one.plannedOn');

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * @param User $user
     *
     * @return One2One[]
     */
    public function getInvitedForCurrentUser(User $user)
    {
        $queryBuilder = $this->getQueryBuilder();

        $queryBuilder->orWhere('one_2_one.subject = :subjectId');
        $queryBuilder->setParameter('subjectId', $user->getId());

        $queryBuilder->orderBy('one_2_one.subject');
        $queryBuilder->addOrderBy('one_2_one.plannedOn');

        return $queryBuilder->getQuery()->getResult();
    }

}