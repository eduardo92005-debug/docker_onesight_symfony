<?php

namespace App\Controller;

use App\Form\CreateEventFormType;
use App\Entity\Event;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateEventController extends AbstractController
{
    /**
     * @Route("/create/event", name="app_create_event")
     */
    public function index(): Response
    {
        $event = new Event();
        $form = $this->createForm(CreateEventFormType::class, $event);
        return $this->render('create_event/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
