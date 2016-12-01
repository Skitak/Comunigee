<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Site:index.html.twig');
    }
	
	public function nourritureAction(){
		return $this->render('SiteBundle:vues:nourriture.html.twig');
	}

}
