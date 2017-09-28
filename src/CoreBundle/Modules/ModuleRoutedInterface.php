<?php

namespace Minimal\CoreBundle\Modules;

use Minimal\CoreBundle\Entity\EntityRoutedInterface;

interface ModuleRoutedInterface{

  public function getShowRoute();

  public function getShowRouteParams(EntityRoutedInterface $entity);

  public function getShowController();

  public function getShowControllerParams(EntityRoutedInterface $entity);

}
