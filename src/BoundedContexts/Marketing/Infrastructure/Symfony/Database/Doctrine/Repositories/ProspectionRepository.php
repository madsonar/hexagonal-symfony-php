<?php

namespace App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Repositories;

use App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Entity\Prospection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prospection>
 *
 * @method Prospection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prospection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prospection[]    findAll()
 * @method Prospection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProspectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prospection::class);
    }

//    /**
//     * @return Prospection[] Returns an array of Prospection objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Prospection
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
