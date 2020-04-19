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

/* admin/addCustomer.html.twig */
class __TwigTemplate_6d44e171ecfd84a84b6f77f7d1657e2ad18d5b902ea8783892e2bfdefdf42fdb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addCustomer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addCustomer.html.twig"));

        // line 1
        echo "

<head>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin"), "html", null, true);
        echo ".css\" />

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title> New Customer</title>

</head>

<body class=\"home\">

<style>


    #form_firstName { display: flex; justify-content: space-between; }
    #form_lastName { display: flex; justify-content: space-between; }
    #form_username { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_phone { display: flex; justify-content: space-between; }
    #form_password { display: flex; justify-content: space-between; }
    #form_address { display: flex; justify-content: space-between; }
    #form_plainPassword { display: flex; justify-content: space-between; }



</style>
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

            ";
        // line 68
        echo "





            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
        echo "


            <h2>Customer Infor </h2>
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "firstName", [], "any", false, false, false, 81), 'row');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "lastName", [], "any", false, false, false, 82), 'row');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'row');
        echo "



                </div>
                <div class=\"col-sm-6 \">

                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "address", [], "any", false, false, false, 90), 'row');
        echo "
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "phone", [], "any", false, false, false, 91), 'row');
        echo "

                </div>

            </div>



           <h2> Acount Managent </h2>
            <div class=\"row\">

            <div class=\"col-sm-6\">
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "username", [], "any", false, false, false, 103), 'row');
        echo "
            </div>

                <div class=\"col-sm-6\">

            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "password", [], "any", false, false, false, 108), 'row');
        echo "
                </div>


            </div>


            <input id=\"as\" type=\"submit\" class=\"btn  btn-primary\" value=\"save\" />

            ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
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
        return "admin/addCustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 117,  169 => 108,  161 => 103,  146 => 91,  142 => 90,  132 => 83,  128 => 82,  124 => 81,  114 => 74,  106 => 68,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<head>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"{{asset('build/admin')}}.css\" />

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title> New Customer</title>

</head>

<body class=\"home\">

<style>


    #form_firstName { display: flex; justify-content: space-between; }
    #form_lastName { display: flex; justify-content: space-between; }
    #form_username { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_phone { display: flex; justify-content: space-between; }
    #form_password { display: flex; justify-content: space-between; }
    #form_address { display: flex; justify-content: space-between; }
    #form_plainPassword { display: flex; justify-content: space-between; }



</style>
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

            {#

            {{ form_start(form) }}
            {{ form_widget(form) }}

            <input type=\"submit\" class=\"btn\" value=\"Create\" />
            {{ form_end(form) }}

            #}






            {{ form_start(form) }}


            <h2>Customer Infor </h2>
            <div class=\"row\">

                <div class=\"col-sm-6 \">
                    {{ form_row(form.firstName) }}
                    {{ form_row(form.lastName) }}
                    {{ form_row(form.email) }}



                </div>
                <div class=\"col-sm-6 \">

                    {{ form_row(form.address) }}
                    {{ form_row(form.phone) }}

                </div>

            </div>



           <h2> Acount Managent </h2>
            <div class=\"row\">

            <div class=\"col-sm-6\">
            {{ form_row(form.username) }}
            </div>

                <div class=\"col-sm-6\">

            {{ form_row(form.password) }}
                </div>


            </div>


            <input id=\"as\" type=\"submit\" class=\"btn  btn-primary\" value=\"save\" />

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





", "admin/addCustomer.html.twig", "/var/www/html/myProject/datshop/templates/admin/addCustomer.html.twig");
    }
}
