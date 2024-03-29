<?php

namespace App\Repository;

use App\Entity\Departure;
use App\Entity\Destination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Departure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Departure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Departure[]    findAll()
 * @method Departure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Departure::class);
    }

    public function search ($departure){
        return $this->createQueryBuilder('Departure')
            ->select('Departure.destinations')
            ->from(Departure::class)
            ->andWhere('Departure.destinations LIKE :name')
            ->innerJoin(Destination::class)
            ->setParameter('departure', '%'.$departure.'%')
            ->getQuery()
            ->execute();
    }

    // /**
    //  * @return Departure[] Returns an array of Departure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Departure
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
