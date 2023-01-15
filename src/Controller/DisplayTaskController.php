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
        $task = $entityManager->getRepository(task::class)->findBy([],['id' => 'desc']);


        return $this->render('display_task/index.html.twig', [
            'task' => $task,
        ]);
    }

}
