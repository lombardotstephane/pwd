<?php

namespace CCH\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CCH\UserBundle\Entity\User;
use CCH\UserBundle\Form\UserType;

class SecurityController extends Controller {

    public function loginAction(Request $request) {
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(UserType::class, $user);
        $msgError = null;

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $existUserEmail = $em->getRepository('CCHUserBundle:User')->findOneByEmail($user->getEmail());
            $existUsername = $em->getRepository('CCHUserBundle:User')->findOneByUsername($user->getUsername());

            if ($existUserEmail == null) {
                if ($existUsername == null) {
                    $user->setEnabled(1);
                    $em->persist($user);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Message bien enregistré.');

                    return $this->redirectToRoute('cch_camp_homepage');
                } else {
                    $msgError = 'Ce nom d\'utilisateur existe déjà.';
                }
            } else {
                $msgError = 'Cet address mail est déjà utilisé sur le site.';
            }
        }

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('cch_camp_homepage');
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('CCHUserBundle:Security:user-signup.html.twig', array(
                    'error' => $authenticationUtils->getLastAuthenticationError(),
                    'form' => $form->createView(),
                    'msgError' => $msgError
        ));
    }

}
