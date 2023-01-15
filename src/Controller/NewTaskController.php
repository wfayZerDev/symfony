<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;
use App\Form\NewTaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class NewTaskController extends AbstractController
{
    #[Route('/task/new', name: 'app_new_task')]
    #[Route("/task/{id}/edit", name: "app_edit_task")]
    // remove task
    #[Route("/task/{id}/remove", name: "app_remove_task")]
    // Make a page for display a specific task
    #[Route("/task/{id}", name: "app_display_task_specific")]
    public function upload(Request $request, EntityManagerInterface $entityManager, int $id = null): Response
    {
        $task = new Task();

        // Make a page for display a specifici task
        if ($request->attributes->get('_route') == 'app_display_task_specific') {
            $task = $entityManager->getRepository(Task::class)->find($id);
            return $this->render('specific_task/index.html.twig', [
                'task' => $task,
            ]);
        }
        // remove task
        if ($request->attributes->get('_route') == 'app_remove_task') {
            $task = $entityManager->getRepository(Task::class)->find($id);
            $entityManager->remove($task);
            $entityManager->flush();
            return $this->redirectToRoute('app_display_task');
        }
        if ($id) {
            $task = $entityManager->getRepository(Task::class)->find($id);
        }
        $form = $this->createForm(NewTaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($task);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_display_task');
        }

        return $this->render('new_task/index.html.twig', [
            'NewTaskForm' => $form->createView(),
            'task' => $task,
        ]);
    }
}
