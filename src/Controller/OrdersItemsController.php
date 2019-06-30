<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OrdersItems;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class OrdersItemsController extends AbstractController
{
    /**
     * @Route("/orders/items", name="orders_items")
     */
    public function index()
    {
        return $this->render('orders_items/index.html.twig', [
            'controller_name' => 'OrdersItemsController',
        ]);
    }

    /**
     * @Route("/addOrdersItems", name="add_Orders_Items")
     */
    public function add()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $item = new OrdersItems();
        $item->setProductId(1);
        $item->setOrderId(3);
        $item->setQuantity(5);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($item);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$item->getId());
    }

}
