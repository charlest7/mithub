<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('default/login.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/new_template", name="default_new")
     */
    public function indexTemplate()
    {
        return $this->render('default/new_template.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
