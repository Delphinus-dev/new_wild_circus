<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
//    public function xxx(xxx $xxx): Response
//    {
//        return $this->render('home/index.html.twig', [
//            'xxx' => $xxx->findAll(),
//        ]);
//    }
}