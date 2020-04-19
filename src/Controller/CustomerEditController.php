<?php
/**
 * Created by PhpStorm.
 * User: dat_d
 * Date: 12/24/2018
 * Time: 4:04 PM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\Customers;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
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

class CustomerEditController extends AbstractController
{
    /**
     * @Route("/EditInfo/{id}", name="EditInfo_editCustomer")
     */
    public function editCustomer($id)
    {



        $entityManager = $this->getDoctrine()->getManager();
        $customer = $entityManager->getRepository(Customers::class)->find($id);






        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

          $pass= $user->getPassword();



        if (!$customer) {
            throw $this->createNotFoundException(
                'No Customer found for id ' . $id
            );
        }


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $defaults = array(
            'firstname' => $customer->getFirstname(),
            'lastname' => $customer->getLastname(),
            'email' => $customer->getEmail(),
            'phone' => $customer->getPhone(),
            'address' => $customer->getAddress(),

            'username'=>$user->getUsername(),
            'password' => $pass,

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

            $entityManager->persist($user);


            $entityManager->flush();



//
//            echo '<pre>';
//            var_dump($formData);
//            exit;


            $session = new Session();
            // set and get session attributes
            $session->set('customer_id',$customer->getId());

            $response = new RedirectResponse('/product');
            $response->prepare($request);
            return $response->send();

        }

      /*

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

      */




        return $this->render('customer/editInfo.html.twig', ['customer' => $customer, 'user'=>$user,'form' => $form->createView()]);

    }




}
