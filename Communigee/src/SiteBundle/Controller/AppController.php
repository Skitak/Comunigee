<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function hygieneAction()
    {
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listHygiene = $this->findByType('hygiene');

        return $this->render('SiteBundle:vues:hygiene.html.twig', array('listeInfos' => $listHygiene));
    }
	
	public function santeAction()
	{
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listSante = $this->findByType('sante');
		return $this->render('SiteBundle:vues:sante.html.twig', array('listeInfos' => $listSante));
	}

	public function communicationAction(){
    	$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('SiteBundle:Info');

		$listComm = $this->findByType('communication');
		return $this->render('SiteBundle:vues:communication.html.twig', array('listeInfos' => $listComm));
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