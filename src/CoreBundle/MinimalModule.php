<?php

namespace Minimal\CoreBundle;

use Minimal\CoreBundle\Modules\ModuleInterface;

use Minimal\CoreBundle\Form\AppType;
use Minimal\CoreBundle\Entity\App;

class MinimalModule implements ModuleInterface{

  public function getName(){
    return 'core';
  }

  public function getTitle(){
    return "Paramètres";
  }

  public function getDescription(){
    return "Paramétrez votre site.";
  }

  public function getEntityClass(){
    return App::class;
  }

  public function getFormTypeClass(){
    return AppType::class;
  }

}
