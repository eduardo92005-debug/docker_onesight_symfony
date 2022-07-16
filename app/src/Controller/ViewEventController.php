<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Repository\EventRepository;

class ViewEventController extends AbstractController
{
    /**
     * @Route("/view/event", name="app_view_event")
     */
    public function index(EventRepository $repo):Response
    {
        //Show only approved events
        $events = $repo->findBy(['approval_status' => true]);
        return $this->render('view_event/index.html.twig', [
            'events' => $events,
        ]);
    }
}
