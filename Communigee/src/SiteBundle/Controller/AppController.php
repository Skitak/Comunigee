<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function hygieneAction()
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:hygiene.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:hygiene_refugee.html.twig');
		}
    }
	
	public function santeAction()
	{
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listSante = $this->findBySante(true);
		return $this->render('SiteBundle:vues:sante.html.twig', ['listeInfos' => $listSante]);
	}

	public function communicationAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listComm = $this->findByCommunication(true);
		return $this->render('SiteBundle:vues:communication.html.twig', ['listeInfos' => $listComm]);
	}

	public function communicationInfosHAction(){
		$centre = new Centre();
    	$form   = $this->get('form.factory')->create(CentreType::class, $centre);

		return $this->render('SiteBundle:vues:communicationInfosH.html.twig', ['form' => $form]);
	}

	public function alertesHAction(){
		$evt = new Evenement();
    	$form   = $this->get('form.factory')->create(EvenementType::class, $evt);
    	
		return $this->render('SiteBundle:vues:alertesH.html.twig', ['form' => $form]);
	}

	public function evenementsHAction(){
		$evt = new Evenement();
    	$form   = $this->get('form.factory')->create(EvenementType::class, $evt);

		return $this->render('SiteBundle:vues:evenementsH.html.twig', ['form' => $form]);
	}
}