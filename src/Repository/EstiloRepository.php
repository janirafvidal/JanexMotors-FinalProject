<?php

namespace App\Repository;

use App\Entity\Estilo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Estilo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Estilo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Estilo[]    findAll()
 * @method Estilo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstiloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Estilo::class);
    }

    // /**
    //  * @return Estilo[] Returns an array of Estilo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Estilo
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
