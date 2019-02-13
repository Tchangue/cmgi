<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.SS3N0Sl' shared service.

return $this->privates['.service_locator.SS3N0Sl'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('article' => function (): \App\Entity\Article {
    return ($this->privates['.errored..service_locator.SS3N0Sl.App\Entity\Article'] ?? $this->load('getArticleService.php'));
}, 'articleRepo' => function (): \App\Repository\ArticleRepository {
    return ($this->privates['App\Repository\ArticleRepository'] ?? $this->load('getArticleRepositoryService.php'));
}, 'em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'quoteRepo' => function (): \App\Repository\QuoteRepository {
    return ($this->privates['App\Repository\QuoteRepository'] ?? $this->load('getQuoteRepositoryService.php'));
}, 'widgetRepo' => function (): \App\Repository\WidgetRepository {
    return ($this->privates['App\Repository\WidgetRepository'] ?? $this->load('getWidgetRepositoryService.php'));
}));
