<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 10/7/2018
 * Time: 2:12 AM
 */

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
use function PHPSTORM_META\type;
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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Validator\Constraints\DateTime;





class AdminProductsAddController extends AbstractController
{
    /**
     * @Route("/add", name="product_addProduct")
     */
    public function addProduct()
    {



        $type = $this->getDoctrine()
            ->getRepository(ProductType::class)
            ->findAll();

        $arrlength = count($type);
        for($x = 1; $x < $arrlength; $x++) {


            # $pd[$x] = $type[$x]->getType();

            $diaChi[$type[$x]->getType()]= $type [$x] ->getType();

        }


        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();


        $form = $formFactory->createBuilder(FormType::class)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
            ->add('quantity', TextType::class)
            ->add('description', TextType::class)
            ->add('kind', ChoiceType::class, array(
                'choices' => $diaChi


            ))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(

                    'man' => 'man',
                    'women' => 'women',
                    'kid' => 'kid',

                ),
            ))

            ->getForm();


        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $log = '';
            $formData = $form->getData();



            $loai = $this->getDoctrine()
                ->getRepository(ProductType::class)
                ->findOneBy(['type'=>$formData['kind']]);

            $entityManager = $this->getDoctrine()->getManager();





            $newproduct = new Products();

            $date = date_create('today');
            $createdDate =date_format($date, 'Y-m-d');



            $newproduct->setName($formData['name']);
            $newproduct->setPrice($formData['price']);
            $newproduct->setGender($formData['gender']);
            $newproduct->setQuantity($formData['quantity']);
            $newproduct->setCreatedDate($createdDate);

            $newproduct->setTypeId($loai->getId());

            $newproduct->setDescription($formData['description']);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($newproduct);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();





            $session = new Session();
            // set and get session attributes
            $session->set('product_id', $newproduct->getId());

            $response = new RedirectResponse('/admin/products');
            $response->prepare($request);
            return $response->send();


        }


        $news = new session();
        $news->get('name');

        return $this->render('admin/addProduct.html.twig', ['form' => $form->createView(), 'news' => $news]);

    }



}

