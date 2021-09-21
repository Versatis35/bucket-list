<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $annee = date("Y");
        return $this->render('main/index.html.twig', [
            "annee" => $annee
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        $annee = date("Y");
        return $this->render('main/about.html.twig', [
            "annee" => $annee
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        $annee = date("Y");
        return $this->render('main/contact.html.twig', [
            "annee" => $annee
        ]);
    }

    /**
     * @Route("/addIdea", name="add_idea")
     */
    public function addIdea(): Response
    {
        $annee = date("Y");
        return $this->render('main/addidea.html.twig', [
            "annee" => $annee
        ]);
    }

    /**
     * @Route("/viewIdea", name="view_idea")
     */
    public function viewIdea(): Response
    {
        $annee = date("Y");
        return $this->render('main/addidea.html.twig', [
            "annee" => $annee
        ]);
    }


}
