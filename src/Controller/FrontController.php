<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    public function index()
    {
        return $this->render('front/index.html.twig');
    }

    public function videoList()
    {
        return $this->render('front/video_list.html.twig');
    }

    public function videoDetails()
    {
        return $this->render('front/video_details.html.twig');
    }

    public function searchResults()
    {
        return $this->render('front/search_results.html.twig');
    }

    public function pricing()
    {
        return $this->render('front/pricing.html.twig');
    }

    public function register()
    {
        return $this->render('front/register.html.twig');
    }

    public function login()
    {
        return $this->render('front/login.html.twig');
    }

    public function payment()
    {
        return $this->render('front/payment.html.twig');
    }
}


