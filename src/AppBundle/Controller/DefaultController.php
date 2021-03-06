<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\administrator;
use AppBundle\Repository\pointsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{



    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {

        /*return $this->render('default/index.html.twig');*/

       /*$administrator = new administrator();
        $administrator->setEmail("rasgo509@gmail.com");
        $administrator->setPassword("123$%&");
        $encoder = $this->get('security.encoder_factory')->getEncoder($administrator);
        $encryptedPassword = $encoder->encodePassword($administrator->getPassword(), null);
        $administrator->setPassword($encryptedPassword);
       $em = $this->getDoctrine()->getManager();
        $em->persist($administrator);
        $em->flush();

        /*$em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('AppBundle:administrator')->findMyself(2);*/
/*        dump($hola);
        dump($adeu);
        die;*/

        return $this->render('default/index.html.twig');

    }

    /**
     * @Route("/chat/chats", name="chat")
     */
    public function chatAction()
    {
        return $this->render('chat/chats.html.twig');
    }

    /**
     * @Route("/freixa", name="freixa")
     */
    public function freixaAction()
    {
        $infoTop = $this->getDoctrine()
        ->getRepository('AppBundle:Points');
        $results = $infoTop->sumPointsPerGame();

        return new JsonResponse($results);
    }


}
