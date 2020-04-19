<?php

namespace App\Controller;


use App\Entity\Products;
use App\Entity\Customers;
use App\Entity\Users;
use Doctrine\ORM\Query\Expr\Select;
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Repository\ProductsRepository;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;

class SearchController extends AbstractController
{

    public function index()
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */

    public function searchBar()
    {


        $form=$this->createFormBuilder(null,array(['csrf_protection' => false]))
            ->add('query',TextType::class)
            ->add('search',SubmitType::class,[
                'attr'=>[
                    'class'=>'btn btn-primary'
                ]
            ])
            ->getForm();
        $request = Request::createFromGlobals();
         $form->handleRequest($request);
          //  $error = "";

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();// dữ liệu lấy được từ form tìm kiếm trả về 1 biến đối tượng là $formdata.
            $products = $this->getDoctrine()
                ->getRepository(Products::class)
                ->searchAction($formData['query']);





           /*
            if($formData['query'] =='man')
            {
                $products = $this->getDoctrine()
                    ->getRepository(Products::class)
                    ->findOneBy(['gender' => 'man']);

                echo '<pre>';
                var_dump($products);
                exit;

            }
            if($formData['query'] =='women')
            {
                $products = $this->getDoctrine()
                    ->getRepository(Products::class)
                    ->findOneBy(['gender' => 'women']);

                echo '<pre>';
                var_dump($products);
                exit;

            }
           */

//             $key= $formData['query'];
//
//            $repository = $this->getDoctrine()->getRepository(Products::class);
//
//            $product = $repository
//
//                ->findOneBy([
//                'name' => $key]
//                );

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
                return $this->render('search/searchBar.html.twig', ['customer'=>$customer,'user' => $user ,'form' => $form->createView(),'error' => $error]);
            } else {



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





                return $this->render('search/resultSearch.html.twig',['customer'=>$customer,'user' => $user ,'product'=>$products,'form' => $form->createView()]);

            }


        }




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




        return $this->render('search/searchBar.html.twig',['form'=>$form->createView()]);

    }
}
