<?php

namespace App\Controller;

use App\Entity\Customers;
use App\Entity\Products;
use App\Entity\ProductType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Appointments;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;




use Symfony\Component\HttpFoundation\Session\Session;
class GenderProductController extends AbstractController
{
    /**
     * @Route("/gender/product", name="gender_product")
     */
    public function index()
    {
        return $this->render('gender_product/index.html.twig', [
            'controller_name' => 'GenderProductController',
        ]);
    }



    /**
     * @Route("/product/gender/{gender}", name="product_pagination")
     */



    // Include the paginator through dependency injection, the autowire needs to be enabled in the project
    public function pagination ($gender, Request $request, PaginatorInterface $paginator)
    {




        $repository = $this->getDoctrine()->getRepository(ProductType::class);
        $loai = $repository->findAll();


        //search function


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








        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Products::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->findBy([
            'gender' => $gender,

        ]);

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );


        // xu ly dang nhap

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




        // Render the twig view
        return $this->render('product/gender.html.twig', [
            'appointments' => $appointments,'form' => $form->createView(),'customer'=>$customer,'productType'=>$loai,'user'=>$user
        ]);
    }

}
