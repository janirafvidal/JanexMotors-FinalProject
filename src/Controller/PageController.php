<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
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
     * @Route("/ducati", name="ducati")
     */
    public function ducati(): Response
    {
        return $this->render('page/ducati.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/honda", name="honda")
     */
    public function honda(): Response
    {
        return $this->render('page/honda.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/kawasaki", name="kawasaki")
     */
    public function kawasaki(): Response
    {
        return $this->render('page/kawasaki.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/yamaha", name="yamaha")
     */
    public function yamaha(): Response
    {
        return $this->render('page/yamaha.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
