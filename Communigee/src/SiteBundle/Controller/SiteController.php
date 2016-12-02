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
<<<<<<< HEAD
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listNourriture = $this->findByNourriture(true);
		return $this->render('SiteBundle:vues:nourriture.html.twig', ['listeInfos' => $listNourriture]);
=======
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:nourriture.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:nourriture_refugee.html.twig');
		}
		
>>>>>>> 99c111372b013aef006f233512fdeebd6346c94e
	}
	public function foyerAction(){
<<<<<<< HEAD
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listFoyer = $this->findByLit(true);
		return $this->render('SiteBundle:vues:foyer.html.twig', ['listeInfos' => $listFoyer]);
=======
		if($this->get('security.authorization_checker')->isGranted('ROLE_AH')){
				return $this->render('SiteBundle:vues:foyer.html.twig');
		}
		else{
			return $this->render('SiteBundle:vues:foyer_refugee.html.twig');
		}
>>>>>>> 99c111372b013aef006f233512fdeebd6346c94e
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
	
<<<<<<< HEAD
}
=======
}
 
>>>>>>> 10240e6ae6e431cf079aa1d18215f781cd6f0a9b
