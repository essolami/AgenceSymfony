<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error=$utils->getLastAuthenticationError();
        $lastUsename=$utils->getLastUsername(); 
        return $this->render('security/login.html.twig', [
            'error' => $error,
            'last_username'=>$lastUsename,
            'current_menu'=>'login'
            

        ]); 
    }
 
 
    /**
     * @Route("/inscription",name="security_registration")
     */
    public function registration(Request $request , ManagerRegistry $manager , UserPasswordEncoderInterface $encoder){
        $user = new User();
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user , $user->getPassword());
            $user->setPassword($hash);
            $manager->getManager()->persist($user);
            $manager->getManager()->flush();
            return $this->redirectToRoute('login');
        }
        return $this->render('security/registration.html.twig',['form'=> $form->createView(),'current_menu'=>'registration']);
      }


    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        
    }
}
