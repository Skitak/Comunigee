<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Evenement');
		$listEvent = $repository->findAll();
        return $this->render('SiteBundle:vues:index.html.twig', array('events' => $listEvent));
    }
	
	public function nourritureAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listNourriture = $this->findByNourriture(true);
		return $this->render('SiteBundle:vues:nourriture.html.twig', ['listeInfos' => $listNourriture]);
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:nourriture.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:nourriture_refugee.html.twig');
		}
		
	}
	public function foyerAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listFoyer = $this->findByLit(true);
		return $this->render('SiteBundle:vues:foyer.html.twig', ['listeInfos' => $listFoyer]);
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:foyer.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:foyer_refugee.html.twig');
		}
	}
	
	public function justiceAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listJustice = $this->findByJustice(true);
		return $this->render('SiteBundle:vues:justice.html.twig', ['listeInfos' => $listJustice]);
	}
	
	public function alertesAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Centre');

		$listAlerte = $this->findByAlerte(true);
		return $this->render('SiteBundle:vues:alertes.html.twig', ['listeInfos' => $listAlerte]);
	}
}
