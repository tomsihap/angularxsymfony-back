<?php

namespace App\Repository;

use App\Entity\ModelApiResource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ModelApiResource|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModelApiResource|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModelApiResource[]    findAll()
 * @method ModelApiResource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModelApiResourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModelApiResource::class);
    }

    // /**
    //  * @return ModelApiResource[] Returns an array of ModelApiResource objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModelApiResource
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
