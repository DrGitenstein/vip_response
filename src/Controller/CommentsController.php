<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentsController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    // return new Response('Comments controller');
    return $this->render('index.html');
  }
}
