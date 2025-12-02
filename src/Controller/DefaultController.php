<?php

namespace App\Controller;

use App\Dto\ValueObject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage', defaults: ['with' => false])]
    #[Route('/with-validator', name: 'app_with', defaults: ['with' => true])]
    public function index(bool $with): Response
    {
        return $this->render('default/index.html.twig', ['with' => $with, 'value_object' => new ValueObject()]);
    }

}
