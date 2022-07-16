<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewEventController extends AbstractController
{
    /**
     * @Route("/view/event", name="app_view_event")
     */
    public function index(): Response
    {
        return $this->render('view_event/index.html.twig', [
            'controller_name' => 'ViewEventController',
        ]);
    }
}
