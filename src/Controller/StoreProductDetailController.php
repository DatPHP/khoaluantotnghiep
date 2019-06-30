<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/22/2018
 * Time: 10:01 AM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\Customers;
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Task;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;



class StoreProductDetailController extends Controller
{
    /**
     * @Route("/product/{id}", name="product_productDetail")
     */
    public function productDetail($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Products::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        // chuc nang tim kiem -search function


        $form=$this->createFormBuilder(null)
            ->add('_',TextType::class,[
                'attr'=>[
                    'class'=>'form-control' ,
                    'placeholder'=>'Search',

                ]
            ])
            ->add('search',SubmitType::class,[
                'attr'=>[
                    'class'=>' btn btn-default',
                ]
            ])
            ->getForm();
        $request = Request::createFromGlobals();
        $form->handleRequest($request);
        //  $error = "";

        if ($form->isSubmitted() && $form->isValid()) {


            $formData = $form->getData();

            $products = $this->getDoctrine()
                ->getRepository(Products::class)
                ->searchAction($formData['_']);

//            echo '<pre>';
//            var_dump($products);
//            exit;

            if (empty($products)) {

                // xu lý dang nhap


                $session = new Session();
                $user_id = $session->get('user_id');

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


                $error = 'Not Find Product';
                return $this->render('search/searchBar.html.twig', ['customer'=>$customer, 'user' => $user,'form' => $form->createView(),'error' => $error]);
            } else {



                // xu lý dang nhap


                if(!isset($session)) {


                    $session = new Session();
                    $user_id = $session->get('user_id');

                }

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



                return $this->render('search/resultSearch.html.twig',['customer'=>$customer, 'user' => $user,'product'=>$products,'form' => $form->createView()]);

            }

        }

          // xu lý dang nhap

        if(!isset($session)) {

            $session = new Session();
            $user_id = $session->get('user_id');
        }

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


         // xu ly dang nhap

        $session = new Session();
        $session->set('url', 'http://localhost:8000/product/'.$id);


        //  return new Response('Tìm thấy sản phẩm : '.$product->getName().'  có số lượng là: '.$product->getAmount());

        // or render a template
        // in the template, print things with {{ product.name }}
        return $this->render('product/productdetail.html.twig', ['form'=>$form->createView(),'product' => $product,'customer'=>$customer,'user' => $user ]);
    }


}
