<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function hygieneAction()
    {
        return $this->render('SiteBundle:vues:hygiene.html.twig');
    }
	
	public function santeAction(){
		return $this->render('SiteBundle:vues:sante.html.twig');
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