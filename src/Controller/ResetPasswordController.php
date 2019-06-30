<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;




use App\Entity\Users;
use App\Entity\Customers;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset/password", name="reset_password")
     */
    public function reset(Request $request)
    {

        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $form = $formFactory->createBuilder(FormType::class)
            ->add('username', TextType::class)
            ->add('email', EmailType::class)
            ->add('Reset Password', SubmitType::class)
            ->getForm();

        $request = Request::createFromGlobals();
        $form->handleRequest($request);
        $error = "";

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();



            $repository = $this->getDoctrine()->getRepository(Users::class);
            $user = $repository->findOneBy([
                'username' => $formData["username"],

            ]);

            $repository = $this->getDoctrine()->getRepository(Customers::class);
            $customer = $repository->findOneBy([
                'email' => $formData["email"],

            ]);

            $a = $customer->getId();
            $b = $user ->getId();

//            echo '<pre>';
//             var_dump($a);
//              var_dump($b);
//             exit;

            if ($a != $b )        {
                $error = 'Invalid email or password';
                return $this->render('reset_password/index.html.twig', ['form' => $form->createView(),'error' => $error]);
            } else {
                // tao session
                $session = new Session();
                $session->set('resetUser', $user->getId());

                $response = new RedirectResponse('/user/update');
                $response->prepare($request);
                return $response->send();
            }
        }
        return $this->render('reset_password/index.html.twig', ['form' => $form->createView(),'error' => $error]);
    }

    /**
     * @Route("/user/update", name="reset_ok")
     */
    public function update()
    {

        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $form = $formFactory->createBuilder(FormType::class)
            ->add('new', PasswordType::class)
            ->add('reset', SubmitType::class)

            ->getForm();
        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $data = $form->getData();


            // tao session
            $session = new Session();
            $id=  $session->get('resetUser');


            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(Users::class)->find($id);

            $user->setPassword ($data["new"]);

             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($user);
             $entityManager->flush();

            $response = new RedirectResponse('/product');
            $response->prepare($request);
            return $response->send();
        }


        return $this->render('reset_password/reset.html.twig', [
            'controller_name' => 'ResetPasswordController','form' => $form->createView()
        ]);


    }

}
