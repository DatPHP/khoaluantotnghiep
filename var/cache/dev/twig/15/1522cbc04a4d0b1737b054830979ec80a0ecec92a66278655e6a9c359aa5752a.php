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

/* customer/information.html.twig */
class __TwigTemplate_e5f0b96b3a80c6e177f374c58a4d25f8cfe1a1c77fd3eb6b072037e146526bd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/information.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Log In </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">



    <style type=\"text/css\">

        body{

            background-color: #00aa88;
        }

       .border
       {

           width: 450px;
           height:280px ;
           border: 1px solid;
           text-align: center;
           margin: 250px auto;
           padding: 20px;

           background-color: lightyellow;
       }
        .row
        {
            padding-top: 20px;
            text-align: center;
        }







    </style>
</head>
<body>



<div class=\"modal-content\">


<form class=\"border\">
    <h1><b>LOGIN </b> </h1>
    <div class=\"row\" > ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo " </div>
    <div class=\"row\" >";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'row');
        echo "</div>
    <div class=\"row\" >";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'row');
        echo " </div>

    <div class=\"form-check mb-2 mr-sm-2\">
        <label class=\"form-check-label\">
            <input class=\"form-check-input \"type=\"checkbox\"> Remember me
        </label>
    </div>


    <div class=\"row\"><button type=\"submit\">Đăng Nhập </button> </div>

    <p class=\"message\">Not registered? <a href=\"#\">Create an account</a></p>
";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "

</form>

</div>


</body>

<script>
    \$('.message a').click(function(){
        \$('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
    });


</script>
</html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "customer/information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 72,  111 => 60,  107 => 59,  103 => 58,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{# templates/customer/information.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Log In </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">



    <style type=\"text/css\">

        body{

            background-color: #00aa88;
        }

       .border
       {

           width: 450px;
           height:280px ;
           border: 1px solid;
           text-align: center;
           margin: 250px auto;
           padding: 20px;

           background-color: lightyellow;
       }
        .row
        {
            padding-top: 20px;
            text-align: center;
        }







    </style>
</head>
<body>



<div class=\"modal-content\">


<form class=\"border\">
    <h1><b>LOGIN </b> </h1>
    <div class=\"row\" > {{ form_start(form) }} </div>
    <div class=\"row\" >{{ form_row(form.name) }}</div>
    <div class=\"row\" >{{ form_row(form.password) }} </div>

    <div class=\"form-check mb-2 mr-sm-2\">
        <label class=\"form-check-label\">
            <input class=\"form-check-input \"type=\"checkbox\"> Remember me
        </label>
    </div>


    <div class=\"row\"><button type=\"submit\">Đăng Nhập </button> </div>

    <p class=\"message\">Not registered? <a href=\"#\">Create an account</a></p>
{{ form_end(form) }}

</form>

</div>


</body>

<script>
    \$('.message a').click(function(){
        \$('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
    });


</script>
</html>



", "customer/information.html.twig", "/var/www/html/myProject/datshop/templates/customer/information.html.twig");
    }
}
