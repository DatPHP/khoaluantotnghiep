<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Entity\Customers;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;


use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


// send email
use App\Form\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ContactsController extends Controller
{
    /**
     * @Route("/contacts", name="contacts")
     */

    public function add()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $contact = new Contact();
        $contact->setFullName('Nguyen Van Dat');
        $contact->setEmail('nguyenvandat170296@gmail.com');
        $contact->setComment('goood product');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($contact);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id ' . $contact->getId());
    }


    /*



    /**
     * @Route("/sendrequest", name="contacts")
     */




/*

    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $contact = new Contact();


        // xu lý dang nhap


        if (!isset($session)) {


            $session = new Session();
            $user_id = $session->get('user_id');

        }

        if ($user_id == null || $user_id == "") {
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

        if (isset($user_id)) {
            $customer = $this->getDoctrine()
                ->getRepository(Customers::class)
                ->find($user_id);


            // dữ liệu các trường dữ liệu là thông tin kh
            $defaults = array(

                'name' => $customer->getFirstName() . " " . $customer->getLastName(),
                'email' => $customer->getEmail(),

            );

        } else {

            // xét các trường dữ liệu là rỗng
            $defaults = array(
                'name' => '',
                'email' => ' ',

            );
        }


        $form = $this->createFormBuilder($defaults)
            ->add('name', TextType::class, ['attr' => [
                'style' => 'width:250px; '
            ]])
            ->add('email', TextType::class, ['attr' => [
                'style' => 'width:230px; '
            ]])
            ->add('request', TextType::class, ['attr' => [
                'style' => 'width:230px; height:120px'
            ]])
            ->add('send', SubmitType::class, ['label' => 'Send Request'])
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $contacts = $form->getData();

            $contact = new Contact();
            $contact->setFullName($contacts['name']);
            $contact->setEmail($contacts['email']);
            $contact->setComment($contacts['request']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();


            $response = new RedirectResponse('/');
            $response->prepare($request);
            return $response->send();
        }

        return $this->render('comment/new.html.twig', [
            'form' => $form->createView(), 'customer' => $customer, 'user' => $user
        ]);


    }



    */


    /**
     * @Route("/sendrequest", name="contact")
     */

    public function index(Request $request, \Swift_Mailer $mailer)
    {


        // xu lý dang nhap


        if (!isset($session)) {


            $session = new Session();
            $user_id = $session->get('user_id');

        }

        if ($user_id == null || $user_id == "") {
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

        if (isset($user_id)) {
            $customer = $this->getDoctrine()
                ->getRepository(Customers::class)
                ->find($user_id);


            // dữ liệu các trường dữ liệu là thông tin kh
            $defaults = array(

                'name' => $customer->getFirstName() . " " . $customer->getLastName(),
                'email' => $customer->getEmail(),

            );

        } else {

            // xét các trường dữ liệu là rỗng
            $defaults = array(
                'name' => '',
                'email' => ' ',

            );
        }

        // xu ly form


        $form = $this->createFormBuilder($defaults)
            ->add('name', TextType::class, ['attr' => [
                'style' => 'width:250px; '
            ]])
            ->add('email', TextType::class, ['attr' => [
                'style' => 'width:230px; '
            ]])
            ->add('request', TextareaType::class, ['attr' => [
                'style' => 'width:230px; height:120px'
            ]])
            ->add('send', SubmitType::class, ['label' => 'Send Request'])
            ->getForm();


        $form->handleRequest($request);

        $this->addFlash('info', 'Some useful info');

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $contacts = $form->getData();  // lay du lieu tu form

            // luu co so du lieu
            $contact = new Contact();
            $contact->setFullName($contacts['name']);
            $contact->setEmail($contacts['email']);
            $contact->setComment($contacts['request']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            // xu ly goi email

            $message = (new \Swift_Message('You Got Mail!'))
                             ->setFrom($contacts['email'])
                       ->setTo('nguyenvandat170296@email.address')
                          ->setBody(
                                  $contacts['request'],
                                  'text/plain'
                          )
            ;
           $mailer->send($message);

            $this->addFlash('success', 'It sent!');



            // xu ly goi email












            return $this->redirectToRoute('contact');

          //  $response = new RedirectResponse('/');
           // $response->prepare($request);
           // return $response->send();
        }

        return $this->render('comment/new.html.twig', [
            'form' => $form->createView(), 'customer' => $customer, 'user' => $user
        ]);


    }
}














