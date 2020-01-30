<?php

namespace App\Controller;

use App\Repository\SectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function homepage(SectionRepository $sectionRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'sections' => $sectionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/construction", name="under_construction", methods={"GET"})
     */
    public function construction(): Response
    {
        return $this->render('home/construction.html.twig');
    }

    /**
     * @Route("/philosophy", name="philosophy", methods={"GET"})
     */
    public function philosophy(): Response
    {
        return $this->render('home/philosophy.html.twig');
    }
}
