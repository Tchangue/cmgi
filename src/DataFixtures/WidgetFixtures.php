<?php

namespace App\DataFixtures;

use App\Repository\QuoteRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Widget;

class WidgetFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{


		// There must be a translation file for translating expressions when we will want to render the frontend in many
		// languages
		//default language = french
		$widgets = [
			(new Widget())->setTitle('Événements à venir')
				->setContent(''),
			(new Widget())->setTitle('Calendrier')
				->setContent(''),
			(new Widget())->setTitle('Citation aléatoire')
				->setContent(''),
			(new Widget())->setTitle('Commentaires récents')
				->setContent(''),
			(new Widget())->setTitle('Archives')
				->setContent(''),
			(new Widget())->setTitle('Catégories')
				->setContent(''),
			(new Widget())->setTitle('Suivez-moi...')
				->setContent(''),
		];



		for($i = 0; $i < count($widgets); $i++){
			$manager->persist($widgets[$i]);
		}



		// $product = new Product();
		// $manager->persist($product);

		$manager->flush();
	}
}
