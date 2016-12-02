<?php
namespace PwebBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PwebBundle\Entity\Question;

class LoadQuestionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listValeur = array('Est-ce vrai?', 'Pourquoi?', 'Est-ce clair?');
	$listQuestion = array();
    for ($i = 0 ;  $i < 3 ; $i++) {
      $question = new Question;
      $question->setText($listValeur[$i]);
	  $question->setTitre('Question ' . $i);
	  $question->setQCM($this->getReference('QCM' . $i));
      $manager->persist($question);
	  $this->addReference('question' . $i, $question);
    }

    $manager->flush();
  }
   public function getOrder()
    {
        return 5;
    }
}