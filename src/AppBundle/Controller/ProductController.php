<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/product")
     * @return Response
     */
    public function productAction()
    {
        $product = new Product();
        $product->setName('Manasa');
        $product->setPrice(100);
        $product->setDescription('description');
        $product->setAdditionalProperties('additional_properties');
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($product);
        $em->flush();
        
        return new Response('Created product id '.$product->getId());
    }
    
    /**
     * @Route("/product/{id}")
     * @return Response
     */
    public function showAction($id)
    {
        $product = $this->getDoctrine()
                        ->getRepository('AppBundle:Product')
                        ->find($id);
        
        return $this->render('default/product.html.twig',
                array('product' => $product));
    }
    
    /**
     * @Route("/update/product/{id}")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')
                        ->find($id);
        
        $product->setName('Unknown');
        $em->flush();
        
        return $this->render('default/product.html.twig',
                array('product' => $product));
    }
    
    /**
     *  @Route("/name/product")
     */
    public function showNameAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')
                       ->findOrderByName();
        
        return $this->render('default/product.html.twig',
                array('product' => $products));
        
    }
}