<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 10/11/2018
 * Time: 10:31
 */

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Shop
{
    /**
     * @Route("/shop/")
     */
    public function Index()
    {
        return new Response("OMG! It works!");
    }

}