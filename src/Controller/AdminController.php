<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    public function index()
    {
        return $this->render('admin/my_profile.html.twig');
    }

    public function categories()
    {
        return $this->render('admin/categories.html.twig');
    }

    public function editCategory()
    {
        return $this->render('admin/edit_category.html.twig');

    }
    public function users()
    {
        return $this->render('admin/users.html.twig');
    }

    public function videos()
    {
        return $this->render('admin/videos.html.twig');
    }

    public function uploadVideo()
    {
        return $this->render('admin/upload_video.html.twig');
    }
}
