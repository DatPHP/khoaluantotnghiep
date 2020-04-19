<?php

// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Orders;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\Task;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;



class AdminOrdersRemoveController extends AbstractController
{
        /**
        * @Route("/OrderDel/{id}", name="OrderDel_deleteOrder")
        */
public function deleteOrder($id)
{
        $entityManager = $this->getDoctrine()->getManager();
        $Orders = $entityManager->getRepository(Orders::class)->find($id);

        if (!$Orders) {
        throw $this->createNotFoundException(
        'No Orders found  '.$id
            );
            }


        $entityManager->remove($Orders);
        $entityManager->flush();

    return new JsonResponse(array('data' => 'Delete Successfully'));
//  return $this->redirectToRoute('');

}


}
