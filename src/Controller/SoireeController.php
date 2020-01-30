<?php

namespace App\Controller;

use App\Entity\Soiree;
use App\Form\SoireeType;
use App\Repository\SoireeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/soiree")
 */
class SoireeController extends AbstractController
{
    /**
     * @Route("/", name="soiree_index", methods={"GET"})
     */
    public function index(SoireeRepository $soireeRepository): Response
    {
        return $this->render('soiree/index.html.twig', [
            'soirees' => $soireeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="soiree_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $soiree = new Soiree();
        $form = $this->createForm(SoireeType::class, $soiree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($soiree);
            $entityManager->flush();

            return $this->redirectToRoute('soiree_index');
        }

        return $this->render('soiree/new.html.twig', [
            'soiree' => $soiree,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="soiree_show", methods={"GET"})
     */
    public function show(Soiree $soiree): Response
    {
        return $this->render('soiree/show.html.twig', [
            'soiree' => $soiree,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="soiree_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Soiree $soiree): Response
    {
        $form = $this->createForm(SoireeType::class, $soiree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('soiree_index');
        }

        return $this->render('soiree/edit.html.twig', [
            'soiree' => $soiree,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="soiree_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Soiree $soiree): Response
    {
        if ($this->isCsrfTokenValid('delete'.$soiree->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($soiree);
            $entityManager->flush();
        }

        return $this->redirectToRoute('soiree_index');
    }
}
