<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Quote;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\QuoteRepository;
use App\Repository\WidgetRepository;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  App\Entity\Article;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\Textarea;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class ArticleController extends Controller
{


	/**
	 * @Route("/", name="articles")
	 */
	public function index(ArticleRepository $articleRepo, WidgetRepository $widgetRepo, QuoteRepository $quoteRepo)
	{
		$articles = $articleRepo->findAll();
		$widgets  = $widgetRepo->findAll();
		$quotes   = $quoteRepo->findAll();

		$footerTexts = [
			'_fr' => 'Ce site est une plateforme interactive à travers laquelle vous pouvez toujours non seulement avoir accès à toute l\'actualité internationale mais aussi créer vos propres articles afin d\'informer les autres visiteurs sur les dernières nouvelles qui animent la société.'
		];

		shuffle($quotes);


		$channels = [
			'youtube'        => 'https://www.youtube.com/channel/UCMeXDnejOpym3s-tqv0cLQA?view_as=subscriber',
			'twitterProfile' => 'https://twitter.com/Maurice64341103'
		];


		return $this->render('article/index.html.twig', [
			'title'          => 'JuniorBlog',
			'articles'       => $articles,
			'widgets'        => $widgets,
			'quotes'         => $quotes,
			'youtubeChannel' => $channels['youtube'],
			'twitterProfile' => $channels['twitterProfile'],
			'footerText'     => $footerTexts['_fr']
		]);
	}

	/**
	 * @Route("/article/new", name="article_create")
	 * @Route("/article/{title}/edit", name="article_update")
	 */
	public function createOrUpdate(Article $article = null, Request $request, ObjectManager $objectManager)
	{

		if (!$article)
		{
			$article = new Article();
		}

		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			if (!$article->getId())
			{
				$article->setCreatedAt(new \DateTime());

			}

			$objectManager->persist($article);
			$objectManager->flush();

			return $this->redirectToRoute('article_show', [
				'title' => $article->getTitle()
			]);
		}


		return $this->render('article/createOrUpdate.html.twig', [
			'formArticle' => $form->createView(),
			'article'     => $article,
			'editMode'    => $article->getId() !== null

		]);
	}


	/**
	 * @Route("/article/{title}", name="article_show")
	 */
	public
	function show(Article $article,
	              ObjectManager $em, ArticleRepository $articleRepo,
	              WidgetRepository $widgetRepo,
	              QuoteRepository $quoteRepo,
	              Request $request)
	{
		$comment = new Comment();


		$form = $this->createForm(CommentType::class, $comment);

		$form->handleRequest($request);
		$articles = $articleRepo->findAll();
		$widgets  = $widgetRepo->findAll();
		$quotes   = $quoteRepo->findAll();

		$channels = [
			'youtube'        => 'https://www.youtube.com/channel/UCMeXDnejOpym3s-tqv0cLQA?view_as=subscriber',
			'twitterProfile' => 'https://twitter.com/Maurice64341103'
		];

		$footerTexts = [
			'_fr' => 'Ce site est une plateforme interactive à travers laquelle vous pouvez toujours non seulement avoir accès à toute l\'actualité internationale mais aussi créer vos propres articles afin d\'informer les autres visiteurs sur les dernières nouvelles qui animent la société.'
		];

		if ($form->isSubmitted() && $form->isValid())
		{
			$comment->setCreatedAt(new \DateTime());
			$comment->setArticle($article);
			$em->persist($comment);
			$em->flush();

			return $this->redirectToRoute('article_show', [
				'title' => $article->getTitle()
			]);
		}

		return $this->render('article/show.html.twig', [
			'article'     => $article,
			'commentForm' => $form->createView(),
			'footerText'  => $footerTexts['_fr'],
			'widgets'     => $widgets,
			'quotes'      => $quotes,
			'articles'    => $articles,
			'youtubeChannel' => $channels['youtube'],
			'twitterProfile' => $channels['twitterProfile']
		]);
	}


	/*public function nextQuote($quotes = array(Quote::class)){
		$nextQuote = array_rand($quotes,1);

		return $this->render('article/index.html.twig',[
			'nextQuote' => $nextQuote
		]);
	}*/


}
