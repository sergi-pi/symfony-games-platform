<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class GamesController extends Controller
{
/**
* @Route("/play/game{id}", name="chosenGame")
*/
   public function contentGames(Games $chosenGame)
    {

        return $this->render('/play/game.html.twig',[
            'chosenGame' => $chosenGame
        ]);
    }
}
