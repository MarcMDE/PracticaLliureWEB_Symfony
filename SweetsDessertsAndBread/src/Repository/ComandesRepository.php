<?php

namespace App\Repository;

use App\Entity\Comandes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comandes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comandes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comandes[]    findAll()
 * @method Comandes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComandesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comandes::class);
    }

    /**
    * @return Comandes[] Returns an array of Comandes objects
    */
    public function findByUser($user)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.Usuari = :user')
            ->setParameter('user', $user)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }
    /*
    public function findOneBySomeField($value): ?Comandes
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
