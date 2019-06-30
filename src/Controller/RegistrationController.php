<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/8/2018
 * Time: 1:51 PM
 */


// src/Controller/RegistrationController.php
// src/Controller/RegistrationController.php
namespace App\Controller;

use App\Entity\Customers;
use App\Form\UserType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request)
    {
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new HttpFoundationExtension())
            ->getFormFactory();

        $form = $formFactory->createBuilder(FormType::class)
            ->add('firstName', TextType::class,[
                    'attr'=>[
                        'class'=>'col-md-6',
                    ]
                ],

                array(
                    'constraints' => new NotBlank(),
                )


            )
            ->add('lastName', TextType::class,[
                    'attr'=>[
                        'class'=>'col-md-6',
                    ]
                ]

             ,   array(
                    'constraints' => new NotBlank(),
                )


            )
            ->add('email', EmailType::class,[
                    'attr'=>[
                        'class'=>'col-md-6',
                    ]
                ]



            )
            ->add('phone', TextType::class,[
                'attr'=>[
                    'class'=>'col-md-6',
                ]
            ])
            ->add('address', TextType::class,[
                'attr'=>[
                    'class'=>'col-md-6',
                ]
            ])
            ->add('username', TextType::class,[
                'attr'=>[
                    'class'=>'col-md-6',
                ]
            ])
            ->add('password', PasswordType::class,[
                'attr'=>[
                    'class'=>'col-md-6',
                ]



            ])
            ->add('plainPassword', PasswordType::class,


                [
                'attr'=>[
                    'class'=>'col-md-6',
                ]
            ],
                [
                    // instead of being set onto the object directly,
                    // this is read and encoded in the controller
                    'mapped' => false,
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Please enter a password',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Your password should be at least {{ limit }} characters',
                            'max' => 4096,
                        ]),
                    ]
                ]

                )

            ->add('register', SubmitType::class,[
                'attr'=>[
                    'class'=>'btn btn-primary',
                ]
            ])
            ->getForm();

        $request = Request::createFromGlobals();

        $form->handleRequest($request);
        $error = "";
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();


            if($formData['password'] != $formData['plainPassword']) {
                $error = 'Please enter the password';
                return $this->render('registration/register.html.twig', ['form' => $form->createView(), 'error' => $error]);
            } else {
                $entityManager = $this->getDoctrine()->getManager();


                $customer = new Customers();
                $customer->setFirstName($formData['firstName']);
                $customer->setLastName($formData['lastName']);
                $customer->setPhone($formData['phone']);
                $customer->setEmail($formData['email']);
                $customer->setAddress($formData['address']);
                $entityManager->persist($customer);
                $entityManager->flush();

                // relates this product to the category



                $user = new Users();
                $user->setId($customer->getId());


                $user->setUsername($formData['username']);
                $user->setPassword($formData['password']);
                $user->setRole('regular');


                $entityManager->persist($user);
                $entityManager->flush();


                $response = new RedirectResponse('/product');
                $response->prepare($request);

                return $response->send();
            }
        }
        return $this->render('registration/register.html.twig', ['error' => $error, 'form' => $form->createView()]);

    }
}

//        $user = new Users();
//        $form = $this->createForm(UserType::class, $user);
//
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//
//
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($user);
//            $entityManager->flush();
//
//
//            return $this->redirectToRoute('task/success');
//        }
//
//        return $this->render(
//            'registration/register.html.twig',
//            array('form' => $form->createView())
//        );
//    }
//}