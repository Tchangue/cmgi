<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Group;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;


class ArticleFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$faker = Factory::create('fr_FR');

		// Creer 3 categories fakees

		for ($i = 0; $i < 3; $i++)
		{
			$group = new Group();
			$group->setTitle($faker->sentence())
				->setDescription($faker->paragraph());

			$manager->persist($group);

			//Creer entre 4 et 6 articles
			for ($j = 0; $j <= mt_rand(4, 6); $j++)
			{

				$content = '<p>' . join($faker->paragraphs(5), '</p><p>') .
					'</p>';


				$article = new Article();
				$article->setTitle($faker->sentence())
					->setContent($content)
					->setCreatedAt($faker->dateTimeBetween('-6 months'))
					->setImage($faker->imageUrl())
					->setCategory('Politique')
					->setAuthor($faker->name)
					->setFamily($group);


				$manager->persist($article);


				for ($k = 1; $k <= mt_rand(4, 10); $k++)
				{

					//Creer des commentaires pour l'article
					$content = '<p>' . join($faker->paragraphs(2), '</p><p>') .
						'</p>';


					$days = (new \DateTime())->diff($article->getCreatedAt())->days;


					$comment = new Comment();
					$comment->setAuthor($faker->name)
						->setCreatedAt($faker->dateTimeBetween('-' . $days . ' days'))
						->setContent($content)
						->setArticle($article);

					$manager->persist($comment);

				}
			}
		}
		$manager->flush();
	}
}
