<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.hBT203u' shared service.

return $this->privates['.service_locator.hBT203u'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'encoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'));
}));
