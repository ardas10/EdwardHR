<?php
/**
 * Created by PhpStorm.
 * User: syaip
 * Date: 7/11/2017
 * Time: 2:11 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Dashboard extends Controller
{

    /**
     * @Route("/home")
     */

    public function showAction()
    {
        return $this->render('dashboard/show.html.twig');
    }

}