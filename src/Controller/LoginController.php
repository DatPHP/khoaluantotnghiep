<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 9/17/2018
 * Time: 2:05 PM
 */

namespace App\Controller;

/*use http\Env\Request;*/
use App\Entity\Users;

use Doctrine\ORM\Mapping\Id;
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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\HttpFoundation\Session\Session;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
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
            if (empty($user)) {
                $error = 'Invalid email or password';
                return $this->render('login/login.html.twig', ['form' => $form->createView(),'error' => $error]);
            } else {
                // tao session
                $session = new Session();
                $session->set('user_id', $user->getId());

//                if( $formData["username"]=='admin'&&$formData["password"]='123')
//                {
//                    return $this->render('admin/dashboard.html.twig');
//
//                }




                $session = new Session();
                $url= $session->get('url');



                if( isset( $_SESSION['counter'] ) )
                {

                    $_SESSION['counter'] += 1;
                }
                else
                {
                    $_SESSION['counter'] = 1;
                }
                $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter']." lần trong session này.";;
                 echo $msg;

                $session = new Session();
                $session->set('smg', $_SESSION['counter'] );

                //login with facebook
                //$this->redirectReferer();
                // $this->getContext()->getRequest()->getReferer();
                //$this->getRequest()->headers->get('referer');
                 $response = new RedirectResponse($url);
                 $response->prepare($request);
                 return $response->send();
            }
        }
        return $this->render('login/login.html.twig', ['form' => $form->createView(),'error' => $error]);
    }


}