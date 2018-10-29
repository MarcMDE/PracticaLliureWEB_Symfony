<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 27/10/2018
 * Time: 21:10
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductsController
{
    /**
     * @Route("/products")
     */
    public function index()
    {
        return new Response("OMG My first page");
    }

    /**
     * @Route("/products/{slug}")
     */
    public function detail()
    {
        return new Response("OMG a detail pg");
    }
}