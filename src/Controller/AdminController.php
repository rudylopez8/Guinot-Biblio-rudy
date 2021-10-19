<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
     /**
     * @Route("/Systeme", name="Systeme")
     */
    public function Systeme(): Response
    {
        return $this->render('admin/Systeme.html.twig', [        
        ]);
    } 
     /**
     * @Route("/ArticlealaUNE", name="ArticlealaUNE")
     */
    public function ArticlealaUNE(): Response
    {
        return $this->render('admin/ArticlealaUNE.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Categorie", name="Categorie")
     */
    public function Categorie(): Response
    {
        return $this->render('admin/Categorie.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Contenu", name="Contenu")
     */
    public function Contenu(): Response
    {
        return $this->render('admin/Contenu.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Extensions", name="Extensions")
     */
    public function Extensions(): Response
    {
        return $this->render('admin/Extensions.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Images", name="Images")
     */
    public function Images(): Response
    {
        return $this->render('admin/Images.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Logout", name="Logout")
     */
    public function Logout()
    {
        return $this->redirectToRoute("Accueil");
    } 
     /**
     * @Route("/Utilisateurs", name="Utilisateurs")
     */
    public function Utilisateurs(): Response
    {
        return $this->render('admin/Utilisateurs.html.twig', [        
        ]);
    }
     
}