<?php

namespace App\Repository;

use App\Entity\Futs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Futs>
 *
 * @method Futs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Futs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Futs[]    findAll()
 * @method Futs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FutsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Futs::class);
    }

//    /**
//     * @return Futs[] Returns an array of Futs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Futs
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
