<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function sidebarCategories()
    {
        $categoryRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Categories');
        $categories = $categoryRepository->findAllOrdered();

        return $this->render('default/index.html.twig',[
            'categories' => $categories
        ]);
    }
}


