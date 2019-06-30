<?php
/**
 * Created by PhpStorm.
 * User: intern.nvdat1
 * Date: 10/5/2018
 * Time: 3:39 PM
 */

// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Products;
use App\Entity\Customers;

use App\Entity\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Mapping\Loader\AbstractLoader;



use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;






class AdminProductsEditController extends Controller
{
    /**
     * @Route("/edit/{id}", name="product_editProduct")
     */
    public function editProduct($id)
    {



        $type = $this->getDoctrine()
            ->getRepository(ProductType::class)
            ->findAll();

        $arrlength = count($type);
        for($x = 1; $x < $arrlength; $x++) {


           # $pd[$x] = $type[$x]->getType();

            $diaChi[$type[$x]->getType()]= $type [$x] ->getType();

        }




        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Products::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $defaults = array(
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'quantity' => $product->getQuantity(),

            'description' => $product->getDescription(),
            'kind' => $product->getTypeId(),
            'gender' => $product->getGender()
        );

        $session = new Session();
       $session->get('product_type');


        $form = $formFactory->createBuilder(FormType::class, $defaults)

            ->add('name', TextType::class)
            ->add('price', TextType::class)
            ->add('quantity', TextType::class)
/*
            ->add('types', EntityType::class, [
                'class' => ProductType::class,
                'choices' =>  $session->get('product_type')
            ])

*/



            ->add('kind', ChoiceType::class, array(
                'choices'  => $diaChi

            ))




            ->add('gender', ChoiceType::class, array(
                'choices'  => array(

                    'man' => 'man',
                    'women' => 'women',
                    'kid' => 'kid',

                ),
            ))
            ->add('description', TextType::class)


            ->getForm();

        $data = $form->getData();





        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $formData = $form->getData();


            $loai = $this->getDoctrine()
                ->getRepository(ProductType::class)
                ->findOneBy(['type'=>$formData['kind']]);

            $product->setName($formData['name']);
            $product->setPrice($formData['price']);
            $product->setQuantity($formData['quantity']);
            $product->setDescription($formData['description']);
            $product->setGender($formData['gender']);
            $product->setTypeId($loai->getId());

          //  $product->setCreatedDate((string)new \DateTime('today'));

            $entityManager->flush();



            $session = new Session();
            // set and get session attributes
            $session->set('product_id',$product->getId());

            $response = new RedirectResponse('/admin/products');
            $response->prepare($request);
            return $response->send();




        }

        $product->setName($data['name']);
        $product->setPrice($data['price']);
        $product->setQuantity($data['quantity']);
        $product->setDescription($data['description']);
        $product->setGender($data['gender']);

        $entityManager->flush();

        return $this->render('admin/editProduct.html.twig', ['product' => $product, 'form' => $form->createView()]);

    }




}