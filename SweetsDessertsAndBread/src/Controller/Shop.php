<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 10/11/2018
 * Time: 10:31
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Shop extends AbstractController
{
    /**
     * @Route("/shop/", name="shop_index")
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

    /**
     * @Route("/shop/detail/{id}", name="shop_detail")
     */
    public function Detail($id)
    {
        return $this->render('shop/detail.html.twig', [
            'id' => $id
        ]);
    }

    // Exemple de resposta Json per a una crida Ajax
    /**
     * @Route("/shop/AjaxResp/", methods={"POST"})
     */
    public function AjaxResp()
    {
        return JsonResponse::create(['nom_var' => rand(5,100)]);
    }

}