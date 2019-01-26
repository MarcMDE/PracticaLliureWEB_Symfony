<?php
/**
 * Created by PhpStorm.
 * User: raque
 * Date: 13/11/2018
 * Time: 20:37
 */

namespace App\Controller;
use App\Entity\Productes;
use App\Entity\Usuaris;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user/sign/{login}", name="user_sign")
     */
    public function Sign($login)
    {
        $rep = $this
                ->getDoctrine()
                ->getRepository(Categories::class);

            $categories = $rep->findAllNotEmpty();


        return $this->render('user/index.html.twig', [
            'categories' => $categories,
            'login' => $login

        ]);
    }

    /**
     * @Route("/user/Register/", methods={"POST"}, name="user_register")
     */
    public function Register(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $encoder)
    {
        // TODO: Guardar foto a servidor i guardar nom foto a new User

        $formData = $request->request->all();

        $newUser = new Usuaris();
        $newUser->setNom($formData['Nom']);
        $newUser->setCognoms($formData['Cognoms']);
        $newUser->setTelefon($formData['Telf']);
        $newUser->setDireccio($formData['Direccio']);
        $newUser->setLocalitat($formData['Localitat']);
        $newUser->setCodiPostal($formData['CP']);
        $newUser->setPais($formData['Pais']);
        $newUser->setEmail($formData['Email']);
        $newUser->setRebreMails($formData['RebreMails']);

        $time = new \DateTime();
        $time->format('H:i:s \O\n Y-m-d');

        $newUser->setDataCreacio($time);
        $newUser->setEstat(0);

        $encodedPsw = $encoder->encodePassword($newUser, $formData['Psw']);
        $newUser->setPassword($encodedPsw);

        $em->persist($newUser);
        $em->flush();

        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $categories = $rep->findAllNotEmpty();

        return $this->render('user/register.html.twig', [
            'categories' => $categories

        ]);
    }
}