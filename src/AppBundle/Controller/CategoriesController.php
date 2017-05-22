<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends Controller
{
    /**
     * @Route("/categories/{id}", name="catSelected")
     */
    public function chooseCategoryAction(Categories $category)
    {
        return $this->render('categories/category.html.twig', [
            "category" => $category
        ]);
    }
}


