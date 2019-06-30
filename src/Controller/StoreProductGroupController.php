<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/22/2018
 * Time: 9:57 AM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...


use App\Entity\Appointments;

use App\Entity\Products;
use App\Entity\ProductType;
use App\Entity\Customers;
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Task;

// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Session\Session;



class StoreProductGroupController extends Controller
{


    /**
     * @Route("/product/{gender}/{type_id}", name="product_productgroup")
     */

    public function productgroup(Request $request,$gender, $type_id)
    {


        $appointmentsRepository = $this->getDoctrine()->getRepository(Products::class);
        $allAppointmentsQuery = $appointmentsRepository->findBy([
            'type_id' => $type_id,
            'gender' => $gender,
        ]);




        //--------------------------pagination------



        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator  = $this->get('knp_paginator');

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        // 6
        );










        $category = $this->getDoctrine()->getRepository(ProductType::class);
        $productType = $category->findOneBy(
            [
                'id'=>$type_id,

            ]


        );



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

//            echo '<pre>';
//            var_dump($products);
//            exit;

            if (empty($products)) {


                // xu lý dang nhap


                $session = new Session();
                $user_id = $session->get('user_id');

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


        /*
                echo '<pre>';
                var_dump($productType);
                exit;

        */



        // xu ly dang nhap

        if(!isset($session)) {


            $session = new Session();
            $session->set('url', 'http://localhost:8000/product/' . $gender . '/' . $type_id);


            //$session = new Session();
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



        $repository = $this->getDoctrine()->getRepository(ProductType::class);
        $loai = $repository->findAll();




        return $this->render('product/productgroup.html.twig', ['form'=>$form->createView(),'productList' => $appointments,'customer'=>$customer,'user' => $user,'productType'=>$loai ]);


    }










}


