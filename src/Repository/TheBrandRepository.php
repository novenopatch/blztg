<?php

namespace App\Repository;

use App\Entity\TheBrand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TheBrand|null find($id, $lockMode = null, $lockVersion = null)
 * @method TheBrand|null findOneBy(array $criteria, array $orderBy = null)
 * @method TheBrand[]    findAll()
 * @method TheBrand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TheBrandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TheBrand::class);
    }

    // /**
    //  * @return TheBrand[] Returns an array of TheBrand objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TheBrand
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
