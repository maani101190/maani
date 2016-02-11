<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * @Route("/lucky")
     */
    public function luckyAction()
    {
        //returning random number between 0 and 100
        $number = rand(0, 100);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
    /**
     * @Route("/api/number")
     */
    public function apiNumberAction()
    {
        //returning random number between 0 and 100 with json response
        $data = array(
            'number' => rand(20,100)
        );
        
        return new Response(
                json_encode($data),
                200,
                array('Content-type' => 'application/json')
                );
        
        //return new JsonResponse($data);
    }
    
    /**
     * @Route("/placeholder/{number}")
     */
    public function placeHolderAction($number)
    {
        //printing the number based on the placeholder value created in route
        return new Response($number);
    }
}
