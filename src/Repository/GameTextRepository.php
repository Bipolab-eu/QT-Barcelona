<?php

namespace App\Repository;

use App\Entity\GameText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GameText|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameText|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameText[]    findAll()
 * @method GameText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameTextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameText::class);
    }

    // /**
    //  * @return GameText[] Returns an array of GameText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GameText
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
