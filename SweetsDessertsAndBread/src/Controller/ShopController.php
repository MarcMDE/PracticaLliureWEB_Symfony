<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 13/11/2018
 * Time: 20:38
 */

namespace App\Controller;
use App\Entity\Productes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop/{id}", name="shop_index")
     */
    public function Index($id)
    {
        // id = ID Catergoria
        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        if ($id == -1)
        {
            $nomCategoriaActual = "Tots els productes";
        }
        else
        {
            $nomCategoriaActual = $rep->find($id)->getNom();
        }

        $categories = $rep->findAllNotEmpty();

        $rep = $this
            ->getDoctrine()
            ->getRepository(Productes::class);

        if ($id == -1)
        {
            $productes = $rep->findActive();
        }
        else
        {
            $productes = $rep->findActiveByCategoryId($id);
        }

        return $this->render('shop/index.html.twig', [
            'title' => $nomCategoriaActual,
            'categories' => $categories,
            'productes' => $productes
        ]);
    }

    /**
     * @Route("/shop/detail/{id}", name="shop_detail")
     */
    public function Detail($id)
    {
        $rep = $this
                ->getDoctrine()
                ->getRepository(Categories::class);

        $categories = $rep->findAllNotEmpty();

        $rep = $this
                ->getDoctrine()
                ->getRepository(Productes::class);

        $producte = $rep->findActiveBy($id);

        return $this->render('shop/detail.html.twig', [
            'id' => $id,
            'categories' => $categories,
            'producte' => $producte
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

    /**
     * @Route("/shop/bag/{id}", name="shop_bag")
     */
    public function Bag($id)
    {
        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $categories = $rep->findAllNotEmpty();

        $rep = $this
            ->getDoctrine()
            ->getRepository(Productes::class);

        $producte = $rep->findActiveBy($id);

        return $this->render('shop/bag.html.twig', [
            'id' => $id,
            'categories' => $categories,
            'producte' => $producte
        ]);
    }


}