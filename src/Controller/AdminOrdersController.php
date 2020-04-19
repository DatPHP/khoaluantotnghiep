<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 9/26/2018
 * Time: 10:42 AM
 */


namespace App\Controller;



/*use http\Env\Request;*/

use App\Entity\Contact;
use App\Entity\Orders;
use App\Entity\Customers;


use App\Entity\Appointments;

// Include paginator interface
use App\Entity\OrdersItems;
use App\Entity\Products;
use Knp\Component\Pager\PaginatorInterface;



// Include paginator interface

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


class AdminOrdersController extends AbstractController
{
    /**
     * @Route("/admin/orders", name="admin/orders")
     *
     */
    public function admin (Request $request)
    {

       $appointmentsRepository = $this->getDoctrine()->getRepository(Orders::class);
        $allAppointmentsQuery = $appointmentsRepository->findBy(
            ['customer_id' => $customer = $this->getDoctrine()
                ->getRepository(Customers::class)
                ->findAll()]

        );

       

        if (!$allAppointmentsQuery) {
            throw $this->createNotFoundException(
                'No order found for id '.$allAppointmentsQuery
            );
        }


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
            8
        // 6
        );


        return $this->render('admin/orders.html.twig', ['order' => $appointments,'customer'=>$customer]);


    }




    /**
     * @Route("/admin/orders/{id}", name="product_show")
     */
    public function show ($id)
    {




        //show detail list order
        $chitiet = $this->getDoctrine()
            ->getRepository(OrdersItems::class)
            ->findBy(['order_id'=> $id]);
        $dodaichitiet =count($chitiet);
        if( $dodaichitiet>0) {

            for ($x = 0; $x < $dodaichitiet; $x++) {

                $sanpham[$x] = $this->getDoctrine()
                    ->getRepository(Products::class)
                    ->findOneBy(['id' => $chitiet[$x]->getProductId()]);

              //  $total[$x]=(int)$sanpham[$x]->getPrice()*(int)$chitiet[$x]->getQuantity();

            }


        }
        else
        {
            $total=0;
            $sanpham= "khong co san pham nao";
        }

       /*
        echo '<pre>';
          var_dump($product);
           exit;
*/


        //show information customer

        $entityManager = $this->getDoctrine()->getManager();
        $customer_id = $entityManager->getRepository(Orders::class)->find($id);



        $entityManager = $this->getDoctrine()->getManager();
        $customer = $entityManager->getRepository(Customers::class)->findOneBy(['id'=>$customer_id->getCustomerId()]);


        // or render a template
        /// in the template, print things with {{ product.name }}
         return $this->render('admin/showdetailorder.html.twig', ['chitiet'=>$chitiet,'sanpham'=>$sanpham,'customer'=>$customer,'orders'=>$customer_id]);
    }


    }



