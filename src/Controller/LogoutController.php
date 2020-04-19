<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 9/17/2018
 * Time: 2:05 PM
 */

namespace App\Controller;

/*use http\Env\Request;*/
use App\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\HttpFoundation\JsonResponse;

class LogoutController extends AbstractController
{
    /**
     * @Route("/logout", name="logout", methods={"POST", "GET"})
     */

    public function ajaxAction(Request $request)
    {
        $session = new Session();
        $session->clear();
        return new JsonResponse(array('data' => 'this is a json response'));
    }
}
