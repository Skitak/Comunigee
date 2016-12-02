<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Reponse;

class LoadReponseData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listValeur = array('Vrai', 'Faux', 'Peut-être');
    for ($i = 0 ; $i < 3 ; $i++) {
      $reponse = new Reponse;
      $reponse->setText($listValeur[$i]);
	  $reponse->setEstValide(true);
	  $reponse->setQuestion($this->getReference('question' . $i));
      $manager->persist($reponse);
	  $this->addReference('reponse' . $i, $reponse);
    }

    $manager->flush();
	
	
  }
  
   public function getOrder()
    {
        return 6;
    }
}