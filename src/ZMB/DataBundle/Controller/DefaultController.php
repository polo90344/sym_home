<?php

namespace ZMB\DataBundle\Controller;

use ZMB\DataBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZMBDataBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        
        return new Response('Created product id '.$product->getId());
    }
    
    public function showAction()
    {
        $repository = $this->getDoctrine()->getRepository('ZMBDataBundle:Product');
        
        $product = $repository->findAll();
        
        return $this->render('ZMBDataBundle:Default:show.html.twig', array('product' => $product));
    }
    
    
}
