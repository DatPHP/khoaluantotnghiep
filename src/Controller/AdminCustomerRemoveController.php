<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 10/7/2018
 * Time: 1:56 PM
 */


// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Users;
use App\Entity\Customers;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\Task;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;



class AdminCustomerRemoveController extends Controller
{
    /**
     * @Route("/CustomerDel/{id}", name="CustomerDel_deleteCustomer")
     */
    public function deleteCustomer($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $customer = $entityManager->getRepository(Customers::class)->find($id);

        if (!$customer) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);


        $entityManager->remove($customer);
        $entityManager->remove($user);
        $entityManager->flush();


        return new JsonResponse(array('data' => 'Delete Successfully'));

    }
}
