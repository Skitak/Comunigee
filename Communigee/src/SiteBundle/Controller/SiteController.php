<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:vues:index.html.twig');
    }
	
	public function nourritureAction(){
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:nourriture.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:nourriture_refugee.html.twig');
		}
		
	}
	public function foyerAction(){
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:foyer.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:foyer_refugee.html.twig');
		}
	}
	
	public function justiceAction(){
		return $this->render('SiteBundle:vues:justice.html.twig');
	}
	
	public function alertesAction(){
		return $this->render('SiteBundle:vues:alertes.html.twig');
	}
	
}
