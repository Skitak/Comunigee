<?php

namespace SiteBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:vues:index.html.twig');
    }
	
	public function nourritureAction(){
		return $this->render('SiteBundle:vues:nourriture.html.twig');
	}

	public function foyerAction(){
		return $this->render('SiteBundle:vues:foyer.html.twig');
	}
	
	public function justiceAction(){
		return $this->render('SiteBundle:vues:justice.html.twig');
	}
	
	public function alertesAction(){
		return $this->render('SiteBundle:vues:alertes.html.twig');
	}
	
}