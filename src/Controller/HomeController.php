<?php

namespace App\Controller;

// ...
use App\Form\CommentaireType;
use App\Repository\ChannelRepository;
use App\Repository\CommentaireRepository;
use App\Repository\EventRepository;
use App\Repository\GroupPostRepository;
use App\Repository\MessageRepository;
use App\Repository\PostRepository;
use App\Repository\ServiceRequestRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Commentaire;

class HomeController extends AbstractController
{
  /**
   * @Route("/home", name="app_home")
   */

    public function show(): Response
    {
        return $this->render('home/home.html.twig');

    }


}