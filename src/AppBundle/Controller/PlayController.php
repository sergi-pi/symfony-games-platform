<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Points;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PlayController extends Controller
{
    /**
     * @Route("/hola", name="hola")
     */
    public function indexAction()
    {
        return $this->render('play/game.html.twig', array());
    }

    /**
     * @Route("/updatepoints", name="updatePoints")
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository('AppBundle:Games')->find($request->get('game'));
        $player = $em->getRepository('AppBundle:Players')->find($request->get('player'));

        $score = $request->get('score');
        $point = new Points();
        $point->setPoints($score);
        $point->setGames($game);
        $point->setPlayers($player);

        $em->persist($point);
        $em->flush();
        return new JsonResponse('Saved new score');
    }
}