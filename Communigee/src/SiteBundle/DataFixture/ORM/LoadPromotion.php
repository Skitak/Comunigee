<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Promotion;

class LoadPromotionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listNames = array('Info', 'Com', 'GEA');
    for ($i = 0 ; $i < 3 ; $i++) {
      $promotion = new Promotion;
      $promotion->setValeur($listNames[$i]);
      $manager->persist($promotion);
	  $this->addReference('promotion' . $i , $promotion);
    }

    $manager->flush();
	
	
  }
  
   public function getOrder()
    {
        return 1;
    }
}