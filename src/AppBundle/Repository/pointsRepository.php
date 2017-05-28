<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * pointsRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class pointsRepository extends EntityRepository
{
    public function findSumPoints()
    {
        $qb = $this->createQueryBuilder('point')
            ->addOrderBy('point.name', 'ASC');
        $query = $qb->getQuery();
        return $query->execute();
    }
}