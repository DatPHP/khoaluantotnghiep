<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 9/5/2018
 * Time: 1:44 PM
 */


namespace App\Controller;

use App\Entity\Customers;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CustomerAddController extends Controller
{
    /**
     * @Route("/add")
     */

    public function add  (Request $request)
    {



        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $defaults = array(
            'dueDate' => new \DateTime('today'),
            'firstName'=>'Nguyen Van',
            'lastName'=>'Dat',
        );

        $form = $formFactory->createBuilder(FormType::class, $defaults)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('firstName',TextType::class)
            ->add('lastName',TextType::class)
            ->getForm();


        $request = Request::createFromGlobals();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();



            // ... perform some action, such as saving the data to the database


            $response = new RedirectResponse('/task/success');
            $response->prepare($request);

            return $response->send();
        }

        return $this->render('default/success.html.twig', ['form' => $form->createView()]);

    }


    /**
     * @Route("/task/success")
     */

    public function successAction(){
        return $this->render('default/submit.html.twig' );
    }





}
