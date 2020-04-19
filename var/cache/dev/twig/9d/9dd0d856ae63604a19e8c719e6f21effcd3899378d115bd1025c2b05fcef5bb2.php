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

/* admin/addProduct.html.twig */
class __TwigTemplate_8df40ede3fb1d8937d61f2251c32adfa309a1eefc11242d81f2998372b9320c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addProduct.html.twig"));

        // line 1
        echo "

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin"), "html", null, true);
        echo ".css\" />

<body class=\"home\">
<div class=\"container-fluid display-table\">
    <div class=\"row display-table-row\">
        <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell v-align box\" id=\"navigation\">
            <div class=\"logo\">

            </div>
            <div class=\"navi\">
                <ul>
                    <li class=\"active\"><a href=\"http://localhost:8000/admin\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Home</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/orders\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Orders</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/customers\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">customers</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/products\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">product</span></a></li>


                </ul>
            </div>
        </div>

        <div class=\"user-dashboard\">

            <style>
                #form_name { display: flex; justify-content: space-between; }
                #form_price { display: flex; justify-content: space-between; }
                #form_quantity { display: flex; justify-content: space-between; }
                #form_date { display: flex; justify-content: space-between; }
                #form_description { display: flex; justify-content: space-between; }
                #form_password { display: flex; justify-content: space-between; }
                #form_address { display: flex; justify-content: space-between; }
                #form_plainPassword { display: flex; justify-content: space-between; }




            </style>

            <h1> New product</h1>





            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'row');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62), 'row');
        echo "

                </div>
                <div class=\"col-sm-6 \">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "quantity", [], "any", false, false, false, 66), 'row');
        echo "
                  ";
        // line 68
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'row');
        echo "

                </div>
            </div>




            <div class= \"row\">
                <div class =\"col-sm-6  bg-success\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "gender", [], "any", false, false, false, 79), 'row');
        echo "
                </div>
                <div class =\"col-sm-6 bg-success\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "kind", [], "any", false, false, false, 82), 'row');
        echo "
                </div>
            </div>



            <input id=\"as\" type=\"submit\" class=\"btn  btn-primary\" value=\"Save\" />

            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "



        </div>
    </div>
</div>

</div>

<style>

    label
    {
        padding-left: 150px;
    }

    input[type=text] {

        width: 350px;
        height: 35px;
        padding-top: 20px;
        text-align: center;
        margin: 10px;
    }

    input[type=email] {

        width: 400px;
        height: 40px;
        padding-top: 20px;
        text-align: center;
        margin: 10px;

    }
    input[type=submit] {

        margin-top: 300px;
        width: 400px;
        height: 40px;
        text-align: center;

    }

    #as
    {
        width: 900px;
        height: 50px;
    }



</style>



<!-- Modal -->
<div id=\"add_project\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header login-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                <h4 class=\"modal-title\">Add Project</h4>
            </div>
            <div class=\"modal-body\">
                <input type=\"text\" placeholder=\"Project Title\" name=\"name\">
                <input type=\"text\" placeholder=\"Post of Post\" name=\"mail\">
                <input type=\"text\" placeholder=\"Author\" name=\"passsword\">
                <textarea placeholder=\"Desicrption\"></textarea>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"cancel\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"add-project\" data-dismiss=\"modal\">Save</button>
            </div>
        </div>

    </div>
</div>


<script>
    \$(document).ready(function(){
        \$('[data-toggle=\"offcanvas\"]').click(function(){
            \$(\"#navigation\").toggleClass(\"hidden-xs\");
        });
    });




</script>



</body>







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 90,  148 => 82,  142 => 79,  129 => 69,  126 => 68,  122 => 66,  115 => 62,  111 => 61,  104 => 57,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"{{asset('build/admin')}}.css\" />

<body class=\"home\">
<div class=\"container-fluid display-table\">
    <div class=\"row display-table-row\">
        <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell v-align box\" id=\"navigation\">
            <div class=\"logo\">

            </div>
            <div class=\"navi\">
                <ul>
                    <li class=\"active\"><a href=\"http://localhost:8000/admin\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Home</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/orders\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Orders</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/customers\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">customers</span></a></li>
                    <li><a href=\"http://localhost:8000/admin/products\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">product</span></a></li>


                </ul>
            </div>
        </div>

        <div class=\"user-dashboard\">

            <style>
                #form_name { display: flex; justify-content: space-between; }
                #form_price { display: flex; justify-content: space-between; }
                #form_quantity { display: flex; justify-content: space-between; }
                #form_date { display: flex; justify-content: space-between; }
                #form_description { display: flex; justify-content: space-between; }
                #form_password { display: flex; justify-content: space-between; }
                #form_address { display: flex; justify-content: space-between; }
                #form_plainPassword { display: flex; justify-content: space-between; }




            </style>

            <h1> New product</h1>





            {{ form_start(form) }}
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    {{ form_row(form.name) }}
                    {{ form_row(form.price) }}

                </div>
                <div class=\"col-sm-6 \">
                    {{ form_row(form.quantity) }}
                  {# {{ form_row(form.dueDate) }} #}

                    {{ form_row(form.description) }}

                </div>
            </div>




            <div class= \"row\">
                <div class =\"col-sm-6  bg-success\">
                    {{ form_row(form.gender) }}
                </div>
                <div class =\"col-sm-6 bg-success\">
                    {{ form_row(form.kind) }}
                </div>
            </div>



            <input id=\"as\" type=\"submit\" class=\"btn  btn-primary\" value=\"Save\" />

            {{ form_end(form) }}



        </div>
    </div>
</div>

</div>

<style>

    label
    {
        padding-left: 150px;
    }

    input[type=text] {

        width: 350px;
        height: 35px;
        padding-top: 20px;
        text-align: center;
        margin: 10px;
    }

    input[type=email] {

        width: 400px;
        height: 40px;
        padding-top: 20px;
        text-align: center;
        margin: 10px;

    }
    input[type=submit] {

        margin-top: 300px;
        width: 400px;
        height: 40px;
        text-align: center;

    }

    #as
    {
        width: 900px;
        height: 50px;
    }



</style>



<!-- Modal -->
<div id=\"add_project\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header login-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                <h4 class=\"modal-title\">Add Project</h4>
            </div>
            <div class=\"modal-body\">
                <input type=\"text\" placeholder=\"Project Title\" name=\"name\">
                <input type=\"text\" placeholder=\"Post of Post\" name=\"mail\">
                <input type=\"text\" placeholder=\"Author\" name=\"passsword\">
                <textarea placeholder=\"Desicrption\"></textarea>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"cancel\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"add-project\" data-dismiss=\"modal\">Save</button>
            </div>
        </div>

    </div>
</div>


<script>
    \$(document).ready(function(){
        \$('[data-toggle=\"offcanvas\"]').click(function(){
            \$(\"#navigation\").toggleClass(\"hidden-xs\");
        });
    });




</script>



</body>







", "admin/addProduct.html.twig", "/var/www/html/myProject/datshop/templates/admin/addProduct.html.twig");
    }
}
