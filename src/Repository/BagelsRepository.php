<?php

namespace App\Repository;

use App\Entity\Bagels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bagels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bagels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bagels[]    findAll()
 * @method Bagels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BagelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bagels::class);
    }

    // /**
    //  * @return Bagels[] Returns an array of Bagels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bagels
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
