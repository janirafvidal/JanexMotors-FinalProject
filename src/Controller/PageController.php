<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Marcas;
use App\Entity\Motos;
use App\Entity\Estilo;
use App\Entity\Mensaje;
use App\Form\MensajeType;
use App\Entity\Cita;
use App\Form\CitaType;

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
    public function cita(ManagerRegistry $doctrine,  Request $request): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();

        $cita = new Cita();
    $formulario = $this->createForm(CitaType::class, $cita);

    $formulario->handleRequest($request);

    if ($formulario->isSubmitted() && $formulario->isValid()) {

        $cita = $formulario->getData();

        $entityManager = $doctrine->getManager();

        $entityManager->persist($cita);

        $entityManager->flush();

        return $this->redirectToRoute('inicio');

    }

        return $this->render('page/cita.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas,
            'form' => $formulario->createView(),

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

        
        return $this->render('page/comparativa.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas,
            'estilos' => $estilos
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
     * @Route("/sobre-nosotros", name="sobre-nosotros")
     */
    public function sobreNosotros(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine -> getRepository(Marcas::class);
        $marcas = $repositorio->findAll();
        return $this->render('page/sobre-nosotros.html.twig', [
            'controller_name' => 'PageController',
            'marcas' => $marcas
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contacto(ManagerRegistry $doctrine, Request $request): Response
    {

    $repositorio = $doctrine -> getRepository(Marcas::class);
    $marcas = $repositorio->findAll();
    $mensaje = new Mensaje();
    $formulario = $this->createForm(MensajeType::class, $mensaje);

    $formulario->handleRequest($request);

    if ($formulario->isSubmitted() && $formulario->isValid()) {

        $mensaje = $formulario->getData();

        $entityManager = $doctrine->getManager();

        $entityManager->persist($mensaje);

        $entityManager->flush();

        return $this->redirectToRoute('inicio');

    }
    return $this->render('page/contacto.html.twig', [
    'controller_name' => 'PageController',
    'marcas' => $marcas,
    'form' => $formulario->createView(),

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
