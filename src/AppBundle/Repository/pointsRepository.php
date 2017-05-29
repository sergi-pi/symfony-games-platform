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
    public function findSumPoints($player)
    {
        return $this->createQueryBuilder('point')
            ->select('SUM(point.points) as sumPoints, games.name, games.id')
            ->leftJoin('point.games', 'games')
            ->addGroupBy('games.id', 'point.games')
            ->getQuery()
            ->getResult();
    }
}

