<?php

namespace Minimal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('MinimalCoreBundle::index.html.twig');
    }
}
