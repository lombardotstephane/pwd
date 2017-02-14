<?php
/**
 * Created by PhpStorm.
 * User: Stephane
 * Date: 11-11-16
 * Time: 16:08
 */

namespace CCH\CampBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class UserController
{
    public function profilAction()
    {
        // replace this example code with whatever you need
        return $this->render('CCHCampBundle:Camp:user.html.twig');
    }
    public function publicprofileAction()
    {
        // replace this example code with whatever you need
        return $this->render('CCHCampBundle:Camp:public-user.html.twig');
    }
    public function signupAction()
    {
        // replace this example code with whatever you need
        return $this->render('CCHCampBundle:Camp:user-signup.html.twig');
    }
}