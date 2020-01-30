<?php

namespace App\Controller;

use App\Repository\SectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SidebarController extends AbstractController
{
    /**
     * @Route("/sidebar", name="sidebar", methods={"GET"})
     */
    public function sidebar(SectionRepository $sectionRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'sections' => $sectionRepository->findAll(),
        ]);
    }
}
