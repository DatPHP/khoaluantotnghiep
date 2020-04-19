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

/* admin/editCustomer.html.twig */
class __TwigTemplate_14487ae27f1c795afa0703ac43c5bf6e3b001a91b7579d2d3bb11c41011704b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editCustomer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editCustomer.html.twig"));

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
        // line 67
        echo "

                <h3> id  #";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "  _Customer:  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "username", [], "any", false, false, false, 69), "html", null, true);
        echo " </h3>


                   <h1> Customer Infor  </h1>

                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">

                    <div class=\"col-sm-6 \">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "firstname", [], "any", false, false, false, 78), 'row');
        echo "
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "lastname", [], "any", false, false, false, 79), 'row');
        echo "
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'row');
        echo "
                </div>
                    <div class=\"col-sm-6 \">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'row');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "address", [], "any", false, false, false, 84), 'row');
        echo "
                    </div>
                </div>




                  <div class=\"deader\">


                      <h1> Account Managent </h1>
                  </div>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "username", [], "any", false, false, false, 99), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), 'row');
        echo "
                    </div>
                </div>


                <input id=\"as\" type=\"submit\" class=\"btn btn btn-primary\" value=\"save\" />


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


</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/editCustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 102,  162 => 99,  144 => 84,  140 => 83,  134 => 80,  130 => 79,  126 => 78,  119 => 74,  109 => 69,  105 => 67,  58 => 14,  43 => 1,);
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


</style>", "admin/editCustomer.html.twig", "/var/www/html/myProject/datshop/templates/admin/editCustomer.html.twig");
    }
}
