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

/* registration/register.html.twig */
class __TwigTemplate_217a07a451bbf05c147151a3c013f56f2d462c84b13f3c89f7a8e8217b5f1cc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Fonts -->
    <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,600\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"css/style.css\">

    <link rel=\"icon\" href=\"Favicon.png\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">

    <title>Laravel</title>
</head>
<body>


<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


    body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .navbar-laravel
    {
        box-shadow: 0 2px 4px rgba(0,0,0,.04);
    }

    .navbar-brand , .nav-link, .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    input
    {

        font-size: 10px;

    }

    #form_firstName { display: flex; justify-content: space-between;font-size: 15px; }
    #form_lastName { display: flex; justify-content: space-between;font-size: 15px; }
    #form_username { display: flex; justify-content: space-between;font-size: 15px; }
    #form_email { display: flex; justify-content: space-between; font-size: 15px;}
    #form_phone { display: flex; justify-content: space-between; font-size: 15px;}
    #form_password { display: flex; justify-content: space-between;font-size: 15px; }
    #form_address { display: flex; justify-content: space-between; font-size: 15px;}
    #form_plainPassword { display: flex; justify-content: space-between; font-size: 15px;}





</style>

<nav class=\"navbar navbar-expand-lg navbar-light navbar-laravel\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"http://localhost:8000\">Dat Shop </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://localhost:8000/login\"><b>Login </b></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><b>Register </b></a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class=\"login-form\">
    <div class=\"cotainer\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">Register</div>
                    <div class=\"card-body\">



                        ";
        // line 133
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 133, $this->source); })()))) {
            // line 134
            echo "                            <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 134, $this->source); })()), "html", null, true);
            echo " </div>
                        ";
        }
        // line 136
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_start');
        echo "

                        <div class=\"form-group row\">

                            <div class=\"row\">


                                <div class=\"col-md-6\">
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "firstName", [], "any", false, false, false, 144), 'row');
        echo "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "email", [], "any", false, false, false, 147), 'row');
        echo "
                                </div>


                                <div class=\"col-md-6\">
                                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "lastName", [], "any", false, false, false, 152), 'row');
        echo "
                                </div>


                                <div class=\"col-md-6\">
                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "phone", [], "any", false, false, false, 157), 'row');
        echo "

                                </div>


                                <div class=\"col-md-6\">
                                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "username", [], "any", false, false, false, 163), 'row');
        echo "

                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "password", [], "any", false, false, false, 168), 'row');
        echo "
                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "address", [], "any", false, false, false, 172), 'row');
        echo "
                                </div>


                                <div class=\"col-md-6\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "plainPassword", [], "any", false, false, false, 177), 'row');
        echo "
                                </div>

                                <label><input type=\"checkbox\" name=\"terms\"> I agree with the <a href=\"#\">Terms and Conditions</a>.</label>
                            </div>

                            ";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), 'form_end');
        echo "

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</main>





</body>
</html>
















";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 183,  252 => 177,  244 => 172,  237 => 168,  229 => 163,  220 => 157,  212 => 152,  204 => 147,  198 => 144,  186 => 136,  180 => 134,  178 => 133,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# templates/registration/register.html.twig #}

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Fonts -->
    <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,600\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"css/style.css\">

    <link rel=\"icon\" href=\"Favicon.png\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">

    <title>Laravel</title>
</head>
<body>


<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


    body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .navbar-laravel
    {
        box-shadow: 0 2px 4px rgba(0,0,0,.04);
    }

    .navbar-brand , .nav-link, .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    input
    {

        font-size: 10px;

    }

    #form_firstName { display: flex; justify-content: space-between;font-size: 15px; }
    #form_lastName { display: flex; justify-content: space-between;font-size: 15px; }
    #form_username { display: flex; justify-content: space-between;font-size: 15px; }
    #form_email { display: flex; justify-content: space-between; font-size: 15px;}
    #form_phone { display: flex; justify-content: space-between; font-size: 15px;}
    #form_password { display: flex; justify-content: space-between;font-size: 15px; }
    #form_address { display: flex; justify-content: space-between; font-size: 15px;}
    #form_plainPassword { display: flex; justify-content: space-between; font-size: 15px;}





</style>

<nav class=\"navbar navbar-expand-lg navbar-light navbar-laravel\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"http://localhost:8000\">Dat Shop </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://localhost:8000/login\"><b>Login </b></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><b>Register </b></a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class=\"login-form\">
    <div class=\"cotainer\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">Register</div>
                    <div class=\"card-body\">



                        {% if error is not empty %}
                            <div>{{ error }} </div>
                        {% endif %}
                        {{ form_start(form) }}

                        <div class=\"form-group row\">

                            <div class=\"row\">


                                <div class=\"col-md-6\">
                                    {{ form_row(form.firstName) }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(form.email) }}
                                </div>


                                <div class=\"col-md-6\">
                                    {{ form_row(form.lastName) }}
                                </div>


                                <div class=\"col-md-6\">
                                    {{ form_row(form.phone) }}

                                </div>


                                <div class=\"col-md-6\">
                                    {{ form_row(form.username) }}

                                </div>

                                <div class=\"col-md-6\">
                                    {{ form_row(form.password) }}
                                </div>

                                <div class=\"col-md-6\">
                                    {{ form_row(form.address ) }}
                                </div>


                                <div class=\"col-md-6\">
                                    {{ form_row(form.plainPassword) }}
                                </div>

                                <label><input type=\"checkbox\" name=\"terms\"> I agree with the <a href=\"#\">Terms and Conditions</a>.</label>
                            </div>

                            {{ form_end(form) }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</main>





</body>
</html>
















", "registration/register.html.twig", "/var/www/html/myProject/datshop/templates/registration/register.html.twig");
    }
}
