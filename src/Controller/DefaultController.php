<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/6/2018
 * Time: 9:33 AM
 */

//DefaultController.php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\Task;
//use mysql_xdevapi\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Session\Session;
use Swift_Mailer;



// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;



use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



//them


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\IsTrue;





class DefaultController extends Controller
{
    /**
     * @Route("/default/form")
     */

    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class,array('label' => 'Name '))
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Đăng Nhập '))

            //  ->add('save', SubmitType::class)


            //them vo

            ->add('dueDate', DateType::class, array('widget' => 'single_text'))
            ->add('dueDate', DateType::class, array(
                'widget' => 'single_text',
                'required' => false
            ))




            ->getForm();




        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();



            return $this->redirectToRoute('task_success', ['task' => $task]);
        }





        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }




    /**
     * @Route("/success/", name="task_success")
     */
    public function successAction($task){
        return $this->render('default/success.html.twig',['task'=>$task] );
    }





    /**
     * @Route("/pdf/", name="pdf_success")
     */


    public function index()
    {

        $session = new Session();
        $firstName= $session->get('firstName');
         $lastName= $session->get('lastName');
        $email= $session->get('email');
        $phone= $session->get('phone');
        $address= $session->get('address');

        $sp=$session->get('sp' );

        $tong=$session->get('tong' );

        $tongcong=$session->get('tongcong' );
        $idsp=$session->get('idsp' );
        $so=$session->get('sosp' );


        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('default/mypdf.html.twig', [
            'title' => "Your bill",
            'firstName'=>$firstName,
            'lastName'=>$lastName,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
             'idsp'=>$idsp,
             'sosp'=>$so,
            'sp'=>$sp,
            'tong'=>$tong,
            'tongcong'=>$tongcong

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }



    /**
     * @Route("/sendEmail/{name}", name="email_success")
     */



    public function index1 ($name, \Swift_Mailer $mailer)
    {


        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('datnguyenvan170296@gmail.com')
            ->setTo('nguyenvandat170296@gmail.com.com')
            ->setBody(
                $this->renderView(
                //'templates/emails/registration.html.twig',
                    'emails/registration.html.twig',
                    ['name' => $name]
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    ['name' => $name]
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);

        return $this->render('default/success.html.twig');
    }


}