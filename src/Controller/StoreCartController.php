<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/29/2018
 * Time: 9:41 AM
 */
//StoreCartController.php

// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Customers;
use App\Entity\Products;
use App\Entity\Orders;
use App\Entity\Users;
use App\Entity\OrdersItems;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Mapping\Loader\AbstractLoader;


use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;


class StoreCartController extends Controller
{
    /**
     * @Route("/cart/form", name="product_showcart")
     */


    public function showcart ( Request $request)
    {


        $product = $this->getDoctrine()
            ->getRepository(Products::class)
            ->findAll();

        //  return new Response('Check out this great product: ' . $product->getName());


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $session = new Session();
        $user_id = $session->get('user_id');


        if(isset($user_id))
        {
            $customer = $this->getDoctrine()
                ->getRepository(Customers::class)
                ->find($user_id);


            // dữ liệu các trường dữ liệu là thông tin kh
            $defaults = array(
                'firstName' => $customer->getFirstname(),
                'lastName' => $customer->getLastname(),
                'email' => $customer->getEmail(),
                'address' => $customer->getAddress(),
                'phone' => $customer->getPhone(),
            );



        }



        else {

           // xét các trường dữ liệu là rỗng
            $defaults = array(
                'firstName' => '',
                'lastName' => '',
                'email' => ' ',
                'address' => ' ',
                'phone' => ' ',

            );
        }

        $form = $formFactory->createBuilder(FormType::class, $defaults)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('phone', TextType::class)
            ->add('email', EmailType::class)
            ->add('address', TextType::class)


            ->add('shoppingcart',HiddenType::class)
            ->add('quantity',HiddenType::class)
            ->add('total',TextType::class)


            ->getForm();


        $request = Request::createFromGlobals();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();



            $h= $formData['shoppingcart'];
            $d =$formData['quantity'];


            //xu lý cot id cua san pham
            $obj=trim($formData['shoppingcart'],'sanpham:');
            //xu ly cot so luong san pham
            $stt=trim($formData['quantity'],'sanpham:');




/////////////////////////////Text ok /////////////////////-----------------


            //test ket qua cua cot id
            $hoadon= explode('id',$obj);



            $arrlength = count($hoadon);



            //test ket qua cot so luong


            $so= explode('id',$stt);

            $solength = count($so);



              $subtotal=0;

            for($x = 1; $x < $arrlength; $x++) {


                $pd[$x] = $this->getDoctrine()
                    ->getRepository(Products::class)
                    ->findOneBy(['id'=>$hoadon[$x]]);

                $total[$x]=(int)$pd[$x]->getPrice()*(int)$so[$x];
                $subtotal +=$total[$x];
            }










/*
            echo '<pre>';
             var_dump($obj);
            exit;
*/





            if(isset($user_id))
            {
                $dacotaikhoan = $this->getDoctrine()
                    ->getRepository(Customers::class)
                    ->find($user_id);
                $Orders = new Orders();
                $Orders->setCreatedDate((date("Y-m-d h:i:s")));
                $Orders->setTotal((int)$formData['total']);
                $Orders->setStatus('Penđing');
                // relates this product to the category
                $Orders->setCustomerId($dacotaikhoan->getId());
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($Orders);
                $entityManager->flush();
            }
            else {

                $customer = new Customers();
                $customer->setFirstName($formData['firstName']);
                $customer->setLastName($formData['lastName']);
                $customer->setPhone($formData['phone']);
                $customer->setEmail($formData['email']);
                $customer->setAddress($formData['address']);

                $entityManager = $this->getDoctrine()->getManager();

                $entityManager->persist($customer);
                $entityManager->flush();


                $Orders = new Orders();
                $Orders->setCreatedDate((date("Y-m-d h:i:s")));
                $Orders->setTotal((int)$formData['total']);
                $Orders->setStatus('Penđing');


                // relates this product to the category
                $Orders->setCustomerId($customer->getId());
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($Orders);
                $entityManager->flush();


            }


            for($x = 1; $x < $arrlength; $x++)

                    {
                        $item = new OrdersItems();

                        $item->setOrderId((int)$Orders->getId());

                        $item->setProductId((int)$hoadon[$x]);

                        $item->setQuantity((int)$so[$x]);


                        $entityManager->persist($item);
                        $entityManager->flush();


                    }





            $session = new Session();

            $session->set('url', 'http://localhost:8000/cart/form');




            //Id cua san pham
            $session->set('idsp',$hoadon);
            $idsp=$session->get('idsp');

            //so luong san pham

            $session->set('soluong',$so);
            $sosp=$session->get('soluong');
            // **Thong tin khach hang **
            //firstname
            $session->set('firstName',$formData['firstName'] );
            //lastname
            $session->set('lastName',$formData['lastName'] );
            //email
            $session->set('email',$formData['email'] );
            // phone
            $session->set('phone',$formData['phone'] );
            //address
            $session->set('address',$formData['address'] );
            //**Thong tin danh sach mua hang
            $session->set('sp',$pd );
            $session->set('tong',$total );
            $session->set('tongcong',$subtotal );
            $session->set('idsp',$idsp );
            $session->set('sosp',$sosp );


            // to store session values
            // $_SESSION['username']= $lastName;


            return $this->render('default/submit.html.twig',
                ['firstName'=>$formData['firstName'],'lastName'=>$formData['lastName'],'phone'=>$formData['phone'],'email'=>$formData['email'],'address'=>$formData['address'],'customer'=>$customer,
                    'idsp'=>$idsp,'sosp'=>$sosp,'sp'=>$pd,'tong'=>$total,'tongcong'=>$subtotal] );

/*
            return $this->render('default/submit.html.twig',
                ['firstName'=>$firstName,'lastName'=>$lastName,'phone'=>$phone,'email'=>$email,'address'=>$address,'customer'=>$customer,
                    'bill'=>$bill,'soluong'=>$soluong,'idsp'=>$idsp,'sosp'=>$sosp] );

*/


            $response = new RedirectResponse('/task/success',['firstName'=>$user,'password'=>$password]);
            $response->prepare($request);

            return $response->send();
            // tell Doctrine you want to (eventually) save the Product (no queries yet)

            // actually executes the queries (i.e. the INSERT query)


        }


        $session = new Session();
        $user_id = $session->get('user_id');
        if(empty($user_id)) {
            $customer = "";
        } else {
            $customer = $this->getDoctrine()
                ->getRepository(Customers::class)
                ->find($user_id);


        }


        $session = new Session();
        $user_id = $session->get('user_id');
        $session->set('url', 'http://localhost:8000/cart/form');

        if($user_id == null || $user_id == "") {
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


        return $this->render('shopcart/cart.html.twig', ['form'=>$form->createView(),'product' => $product,'customer'=>$customer,'user'=>$user,'form' => $form->createView()]);

    }

    /**
     * @Route("/task/success" , name="success" )
     */

    public function successAction($user,$password){

        return $this->render('default/submit.html.twig',['username'=>$user,'password'=>$password] );

    }

}








