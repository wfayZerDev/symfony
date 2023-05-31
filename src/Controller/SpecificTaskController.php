<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificTaskController extends AbstractController
{
    public function index(): Response
    {
        if ($request->attributes->get('_route') == 'app_edit_task') {
            $task = $entityManager->getRepository(Task::class)->find($id);
            $task->setStatusId(3);
            $entityManager->flush();
            return $this->redirectToRoute('app_homepage');
        }

        return $this->render('specific_task/index.html.twig', [
            'controller_name' => 'SpecificTaskController',
        ]);
    }
}
