<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 10/11/2018
 * Time: 10:31
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Shop extends AbstractController
{
    /**
     * @Route("/shop/")
     */
    public function Index()
    {
        //return new Response("OMG! It works!");

        $exempleArr = ["Hola1", "Hola2", "Hola3"];

        return $this->render('shop/index.html.twig', [
            'title' => "SD&B",
            'arr' => $exempleArr
        ]);
    }

}