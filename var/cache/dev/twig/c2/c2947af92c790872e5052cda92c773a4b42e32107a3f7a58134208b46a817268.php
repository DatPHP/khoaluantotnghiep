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

/* default/login.html.twig */
class __TwigTemplate_21791bc6285cd7212341ffa9782ba1a88bdf06972b84ca4cff391667f2fe9578 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body#LoginForm{ background-image:url(\"https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg\"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

    .form-heading { color:white; font-size:23px;}
    .panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
    .panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
    .login-form .form-control {
        background: #f7f7f7 none repeat scroll 0 0;
        border: 1px solid #d4d4d4;
        border-radius: 4px;
        font-size: 14px;
        height: 50px;
        line-height: 50px;
    }
    .main-div {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 2px;
        margin: 10px auto 30px;
        max-width: 38%;
        padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
        margin-bottom:10px;
    }
    .login-form{ text-align:center;}
    .forgot a {
        color: #777777;
        font-size: 14px;
        text-decoration: underline;
    }
    .login-form  .btn.btn-primary {
        background: #f0ad4e none repeat scroll 0 0;
        border-color: #f0ad4e;
        color: #ffffff;
        font-size: 14px;
        width: 100%;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }
    .forgot {
        text-align: left; margin-bottom:30px;
    }
    .botto-text {
        color: #ffffff;
        font-size: 14px;
        margin: auto;
    }
    .login-form .btn.btn-primary.reset {
        background: #ff9900 none repeat scroll 0 0;
    }
    .back { text-align: left; margin-top:10px;}
    .back a {color: #444444; font-size: 13px;text-decoration: none;}






</style>


<html>
<head>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id=\"LoginForm\">
<div class=\"container\">
    <h1 class=\"form-heading\" > <a href=\"http://localhost:8000\"> HOME </a></h1>
    <div class=\"login-form\">
        <div class=\"main-div\">
            <div class=\"panel\">
                <h2>Customer Login</h2>
                <p>Please enter your email and password</p>
            </div>



            <div class=\"log-form\">
                <h2 style=\"text-align: center\">Login to your account</h2>

                ";
        // line 93
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 93, $this->source); })()))) {
            // line 94
            echo "                    <div style=\"color: red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "</div><br>
                ";
        }
        // line 96
        echo "
                <div class=\"form\">
                    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'widget');
        echo "
                    <div class=\"fill\">  ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "username", [], "any", false, false, false, 100), 'row');
        echo " </div>
                    <div class=\"fill\"> ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "password", [], "any", false, false, false, 101), 'row');
        echo " </div>

                    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
                    <button> Not User! <a href=\"http://localhost:8000/register\"> Register?</a> </button>
                </div>

            </div>

        </div>
        <p class=\"botto-text\"> Designed by Sunil Rajput</p>
    </div></div></div>

</body>
</html>







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 103,  161 => 101,  157 => 100,  153 => 99,  149 => 98,  145 => 96,  139 => 94,  137 => 93,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body#LoginForm{ background-image:url(\"https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg\"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

    .form-heading { color:white; font-size:23px;}
    .panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
    .panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
    .login-form .form-control {
        background: #f7f7f7 none repeat scroll 0 0;
        border: 1px solid #d4d4d4;
        border-radius: 4px;
        font-size: 14px;
        height: 50px;
        line-height: 50px;
    }
    .main-div {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 2px;
        margin: 10px auto 30px;
        max-width: 38%;
        padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
        margin-bottom:10px;
    }
    .login-form{ text-align:center;}
    .forgot a {
        color: #777777;
        font-size: 14px;
        text-decoration: underline;
    }
    .login-form  .btn.btn-primary {
        background: #f0ad4e none repeat scroll 0 0;
        border-color: #f0ad4e;
        color: #ffffff;
        font-size: 14px;
        width: 100%;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }
    .forgot {
        text-align: left; margin-bottom:30px;
    }
    .botto-text {
        color: #ffffff;
        font-size: 14px;
        margin: auto;
    }
    .login-form .btn.btn-primary.reset {
        background: #ff9900 none repeat scroll 0 0;
    }
    .back { text-align: left; margin-top:10px;}
    .back a {color: #444444; font-size: 13px;text-decoration: none;}






</style>


<html>
<head>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id=\"LoginForm\">
<div class=\"container\">
    <h1 class=\"form-heading\" > <a href=\"http://localhost:8000\"> HOME </a></h1>
    <div class=\"login-form\">
        <div class=\"main-div\">
            <div class=\"panel\">
                <h2>Customer Login</h2>
                <p>Please enter your email and password</p>
            </div>



            <div class=\"log-form\">
                <h2 style=\"text-align: center\">Login to your account</h2>

                {% if error is not empty %}
                    <div style=\"color: red\">{{ error }}</div><br>
                {% endif %}

                <div class=\"form\">
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <div class=\"fill\">  {{ form_row(form.username) }} </div>
                    <div class=\"fill\"> {{ form_row(form.password) }} </div>

                    {{ form_end(form) }}
                    <button> Not User! <a href=\"http://localhost:8000/register\"> Register?</a> </button>
                </div>

            </div>

        </div>
        <p class=\"botto-text\"> Designed by Sunil Rajput</p>
    </div></div></div>

</body>
</html>







", "default/login.html.twig", "/var/www/html/myProject/datshop/templates/default/login.html.twig");
    }
}
