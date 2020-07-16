<?php

namespace App\Repository;

use App\Entity\Barragem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Barragem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Barragem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Barragem[]    findAll()
 * @method Barragem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BarragemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Barragem::class);
    }

    // /**
    //  * @return Barragem[] Returns an array of Barragem objects
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
    public function findOneBySomeField($value): ?Barragem
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
