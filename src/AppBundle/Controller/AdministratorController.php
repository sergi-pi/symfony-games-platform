<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdministratorController extends Controller
{
    /**
     * @Route("/login", name="admin_login")
     */
    public function loginAction()
    {
        $authUtils = $this->get('security.authentication_utils');
        return $this->render('administrator/login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ));
    }


    /**
     * @Route("/login_check", name="admin_login_check")
     */
    public function loginCheckAction()
    {
// el "login check" lo hace Symfony automáticamente, por lo que
// no hay que añadir ningún código en este método
    }
    /**
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction()
    {
// el logout lo hace Symfony automáticamente, por lo que
// no hay que añadir ningún código en este método
    }
}
