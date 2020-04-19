<?php

namespace App\Controller;

use App\Entity\Customers;
use App\Entity\Products;
use App\Entity\ProductType;
use App\Entity\Users;
use App\Entity\Appointments;



use Symfony\Component\HttpFoundation\Request;


// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ProductTypeController extends AbstractController
{
    /**
     * @Route("/product/type/{id}", name="product_type")
     */
    public function index($id, Request $request,PaginatorInterface $paginator)
    {

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



        //--------------------------pagination------







        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Products::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->findBy(['type_id'=> $id]);


        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );



        return $this->render('product_type/index.html.twig', [
            'controller_name' => 'ProductTypeController','form'=>$form->createView(),'customer'=>$customer, 'user' => $user,'productList' => $appointments,'productType'=>$loai
        ]);
    }
}
