<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Session;

class LoadSessionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listValeur = array('Pweb 1', 'SGBD 5', 'EC');

    for ($i = 0 ; $i < 3 ; $i++) {
      $session = new Session;
      $session->setTitre($listValeur[$i]);
	  $session->setProf($this->getReference('prof'));
	  $session->setQCM($this->getReference('QCM' . $i));
      $session->setActive(false);
	  for ($j = 0 ; $j < 3 ; $j++){
		$session->addQuestion($this->getReference('question' . $j));  
	  }
	  for ($j = 0 ; $j < 3 ; $j++){
		$session->addGroupe($this->getReference ('groupe' . $j));  
	  }
      $manager->persist($session);
	  $this->addReference('session' . $i, $session);
    }

    $manager->flush();
  }
  
   public function getOrder()
    {
        return 7;
    }
}