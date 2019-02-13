<?php

namespace App\Form;
use App\Entity\Group;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('image')
            ->add('category')
	        ->add('family',EntityType::class,[
	        	'class' => Group::class,
		        'choice_label' => 'title'
	        ])
            ->add('author')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
