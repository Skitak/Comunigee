<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Resultat;

class LoadResultatData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

     for ($i = 0;  $i < 3 ; $i++) {
      $resultat = new Resultat;
      $resultat->setBilan($this->getReference('bilan' . $i));
      $resultat->setEleve( $this->getReference('eleve' . $i) );
	  $resultat->setQuestion($this->getReference('question' . $i));
	  $resultat->setReponse($this->getReference('reponse' . $i));
      $manager->persist($resultat);
    }

    $manager->flush();
  }
  
   public function getOrder()
    {
        return 9;
    }
}