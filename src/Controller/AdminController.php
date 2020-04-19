<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 9/26/2018
 * Time: 10:42 AM
 */


namespace App\Controller;



/*use http\Env\Request;*/

use App\Entity\Orders;
use App\Entity\Products;
use App\Entity\Users;
use App\Entity\Contact;

use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     *
     */
    public function admin (Request $request)
    {
        //kiem tra da login chua (co session login ko)
        //GET SESSION


        $session = new Session();
        $user_id = $session->get('user_id');

        if(empty($user_id))

        { //chua SESSION

            $response = new RedirectResponse('/admin/login');


            $response->prepare($request);
            return $response->send();
        } else { //da login roi

            $session = new Session();
            $user_id = $session->get('id');

            $session = new Session();

            $luot= $session->get('smg' );


            $repository = $this->getDoctrine()->getRepository(Users::class);
            $user = $repository->findAll();

            $users=count($user);

            $repository = $this->getDoctrine()->getRepository(Orders::class);
            $order = $repository->findAll();

            $orders=count($order);

            $repository = $this->getDoctrine()->getRepository(Products::class);
            $product = $repository->findAll();

            $products=count($product);

            $repository = $this->getDoctrine()->getRepository(Contact::class);
            $contact = $repository->findAll();

            $contacts=count($contact);





            return $this->render('admin/dashboard.html.twig',['customer'=>$user_id,'counter'=>$luot,'taikhoan'=>$users,'dathang'=>$orders,'sanpham'=>$products,'phanhoi'=>$contacts] );
        }
//        $formFactory = Forms::createFormFactoryBuilder()
//            ->addExtension(new HttpFoundationExtension())
//            ->getFormFactory();
//
//        $form = $formFactory->createBuilder(FormType::class)
//            ->add('username', TextType::class)
//            ->add('password', TextType::class)
//            ->add('login', SubmitType::class)
//            ->getForm();
//
//        $request = Request::createFromGlobals();
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $formData = $form->getData();
//
//            $repository = $this->getDoctrine()->getRepository(Users::class);
//            $user = $repository->findOneBy([
//                'username' => 'admin',
//                'password' => 'admin',
//            ]);
//            if(! $user) {
//                return $this->render('security/login.html.twig', ['form' => $form->createView(), 'error' => true]);
//            } else {
//                //tao session gom user_id
//
//                $response = new RedirectResponse('admin');
//                $response->prepare($request);
//
//                return $response->send();
//            }
//        }

    }
}



