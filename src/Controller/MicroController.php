<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MicroController extends AbstractController
{
    #[Route('/hello', methods: ['GET', 'HEAD'])]
    public function hello(): Response
    {
        return $this->render('micro/hello.html.twig', [
            'foo' => 'bar',
        ]);
    }
}