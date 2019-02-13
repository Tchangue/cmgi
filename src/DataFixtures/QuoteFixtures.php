<?php

namespace App\DataFixtures;

use App\Entity\Quote;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuoteFixtures extends Fixture
{

	public function load(ObjectManager $manager)
	{
		$quotes = [
			(new Quote())->setContent('Dans la vie on ne fait pas ce que l\'on veut mais on est responsable de ce que l\'on est.')->setAuthor('Jean-Paul Sartre'),
			(new Quote())->setContent('On passe une moitié de sa vie à attendre ceux qu\'on aimera et l\'autre moitié à quitter ceux qu\'on aime.')->setAuthor('Victor Hugo'),
			(new Quote())->setContent('Pour critiquer les gens il faut les connaître, et pour les connaître, il faut les aimer.')->setAuthor('Coluche'),
			(new Quote())->setContent('Il ne faut avoir aucun regret pour le passé, aucun remords pour le présent, et une confiance inébranlable pour l\'avenir.')->setAuthor('Jean Jaurès'),
			(new Quote())->setContent('Un sourire coûte moins cher que l\'électricité, mais donne autant de lumière.')->setAuthor('Abbé Pierre'),
			(new Quote())->setContent('Un seul être vous manque et tout est dépeuplé.')->setAuthor('Lamartine'),
		];

		for($i = 0; $i < count($quotes); $i++){
			$manager->persist($quotes[$i]);
		}

		// $product = new Product();
		// $manager->persist($product);

		$manager->flush();
	}
}
