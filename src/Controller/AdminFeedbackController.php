<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Customers;
use App\Entity\Orders;
use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
// Include paginator interface
use Knp\Component\Pager\PaginatorInterface;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;


use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class AdminFeedbackController extends AbstractController
{
    /**
     * @Route("/admin/feedback", name="admin_feedback")
     */
    public function index(Request $request,PaginatorInterface $paginator)
    {


        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Contact::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->findAll();


/*
        echo '<pre>';
           var_dump($allAppointmentsQuery);
           exit;

*/

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );



        return $this->render('admin_feedback/index.html.twig', [
            'controller_name' => 'AdminFeedbackController','feedback' => $appointments
        ]);

    }




    /**
     * @Route("/feedback/del/{id}", name="Del_deleteFeedback")
     */
    public function deleteFeedback($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Feedbacks = $entityManager->getRepository(Contact::class)->find($id);

        if (!$Feedbacks) {
            throw $this->createNotFoundException(
                'No Feedbacks found  '.$id
            );
        }

        $entityManager->remove($Feedbacks);
        $entityManager->flush();

        return new JsonResponse(array('data' => 'Delete Successfully'));
//  return $this->redirectToRoute('');

    }

}
