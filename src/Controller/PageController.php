<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Marcas;
use App\Entity\Motos;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();


        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas
        ]);
    }

    /**
     * @Route("/cita", name="cita")
     */
    public function cita(): Response
    {
        return $this->render('page/cita.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/comparativa", name="comparativa")
     */
    public function comparativa(): Response
    {
        return $this->render('page/comparativa.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/consejos", name="consejos")
     */
    public function consejos(): Response
    {
        return $this->render('page/consejos.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto(): Response
    {
        return $this->render('page/contacto.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/marca/{nombre}/{id}", name="marca")
     */
    public function marca($id, ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Motos::class);
        $motos = $repositorio->findBy(['marca' => $id]);

        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();

        return $this->render('page/marca.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas,
            'motos' => $motos
        ]);
    }


}
