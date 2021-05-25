<?php

namespace App\Repository;

use App\Entity\ContactFormData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContactFormData|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactFormData|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactFormData[]    findAll()
 * @method ContactFormData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactFormDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactFormData::class);
    }

    // /**
    //  * @return ContactFormData[] Returns an array of ContactFormData objects
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
    public function findOneBySomeField($value): ?ContactFormData
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
