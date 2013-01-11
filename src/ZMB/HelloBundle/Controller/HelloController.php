<?php

namespace ZMB\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZMBHelloBundle:Hello:index.html.twig', array('name' => $name));
    }
}
