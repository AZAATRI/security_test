<?php

namespace App\Controller;

use App\Entity\User;
use Hslavich\OneloginSamlBundle\Security\Authentication\Token\SamlTokenFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LoginController extends AbstractController
{
    private $authenticationManager;
    private $tokenStorage;
    public function __construct(TokenStorageInterface $tokenStorage,AuthenticationManagerInterface $authenticationManager)
    {
        $this->authenticationManager = $authenticationManager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @Route("/login", name="login")
     */
    public function index()
    {/*
        $tokenFactory = new SamlTokenFactory();
        $token = $tokenFactory->createToken(new User(),array(),[]);
        $token = $this->authenticationManager->authenticate($token);
        $this->tokenStorage->setToken($token);*/
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
    /**
     * @Route("/checkd", name="check_it")
     */
    public function checker()
    {
        die();
        $tokenFactory = new SamlTokenFactory();
        $token = $tokenFactory->createToken(new User(),array(),[]);
        $token = $this->authenticationManager->authenticate($token);
        $this->tokenStorage->setToken(null);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/logoutf", name="logout")
     */
    public function logout()
    {
        $tokenFactory = new SamlTokenFactory();
        $token = $tokenFactory->createToken(new User(),array(),[]);
        $token = $this->authenticationManager->authenticate($token);
        $this->tokenStorage->setToken(null);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
