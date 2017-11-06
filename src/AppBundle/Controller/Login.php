<?php
/**
 * Created by PhpStorm.
 * User: syaip
 * Date: 7/11/2017
 * Time: 12:33 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;


class Login extends Controller
{

    /**
     * @Route("/login", name="login")
     */
/*
   public function showAction()
   {
       return $this->render('login/show.html.twig');
   }
*/
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('login/show.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }


}