<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.dNueS8f' shared service.

return $this->privates['.service_locator.dNueS8f'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('repo' => function (): \App\Repository\ArticleRepository {
    return ($this->privates['App\Repository\ArticleRepository'] ?? $this->load('getArticleRepositoryService.php'));
}));
