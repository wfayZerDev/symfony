<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;
use App\Form\NewTaskType;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;

class DisplayTaskController extends AbstractController
{
    #[Route('/task', name: 'app_display_task')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $task = $entityManager->getRepository(task::class)->findBy([],['updated_at' => 'desc']);
        

        foreach ($task as $tasks) {
            $status = $tasks->getStatusId();
            $status = $status->getLabel();

            $user = $tasks->getUserId();
            // $user = $user->getEmail();
            // add property to task
            $tasks->status = $status;
            $tasks->user = $user;
        }
        
        return $this->render('display_task/index.html.twig', [
            'task' => $task,
            'status' => $status,
            'user' => $user,
        ]);
    }

}
