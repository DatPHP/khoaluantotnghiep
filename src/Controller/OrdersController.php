<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\DateType;


use App\Entity\Orders;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    public function index()
    {
        return $this->render('orders/index.html.twig', [
            'controller_name' => 'OrdersController',
        ]);
    }


    /**
     * @Route("/saveorders", name="saveorders_save")
     */
    public function save()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $orders = new Orders();
        $orders->setCreatedDate(date("Y-m-d h:i:s"));



        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($orders);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$orders->getId());
    }
}
