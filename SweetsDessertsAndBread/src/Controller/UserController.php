<?php
/**
 * Created by PhpStorm.
 * User: raque
 * Date: 13/11/2018
 * Time: 20:37
 */

namespace App\Controller;
use App\Entity\Productes;
use App\Entity\Comandes;
use App\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categories;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/user/sign/{login}", name="user_sign")
     */
    public function Sign(AuthenticationUtils $authenticationUtils, $login): Response
    {
        /*
        if (login == 1)
        {
            // LOGIN
        }
        else
        {
            // REGISTER
        }
        */

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

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('user/index.html.twig', [
            'categories' => $categories,
            'login' => $login,
            'last_username' => $lastUsername,
            'error' => $error,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal
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

        $newUser->setRoles(["ROLE_USER"]);

        $em->persist($newUser);
        $em->flush();

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

        return $this->render('user/register.html.twig', [
            'categories' => $categories,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal

        ]);
    }

    /**
     * @Route("/user/edit/", name="user_edit")
     */
    public function Edit()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user=$this->getUser();

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

        return $this->render('user/edit.html.twig', [
            'categories' => $categories,
            'Nom' => $user->getNom(),
            'Cognoms' => $user->getCognoms(),
            'Telefon' => $user->getTelefon(),
            'Adreca' => $user->getDireccio(),
            'Ciutat_Poble' => $user->getLocalitat(),
            'CodiPostal' => $user->getCodiPostal(),
            'Pais' => $user->getPais(),
            'Email' => $user->getEmail(),
            'Foto' => $user->getArxiuFoto(),
            'RebreMail' => $user->getRebreMails(),
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal
        ]);
    }

    /**
     * @Route("/user/AplyEdit/", methods={"POST"}, name="user_aplyedit")
     */
    public function AplyEdit(EntityManagerInterface $em, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user=$this->getUser();

        $formData = $request->request->all();

        $user->setNom($formData['Nom']);
        $user->setCognoms($formData['Cognoms']);
        $user->setTelefon($formData['Telefon']);
        $user->setDireccio($formData['Adreca']);
        $user->setLocalitat($formData['Ciutat_Poble']);
        $user->setCodiPostal($formData['CodiPostal']);
        $user->setPais($formData['Pais']);
        $user->setEmail($formData['Email']);
        $user->setRebreMails($formData['RebreMail']);

        $em->flush();

        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);
        $categories = $rep->findAllNotEmpty();

        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();
        foreach ($cistellMostraArr as $text)
        {
            array_push($cistellIndexArr, $text);
        }

        return $this->render('user/aplyedit.html.twig', [
            'categories' => $categories,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal,
        ]);
    }

    /**
     * @Route("/user/comandes/", name="user_comandes")
     */
    public function Comandes()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $rep = $this
            ->getDoctrine()
            ->getRepository(Categories::class);

        $repComandes = $this
            ->getDoctrine()
            ->getRepository(Comandes::class);

        $user=$this->getUser();
        $comandes = $repComandes->findByUser($user);

        $arrComandes = array();
        $i = 1;

        foreach ($comandes as $c)
        {
            array_push($arrComandes, "Comanda " . $i . "   =>    Data creació: " . $c->getDataCreacio()->format('d-m-Y') . ";           Total: " . $c->getTotalComanda() . " €");
            $i++;
        }


        $cistellMostraArr = $this->session->get('cistellMostra', []);
        $preuTotal = $this->session->get('cistellPreu', 0);
        $cistellIndexArr = array();
        foreach ($cistellMostraArr as $text)
        {
            array_push($cistellIndexArr, $text);
        }

        $categories = $rep->findAllNotEmpty();

        return $this->render('user/comandes.html.twig', [
            'categories' => $categories,
            'cistell' => $cistellIndexArr,
            'cistellTotal' => $preuTotal,
            'comandes' => $arrComandes

        ]);
    }

    /**
     * @Route("/shop/validateemail", name="shop_vemail", methods={"POST"})
     */
    public function ValidateEmail(Request $request)
    {
        $emailData = $request->request->all();

        $email = $emailData['email'];

        $rep = $this
            ->getDoctrine()
            ->getRepository(Usuaris::class);

        $any = count($rep->findByEmail($email)) > 0;

        if ($any == false)
        {
            return JsonResponse::create(['correct' => true]);
        }
        else
        {
            return JsonResponse::create(['correct' => false]);
        }
    }
}