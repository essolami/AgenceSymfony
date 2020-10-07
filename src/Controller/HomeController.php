<?php

namespace App\Controller;

use App\Entity\Likes;
use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\LikesRepository;
use App\Repository\PropertyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $repo;

    public function __construct(PropertyRepository $repo)
    {
        $this->repo = $repo;
        
    }

    /**
     * @Route("/", name="home")
     */
    public function index(Request $req , PaginatorInterface $paginator)
    {
        
        $search = new PropertySearch();
        $form= $this->createForm(PropertySearchType::class,$search);
        $form->handleRequest($req);
        
        $properties = $this->repo->findAllVisisbleQuery($search);
        
       
        $pagination = $paginator->paginate(
            $properties, /* query NOT result */
            $req->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );
        // $property[0]->setSold(1);
        // $this->em->getManager()->flush();
        // dump($pro);
        return $this->render('home/home.html.twig',['current_menu'=>'home','pagination' => $pagination,'form'=>$form->createView()]);
    }


     /**
     * @Route("/bien", name="bien")
     */
    public function bien()
    {
        $properties = $this->repo->findMyProperties($this->getUser());
        return $this->render('bien/property.html.twig',['current_menu'=>'properties','properties'=>$properties]); 
    }
    
    /**
     * @Route("/like/{id}",name="like")
     */
    public function like(Property $pro  , LikesRepository $likeRepo): ?Response
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        if(!$user){
            return $this->json('Go To hell');
        }elseif( $user and $pro->LikedByUser($user)){
            $like = $likeRepo->findOneBy([
                'property'=>$pro,
                'user'=>$user
            ]);
            $entityManager->remove($like);
            $entityManager->flush();
            dump($this->json($likeRepo->count(['property'=>$pro])));
            return $this->json($likeRepo->count(['property'=>$pro]));
        }elseif($user and !$pro->LikedByUser($user)){
            $like = new Likes();
            $like->setProperty($pro);
            $like->setUser($user);
            $entityManager->persist($like);
            $entityManager->flush();
            dump($this->json($likeRepo->count(['property'=>$pro])));
            return $this->json($likeRepo->count(['property'=>$pro]));
        }
    }
    /**
     * @Route("/show/{id}",name="show")
     */
    public function show(Property $pro){

      
        return $this->render('bien/show.html.twig',['current_menu'=>'properties','property'=>$pro]);
    }
}
