<?php

namespace App\Repository;

use App\Entity\ProductList;
use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
use Doctrine\ORM\Query\Expr\Join;


/**
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }



    /**
     * @param $named
     * @return Products[]
     */

    public function searchAction($named)
    {

        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query


        $qb = $this->createQueryBuilder('p');
        $qb
            ->innerJoin('App\Entity\Products', 'u', Join::WITH, 'u=p.name')
            ->andWhere('p.name LIKE  :key')
            ->setParameter('key',  '%'.$named.'%');
        return $qb->getQuery()->getResult();
    }





//    /**
//     * @return ProductList[] Returns an array of ProductList objects
//     */
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
    public function findOneBySomeField($value): ?ProductList
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
