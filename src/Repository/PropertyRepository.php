<?php

namespace App\Repository;

use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Entity\User;
use App\Form\PropertySearchType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Migrations\Query\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }


    /**
     * @return QueryBuilder Returns an array of Property objects
     */
    public function findAllVisisbleQuery(PropertySearch $search) :array
    {
          $query = $this->findVisible();
              
          if($search->getMaxPrice()){
              $query=$query->andWhere('p.price < :maxprice');
              $query->setParameter('maxprice',$search->getMaxPrice());
          }

               
          if($search->getMinSurface()){
            $query=$query->andWhere('p.surface > :minsurface');
            $query->setParameter('minsurface',$search->getMinSurface());
        }
        
          return $query->getQuery()->getResult();         
                
    }



    public function findMyProperties( User $user) :array
    {
        $query =  $this->createQueryBuilder('p');
        $query = $query->where('p.User = :user');
        $query->setParameter('user',$user->getId());   
          return $query->getQuery()->getResult();         
                
    }

    /**
     * @return Property[] Returns an array of Property objects
     */
    public function findLatest() :array
    {
        return $this->findVisible()
        ->where('p.sold = false')
        ->setMaxResults(9)
        ->orderBy('p.id','DESC')
        ->getQuery()
        ->getResult();
    }

    private function findVisible() : QueryBuilder
    {
        return $this->createQueryBuilder('p');
                    
    }

    // /**
    //  * @return Property[] Returns an array of Property objects
    //  */
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
    public function findOneBySomeField($value): ?Property
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
