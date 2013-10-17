<?php

namespace Myweb\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
       return $this->render('MywebIndexBundle:Index:index.html.twig');
    }
}
