<?php

namespace App\Repository;

use App\Entity\Productes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Productes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Productes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Productes[]    findAll()
 * @method Productes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Productes::class);
    }

    /**
    * @return Productes[] Returns an array of Productes objects
    */
    public function findActive()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.Actiu = true')
            ->orderBy('p.Nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function  findActiveBy($id)
    {
        return $this->findOneBy(['id' => $id, 'Actiu' => true]);
    }

    // /**
    //  * @return Productes[] Returns an array of Productes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Productes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
