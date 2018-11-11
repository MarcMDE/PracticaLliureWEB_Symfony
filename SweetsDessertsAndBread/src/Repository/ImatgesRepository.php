<?php

namespace App\Repository;

use App\Entity\Imatges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Imatges|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imatges|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imatges[]    findAll()
 * @method Imatges[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImatgesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Imatges::class);
    }

    // /**
    //  * @return Imatges[] Returns an array of Imatges objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Imatges
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
