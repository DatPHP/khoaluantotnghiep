<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 9/26/2018
 * Time: 10:42 AM
 */


namespace App\Controller;



/*use http\Env\Request;*/

use App\Entity\Customers;
use App\Entity\Users;

use App\Entity\Appointments;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;


use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;



class AdminCustomersController extends AbstractController
{
    /**
     * @Route("/admin/customers", name="admin/customers")
     *
     */
    public function admin (Request $request)
    {


        /*

        $conn = $this->getEntityManager()->getConnection();

        $conn = $this->getEntityManager()->getConnection();


        $sql = '
        SELECT *
        FROM users as u
        LEFT JOIN customers as c on u.id = c.id
        ORDER BY u.id
        ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)

        $stmt = $conn->prepare($sql);
        $customers = $stmt->fetchAll();



        echo '<pre>';
        var_dump($customers);
        exit;

        */

     /*

        $user = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

     */


        $appointmentsRepository = $this->getDoctrine()->getRepository(Customers::class);
        $allAppointmentsQuery = $appointmentsRepository->findBy(
                ['id' => $user = $this->getDoctrine()
                    ->getRepository(Users::class)
                    ->findAll()]

            );

//        echo '<pre>';
//        var_dump($customers );
//        exit;

        if (!$allAppointmentsQuery) {
            throw $this->createNotFoundException(
                'No Customer found for id '.$allAppointmentsQuery
            );
        }



        $session = new Session();
       // set and get session attributes

        $user_id = $session->get('customer_id');




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





        return $this->render('admin/customers.html.twig', ['customer' => $appointments,'user'=>$user,'user_id'=>$user_id]);


    }



}




