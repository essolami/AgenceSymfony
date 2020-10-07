<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BienController extends AbstractController
{

    // private $repo , $em;

    // public function __construct(PropertyRepository $repo , ManagerRegistry $em)
    // {
    //     $this->repo = $repo;
    //     $this->em = $em;
    // }

//     /**
//      * @Route("/bien", name="bien")
//      */
//     public function bien()
//     {
        
       
        
       
        
        
//         // $properties = $this->repo->findAllVisisbleQuery($search);
//         $properties = $this->repo->findMyProperties($this->getUser());
       
//         // $property[0]->setSold(1);
//         // $this->em->getManager()->flush();
//         // dump($pro);
//         return $this->render('bien/property.html.twig',['current_menu'=>'properties','properties'=>$properties]);

       
//     }




//     /**
//      * @Route("/like/{id}",name="like")
//      */
//     public function like(Property $pro  , LikesRepository $likeRepo): ?Response
//     {
//         $user = $this->getUser();
//         $entityManager = $this->getDoctrine()->getManager();
//         if(!$user){
//             return $this->json('Go To hell');
//         }elseif( $user and $pro->LikedByUser($user)){
//             $like = $likeRepo->findOneBy([
//                 'property'=>$pro,
//                 'user'=>$user
//             ]);
//             $entityManager->remove($like);
//             $entityManager->flush();
//             dump($this->json($likeRepo->count(['property'=>$pro])));
//             return $this->json($likeRepo->count(['property'=>$pro]));
//         }elseif($user and !$pro->LikedByUser($user)){
//             $like = new Likes();
//             $like->setProperty($pro);
//             $like->setUser($user);
//             $entityManager->persist($like);
//             $entityManager->flush();
//             dump($this->json($likeRepo->count(['property'=>$pro])));
//             return $this->json($likeRepo->count(['property'=>$pro]));
//         }
//     }


//     /**
//      * @Route("/show/{id}",name="show")
//      */
//     public function show(Property $pro){
//         return $this->render('bien/show.html.twig',['current_menu'=>'properties','property'=>$pro]);
//     }
}
?>
