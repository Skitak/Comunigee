<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Bilan;

class LoadBilanData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    for ($i = 0 ;  $i < 3 ; $i++) {
      $bilan = new Bilan;
      $bilan->setNote(0);
      $session = $this->getReference('session' . $i);
	  $bilan->setSession( $session );
	  $session->setBilan($bilan);
      $manager->persist($bilan);
	  $this->addReference('bilan' . $i, $bilan);
    }

    $manager->flush();
  }
  
   public function getOrder()
    {
        return 8;
    }
}