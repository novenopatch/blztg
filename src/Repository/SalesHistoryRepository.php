<?php

namespace App\Repository;

use App\Entity\SalesHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SalesHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalesHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalesHistory[]    findAll()
 * @method SalesHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalesHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SalesHistory::class);
    }

    // /**
    //  * @return SalesHistory[] Returns an array of SalesHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SalesHistory
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
