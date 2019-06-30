<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 10/5/2018
 * Time: 2:58 PM
 */



// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\Customers;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\Task;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;



class AdminProductsRemoveController extends Controller
{
    /**
     * @Route("/remove/{id}", name="product_deleteProduct")
     */
    public function deleteProduct($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Products::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }


        $entityManager->remove($product);
        $entityManager->flush();

        return new JsonResponse(array('data' => 'Delete Successfully'));
    }
}
