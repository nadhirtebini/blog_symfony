<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    private $passwordHasher;
    
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }
    
    #[Route('/check-login', name: 'app_check_login')]
    public function checkLogin(Request $request, UserRepository $userRepository): Response
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');
    
        $user = $userRepository->findOneBy(['email' => $email]);
    
        if (!$user) {
            return $this->redirectToRoute('app_login', ['error' => 'User not found']);
        }
    
        if ($this->passwordHasher->isPasswordValid($user, $password)) {
            return $this->redirectToRoute('app_articles_by_user', ['id' => $user->getId()]);
        } else {
            return $this->redirectToRoute('app_login', ['error' => 'Incorrect password']);
        }
    }
    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony will intercept this route and handle the logout process automatically
    }
}

