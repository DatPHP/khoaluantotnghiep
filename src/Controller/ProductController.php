<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/23/2018
 * Time: 3:14 PM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Task;
use App\Entity\Customers;
use App\Entity\Users;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;






/* pagination */


use App\Entity\Appointments;





class ProductController extends Controller
{

    /**
     * @Route("/product", name="product_products")
     */
    public function products(Request $request)
    {

        $repository = $this->getDoctrine()->getRepository(Products::class);
        $product = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository(ProductType::class);
        $loai = $repository->findAll();

        if(!isset($session))
        {
            $session = $request->getSession();
           // $session = new Session();
            $user_id = $session->get('user_id');

           // $session = new Session();
            $session->set('url', 'http://localhost:8000/');


        }



        // chuc nang tim kiem -search function


        $form=$this->createFormBuilder(null)


            ->add('_',TextType::class,[
                'attr'=>[
                        'class'=>'form-control' ,

                        'placeholder'=>'Search',


                        ]
                         ])


            ->add('search',SubmitType::class,[
                'attr'=>[
                    'class'=>' btn btn-default',
                        ]
            ])

            ->getForm();
        $request = Request::createFromGlobals();
        $form->handleRequest($request);
        //  $error = "";

        if ($form->isSubmitted() && $form->isValid()) {


            $formData = $form->getData();

            $products = $this->getDoctrine()
                ->getRepository(Products::class)
                ->searchAction($formData['_']);
//
//            echo '<pre>';
//            var_dump($products);
//            exit;

            if (empty($products)) {
                // xu lý dang nhap
                if(!isset($session)) {
                    $session = new Session();
                    $user_id = $session->get('user_id');

                }

                if($user_id == null || $user_id == "") {
                    $customer = "";
                    $user = "";

                } else {
                    $customer = $this->getDoctrine()
                        ->getRepository(Customers::class)
                        ->find($user_id);
                    $user = $this->getDoctrine()
                        ->getRepository(Users::class)
                        ->find($user_id);
                }

                $error = 'Not Find Product';
                return $this->render('search/searchBar.html.twig', ['customer'=>$customer, 'user' => $user,'form' => $form->createView(),'error' => $error]);
            } else {


                // xu lý dang nhap

                if(!isset($session)) {
                    $session = new Session();
                    $user_id = $session->get('user_id');
                }

                if($user_id == null || $user_id == "") {
                    $customer = "";
                    $user = "";

                } else {
                    $customer = $this->getDoctrine()
                        ->getRepository(Customers::class)
                        ->find($user_id);





                    $user = $this->getDoctrine()
                        ->getRepository(Users::class)
                        ->find($user_id);
                }

                return $this->render('search/resultSearch.html.twig',['customer'=>$customer, 'user' => $user,'product'=>$products,'form' => $form->createView()]);

            }

        }





        //Thong ke luot try cap

/*
        if( isset( $_SESSION['counter'] ) )
        {
            $_SESSION['counter'] += 1;
        }
        else
        {
            $_SESSION['counter'] = 1;
        }
        $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter'];
        $msg .= " lần trong session này.";


        $session = new Session();

        $session->set('smg', $_SESSION['counter'] );



*/


        //--------------------------pagination------


        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Products::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->findAll();

        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator  = $this->get('knp_paginator');

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            8
           // 6
        );



            /*

            for($i=1;$i<=5;$i++) {
                $session = new Session();
                $session->set('ot',$appointments [$i]);
                $value = $session->get('ot');
                var_dump($value);
            }

            */

            // xu ly dang nhap


            if ($user_id == null || $user_id == "") {
                $customer = "";
                $user = "";

            } else {
                $customer = $this->getDoctrine()
                    ->getRepository(Customers::class)
                    ->find($user_id);
             /*
                echo '<pre>';
              var_dump($customer);
                 exit;

             */






                $user = $this->getDoctrine()
                    ->getRepository(Users::class)
                    ->find($user_id);


            }

        return $this->render('product/home.html.twig', ['form'=>$form->createView(),'product' => $product,'customer'=>$customer, 'user' => $user,'appointments' => $appointments,'productType'=>$loai]);
    }
}