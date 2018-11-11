<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 10/11/2018
 * Time: 10:31
 */

namespace App\Controller;
use App\Entity\Productes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;

class Shop extends AbstractController
{
    private $DB = false;
    /**
     * @Route("/shop/", name="shop_index")
     */
    public function Index()
    {

        if(!$this->DB)
        {
            $categories = array(new Categories(), new Categories(), new Categories(), new Categories(), new Categories(), new Categories(), new Categories());
            $categories[0]->setNom("Braç de Gitano");
            $categories[1]->setNom("Flams");
            $categories[2]->setNom("Galetes");
            $categories[3]->setNom("Magdalenes");
            $categories[4]->setNom("Mousse");
            $categories[5]->setNom("Pastissos");
            $categories[6]->setNom("Pa i Bastonets");

            $productes = array(new Productes(), new Productes());
        }
        else
        {
            $rep = $this
                ->getDoctrine()
                ->getRepository(Categories::class);

            $categories = $rep->findAll();

            $rep = $this
                ->getDoctrine()
                ->getRepository(Productes::class);

            $productes = $rep->findAll();
        }

        return $this->render('shop/index.html.twig', [
            'title' => "SD&B",
            'categories' => $categories,
            'productes' => $productes
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