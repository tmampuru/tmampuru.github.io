<?php

namespace App\Repository;

use App\Entity\QaCalls;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QaCalls|null find($id, $lockMode = null, $lockVersion = null)
 * @method QaCalls|null findOneBy(array $criteria, array $orderBy = null)
 * @method QaCalls[]    findAll()
 * @method QaCalls[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QaCallsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QaCalls::class);
    }

    // /**
    //  * @return QaCalls[] Returns an array of QaCalls objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QaCalls
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
