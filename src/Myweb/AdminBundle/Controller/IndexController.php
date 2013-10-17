<?php

namespace Myweb\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function loginAction()
    {
        return  $this->render('MywebAdminBundle:Index:login.html.twig');
    }
}
