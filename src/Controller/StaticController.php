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
    public function contact(Request $request)
    {               
        $form = $this->createForm(ContactType::class);
        if ($request->isMethod('POST')) {
                $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        $this->addFlash('notice','Formulaire envoyé !');
                                }
                                      }
        return $this->render('static/contact.html.twig', [       
            'form'=>$form->createView()
            ]);    
        
    }
}
