<?php

namespace App\Repository;

use App\Entity\DescriptionText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DescriptionText|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptionText|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptionText[]    findAll()
 * @method DescriptionText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptionTextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DescriptionText::class);
    }

    // /**
    //  * @return DescriptionText[] Returns an array of DescriptionText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DescriptionText
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
