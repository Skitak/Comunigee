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
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listNourriture = $this->findByNourriture(true);
		return $this->render('SiteBundle:vues:nourriture.html.twig', ['listeInfos' => $listNourriture]);
	}

	public function foyerAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listFoyer = $this->findByLit(true);
		return $this->render('SiteBundle:vues:foyer.html.twig', ['listeInfos' => $listFoyer]);
	}
	
	public function justiceAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listJustice = $this->findByJustice(true);
		return $this->render('SiteBundle:vues:justice.html.twig', ['listeInfos' => $listJustice]);
	}
	
	public function alertesAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listAlerte = $this->findByAlerte(true);
		return $this->render('SiteBundle:vues:alertes.html.twig', ['listeInfos' => $listAlerte]);
	}
	
}
 