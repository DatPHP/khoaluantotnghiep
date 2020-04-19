<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 9/26/2018
 * Time: 10:42 AM
 */


namespace App\Controller;



/*use http\Env\Request;*/
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Session\Session;


class AdminLoginController extends AbstractController
{
    /**
     * @Route("/admin/login", name="admin/login")
     *
     */
    public function login (Request $request)
    {
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $form = $formFactory->createBuilder(FormType::class)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('login', SubmitType::class)
            ->getForm();

        $request = Request::createFromGlobals();
        $form->handleRequest($request);
        $error = "";

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $repository = $this->getDoctrine()->getRepository(Users::class);
            $user = $repository->findOneBy([
                'username' => $formData["username"],
                'password' => $formData["password"],
            ]);


            if(!empty($user) && ($user->role == 'admin')) {

                //tao session
                $session = new Session();
                $session->set('user_id', $user->getId());


                return $this->redirectToRoute('admin');
            } else {
                $error = 'Invalid email or password';
                return $this->render('admin/login.html.twig', ['form' => $form->createView(), 'error' => $error]);
            }
        }
        return $this->render('admin/login.html.twig', ['form' => $form->createView(), 'error' => $error]);
    }
}




