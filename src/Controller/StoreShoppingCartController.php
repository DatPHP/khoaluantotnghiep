<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/23/2018
 * Time: 3:14 PM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Task;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Mapping\Loader\AbstractLoader;






class StoreShoppingCartController extends Controller
{

    /**
     * @Route("/product_card/{id}", name="product_card")
     */
    public function card($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Products::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        if(isset($_GET['id']) && !empty('id'))
        {
            $id=$_GET('id');

            echo @$_SESSION['cart_'.$id] +=1;
            foreach ($_SESSION as $item=>$value)
            {
                echo $item.' '.$value;

            }
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






        return $this->render('list/cart.html.twig', ['product' => $product]);
    }
}