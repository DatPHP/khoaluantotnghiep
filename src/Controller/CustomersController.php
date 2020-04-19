<?php

namespace App\Controller;

use App\Entity\Customers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\Orders;


class CustomersController extends AbstractController
{
    /**
     * @Route("/customers", name="customers")
     */
    public function index()
    {
        return $this->render('customers/index.html.twig', [
            'controller_name' => 'CustomersController',
        ]);
    }


    /**
     * @Route("/customers/save", name="customer")
     */
    public function save()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $customer = new Customers();
        $customer->setFirstName('Le Dang ');
        $customer->setLastName('Manh');
        $customer->setPhone('0908162945');
        $customer->setEmail('LeDangManh@gmail.com');
        $customer->setAddress('HocMon');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($customer);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$customer->getId());
    }



    /**
     * @Route("/submit", name="submit")
     */
    public function index4()
    {
        $Orders = new Orders();
        $Orders->setCreatedDate('Computer Peripherals');

        $customer = new Customers();
        $customer->setFirstName('Le Dang ');
        $customer->setLastName('Manh');
        $customer->setPhone('0908162945');
        $customer->setEmail('LeDangManh@gmail.com');
        $customer->setAddress('HocMon');
        // relates this product to the category
        $Orders->setCustomerId($customer);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Orders);
        $entityManager->flush();
        $entityManager->persist($customer);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$customer->getId()
            .' and new category with id: '.$Orders->getId()
        );
    }



}
