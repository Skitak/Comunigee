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
	
	public function santeAction(){
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
			return $this->render('SiteBundle:vues:sante.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:sante_refugee.html.twig');
		}
	}

	public function communicationAction(){
		return $this->render('SiteBundle:vues:communication.html.twig');
	}

	public function communicationInfosHAction(){
		return $this->render('SiteBundle:vues:communicationInfosH.html.twig');
	}

	public function alertesHAction(){
		return $this->render('SiteBundle:vues:alertesH.html.twig');
	}

	public function evenementsHAction(){
		return $this->render('SiteBundle:vues:evenementsH.html.twig');
	}
}