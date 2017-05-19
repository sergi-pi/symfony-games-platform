<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\administrator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

/*    /**
     * @Route("/", name="test")
     *//*
    public function indexAction()
    {
        $administrator = new administrator();
        $administrator->setEmail("rasgo509@gmail.com");
        $administrator->setPassword("123$%&");
        $encoder = $this->get('security.encoder_factory')->getEncoder($administrator);
        $encryptedPassword = $encoder->encodePassword($administrator->getPassword(), null);
        $administrator->setPassword($encryptedPassword);
        $em = $this->getDoctrine()->getManager();
        $em->persist($administrator);
        $em->flush();
    }*/
}
