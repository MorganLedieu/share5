<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;


class StaticController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }

    /**     
     * @Route("/contact", name="contact")     
     */    
    public function contact()
    {               
        return $this->render('static/contact.html.twig', [       
            'controller_name' => 'StaticController', 
            ]);    
        
    }

    /**
     * @Route("/propos", name="propos")
     */
    public function propos()
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
}
