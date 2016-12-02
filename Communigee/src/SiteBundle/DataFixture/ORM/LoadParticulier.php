<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Particulier;

class LoadParticulier extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listNom = array('DuBois', 'DuPuit');
	$listPrenom = array('Patrick', 'Baptiste');
	$listMail = array('Patat@hotmail.fr', 'Babapt@hotmail.com');
	$listUserName = array('Papata', 'Babar');
	$listTel = array('0525144587', '0236589417');
	$listPassWord = array('Lulu', 'Pommier');
    for ($i = 0 ;  $i < 2 ; $i++) {
      $particulier = new Particulier;
      $particulier->setNom($listNom[$i]);
	  $particulier->setPrenom($listPrenom[$i]);
	  $particulier->setMail($listMail[$i]);
	  $particulier->setUsername($listUserName[$i]);
	  $particulier->setTel($listTel[$i]);
	  $particulier->setPassword($listPassWord[$i]);
	  $particulier->setSalt(1);
      $manager->persist($particulier);
	  $this->addReference('Particulier' . $i, $particulier);
    }

    $manager->flush();
  }
   public function getOrder()
    {
        return 5;
    }
}