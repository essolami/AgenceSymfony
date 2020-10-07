<?php

namespace App\Controller;

use App\Entity\Property;
use App\Form\PropertyType;

use App\Repository\LikesRepository;
use App\Repository\PropertyRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    public $pro;
    public function __construct(PropertyRepository $pro , LikesRepository $like)
    {
        $this->pro = $pro;
        $this->like = $like;
    }

    /**
     * @Route("/admin/biens", name="admin")
     */
    public function index()
    {
       $properties=$this->pro->findAll();
        return $this->render('admin/biens/admin.html.twig', [
            'properties'=>$properties,
            'current_menu'=>'admin'
        ]);
       
    }

    /**
     * @Route("/new", name="new")
     */
    public function create(Property $property = null , Request $request){
            $property = new Property(); 
            $form=$this->createForm(PropertyType::class,$property);
            $form->handleRequest($request);
                if($form->isSubmitted()&& $form->isValid()){
                    if(!$property->getId()){
                        $property->setCreatedAt(new \DateTime());
                        $property->setUser($this->getUser());
                    }
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($property);
                    $entityManager->flush();
                    $this->addFlash('sucess','You create sucesufully');
                    return $this->redirectToRoute('admin');
                }
            return $this->render('admin/biens/new.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Property $property , Request $request) 
    {
        $form=$this->createForm(PropertyType::class,$property);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            if(!$property->getId()){
                $property->setCreatedAt(new \DateTime());
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $this->addFlash('sucess','You Edited Sucesufully');
            return $this->redirectToRoute('admin');
       }
        return $this->render('admin/biens/edit.html.twig',[
           'property'=>$property,
            'current_menu'=>'admin',
           'form'=>$form->createView()
       ]);

    }
    /**
     * @Route("/delete/{id}", name="delete")
     * @method({"DELETE"})
     */
    public function delete(Property $property,Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($property); 
        $entityManager->flush();
        $this->addFlash('sucess','You Deleted Succesufuly');
        $response = new Response(); 
        $response->send(); 
    }
}
