<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Utilities\GenerateConfirmationToken;

class ConfirmationEventController extends AbstractController
{
    /**
     * @Route("/confirmation/event", name="app_confirmation_event")
     */
    public function index(GenerateConfirmationToken $token): Response
    {
        $my_token = $token->tokenize();
        return $this->render('confirmation_event/index.html.twig', [
            'my_token' => $my_token,
        ]);
    }
}
