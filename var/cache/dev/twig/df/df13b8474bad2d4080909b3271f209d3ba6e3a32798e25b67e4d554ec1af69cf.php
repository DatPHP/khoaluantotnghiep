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

/* reset_password/index.html.twig */
class __TwigTemplate_7f74ac633ad01a49475b33040bbea1b7c41332e26a0d040f4f3f53e30ca0b6d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/index.html.twig"));

        // line 1
        echo "



<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">

<!-- jQuery library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<!-- Popper JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        padding-top: 15px;
        font-size: 12px
    }
    .main {
        max-width: 320px;
        margin: 0 auto;
    }
    .login-or {
        position: relative;
        font-size: 18px;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }
    .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
    h3 {
        text-align: center;
        line-height: 300%;
    }


    h1
    {
        margin-left: 38%;


    }





</style>
<div class=\"container\">

    <div class=\"row\">

        <div class=\"main\">





            <div class=\"container\">
                <h1 class=\"form-heading\" > <a href=\"http://localhost:8000\"> Home</a></h1>
                <div class=\"login-form\">
                    <div class=\"main-div\">
                        <div class=\"log-form\">
                            ";
        // line 91
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 91, $this->source); })()))) {
            // line 92
            echo "                                <div style=\"color: red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "</div><br>
                            ";
        }
        // line 94
        echo "                            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form');
        echo "


                        </div>

                    </div>
                    <br>
                    <p class=\"botto-text\"> Designed by Dat Shop </p>
                </div></div></div>

    </div>

</div>
</div>


<style>

    input
    {
        width: 280px;
        height: 40px;
        font-size: 18px;

    }
    label
    {
        font-size: 20px;
    }
    button
    {
        margin-top: 10px;
        width: 200px;
        height: 45px;
        font-size: 18px;
        margin-left: 38px;


    }


    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: black;

    }
    button[type=submit]:hover
    {
        background-color: black;
        color: white;


    }

</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 94,  137 => 92,  135 => 91,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">

<!-- jQuery library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<!-- Popper JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        padding-top: 15px;
        font-size: 12px
    }
    .main {
        max-width: 320px;
        margin: 0 auto;
    }
    .login-or {
        position: relative;
        font-size: 18px;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }
    .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
    h3 {
        text-align: center;
        line-height: 300%;
    }


    h1
    {
        margin-left: 38%;


    }





</style>
<div class=\"container\">

    <div class=\"row\">

        <div class=\"main\">





            <div class=\"container\">
                <h1 class=\"form-heading\" > <a href=\"http://localhost:8000\"> Home</a></h1>
                <div class=\"login-form\">
                    <div class=\"main-div\">
                        <div class=\"log-form\">
                            {% if error is not empty %}
                                <div style=\"color: red\">{{ error }}</div><br>
                            {% endif %}
                            {{ form(form) }}


                        </div>

                    </div>
                    <br>
                    <p class=\"botto-text\"> Designed by Dat Shop </p>
                </div></div></div>

    </div>

</div>
</div>


<style>

    input
    {
        width: 280px;
        height: 40px;
        font-size: 18px;

    }
    label
    {
        font-size: 20px;
    }
    button
    {
        margin-top: 10px;
        width: 200px;
        height: 45px;
        font-size: 18px;
        margin-left: 38px;


    }


    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: black;

    }
    button[type=submit]:hover
    {
        background-color: black;
        color: white;


    }

</style>
", "reset_password/index.html.twig", "/var/www/html/myProject/datshop/templates/reset_password/index.html.twig");
    }
}
