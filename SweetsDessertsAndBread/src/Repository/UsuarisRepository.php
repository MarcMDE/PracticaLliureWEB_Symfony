<?php

namespace App\Repository;

use App\Entity\Usuaris;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usuaris|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuaris|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuaris[]    findAll()
 * @method Usuaris[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usuaris::class);
    }

    // /**
    //  * @return Usuaris[] Returns an array of Usuaris objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usuaris
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
