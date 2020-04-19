<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 10/10/2018
 * Time: 2:52 PM
 */



// src/Controller/ProductController.php

namespace App\Controller;

// ...
use App\Entity\Users;
use App\Entity\Customers;

use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use function PHPSTORM_META\type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Mapping\Loader\AbstractLoader;
use Symfony\Component\HttpFoundation\RedirectResponse;





class AdminCustomerAddController extends AbstractController
{
    /**
     * @Route("/customerAdd", name="customerAdd_addCustomer")
     */
    public function addCustomer()
    {


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $defaults = array(

            'firstName' => '',
            'lastName' => ' ',
            'phone' => ' ',
            'email' => ' ',
            'address' => '',
            'username'=>'',
            'password' => ' '
        );


        $form = $formFactory->createBuilder(FormType::class, $defaults)

            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('phone', TextType::class)
            ->add('email', EmailType::class)
            ->add('address', TextType::class)
            ->add('username', TextType::class)
            ->add ('password',TextType::class)

            ->getForm();

        $newproduct= $form->getData();


        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();

            $newcustomer = new Customers();

            $newcustomer->setFirstName($formData['firstName']);
            $newcustomer->setLastName($formData['lastName']);
            $newcustomer->setEmail($formData['email']);
            $newcustomer->setPhone($formData['phone']);
            $newcustomer->setAddress($formData['address']);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($newcustomer);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();


            $newuser = new Users();

            $newuser->setId($newcustomer->getId());
            $newuser->setUsername($formData['username']);
            $newuser->setPassword($formData['password']);
            $newuser->setRole('regular');


            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($newuser);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();



            $session = new Session();
            // set and get session attributes
            $session->set('customer_id',$newcustomer->getId());

            $response = new RedirectResponse('/admin/customers');
            $response->prepare($request);
            return $response->send();


        }



        $news=new session();
        $news->get('name');

        return $this->render('admin/addCustomer.html.twig', [ 'form' => $form->createView(),'news'=>$news]);

    }




}
