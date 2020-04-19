<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* customer/editInfo.html.twig */
class __TwigTemplate_6280be56d52be695b8bbcb86d31dd6675bbac0dce248ad9f02e3f097e5790704 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/editInfo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/editInfo.html.twig"));

        // line 1
        echo "


";
        // line 31
        echo "
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang=\"en\">

<title>Sign up facundo farm & resort</title>

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<head>
    <script src=\"jquery/jquery.min.js\"></script>
    <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!---- boostrap.min link local ----->

    <link rel=\"stylesheet\" href=\"css/style.css\">
    <!---- boostrap.min link local ----->

    <script src=\"js/bootstrap.min.js\"></script>
    <!---- Boostrap js link local ----->

    <link rel=\"icon\" href=\"images/icon.png\" type=\"image/x-icon\" />
    <!---- Icon link local ----->

    <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
    <!---- Font awesom link local ----->
</head>

<body>



<style>
    body {background-color:#eee;}
    .container-fluid {padding:50px;}
    .container{background-color:white;padding:50px;   }
    #title{font-family: 'Lobster', cursive;;}




    #form_firstName { display: flex; justify-content: space-between; }
    #form_lastName { display: flex; justify-content: space-between; }
    #form_username { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_phone { display: flex; justify-content: space-between; }
    #form_password { display: flex; justify-content: space-between; }
    #form_address { display: flex; justify-content: space-between; }
    #form_plainPassword { display: flex; justify-content: space-between; }


</style>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h2 class=\"text-center\" id=\"title\">Dat shop</h2>
        <p class=\"text-center\">
            <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer: follow me on facebook <a href=\"https://www.facebook.com/JheanYu\"> John niro yumang</a> inspired from <a href=\"https://p.w3layouts.com/\">https://p.w3layouts.com/</a>.</small>
        </p>





        <div class=\"user-dashboard\">

            ";
        // line 113
        echo "

            <h3> id  #";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115), "html", null, true);
        echo "  _Customer:  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "username", [], "any", false, false, false, 115), "html", null, true);
        echo " </h3>


            <h1> Customer Infor  </h1>

            ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "firstname", [], "any", false, false, false, 124), 'row');
        echo "
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "lastname", [], "any", false, false, false, 125), 'row');
        echo "
                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), 'row');
        echo "
                </div>
                <div class=\"col-sm-6 \">
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "phone", [], "any", false, false, false, 129), 'row');
        echo "
                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "address", [], "any", false, false, false, 130), 'row');
        echo "
                </div>
            </div>




            <div class=\"deader\">


                <h1> Account Managent </h1>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "username", [], "any", false, false, false, 145), 'row');
        echo "
                </div>
                <div class=\"col-sm-6\">
                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "password", [], "any", false, false, false, 148), 'row');
        echo "
                </div>
            </div>


            <input id=\"as\" type=\"submit\" class=\"btn btn btn-primary\" value=\"save\" />


        </div>
















    </div>
        </div>
    </div>
    <p class=\"text-center\">
        <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:<a href=\"http://www.psau.edu.ph/\"> Pampanga state agricultural university ?</a> BS. Information and technology students @2017 Credits: <a href=\"https://v4-alpha.getbootstrap.com/\">boostrap v4.</a></small>
    </p>
</div>
<div>

URL trang hiện tại : <span id=\"this_url\"></span>.
Title trang hiện tại : <span id=\"this_title\"></span>.


</div>



</body>


<script>

    localStorage.setItem('code',\$(location).attr('href') );

    localStorage.getItem('code');

    \$(document).ready(function () {
        alert(\$(location).attr('href'));

    });




</script>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "customer/editInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 148,  180 => 145,  162 => 130,  158 => 129,  152 => 126,  148 => 125,  144 => 124,  137 => 120,  127 => 115,  123 => 113,  48 => 31,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{#

    <h3> id  #{{ customer.id }}  _Customer:  {{ user.username }} </h3>


    <h1> Customer Infor  </h1>

    {{ form_start(form) }}



            {{ form_row(form.firstname) }}
            {{ form_row(form.lastname) }}
            {{ form_row(form.email) }}
            {{ form_row(form.phone) }}
            {{ form_row(form.address) }}


            {{ form_row(form.username) }}

            {{ form_row(form.password) }}



    <input id=\"as\" type=\"submit\" class=\"btn btn btn-primary\" value=\"save\" />

    #}

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang=\"en\">

<title>Sign up facundo farm & resort</title>

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<head>
    <script src=\"jquery/jquery.min.js\"></script>
    <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!---- boostrap.min link local ----->

    <link rel=\"stylesheet\" href=\"css/style.css\">
    <!---- boostrap.min link local ----->

    <script src=\"js/bootstrap.min.js\"></script>
    <!---- Boostrap js link local ----->

    <link rel=\"icon\" href=\"images/icon.png\" type=\"image/x-icon\" />
    <!---- Icon link local ----->

    <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
    <!---- Font awesom link local ----->
</head>

<body>



<style>
    body {background-color:#eee;}
    .container-fluid {padding:50px;}
    .container{background-color:white;padding:50px;   }
    #title{font-family: 'Lobster', cursive;;}




    #form_firstName { display: flex; justify-content: space-between; }
    #form_lastName { display: flex; justify-content: space-between; }
    #form_username { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_phone { display: flex; justify-content: space-between; }
    #form_password { display: flex; justify-content: space-between; }
    #form_address { display: flex; justify-content: space-between; }
    #form_plainPassword { display: flex; justify-content: space-between; }


</style>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h2 class=\"text-center\" id=\"title\">Dat shop</h2>
        <p class=\"text-center\">
            <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer: follow me on facebook <a href=\"https://www.facebook.com/JheanYu\"> John niro yumang</a> inspired from <a href=\"https://p.w3layouts.com/\">https://p.w3layouts.com/</a>.</small>
        </p>





        <div class=\"user-dashboard\">

            {#

            {{ form_start(form) }}
            {{ form_widget(form) }}

            <input type=\"submit\" class=\"btn\" value=\"Create\" />
            {{ form_end(form) }}

            #}


            <h3> id  #{{ customer.id }}  _Customer:  {{ user.username }} </h3>


            <h1> Customer Infor  </h1>

            {{ form_start(form) }}
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    {{ form_row(form.firstname) }}
                    {{ form_row(form.lastname) }}
                    {{ form_row(form.email) }}
                </div>
                <div class=\"col-sm-6 \">
                    {{ form_row(form.phone) }}
                    {{ form_row(form.address) }}
                </div>
            </div>




            <div class=\"deader\">


                <h1> Account Managent </h1>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    {{ form_row(form.username) }}
                </div>
                <div class=\"col-sm-6\">
                    {{ form_row(form.password) }}
                </div>
            </div>


            <input id=\"as\" type=\"submit\" class=\"btn btn btn-primary\" value=\"save\" />


        </div>
















    </div>
        </div>
    </div>
    <p class=\"text-center\">
        <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:<a href=\"http://www.psau.edu.ph/\"> Pampanga state agricultural university ?</a> BS. Information and technology students @2017 Credits: <a href=\"https://v4-alpha.getbootstrap.com/\">boostrap v4.</a></small>
    </p>
</div>
<div>

URL trang hiện tại : <span id=\"this_url\"></span>.
Title trang hiện tại : <span id=\"this_title\"></span>.


</div>



</body>


<script>

    localStorage.setItem('code',\$(location).attr('href') );

    localStorage.getItem('code');

    \$(document).ready(function () {
        alert(\$(location).attr('href'));

    });




</script>


</html>", "customer/editInfo.html.twig", "/var/www/html/myProject/datshop/templates/customer/editInfo.html.twig");
    }
}
