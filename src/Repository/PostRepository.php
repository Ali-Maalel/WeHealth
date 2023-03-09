<?php

namespace App\Repository;

use App\Entity\Post;
use App\Entity\Topic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Post>
 *
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    public function save(Post $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Post $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Post[] Returns an array of Post objects
     */
    public function findByTopicAndCount($value): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.topic = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function getCount()
    {
        $db = $this->createQueryBuilder('a');
        $db
            ->select( 'a', 't')
            ->from('App\Entity\Topic', 't')
            ->innerJoin('a.topic', 'j')
            ->addSelect('COUNT(j) as count')
            ->groupBy('a.topic')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(30);
        $result = $db->getQuery()->getResult();
        return $result;
    }

    private function findByCaseInsensitiveQuery(array $conditions): Query
    {
        $conditionString = [];
        $parameters = [];
        foreach ($conditions as $k => $v) {
            $conditionString[] = "LOWER(o.$k) = :$k";
            $parameters[$k] = strtolower((string) $v);
        }

        return $this->createQueryBuilder('o')
            ->where(join(' AND ', $conditionString))
            ->setParameters($parameters)
            ->getQuery()
            ->getResult();
    }

    public function search($mots){
        $query = $this->createQueryBuilder('p');
        if($mots != null){
            $query->where('MATCH_AGAINST(p.content, p.titre, p.auteur) AGAINST (:mots boolean)>0')
            ->setParameter('mots', $mots);
        }
        return $query->getQuery()->getResult();
    }

//    public function findOneBySomeField($value): ?Post
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

/*
->addSelect('COUNT(p) as count')
            ->groupBy('p.topic')
            ->orderBy('p.id', 'DESC')
*/ 
}
