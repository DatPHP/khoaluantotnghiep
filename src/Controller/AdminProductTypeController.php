<?php

namespace App\Controller;

use App\Entity\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductTypeController extends AbstractController
{
    /**
     * @Route("/admin/product/type", name="addmin_product_type")
     */
    public function index()
    {

        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $form = $formFactory->createBuilder(FormType::class)
            ->add('product_type', TextType::class)
            ->getForm();


        $request = Request::createFromGlobals();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();




            $session = new Session();
            $session->set('product_type', $data['product_type'] );

            $entityManager = $this->getDoctrine()->getManager();

            $productType = new ProductType();

            $productType->setType($data['product_type']);


            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($productType);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            // ... perform some action, such as saving the data to the database


            $response = new RedirectResponse('/admin/products');
            $response->prepare($request);

            return $response->send();
        }



        return $this->render('admin_product_type/index.html.twig', [
            'controller_name' => 'AddminProductTypeController','form' => $form->createView()
        ]);
    }


}
