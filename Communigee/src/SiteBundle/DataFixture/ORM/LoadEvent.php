<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Particulier;
use SiteBundle\Entity\Evenement;

class LoadEvent extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

	$listNomEvent = array('Collecte', 'Don');
	//$listPseudo = array('Papata', 'Babar');
	$listLieuEvent = array('Paris', 'Marseille');
	$listDate = array('29/05/1997', '25/04/2016');
    for ($i = 0 ;  $i < 2 ; $i++) {
      $evenement = new Evenement;
      $evenement->setNomEvent($listNomEvent[$i]);
	  $particulier = $this->getReference('Particulier' . $i);
	  $evenement->setParticulier($particulier);
	  $evenement->setLieuEvent($listLieuEvent[$i]);
	  $evenement->setDateEvent($listDate[$i]);
      $manager->persist($evenement);
	  //$this->addReference('evenement' . $i, $evenement);
    }

    $manager->flush();
  }
   public function getOrder()
    {
        return 5;
    }
}