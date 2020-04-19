<?php
/**
 * Created by PhpStorm.
 * User: dat_d
 * Date: 12/22/2018
 * Time: 3:23 PM
 */


namespace App\Controller;

// ...
use App\Entity\OrdersItems;
use App\Entity\Products;
use App\Entity\Customers;
use App\Entity\Orders;
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

class InforCustomerController extends AbstractController
{


    /**
     * @Route("/infor09/{id}", name="infor09_show")
     */
    public function show($id)
    {
        $bill = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->findBy( ['customer' => $id]);



    }


        /**
     * @Route("/Customer01/{id}", name="customer01_CustomerInfo")
     */
    public function CustomerInfo($id)
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

        $danhsach = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->findBy( ['customer_id' => $id]);



        $chitiet = $this->getDoctrine()
            ->getRepository(OrdersItems::class)
            ->findBy( ['order_id' => $danhsach]);


        //echo '<pre>';
        //var_dump($chitiet[0]->getProductId());



       $dodaichitiet =count($chitiet);
      //  echo($dodaichitiet);


           if( $dodaichitiet>0) {

               for ($x = 0; $x < $dodaichitiet; $x++) {


                   $sanpham[$x] = $this->getDoctrine()
                       ->getRepository(Products::class)
                       ->findOneBy(['id' => $chitiet[$x]->getProductId()]);

               //   $total[$x]=(int)$sanpham[$x]->getPrice()*(int)$chitiet[$x]->getQuantity();



               }


           }
           else
           {
               $total=0;
               $sanpham= "khong co san pham nao";
           }


        return $this->render('customer/Customer01.html.twig', ['customer' => $customer, 'user'=>$user,'danhsach'=>$danhsach,'chitiet'=>$chitiet,'sanpham'=>$sanpham]);
    }
}
