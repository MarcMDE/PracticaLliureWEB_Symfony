<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 13/11/2018
 * Time: 20:38
 */

namespace App\Controller;
use App\Entity\Comandes;
use App\Entity\ComandaProductes;
use App\Entity\Productes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ShopController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/shop/shop/{id}", name="shop_index")
     */
    public function Index($id)
    {
        // id = ID Catergoria
        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();
        foreach ($cistellMostraArr as $text)
        {
            array_push($cistellIndexArr, $text);
        }

        if ($id == -1)
        {
            $nomCategoriaActual = "Tots els productes";
        }
        else if($id == -2)
        {
            $nomCategoriaActual = "Productes en Promoció";
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
        else if ($id == -2)
        {
            $productes = $rep->findEnPromocio($id);
        }
        else
        {
            $productes = $rep->findActiveByCategoryId($id);
        }

        return $this->render('shop/index.html.twig', [
            'title' => $nomCategoriaActual,
            'categories' => $categories,
            'productes' => $productes,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal
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

        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();
        foreach ($cistellMostraArr as $text)
        {
            array_push($cistellIndexArr, $text);
        }

        $categories = $rep->findAllNotEmpty();

        $rep = $this
                ->getDoctrine()
                ->getRepository(Productes::class);

        $producte = $rep->findActiveBy($id);

        return $this->render('shop/detail.html.twig', [
            'id' => $id,
            'categories' => $categories,
            'producte' => $producte,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal
        ]);
    }

    /**
     * @Route("/shop/bag/", name="shop_bag")
     */
    public function Bag()
    {
        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();
        $cistellIndexArrIds = array();
        foreach ($cistellMostraArr as $key => $text)
        {
            array_push($cistellIndexArr, $text);
            array_push($cistellIndexArrIds, $key);
        }

        $categories = $rep->findAllNotEmpty();

        $cistellArr = $this->session->get('cistell', []);

       /* $rep = $this
            ->getDoctrine()
            ->getRepository(Productes::class);*/

       /* $producte = $rep->findActiveBy($id); */

        return $this->render('shop/bag.html.twig', [
            'categories' => $categories,
            'producte' => 1,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal,
            'cistellIds' => $cistellIndexArrIds
        ]);
    }

    /**
     * @Route("/shop/compra/", name="shop_compra")
     */
    public function Compra(EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $cistellArr = $this->session->get('cistell', []);
        if (count($cistellArr) > 0)
        {
            $user=$this->getUser();
            $novaComanda = new Comandes();


            $novaComanda->setUsuari($user);
            $novaComanda->setEstat("pagat");

            $time = new \DateTime();
            $time->format('H:i:s \O\n Y-m-d');

            $novaComanda->setDataCreacio($time);
            $em->persist($novaComanda);

            $prodsRep = $this
                ->getDoctrine()
                ->getRepository(Productes::class);

            foreach ($cistellArr as $id => $quant)
            {
                $producte = $prodsRep->findActiveBy($id);

                if ($producte != null)
                {
                    $comandaProd = new ComandaProductes();

                    $comandaProd->setComanda($novaComanda);
                    $comandaProd->setPreu($producte->getPreuActual() * $quant);
                    $comandaProd->setUnitats($quant);
                    $comandaProd->setProducte($producte);

                    $em->persist($comandaProd);
                }
            }

            $em->flush();

            $this->session->remove('cistell');
            $this->session->remove('cistellPreu');
            $this->session->remove('cistellMostra');
        }

        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();

        foreach ($cistellMostraArr as $text)
        {
            array_push($cistellIndexArr, $text);
        }

        $categories = $rep->findAllNotEmpty();

        /* $rep = $this
             ->getDoctrine()
             ->getRepository(Productes::class);*/

        /* $producte = $rep->findActiveBy($id); */

        return $this->render('shop/compra.html.twig', [
            'categories' => $categories,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal
        ]);
    }

    /**
     * @Route("/shop/AfegirAlCistell/", name="shop_afegircistell", methods={"POST"})
     */
    public function AfegirAlCistell(Request $request)
    {
        $rep = $this
            ->getDoctrine()
            ->getRepository(Productes::class);

        $data = $request->request->all();

        $id = $data['id'];
        $quant = $data['quant'];

        $nouProducte = $rep->find($id);

        if ($nouProducte != null)
        {
            $preu = $nouProducte->getPreuActual();

            $cistellArr = $this->session->get('cistell', []);

            $preuTotal = $this->session->get('cistellPreu', 0);
            $preuTotal += $quant * $preu;
            $this->session->set('cistellPreu', $preuTotal);

            if (array_key_exists($id, $cistellArr))
            {
                $quant += $cistellArr[$id];
            }

            $cistellArr[$id] = $quant;

            $this->session->set('cistell', $cistellArr);

            $cistellMostraArr = $this->session->get('cistellMostra', []);
            $cistellMostraArr[$id] = $nouProducte->getNom() . " (x" . $quant . ") - " . $quant * $preu . " €";

            $this->session->set('cistellMostra', $cistellMostraArr);

            /*
            $preuTotal = 0;
            foreach ($cistellArr as $val)
            {
                $preuTotal = $preuTotal + $val;
            }
            */

            $cistellIndexArr = array();

            foreach ($cistellMostraArr as $text)
            {
               array_push($cistellIndexArr, $text);
            }

            return JsonResponse::create(['correct' => true, 'cistell' => $cistellIndexArr, 'cistellTotal' => $preuTotal]);
        }
        else
        {
            return JsonResponse::create(['correct' => false]);
        }

    }

    /**
     * @Route("/shop/BuidarCistell/", name="shop_buidarcistell", methods={"POST"})
     */
    public function BuidarCistell()
    {
        $this->session->remove('cistell');
        $this->session->remove('cistellPreu');
        $this->session->remove('cistellMostra');

        return JsonResponse::create(['correct' => true, 'cistell' => array(), 'cistellTotal' => array()]);
    }
}