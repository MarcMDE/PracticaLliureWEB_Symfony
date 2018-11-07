<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 27/10/2018
 * Time: 21:10
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/products/detail")
     * @
     */
    public function detail()
    {
        //return new Response("OMG a detail pg" + $id);
        return $this->render('products/index.html.twig',
            ['title' => "Sweets", 'producte' => "pastissets"]);
    }
}