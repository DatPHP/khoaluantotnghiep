<?php

namespace App\Repository;

use App\Entity\OrdersItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OrdersItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersItems[]    findAll()
 * @method OrdersItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersItems::class);
    }

    // /**
    //  * @return OrdersItems[] Returns an array of OrdersItems objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrdersItems
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
