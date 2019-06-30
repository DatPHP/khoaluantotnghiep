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
use App\Entity\ProductType;
use App\Entity\Users;

// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;


/* pagination */


/* pagination */


use App\Entity\Appointments;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminProductsController  extends Controller
{
    /**
     * @Route("/admin/products", name="admin/products")
     *
     */
    public function admin (Request $request,PaginatorInterface $paginator)
    {



        $product = $this->getDoctrine()
            ->getRepository(Products::class)
            ->findAll();






        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$product
            );
        }



        $session = new Session();
        // set and get session attributes

        $product_id = $session->get('product_id');

             // pagination/////////////////////

        //--------------------------pagination-product-----


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


        //-----------------------------pagination product type -------------------


        // Retrieve the entity manager of Doctrine
        $anh = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appoint = $anh->getRepository(ProductType::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppoint = $appoint->findAll();

        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator  = $this->get('knp_paginator');

        // Paginate the results of the query
        $kinds = $paginator->paginate(
        // Doctrine Query, not results
            $allAppoint,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            6
        // 6
        );

        return $this->render('admin/products.html.twig', ['product' => $product,'product_id'=>$product_id,'appointments' => $appointments,'kinds'=>$kinds]);

    }




    /**
     * @Route("/KindDel/{id}", name="KindDel_deletekind")
     */
    public function deleteKind($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $kinds = $entityManager->getRepository(ProductType::class)->find($id);

        if (!$kinds) {
            throw $this->createNotFoundException(
                'No Orders found  '.$id
            );
        }


        $entityManager->remove($kinds);
        $entityManager->flush();

        return new JsonResponse(array('data' => 'Delete Successfully'));


    }
}



