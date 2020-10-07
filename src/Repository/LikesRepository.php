<?php

namespace App\Repository;

use App\Entity\Likes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Likes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Likes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Likes[]    findAll()
 * @method Likes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LikesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Likes::class);
    }
  

/**
      * @return Likes[] Returns an array of Agent objects
      */
    
      public function findCountLikesByProperty() 
      {
        //   
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            ' SELECT property_id from likes where 1 '
        );

        // returns an array of Product objects
        return $query->getResult();
      }
      
}