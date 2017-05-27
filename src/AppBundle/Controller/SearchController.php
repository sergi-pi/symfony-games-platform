<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Games;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request)
    {
        $userInput = $request->get('abc');
        $gamesRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Games');
        $results = $gamesRepository->findByString($userInput);

        return $this->render('search/search.html.twig',[
            'results' => $results
        ]);

    }
}
