<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\CreateEventFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateEventController extends AbstractController
{
    /**
     * @Route("/create/event", name="app_create_event")
     */
    public function index(Request $request): Response
    {
        //Handle form and event to POST request
        $event = new Event();
        $form = $this->createForm(CreateEventFormType::class, $event);
        $form->handleRequest($request);
        //Submit form and validate it
        if($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();
            $event->setCreatedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_confirmation_event');
        }
        return $this->render('create_event/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
