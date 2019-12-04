<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Null_;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function findByCentury()
    {
        return $this->createQueryBuilder('pd')
            ->where('pd.PublicationDate <= 1900')
            ->orderBy('pd.PublicationDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByAuthor()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.Author', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByPrice()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.Price', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findNew()
    {
        return $this->createQueryBuilder('pd')
            ->where('pd.PublicationDate > 2017')
            ->orderBy('pd.PublicationDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

         //
            // /**
        //  * @return Book[] Returns an array of Book objects
        //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Book
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
