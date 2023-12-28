<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RepositoryMethodsController extends AbstractController
{
    private $studentRepository;
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    #[Route('/onestudent', name: 'student')]
    public function showOne()
    {
        // dd($this->studentRepository->find(16));
    }
    #[Route('/allstudents', name :'allstudent')]
    public function allStudents()
    {
        // dd($this->studentRepository->findAll());
    }
    #[Route('/student/{id}/{name}', name:'findbyname')]
    public function StudentByName($id, $name)
    {
        // dd($this->studentRepository->findBy(['id' => $id,'name' => $name]));
    }
    #[Route('/students/{id}', name:'findbyonelastname')]
    public function StudenByOneLastName($id)
    {
        // dd($this->studentRepository->findOneBy(['id' => $id]));
    }
}