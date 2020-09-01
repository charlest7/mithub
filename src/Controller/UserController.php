<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CommonSimpleService;
use App\Service\UserService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;
use App\Repository\UserEntity;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 *  @Route("/user")
*/
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/submit", name="user_login_submit")
     */
    public function loginAction(Request $request, CommonSimpleService $commonSimpleService, UserService $userService, UserRepository $userRepository)
    {
        //get submission login variable
        $user = $request->query->get('user');
        $userData = $commonSimpleService->encryptJson($user);
        $statusLogin = $userService->checkSessionAvailibility();

        //get submission field variable and check the session availibily
        if($statusLogin == true){
            $userEntity = $userRepository->getUser($userData->email);
            $statusLogin = $userService->checkSubmissionAndGenerateSession($userEntity, $commonSimpleService->hashSha256($userData->password));
        }

        return new JsonResponse(array('message' => $statusLogin), 200);

    }

    /**
     * @Route("/logout", name="user_logout", methods={"GET"})
     */
    public function logoutAction(Request $request, UserService $userService, CommonSimpleService $commonSimpleService): Response
    {
        $session = new session();
        session_start();
        session_unset();
        session_destroy();
       
        if(isset($_COOKIE['email']) && isset($_COOKIE['userId'])){
            unset($_COOKIE['email']);
            setcookie('email', null, -1, '/');
            unset($_COOKIE['userId']);
            setcookie('userId', null, -1, '/'); 

        }
        
       
       
       return $this->render('default/login.html.twig', [
        'controller_name' => 'UserController',
        ]);
    }

}
