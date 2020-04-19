<?php

        namespace App\Controller;

        // ...
        use App\Entity\Orders;
        use App\Entity\Customers;
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
         use Symfony\Component\Form\Extension\Core\Type\ChoiceType;







class AdminOrderEditController extends AbstractController
            {
                /**
                 * @Route("/orderEdit/{id}", name="orderEdit_find")
                 */
                public function find ($id)
                {


                    $entityManager = $this->getDoctrine()->getManager();
                    $order = $entityManager->getRepository(Orders::class)->find($id);

                    if (!$order) {
                        throw $this->createNotFoundException(
                            'No product found for id ' . $id
                        );
                    }



//                    $entityManager = $this->getDoctrine()->getManager();
//                    $customer = $entityManager->getRepository(Customers::class)->find(
//
//                        $order = $entityManager->getRepository(Orders::class)->find($id));



                    $formFactory = Forms::createFormFactoryBuilder()
                        ->addExtension(new HttpFoundationExtension())
                        ->getFormFactory();

                    $defaults = array(

                        'created_date' => (date("Y-m-d h:i:s")),
                        'status' => 'pending',

                    );

                    $form = $formFactory->createBuilder(FormType::class, $defaults)

                        ->add('created_date', TextType::class)
                        ->add('status', ChoiceType::class, array(
                            'choices'  => array(
                                'pending' => 'pending',
                                'finished' => 'finished',
                                'canceled' => 'cancelled',
                            ),
                        ))

                        ->getForm();

                    $data = $form->getData();

                $request = Request::createFromGlobals();
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {

                       $formData = $form->getData();
                       $order->setCreatedDate(date("Y-m-d h:i:s"));
                       $order->setStatus($formData['status']);

                   $entityManager->flush();


                    $response = new RedirectResponse('/admin/orders');
                    $response->prepare($request);
                    return $response->send();


                }
                $order->setCreatedDate(date("Y-m-d h:i:s"));
                $order->setStatus('Pendding');

                $entityManager->flush();

                return $this->render('admin/editOrder.html.twig', ['order' => $order,'form' => $form->createView()]);

            }

            }

            ?>
