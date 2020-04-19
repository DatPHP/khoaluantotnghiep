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

/* admin/showdetailorder.html.twig */
class __TwigTemplate_1e97be92456a6471c4ae9f5acfeb5bd37d47cfb3073aa7a820cc5c3118d55224 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showdetailorder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showdetailorder.html.twig"));

        // line 1
        echo "

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<style>

    .project-tab {
        padding: 10%;
        margin-top: -8%;
    }
    .project-tab #tabs{
        background: #007b5e;
        color: #eee;
    }
    .project-tab #tabs h6.section-title{
        color: #eee;
    }
    .project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #0062cc;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }
    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0062cc;
        font-size: 16px;
        font-weight: 600;
    }
    .project-tab .nav-link:hover {
        border: none;
    }
    .project-tab thead{
        background: #f3f3f3;
        color: #333;
    }
    .project-tab a{
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }


</style>

<!---------------

<section id=\"tabs\" class=\"project-tab\">
    <div class=\"container\">


    </div>
</section>------------------------>






<!---------------edit   order  ----------------------------->




<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">
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

            ";
        // line 112
        echo "


            <div class=\"ad\">

                <h1> Order Detail</h1>

                <table class=\"table\" cellspacing=\"0\">
                    <thead>
                    <tr>

                        <th> id </th>
                        <th>name</th>
                        <th>quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 131, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 132
            echo "
                        <tr>
                            <td> ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 134, $this->source); })()), $context["k"], [], "array", false, false, false, 134), "productid", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                            <td>   ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sanpham"]) || array_key_exists("sanpham", $context) ? $context["sanpham"] : (function () { throw new RuntimeError('Variable "sanpham" does not exist.', 135, $this->source); })()), $context["k"], [], "array", false, false, false, 135), "name", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                            <td>    ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 136, $this->source); })()), $context["k"], [], "array", false, false, false, 136), "quantity", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                            <td> </td>



                        </tr>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </tbody>

                    <tfoot>
                    <tr colspan =\"2\">

                        <td> <b> Total: ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 150, $this->source); })()), "total", [], "any", false, false, false, 150), "html", null, true);
        echo " </b></td>
                    </tr>

                    </tfoot>

                </table>
            </div>




        </div>


        <div class=\"row\">

            <div class=\"col-md-2\">


            </div>
            <div class =\"col-md-10\">


            <h2> Information Buyer </h2>
            <p>#id:  ";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174), "html", null, true);
        echo "  </p>
            <p> Fullname:  ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 175, $this->source); })()), "firstname", [], "any", false, false, false, 175), "html", null, true);
        echo "   ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 175, $this->source); })()), "lastname", [], "any", false, false, false, 175), "html", null, true);
        echo "</p>
            <p> Email: ";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 176, $this->source); })()), "email", [], "any", false, false, false, 176), "html", null, true);
        echo "</p>

            <p> Phone: ";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 178, $this->source); })()), "phone", [], "any", false, false, false, 178), "html", null, true);
        echo "</p>

            <p> Address:  ";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 180, $this->source); })()), "address", [], "any", false, false, false, 180), "html", null, true);
        echo "</p>
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





<style>

    /*Main CSS*/


    /*Login Signup Page*/
    a:focus,a:hover,a{
        outline:none;
        text-decoration: none;
    }
    li,ul{
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .header-top i {
        font-size: 18px;
    }
    .bg-image {
        background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
        position: relative;
        width: 100%;
        height: 100vh;
        display: table;
    }

    .login-header {
        display: inline-block;
        width: 100%;
        background: #0e1a35;
    }

    .login-signup {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }

    .login-logo img {
        cursor: pointer;
        max-width: 171px;
        padding: 23px 15px 22px;
        width: 100%;
    }

    .login-header .navbar-right {
        margin-right: 0px;
    }

    .login-header .nav-tabs > li.active > a,
    .login-header .nav-tabs > li.active > a:focus,
    .login-header .nav-tabs > li.active > a:hover {
        background-color: transparent;
        border: none;
        color: #fff;
    }

    .login-header .nav-tabs > li > a {
        border: medium none;
        border-radius: 0;
        font-size: 14px;
        font-weight: 500;
        line-height: 48px;
        padding: 15px 30px;
        color: #fff;
    }

    .login-header .nav-tabs {
        border-bottom: none;
    }

    .login-header .nav-tabs > li {
        margin-bottom: 0px;
    }

    .login-header .nav > li > a:focus,
    .login-header .nav > li > a:hover {
        background: none;
        text-decoration: none;
    }

    .login-header .nav-tabs > li.active {
        border-bottom: 6px solid #5584ff;
    }

    .login-inner h1 {
        color: #8492af;
        font-size: 48px;
        font-weight: 300;
        text-align: center;
        margin-top: 0;
        margin-bottom: 20px;
    }

    .login-inner h1 span {
        color: #5584ff;
    }

    .login-form {
        text-align: center;
    }

    .login-form input {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
        border-image: none;
        border-style: none none solid;
        border-width: medium medium 1px;
        font-size: 13px;
        font-weight: 300;
        width: 100%;
        color: #8492af;
        padding: 15px 50px;
        font-size: 17px;
        max-width: 550px;
    }

    .login-form label {
        margin-bottom: 30px;
        width: 100%;
    }

    .user input {
        background: rgba(0, 0, 0, 0) url(\"../images/user.png\") no-repeat scroll 7px 12px;
    }

    .pass input {
        background: rgba(0, 0, 0, 0) url(\"../images/password.png\") no-repeat scroll 7px 12px;
    }

    .mail input {
        background: rgba(0, 0, 0, 0) url(\"../images/mail.png\") no-repeat scroll 4px 12px;
    }

    .login-signup .tab-content {
        background: #ffffff none repeat scroll 0 0;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
        display: inline-block;
        margin-top: -8px;
        width: 100%;
    }

    .form-btn {
        background: #5584ff none repeat scroll 0 0;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-weight: 400;
        max-width: 250px;
        padding: 10px 0;
        position: relative;
        width: 100%;
        margin: 40px 0;
        box-shadow: 0 2px 8px #d2d2d2;
        -moz-box-shadow: 0 2px 8px #d2d2d2;
        -webkit-box-shadow: 0 2px 8px #d2d2d2;
    }

    .form-btn::before {
        content: \"\";
        font-family: FontAwesome;
        position: absolute;
        right: 17px;
        top: 9px;
    }

    .form-details {
        padding: 35px 0;
    }

    .tab-content .tab-pane {
        padding: 70px 0;
    }


    /*Login Signup Page*/


    /*Home Page*/

    .home {
        background: #f6f7fa;
    }

    #navigation {
        background: #0e1a35;
    }

    #navigation {
        padding: 0;
    }

    .display-table {
        display: table;
        padding: 0;
        height: 100%;
        width: 100%;
    }

    .display-table-row {
        display: table-row;
        height: 100%;
    }

    .display-table-cell {
        display: table-cell;
        float: none;
        height: 100%;
    }

    .v-align {
        vertical-align: top;
    }
    .logo img {
        max-width: 180px;
        padding: 16px 0 17px;
        width: 100%;
    }

    .header-top {
        margin: 0;
        padding-top: 2px;
    }

    .header-top img {
        border-radius: 50%;
        max-width: 48px !important;
        width: 100%;
    }

    .add-project {
        background: #5584ff none repeat scroll 0 0;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 27px 10px 45px;
        position: relative;
    }

    .header-rightside .nav > li > a:focus,
    .header-rightside .nav > li > a:hover {
        background: none;
        text-decoration: none;
    }

    .add-project::before {
        background: rgba(0, 0, 0, 0) url(\"../images/plus.png\") no-repeat scroll 0 0;
        content: \"\";
    ;
        height: 12px;
        left: 17px;
        position: absolute;
        top: 12px;
        width: 12px;
    }

    .add-project:hover {
        color: #ffffff;
    }

    .header-top i {
        color: #0e1a35;
    }

    .icon-info {
        position: relative;
    }
    .navi i {
        font-size: 20px;
    }
    .label.label-primary {
        border-radius: 50%;
        font-size: 9px;
        left: 8px;
        position: absolute;
        top: -9px;
    }

    .icon-info .label {
        border: 2px solid #ffffff;
        font-weight: 500;
        padding: 3px 5px;
        text-align: center;
    }

    .header-top li {
        display: inline-block;
        text-align: center;
    }

    .header-top .dropdown-toggle {
        color: #0e1a35;
    }

    .header-top .dropdown-menu {
        border: medium none;
        left: -85px;
        padding: 17px;
    }
    .view {
        background: #5584ff none repeat scroll 0 0;
        border-radius: 100px;
        color: #ffffff;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        margin-top: 10px;
        padding: 10px 15px;
    }

    .navbar-content > span {
        font-size: 13px;
        font-weight: 700;
    }

    .img-responsive {
        width: 100%;
    }
    #navigation{
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .search input {
        border: none;
        font-size: 15px;
        padding: 15px 9px;
        width: 100%;
        background: rgba(0, 0, 0, 0) url(\"../images/search.png\") no-repeat scroll 99% 12px;
        color: #8492af;
    }

    header {
        background: #ffffff none repeat scroll 0 0;
        box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
        display: inline-block !important;
        line-height: 23px;
        padding: 15px;
        transition: all 0.5s ease 0s;
        width: 100%;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .logo {
        text-align: center;
    }

    .navi a {
        border-bottom: 1px solid #0d172e;
        border-top: 1px solid #0d172e;
        color: #ffffff;
        display: block;
        font-size: 17px;
        font-weight: 500;
        padding: 28px 20px;
        text-decoration: none;
    }

    .navi i {
        margin-right: 15px;
        color: #5584ff;
    }

    .navi .active a {
        background: #122143;
        border-left: 5px solid #5584ff;
        padding-left: 15px;
    }

    .navi a:hover {
        background: #122143 none repeat scroll 0 0;
        border-left: 5px solid #5584ff;
        display: block;
        padding-left: 15px;
    }

    .navbar-default {
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .navbar-toggle {
        border: none;
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
        background-color: rgba(0, 0, 0, 0);
    }

    .navbar-default .navbar-toggle .icon-bar {
        background-color: #0e1a35;
    }

    .circle-logo {
        margin: 0 auto;
        max-width: 30px !important;
        text-align: center;
    }
    .hidden-xs{
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .user-dashboard {
        padding: 0 20px;
    }

    .user-dashboard h1 {
        color: #0e1a35;
        font-size: 30px;
        font-weight: 500;
        margin: 0;
        padding: 21px 0;
    }
    .sales {
        background: #ffffff none repeat scroll 0 0;
        border: 1px solid #d4d9e3;
        display: inline-block;
        padding: 15px;
        width: 100%;
    }
    .sales button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: 1px solid #dadee7;
        border-radius: 100px;
        font-size: 15px;
        letter-spacing: 0.5px;
        padding-right: 32px;
        color: #0e1a35;
    }

    .sales button::before {
        content: \"\";
        font-family: FontAwesome;
        position: absolute;
        right: 12px;
        top: 11px;
    }
    .sales  .btn-group {
        float: right;
    }
    .sales h2 {
        color: #8492af;
        float: left;
        font-size: 21px;
        font-weight: 600;
        margin: 0;
        padding: 9px 0 0;
    }
    .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .sales .dropdown-menu{
        margin: 0px;
        padding: 0px;
        border: 0px;
        border-radius: 8px;
        width: 100%;
        color: #0e1a35;
    }
    .sales .btn-group.open .dropdown-toggle, .btn.active, .btn:active{
        box-shadow: none;
    }
    .sales .dropdown-menu > a {
        color: #0e1a35;
        display: inline-block;
        font-weight: 800;
        padding: 9px 0;
        text-align: center;
        width: 100%;
    }
    #my-cool-chart svg {
        width: 100%;
    }
    .sales .dropdown-menu > a:hover{
        color: #5584FF;
    }
    .shield-buttons {
        display: none;
    }
    .close, .close:focus, .close:hover {
        color: #fff;;
        opacity: 1;
        text-shadow: none;
    }
    .modal-body input {
        border: 1px solid #d4d9e3;
        font-size: 14px;
        font-weight: 300;
        margin: 5px 0;
        padding: 14px 10px;
        width: 100%;
        color: #8492af;
    }
    .modal-body textarea {
        border: 1px solid #d4d9e3;
        font-size: 14px;
        font-weight: 300;
        height: 200px;
        margin-top: 5px;
        padding: 9px 10px;
        width: 100%;
        color: #8492af;
    }
    .modal-header.login-header h4 {
        color: #ffffff;
    }
    .modal-footer .add-project {
        background: #5584ff none repeat scroll 0 0;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 30px;
        position: relative;
    }
    .modal-footer .add-project::before{display: none;}
    .modal-footer {
        border: 0 none;
        padding: 10px 15px 26px;
        text-align: right;
    }
    .cancel {
        background: #0E1A35     ;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 30px;
        position: relative;

    }
    .modal{
        top: 20%;
    }
    .modal-header .close {
        margin-top: 2px;
    }
    .search input:focus{
        border-bottom: 1px solid #BDC4D4;
        line-height:22px;
        transition: 0.1s all;
    }
    .modal-header.login-header {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    /*Main CSS*/






    @media only screen and (max-device-width: 767px) {
        .login-logo img {
            margin: 0 auto;
        }
        .login-details .nav-tabs > li {
            text-align: center;
            width: 50%;
        }
        .login-signup .login-inner h1 {
            font-size: 26px;
            margin-bottom: 0;
            margin-top: 10px;
        }
        .login-inner .login-form input {
            font-size: 15px;
            max-width: 100%;
            padding: 15px 45px;
        }
        .login-inner .form-details {
            padding: 25px;
        }
        .login-inner .login-form label {
            margin-bottom: 20px;
            width: 100%;
        }
        .login-inner .form-btn {
            margin: 0;
            max-width: 180px;
        }
        .tab-content .tab-pane {
            padding: 20px 0;
        }
        #navigation .navi a {
            font-size: 14px;
            padding: 20px;
            text-align: center;
        }
        #navigation .navi i {
            margin-right: 0px;
        }
        #navigation .navi a:hover,
        #navigation .navi .active a {
            background: #122143 none repeat scroll 0 0;
            border-left: none;
            display: block;
            padding-left: 20px;
        }
        header .header-top img {
            max-width: 38px !important;
        }
        .v-align header {
            padding: 12px 15px;
        }
        header .header-top li {
            padding-left: 13px;
            padding-right: 6px;
        }
        .navbar-default .navbar-toggle {
            border-color: rgba(0, 0, 0, 0);
        }
        .navbar-header .navbar-toggle {
            float: left;
            margin: 0;
            padding: 0;
            top: 12px;
        }
        button,
        html [type=\"button\"],
        [type=\"reset\"],
        [type=\"submit\"] {
            outline: medium none;
        }
        .user-dashboard .sales h2 {
            color: #8492af;
            float: left;
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            padding: 13px 0 0;
        }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
            font-size: 11px;
        }
        .user-dashboard .sales button {
            font-size: 11px;
            padding-right: 23px;
        }
        .user-dashboard .sales h2 {
            font-size: 12px;
        }
        .gutter{
            padding: 0;
        }
    }

    @media only screen and (max-device-width: 992px) {
        header .header-top li {
            padding-left: 20px !important;
            padding-right: 0;
        }
        header .logo img {
            max-width: 125px !important;
        }

    }

    @media only screen and (min-device-width: 767px) and (max-device-width: 998px){
        .user-dashboard .header-top {
            padding-top: 5px;
        }
        .user-dashboard .header-rightside {
            display: inline-block;
            float: left;
            width: 100%;
        }
        .user-dashboard .header-rightside .header-top img {
            max-width: 41px !important;
        }
        .user-dashboard .sales button {
            font-size: 10px;
        }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
            font-size: 12px;
        }
        .user-dashboard .sales h2 {
            font-size: 15px;
        }
    }
    @media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
            max-width: 130px;
            padding: 16px 0 17px;
            width: 100%;
        }
    }
















";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/showdetailorder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 180,  248 => 178,  243 => 176,  237 => 175,  233 => 174,  206 => 150,  199 => 145,  184 => 136,  180 => 135,  176 => 134,  172 => 132,  168 => 131,  147 => 112,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<style>

    .project-tab {
        padding: 10%;
        margin-top: -8%;
    }
    .project-tab #tabs{
        background: #007b5e;
        color: #eee;
    }
    .project-tab #tabs h6.section-title{
        color: #eee;
    }
    .project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #0062cc;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }
    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0062cc;
        font-size: 16px;
        font-weight: 600;
    }
    .project-tab .nav-link:hover {
        border: none;
    }
    .project-tab thead{
        background: #f3f3f3;
        color: #333;
    }
    .project-tab a{
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }


</style>

<!---------------

<section id=\"tabs\" class=\"project-tab\">
    <div class=\"container\">


    </div>
</section>------------------------>






<!---------------edit   order  ----------------------------->




<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">
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

            {#

            {{ form_start(form) }}
            {{ form_widget(form) }}

            <input type=\"submit\" class=\"btn\" value=\"Create\" />
            {{ form_end(form) }}

            #}



            <div class=\"ad\">

                <h1> Order Detail</h1>

                <table class=\"table\" cellspacing=\"0\">
                    <thead>
                    <tr>

                        <th> id </th>
                        <th>name</th>
                        <th>quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    {% for k in range(0, (chitiet|length - 1)) %}

                        <tr>
                            <td> {{chitiet[k].productid}}</td>
                            <td>   {{ sanpham[k].name }}</td>
                            <td>    {{chitiet[k].quantity}}</td>
                            <td> </td>



                        </tr>


                    {% endfor %}
                    </tbody>

                    <tfoot>
                    <tr colspan =\"2\">

                        <td> <b> Total: {{orders.total}} </b></td>
                    </tr>

                    </tfoot>

                </table>
            </div>




        </div>


        <div class=\"row\">

            <div class=\"col-md-2\">


            </div>
            <div class =\"col-md-10\">


            <h2> Information Buyer </h2>
            <p>#id:  {{ customer.id }}  </p>
            <p> Fullname:  {{ customer.firstname }}   {{ customer.lastname }}</p>
            <p> Email: {{ customer.email }}</p>

            <p> Phone: {{ customer.phone }}</p>

            <p> Address:  {{ customer.address }}</p>
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





<style>

    /*Main CSS*/


    /*Login Signup Page*/
    a:focus,a:hover,a{
        outline:none;
        text-decoration: none;
    }
    li,ul{
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .header-top i {
        font-size: 18px;
    }
    .bg-image {
        background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
        position: relative;
        width: 100%;
        height: 100vh;
        display: table;
    }

    .login-header {
        display: inline-block;
        width: 100%;
        background: #0e1a35;
    }

    .login-signup {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }

    .login-logo img {
        cursor: pointer;
        max-width: 171px;
        padding: 23px 15px 22px;
        width: 100%;
    }

    .login-header .navbar-right {
        margin-right: 0px;
    }

    .login-header .nav-tabs > li.active > a,
    .login-header .nav-tabs > li.active > a:focus,
    .login-header .nav-tabs > li.active > a:hover {
        background-color: transparent;
        border: none;
        color: #fff;
    }

    .login-header .nav-tabs > li > a {
        border: medium none;
        border-radius: 0;
        font-size: 14px;
        font-weight: 500;
        line-height: 48px;
        padding: 15px 30px;
        color: #fff;
    }

    .login-header .nav-tabs {
        border-bottom: none;
    }

    .login-header .nav-tabs > li {
        margin-bottom: 0px;
    }

    .login-header .nav > li > a:focus,
    .login-header .nav > li > a:hover {
        background: none;
        text-decoration: none;
    }

    .login-header .nav-tabs > li.active {
        border-bottom: 6px solid #5584ff;
    }

    .login-inner h1 {
        color: #8492af;
        font-size: 48px;
        font-weight: 300;
        text-align: center;
        margin-top: 0;
        margin-bottom: 20px;
    }

    .login-inner h1 span {
        color: #5584ff;
    }

    .login-form {
        text-align: center;
    }

    .login-form input {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
        border-image: none;
        border-style: none none solid;
        border-width: medium medium 1px;
        font-size: 13px;
        font-weight: 300;
        width: 100%;
        color: #8492af;
        padding: 15px 50px;
        font-size: 17px;
        max-width: 550px;
    }

    .login-form label {
        margin-bottom: 30px;
        width: 100%;
    }

    .user input {
        background: rgba(0, 0, 0, 0) url(\"../images/user.png\") no-repeat scroll 7px 12px;
    }

    .pass input {
        background: rgba(0, 0, 0, 0) url(\"../images/password.png\") no-repeat scroll 7px 12px;
    }

    .mail input {
        background: rgba(0, 0, 0, 0) url(\"../images/mail.png\") no-repeat scroll 4px 12px;
    }

    .login-signup .tab-content {
        background: #ffffff none repeat scroll 0 0;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
        display: inline-block;
        margin-top: -8px;
        width: 100%;
    }

    .form-btn {
        background: #5584ff none repeat scroll 0 0;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-weight: 400;
        max-width: 250px;
        padding: 10px 0;
        position: relative;
        width: 100%;
        margin: 40px 0;
        box-shadow: 0 2px 8px #d2d2d2;
        -moz-box-shadow: 0 2px 8px #d2d2d2;
        -webkit-box-shadow: 0 2px 8px #d2d2d2;
    }

    .form-btn::before {
        content: \"\";
        font-family: FontAwesome;
        position: absolute;
        right: 17px;
        top: 9px;
    }

    .form-details {
        padding: 35px 0;
    }

    .tab-content .tab-pane {
        padding: 70px 0;
    }


    /*Login Signup Page*/


    /*Home Page*/

    .home {
        background: #f6f7fa;
    }

    #navigation {
        background: #0e1a35;
    }

    #navigation {
        padding: 0;
    }

    .display-table {
        display: table;
        padding: 0;
        height: 100%;
        width: 100%;
    }

    .display-table-row {
        display: table-row;
        height: 100%;
    }

    .display-table-cell {
        display: table-cell;
        float: none;
        height: 100%;
    }

    .v-align {
        vertical-align: top;
    }
    .logo img {
        max-width: 180px;
        padding: 16px 0 17px;
        width: 100%;
    }

    .header-top {
        margin: 0;
        padding-top: 2px;
    }

    .header-top img {
        border-radius: 50%;
        max-width: 48px !important;
        width: 100%;
    }

    .add-project {
        background: #5584ff none repeat scroll 0 0;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 27px 10px 45px;
        position: relative;
    }

    .header-rightside .nav > li > a:focus,
    .header-rightside .nav > li > a:hover {
        background: none;
        text-decoration: none;
    }

    .add-project::before {
        background: rgba(0, 0, 0, 0) url(\"../images/plus.png\") no-repeat scroll 0 0;
        content: \"\";
    ;
        height: 12px;
        left: 17px;
        position: absolute;
        top: 12px;
        width: 12px;
    }

    .add-project:hover {
        color: #ffffff;
    }

    .header-top i {
        color: #0e1a35;
    }

    .icon-info {
        position: relative;
    }
    .navi i {
        font-size: 20px;
    }
    .label.label-primary {
        border-radius: 50%;
        font-size: 9px;
        left: 8px;
        position: absolute;
        top: -9px;
    }

    .icon-info .label {
        border: 2px solid #ffffff;
        font-weight: 500;
        padding: 3px 5px;
        text-align: center;
    }

    .header-top li {
        display: inline-block;
        text-align: center;
    }

    .header-top .dropdown-toggle {
        color: #0e1a35;
    }

    .header-top .dropdown-menu {
        border: medium none;
        left: -85px;
        padding: 17px;
    }
    .view {
        background: #5584ff none repeat scroll 0 0;
        border-radius: 100px;
        color: #ffffff;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        margin-top: 10px;
        padding: 10px 15px;
    }

    .navbar-content > span {
        font-size: 13px;
        font-weight: 700;
    }

    .img-responsive {
        width: 100%;
    }
    #navigation{
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .search input {
        border: none;
        font-size: 15px;
        padding: 15px 9px;
        width: 100%;
        background: rgba(0, 0, 0, 0) url(\"../images/search.png\") no-repeat scroll 99% 12px;
        color: #8492af;
    }

    header {
        background: #ffffff none repeat scroll 0 0;
        box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
        display: inline-block !important;
        line-height: 23px;
        padding: 15px;
        transition: all 0.5s ease 0s;
        width: 100%;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .logo {
        text-align: center;
    }

    .navi a {
        border-bottom: 1px solid #0d172e;
        border-top: 1px solid #0d172e;
        color: #ffffff;
        display: block;
        font-size: 17px;
        font-weight: 500;
        padding: 28px 20px;
        text-decoration: none;
    }

    .navi i {
        margin-right: 15px;
        color: #5584ff;
    }

    .navi .active a {
        background: #122143;
        border-left: 5px solid #5584ff;
        padding-left: 15px;
    }

    .navi a:hover {
        background: #122143 none repeat scroll 0 0;
        border-left: 5px solid #5584ff;
        display: block;
        padding-left: 15px;
    }

    .navbar-default {
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .navbar-toggle {
        border: none;
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
        background-color: rgba(0, 0, 0, 0);
    }

    .navbar-default .navbar-toggle .icon-bar {
        background-color: #0e1a35;
    }

    .circle-logo {
        margin: 0 auto;
        max-width: 30px !important;
        text-align: center;
    }
    .hidden-xs{
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .user-dashboard {
        padding: 0 20px;
    }

    .user-dashboard h1 {
        color: #0e1a35;
        font-size: 30px;
        font-weight: 500;
        margin: 0;
        padding: 21px 0;
    }
    .sales {
        background: #ffffff none repeat scroll 0 0;
        border: 1px solid #d4d9e3;
        display: inline-block;
        padding: 15px;
        width: 100%;
    }
    .sales button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: 1px solid #dadee7;
        border-radius: 100px;
        font-size: 15px;
        letter-spacing: 0.5px;
        padding-right: 32px;
        color: #0e1a35;
    }

    .sales button::before {
        content: \"\";
        font-family: FontAwesome;
        position: absolute;
        right: 12px;
        top: 11px;
    }
    .sales  .btn-group {
        float: right;
    }
    .sales h2 {
        color: #8492af;
        float: left;
        font-size: 21px;
        font-weight: 600;
        margin: 0;
        padding: 9px 0 0;
    }
    .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .sales .dropdown-menu{
        margin: 0px;
        padding: 0px;
        border: 0px;
        border-radius: 8px;
        width: 100%;
        color: #0e1a35;
    }
    .sales .btn-group.open .dropdown-toggle, .btn.active, .btn:active{
        box-shadow: none;
    }
    .sales .dropdown-menu > a {
        color: #0e1a35;
        display: inline-block;
        font-weight: 800;
        padding: 9px 0;
        text-align: center;
        width: 100%;
    }
    #my-cool-chart svg {
        width: 100%;
    }
    .sales .dropdown-menu > a:hover{
        color: #5584FF;
    }
    .shield-buttons {
        display: none;
    }
    .close, .close:focus, .close:hover {
        color: #fff;;
        opacity: 1;
        text-shadow: none;
    }
    .modal-body input {
        border: 1px solid #d4d9e3;
        font-size: 14px;
        font-weight: 300;
        margin: 5px 0;
        padding: 14px 10px;
        width: 100%;
        color: #8492af;
    }
    .modal-body textarea {
        border: 1px solid #d4d9e3;
        font-size: 14px;
        font-weight: 300;
        height: 200px;
        margin-top: 5px;
        padding: 9px 10px;
        width: 100%;
        color: #8492af;
    }
    .modal-header.login-header h4 {
        color: #ffffff;
    }
    .modal-footer .add-project {
        background: #5584ff none repeat scroll 0 0;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 30px;
        position: relative;
    }
    .modal-footer .add-project::before{display: none;}
    .modal-footer {
        border: 0 none;
        padding: 10px 15px 26px;
        text-align: right;
    }
    .cancel {
        background: #0E1A35     ;
        border: medium none;
        border-radius: 100px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 10px 30px;
        position: relative;

    }
    .modal{
        top: 20%;
    }
    .modal-header .close {
        margin-top: 2px;
    }
    .search input:focus{
        border-bottom: 1px solid #BDC4D4;
        line-height:22px;
        transition: 0.1s all;
    }
    .modal-header.login-header {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    /*Main CSS*/






    @media only screen and (max-device-width: 767px) {
        .login-logo img {
            margin: 0 auto;
        }
        .login-details .nav-tabs > li {
            text-align: center;
            width: 50%;
        }
        .login-signup .login-inner h1 {
            font-size: 26px;
            margin-bottom: 0;
            margin-top: 10px;
        }
        .login-inner .login-form input {
            font-size: 15px;
            max-width: 100%;
            padding: 15px 45px;
        }
        .login-inner .form-details {
            padding: 25px;
        }
        .login-inner .login-form label {
            margin-bottom: 20px;
            width: 100%;
        }
        .login-inner .form-btn {
            margin: 0;
            max-width: 180px;
        }
        .tab-content .tab-pane {
            padding: 20px 0;
        }
        #navigation .navi a {
            font-size: 14px;
            padding: 20px;
            text-align: center;
        }
        #navigation .navi i {
            margin-right: 0px;
        }
        #navigation .navi a:hover,
        #navigation .navi .active a {
            background: #122143 none repeat scroll 0 0;
            border-left: none;
            display: block;
            padding-left: 20px;
        }
        header .header-top img {
            max-width: 38px !important;
        }
        .v-align header {
            padding: 12px 15px;
        }
        header .header-top li {
            padding-left: 13px;
            padding-right: 6px;
        }
        .navbar-default .navbar-toggle {
            border-color: rgba(0, 0, 0, 0);
        }
        .navbar-header .navbar-toggle {
            float: left;
            margin: 0;
            padding: 0;
            top: 12px;
        }
        button,
        html [type=\"button\"],
        [type=\"reset\"],
        [type=\"submit\"] {
            outline: medium none;
        }
        .user-dashboard .sales h2 {
            color: #8492af;
            float: left;
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            padding: 13px 0 0;
        }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
            font-size: 11px;
        }
        .user-dashboard .sales button {
            font-size: 11px;
            padding-right: 23px;
        }
        .user-dashboard .sales h2 {
            font-size: 12px;
        }
        .gutter{
            padding: 0;
        }
    }

    @media only screen and (max-device-width: 992px) {
        header .header-top li {
            padding-left: 20px !important;
            padding-right: 0;
        }
        header .logo img {
            max-width: 125px !important;
        }

    }

    @media only screen and (min-device-width: 767px) and (max-device-width: 998px){
        .user-dashboard .header-top {
            padding-top: 5px;
        }
        .user-dashboard .header-rightside {
            display: inline-block;
            float: left;
            width: 100%;
        }
        .user-dashboard .header-rightside .header-top img {
            max-width: 41px !important;
        }
        .user-dashboard .sales button {
            font-size: 10px;
        }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
            font-size: 12px;
        }
        .user-dashboard .sales h2 {
            font-size: 15px;
        }
    }
    @media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
            max-width: 130px;
            padding: 16px 0 17px;
            width: 100%;
        }
    }
















", "admin/showdetailorder.html.twig", "/var/www/html/myProject/datshop/templates/admin/showdetailorder.html.twig");
    }
}
