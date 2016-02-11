<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RelationshipMappingController extends Controller
{
    /**
     * @Route("/category")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categoryAction()
    {
        $category = new Category();
        $category->setName('Category');
        
        $product = new Product();
        $product->setName('Product');
        $product->setPrice('100');
        $product->setDescription('Description');
        
        $product->setCategory($category);
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($product);
        $em->persist($category);
        
        $em->flush();     
       
        return new Response(            
             'Created product id: '.$product->getId()
            .' and category id: '.$category->getId()
        );
    }
}
