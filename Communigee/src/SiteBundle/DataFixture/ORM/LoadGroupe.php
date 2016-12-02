<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Groupe;

class LoadGroupeData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listNames = array(101, 102, 103);
	
    for ($i = 0 ; $i < 3 ; $i++) {
      $groupe = new Groupe;
      $groupe->setValeur( $listNames[$i] );
	  $groupe->setPromotion($this->getReference('promotion' . $i));
      $manager->persist($groupe);
	  $this->addReference('groupe' . $i , $groupe);
    }
    $manager->flush();
  }
  
	public function getOrder()
    {
        return 2;
    }
}