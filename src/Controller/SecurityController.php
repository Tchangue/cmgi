<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
	/**
	 * @Route("/inscription", name="security_registration")
	 */
	public function registration(Request $request, ObjectManager $em, UserPasswordEncoderInterface $encoder)
	{
		$user = new User();
		$form = $this->createForm(RegistrationType::class, $user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$hash = $encoder->encodePassword($user, $user->getPassword());

			$user->setPassword($hash);

			$em->persist($user);
			$em->flush();

			return $this->redirectToRoute('security_login');
		}

		return $this->render('security/registration.html.twig', [
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/connection", name="security_login")
	 */
	public function login()
	{
		return $this->render('security/login.html.twig');
	}

	/**
	 * @Route("/d&eacute;connection", name="security_logout")
	 */
	public function logout()
	{
	}

	/**
	 * @Route("/mot-de-passe-oublie", name="reset_password")
	 */
	public function resetPassword()
	{
		return $this->render('security/resetPassword.html.twig');
	}
}
