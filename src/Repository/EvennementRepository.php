<?php

namespace App\Repository;

use App\Entity\Evennement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evennement>
 *
 * @method Evennement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evennement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evennement[]    findAll()
 * @method Evennement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvennementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evennement::class);
    }

    public function save(Evennement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Evennement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    public function searchEvents($query)
    {
        $qb = $this->createQueryBuilder('e');
        $qb->where($qb->expr()->orX(
            $qb->expr()->like('e.titre', ':query')
        ));
        $qb->setParameter('query', '%'.$query.'%');

        return $qb->getQuery()->getResult();
    }

    public function sortByAscDate(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.dateDebut', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function sortByDescDate(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.dateFin', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Evennement[] Returns an array of Evennement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evennement
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
