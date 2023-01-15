<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificTaskController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('specific_task/index.html.twig', [
            'controller_name' => 'SpecificTaskController',
        ]);
    }
}
