<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MediaController extends AbstractController
{
    #[Route('/', name: 'media_list')]
    public function mediaList()
    {

        return $this->render('media/list.html.twig', [
            'controller_name' => 'MediaController',
        ]);
    }
    #[Route('/media', name: 'show')]
    public function show()
    {
        return $this->render('media/show.html.twig', [
            'controller_name' => 'MediaController',
        ]);
    }
}
