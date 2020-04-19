<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 10/7/2018
 * Time: 2:45 PM
 */


// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\Customers;

use App\Entity\Users;
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

class AdminCustomerEditController extends AbstractController
{
    /**
     * @Route("/customerEdit/{id}", name="customerEdit_editCustomer")
     */
    public function editCustomer($id)
    {


        $entityManager = $this->getDoctrine()->getManager();
        $customer = $entityManager->getRepository(Customers::class)->find($id);


        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$customer) {
            throw $this->createNotFoundException(
                'No Customer found for id ' . $id
            );
        }


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $defaults = array(
            'firstname' => 'Nguyen Van',
            'lastname' => 'Dat',
            'email' => 'nguyenvandat170296@gmail.com',
            'phone' => '0328089939',
            'address' => 'Go Vap',

            'username'=>'Dat',
            'password' => 'dat',

        );


        $form = $formFactory->createBuilder(FormType::class, $defaults)
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('email', EmailType::class)
            ->add('phone', TextType::class)
            ->add('address', TextType::class)
            ->add('username', TextType::class)
            ->add('password', TextType::class)

            ->getForm();

        $formData = $form->getData();


        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $customer->setFirstName($formData['firstname']);
            $customer->setLastName($formData['lastname']);
            $customer->setPhone($formData['phone']);
            $customer->setEmail($formData['email']);
            $customer->setAddress($formData['address']);

            $entityManager->persist($customer);
            $entityManager->flush();

            $user->setId($customer->getId());
            $user->setUsername($formData['username']);
            $user->setPassword($formData['password']);
            $user->setRole('regular');


            $entityManager->flush();



//
//            echo '<pre>';
//            var_dump($formData);
//            exit;


            $session = new Session();
         // set and get session attributes
            $session->set('customer_id',$customer->getId());

            $response = new RedirectResponse('/admin/customers');
            $response->prepare($request);
            return $response->send();

        }



        $customer->setFirstName($formData['firstname']);
        $customer->setLastName($formData['lastname']);
        $customer->setPhone($formData['phone']);
        $customer->setEmail($formData['email']);
        $customer->setAddress($formData['address']);
        $entityManager->persist($customer);
        $entityManager->flush();

        $user->setId($customer->getId());
        $user->setUsername($formData['username']);
        $user->setPassword($formData['password']);
        $user->setRole('regular');


        $entityManager->flush();




        return $this->render('admin/editCustomer.html.twig', ['customer' => $customer, 'user'=>$user,'form' => $form->createView()]);

    }




}
