<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Players;
use AppBundle\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/play")
 */
class UserController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $categoryRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Categories');
        $categories = $categoryRepository->findAllOrdered();
        $authUtils = $this->get('security.authentication_utils');
        return $this->render('user/login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
            'categories' => $categories,
        ));
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        $player = new Players();
        $form = $this->createForm(RegisterType::class, $player);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $encoder = $this->get('security.encoder_factory')->getEncoder($player);
            $encryptedPassword = $encoder->encodePassword($player->getPassword(), null);
            $player->setPassword($encryptedPassword);
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();
            return $this->redirectToRoute('hola');
        }
        $gamesRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Games');
        $games = $gamesRepository->findAllGames();

        $categoryRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Categories');
        $categories = $categoryRepository->findAllOrdered();
        return $this->render('user/register.html.twig', array(
            'form' => $form->createView(),
            'categories' => $categories
        ));
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction()
    {
        return $this->render('user/profile.html.twig');
    }
}