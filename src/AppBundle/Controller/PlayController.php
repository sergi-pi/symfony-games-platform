<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/play")
 */
class PlayController extends Controller
{
    /**
     * @Route("/hola", name="hola")
     */
    public function indexAction()
    {
        return $this->render('play/game.html.twig', array());
    }
}
