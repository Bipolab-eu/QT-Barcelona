<?php

namespace App\Repository;

use App\Entity\CoverText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoverText|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoverText|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoverText[]    findAll()
 * @method CoverText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoverTextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoverText::class);
    }

    // /**
    //  * @return CoverText[] Returns an array of CoverText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoverText
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
