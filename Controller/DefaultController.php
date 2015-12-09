<?php

namespace sempred\facebookbpageapiSymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sempredfacebookbpageapiSymfonyBundle:Default:index.html.twig');
    }
}
