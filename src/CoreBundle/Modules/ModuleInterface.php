<?php

namespace Minimal\CoreBundle\Modules;

use Minimal\CoreBundle\Entity\EntityRoutedInterface;

interface ModuleInterface{

  public function getName();

  public function getTitle();

  public function getDescription();

  public function getEntityClass();

  public function getFormTypeClass();

}
