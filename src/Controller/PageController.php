<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Marcas;
use App\Entity\Motos;
use App\Entity\Estilo;

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
    public function cita(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();
        return $this->render('page/cita.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas
        ]);
    }

    /**
     * @Route("/comparativa", name="comparativa")
     */
    public function comparativa(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();

        $repositorio = $doctrine -> getRepository(Estilo::class);
        $estilos = $repositorio->findAll();

        $repositorio = $doctrine -> getRepository(Motos::class);
        $motos = $repositorio->findAll();

        return $this->render('page/comparativa.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas,
            'estilos' => $estilos,
            'motos' => $motos
        ]);
    }

    /**
     * @Route("/consejos", name="consejos")
     */
    public function consejos(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();
        return $this->render('page/consejos.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto(ManagerRegistry $doctrine): Response
    {

    $repositorio = $doctrine -> getRepository(Marcas::class);
    $marcas = $repositorio->findAll();

    return $this->render('page/contacto.html.twig', [
    'controller_name' => 'PageController',
    'marcas' => $marcas
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
        $marcaActual = $repositorio->find($id);
        return $this->render('page/marca.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas,
            'motos' => $motos,
            'marca' => $marcaActual
        ]);
    }


}
