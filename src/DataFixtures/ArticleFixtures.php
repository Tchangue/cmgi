<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i <= 10; $i++){
        	$article = new Article();
        	$article->setTitle("Le Clasico");
	        $article->setContent("<p>Le clasico est un match legendaire, le plus populaire du monde opposant les deux equipes les plus performantews du monde a savoir le fc Barcelone et le real Madrid.</p>");
	        $article->setCreatedAt(new \DateTime());
	        $article->setImage("https://via.placeholder.com/350x150");
	        $article->setCategory("Sport");
	        $article->setAuthor("mauricej");

	        $manager->persist($article);
        }

        $manager->flush();
    }
}
