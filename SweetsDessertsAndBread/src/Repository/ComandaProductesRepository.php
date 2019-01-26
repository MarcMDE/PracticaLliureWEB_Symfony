<?php

namespace App\Repository;

use App\Entity\ComandaProductes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ComandaProductes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComandaProductes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComandaProductes[]    findAll()
 * @method ComandaProductes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComandaProductesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ComandaProductes::class);
    }

    // /**
    //  * @return ComandaProductes[] Returns an array of ComandaProductes objects
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
    public function findOneBySomeField($value): ?ComandaProductes
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
