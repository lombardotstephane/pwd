<?php

namespace CCH\CampBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CampController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('CCHCampBundle:Camp:index.html.twig');
    }
    public function resultAction()
    {
        return $this->render('CCHCampBundle:Camp:result-list.html.twig');
    }
    public function addAction()
    {
        return $this->render('CCHCampBundle:Camp:add-camp.html.twig');
    }
    public function detailAction()
    {
        return $this->render('CCHCampBundle:Camp:detail-camp.html.twig');
    }
    public function publicAction()
    {
        return $this->render('CCHCampBundle:Camp:public-user.html.twig');
    }
    public function profilAction()
    {
        return $this->render('CCHCampBundle:Camp:user.html.twig');
    }
    public function signupAction()
    {
        return $this->render('CCHCampBundle:Camp:user-signup.html.twig');
    }
}
