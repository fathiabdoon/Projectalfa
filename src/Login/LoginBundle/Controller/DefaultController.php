<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;

 
class DefaultController extends Controller {
//testing
    public function indexAction(Request $request) {
        
        if($request->getMethod() == "POST"){
            
            $username = $request->get("username");
            $password = $request->get("password");
            
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');
      
            $user = $repository->findOneBy(
                    array(
                        'userName'=>$username, 
                        'password'=>$password
                    )
             );

            if($user){
                return $this->render('LoginLoginBundle:Default:login.html.twig', array('name' => $user->getUserName()));
            }
            
        }else{
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
    }
    
    
    
    public function signupAction(Request $request) {

        if($request->getMethod() == "POST"){
            
            $email = $request->get("email");
            $firstname = $request->get("firstname");
            $username = $request->get("username");
            $password = $request->get("password");

            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginLoginBundle:Users');
            
            $user = $repository->findOneBy(
                    array(
                        'userName'=>$username,
                    )
             );

            if($user)
            {
                return $this->render('LoginLoginBundle:Default:signup.html.twig', 
                        array('name' => '', 'firstname' =>$firstname));
            }
            else
            {
                $user = new Users();
                $user->setUserEmail($email);
                $user->setUserFirstname($firstname);
                $user->setUserName($username);
                $user->setUserPassword($password);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $em->flush();
                
                return $this->render('LoginLoginBundle:Default:signup.html.twig');
            }

        }
        
        
        
        return $this->render('LoginLoginBundle:Default:signup.html.twig', array('name' => '', 'firstname' =>''));
        
    }
    
    

}
