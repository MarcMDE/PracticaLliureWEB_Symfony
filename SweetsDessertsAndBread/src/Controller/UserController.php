<?php
/**
 * Created by PhpStorm.
 * User: raque
 * Date: 13/11/2018
 * Time: 20:37
 */

namespace App\Controller;
use App\Entity\Productes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @Route("/user/", name="user_index")
     */
    public function Index()
    {
        $rep = $this
                ->getDoctrine()
                ->getRepository(Categories::class);

            $categories = $rep->findAllNotEmpty();


        return $this->render('user/index.html.twig', [
            'categories' => $categories

        ]);
    }
}