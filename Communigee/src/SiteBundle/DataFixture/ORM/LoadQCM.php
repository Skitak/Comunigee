<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\QCM;

class LoadQCMData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listValeur = array('Pweb', 'SGBD', 'EC');
    for ($i = 0 ; $i < 3 ; $i++) {
      $QCM = new QCM;
      $QCM->setTheme($listValeur[$i]);
      $manager->persist($QCM);
	  $this->addReference('QCM' . $i , $QCM);
    }

    $manager->flush();
  }
  
   public function getOrder()
    {
        return 4;
    }
}