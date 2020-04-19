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

/* admin/customers.html.twig */
class __TwigTemplate_93f4e4ac91c6bde868c5c08db2bf344a13b27cc3ac8e73b5e592c022803ebf86 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/customers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/customers.html.twig"));

        // line 1
        echo "



<!DOCTYPE html>
<html>
<title>Customers</title>
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    * {
        box-sizing:border-box
    }
    h2 {
        text-align: center;
    }
    /* Slideshow container */
    .slideshow-container {
        width: 1100px;
        height: 450px;
        position: relative;
        margin: auto;
        padding-bottom: 10px;
    }
    /* Ẩn các slider */
    .mySlides {
        display: none;
    }
    /* Định dạng nội dung Caption */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* định dạng các chấm chuyển đổi các slide */
    .dot {
        cursor:pointer;
        height: 13px;
        width: 13px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    /* khi được hover, active đổi màu nền */
    .active, .dot:hover {
        background-color: #717171;
    }

    /* Thêm hiệu ứng khi chuyển đổi các slide */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        animation-name: fade;
        animation-duration: 2s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    .id
    {

        width: 150px;
        text-align: center;
    }

    .username
    {

        width: 150px;
        text-align: center;
    }

    .password
    {

        width: 150px;
        text-align: center;
    }

    .role
    {

        width: 150px;
        text-align: center;
    }


</style>
<script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"dot\");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
        }

        slides[slideIndex].style.display = \"block\";
        dots[slideIndex].className += \" active\";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
            slideIndex = 0
        }
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên
    showSlides(slideIndex = 0);


    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
</script>
<body>

<!-- page-header -->
<div class=\"page-header-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">
                    <div class=\"loginbutton\">
                        <button type=\"button\" class=\"btn btn-default\"><a href=\"http://localhost:8000\">Log out </a> </button>
                    </div>

                    <div class=\"logo\">
                        <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/>
                    </div>
                    <!-------------------------navbar-------------------------------->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->

<div class=\"container\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin\">Dashboard</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/orders\">Orders</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">users</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->



<div class=\"container\">




        <td> <a href=\"http://localhost:8000/customerAdd\" class=\"btn btn-info btn-lg\" style=\"background-color: black\">
            <span class=\"glyphicon glyphicon-plus\"></span> Add new user
        </a> </td>


    <table class=\"table\">

        <thead>

        <tr>
            <th scope=\"col\">Id User </th>

            <th scope=\"col\" style=\"text-align: center\"> Username </th>
            <th scope=\"col\" style=\"text-align: center\">Password </th>
            <th scope=\"col\" style=\"text-align: center\" >Role </th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 215
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 215, $this->source); })())), 0)) {
            // line 216
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 216, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 217
                echo "

        <tr>

            <td> <div class=\"id\">";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 221, $this->source); })()), $context["i"], [], "array", false, false, false, 221), "id", [], "any", false, false, false, 221), "html", null, true);
                echo "</div></td>
           ";
                // line 223
                echo "
            <td><div class=\"username\"> ";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), $context["i"], [], "array", false, false, false, 224), "username", [], "any", false, false, false, 224), "html", null, true);
                echo "</div></td>
            <td><div class=\"password\">";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), $context["i"], [], "array", false, false, false, 225), "password", [], "any", false, false, false, 225), "html", null, true);
                echo "</div></td>
            <td><div class=\"role\"> ";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 226, $this->source); })()), $context["i"], [], "array", false, false, false, 226), "role", [], "any", false, false, false, 226), "html", null, true);
                echo "</div></td>


            <td> <a href=\"http://localhost:8000/customerEdit/";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 229, $this->source); })()), $context["i"], [], "array", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
                echo "\" class=\"btn btn-info btn-lg\" style=\"background-color: #ff6666\">
                    <span class=\"glyphicon glyphicon-cog\"></span>
                </a> </td>


            <td>
                <button name=\"delete-product\" id=\"";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 235, $this->source); })()), $context["i"], [], "array", false, false, false, 235), "id", [], "any", false, false, false, 235), "html", null, true);
                echo "\" class=\"btn btn-info btn-lg glyphicon glyphicon-remove\" style=\"background-color: white;color: black\"></button>
            </td>


            <!-----------

                        <td> <a href=\"http://localhost:8000/CustomerDel/";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 241, $this->source); })()), $context["i"], [], "array", false, false, false, 241), "id", [], "any", false, false, false, 241), "html", null, true);
                echo "\" class=\"btn btn-info btn-lg\" style=\"background-color: white;color: black\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                            </a> </td>


                            ------>

        </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "        ";
        } else {
            // line 252
            echo "            ";
            echo "Customer not found.";
            echo "
        ";
        }
        // line 254
        echo "

        ";
        // line 272
        echo "


        </tbody>

    </table>

    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\" >

        ";
        // line 281
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 281, $this->source); })()));
        echo "
    </div>




</div>
</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"w3-row-padding w3-padding-32\">
    <div class=\"w3-third\">
        <h3>FOOTER</h3>
        <h2>DatShop</h2>
        Contact:
        <p>Phone:0162 808 9939</p>
        <p>Email: nguyenvandat170296@gmail.com</p>
    </div>
</footer>
</body>
</html>
<style>
    .page-header-shop {
        position: relative;
        background-size: cover;
    }
    body {
        margin: 30px 0px;
    }
    .navbar-default .navbar-nav > li.dropdown:hover > a,
    .navbar-default .navbar-nav > li.dropdown:hover > a:hover,
    .navbar-default .navbar-nav > li.dropdown:hover > a:focus {
        background-color: rgb(231, 231, 231);
        color: rgb(85, 85, 85);
    }
    li.dropdown:hover > .dropdown-menu {
        display: block;
    }

    .page-header { background: url(http://localhost/list/slide-04.jpg)no-repeat; position: relative; background-size: cover; }
    .page-caption {  padding-bottom: 30px; }


    .page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

    .thumbnail
    {
        margin-bottom: 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item
    {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }
    .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
    {
        background: #428bca;
    }

    .item.list-group-item .list-group-image
    {
        margin-right: 10px;
    }
    .item.list-group-item .thumbnail
    {
        margin-bottom: 0px;
    }
    .item.list-group-item .caption
    {
        padding: 9px 9px 0px 9px;
    }
    .item.list-group-item:nth-of-type(odd)
    {
        background: #eeeeee;
    }

    .item.list-group-item:before, .item.list-group-item:after
    {
        display: table;
        content: \" \";
    }

    .item.list-group-item img
    {
        float: left;
    }
    .item.list-group-item:after
    {
        clear: both;
    }
    .list-group-item-text
    {
        margin: 0 0 11px;
    }

    .w3-bar-item {padding:20px}

    .shoppingcard
    {

        padding-left: 810px;
    }
    .loginbutton
    {
        padding-top: 5px;
        padding-left: 1000px;
    }
    .table
    {
        width: 400px;
        text-align: center;
        margin-right:10px ;
        style-border:none;
    }
    .table tbody td

    {
        text-align: center;
    }



    /*dropdown menu */

    .dropdown {
        position: relative;
        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }


    .total
    {
        padding-left: 15px;
    }

    .cartboot
    {
        position: relative;
        float:left;
        display: inline;
    }
    .taskcart
    {
        padding-left: 73px;
    }
    .emtrycart
    {
        text-align: center;
        width: 300px;
        height: 100px;
        padding-top: 20px;
        font-size: 28px;
        color: red;

    }
</style>


<script>
    \$(document).ready(function () {
        // var message = localStorage.getItem(\"deleteMessage\");
        // if (message === null) {
        //     \$(\"#delete-message\").hide();
        // } else {
        //     \$(\"#delete-message\").append('<p>' + message + '</p>');
        //     \$(\"#delete-message\").show();
        //     localStorage.removeItem('deleteMessage');
        // }




        \$('button[name=\"delete-product\"]').click(function () {
            \$.ajax({
                url: 'http://localhost:8000/CustomerDel/' + \$(this).attr(\"id\"),
                type: 'post',
                dataType: \"json\",
                success : function (data){
                    // localStorage.setItem(\"deleteMessage\", data.data);
                    alert(data.data);
                    location.reload(true);
                }
            })
        });
    });
</script>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 281,  340 => 272,  336 => 254,  330 => 252,  327 => 251,  311 => 241,  302 => 235,  293 => 229,  287 => 226,  283 => 225,  279 => 224,  276 => 223,  272 => 221,  266 => 217,  261 => 216,  259 => 215,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<!DOCTYPE html>
<html>
<title>Customers</title>
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    * {
        box-sizing:border-box
    }
    h2 {
        text-align: center;
    }
    /* Slideshow container */
    .slideshow-container {
        width: 1100px;
        height: 450px;
        position: relative;
        margin: auto;
        padding-bottom: 10px;
    }
    /* Ẩn các slider */
    .mySlides {
        display: none;
    }
    /* Định dạng nội dung Caption */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* định dạng các chấm chuyển đổi các slide */
    .dot {
        cursor:pointer;
        height: 13px;
        width: 13px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    /* khi được hover, active đổi màu nền */
    .active, .dot:hover {
        background-color: #717171;
    }

    /* Thêm hiệu ứng khi chuyển đổi các slide */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        animation-name: fade;
        animation-duration: 2s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    .id
    {

        width: 150px;
        text-align: center;
    }

    .username
    {

        width: 150px;
        text-align: center;
    }

    .password
    {

        width: 150px;
        text-align: center;
    }

    .role
    {

        width: 150px;
        text-align: center;
    }


</style>
<script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"dot\");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
        }

        slides[slideIndex].style.display = \"block\";
        dots[slideIndex].className += \" active\";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
            slideIndex = 0
        }
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên
    showSlides(slideIndex = 0);


    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
</script>
<body>

<!-- page-header -->
<div class=\"page-header-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">
                    <div class=\"loginbutton\">
                        <button type=\"button\" class=\"btn btn-default\"><a href=\"http://localhost:8000\">Log out </a> </button>
                    </div>

                    <div class=\"logo\">
                        <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/>
                    </div>
                    <!-------------------------navbar-------------------------------->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->

<div class=\"container\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin\">Dashboard</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/orders\">Orders</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">users</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->



<div class=\"container\">




        <td> <a href=\"http://localhost:8000/customerAdd\" class=\"btn btn-info btn-lg\" style=\"background-color: black\">
            <span class=\"glyphicon glyphicon-plus\"></span> Add new user
        </a> </td>


    <table class=\"table\">

        <thead>

        <tr>
            <th scope=\"col\">Id User </th>

            <th scope=\"col\" style=\"text-align: center\"> Username </th>
            <th scope=\"col\" style=\"text-align: center\">Password </th>
            <th scope=\"col\" style=\"text-align: center\" >Role </th>

        </tr>
        </thead>
        <tbody>
        {% if customer|length > 0  %}
        {% for i in range(0, (customer|length - 1)) %}


        <tr>

            <td> <div class=\"id\">{{ customer [i].id }}</div></td>
           {#<td> {{ user[i].id}}</td> #}

            <td><div class=\"username\"> {{ user [i].username }}</div></td>
            <td><div class=\"password\">{{ user [i] .password }}</div></td>
            <td><div class=\"role\"> {{ user [i].role }}</div></td>


            <td> <a href=\"http://localhost:8000/customerEdit/{{  customer [i].id }}\" class=\"btn btn-info btn-lg\" style=\"background-color: #ff6666\">
                    <span class=\"glyphicon glyphicon-cog\"></span>
                </a> </td>


            <td>
                <button name=\"delete-product\" id=\"{{ customer [i].id }}\" class=\"btn btn-info btn-lg glyphicon glyphicon-remove\" style=\"background-color: white;color: black\"></button>
            </td>


            <!-----------

                        <td> <a href=\"http://localhost:8000/CustomerDel/{{  customer [i].id }}\" class=\"btn btn-info btn-lg\" style=\"background-color: white;color: black\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                            </a> </td>


                            ------>

        </tr>

        {% endfor %}
        {% else %}
            {{ 'Customer not found.' }}
        {% endif %}


        {#
        {% if user|length > 0  %}
        {% for i in range(0, (user|length - 1)) %}


            <tr>

            </tr>



         {% endfor %}
        {% endif %}


        #}



        </tbody>

    </table>

    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\" >

        {{ knp_pagination_render(customer) }}
    </div>




</div>
</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"w3-row-padding w3-padding-32\">
    <div class=\"w3-third\">
        <h3>FOOTER</h3>
        <h2>DatShop</h2>
        Contact:
        <p>Phone:0162 808 9939</p>
        <p>Email: nguyenvandat170296@gmail.com</p>
    </div>
</footer>
</body>
</html>
<style>
    .page-header-shop {
        position: relative;
        background-size: cover;
    }
    body {
        margin: 30px 0px;
    }
    .navbar-default .navbar-nav > li.dropdown:hover > a,
    .navbar-default .navbar-nav > li.dropdown:hover > a:hover,
    .navbar-default .navbar-nav > li.dropdown:hover > a:focus {
        background-color: rgb(231, 231, 231);
        color: rgb(85, 85, 85);
    }
    li.dropdown:hover > .dropdown-menu {
        display: block;
    }

    .page-header { background: url(http://localhost/list/slide-04.jpg)no-repeat; position: relative; background-size: cover; }
    .page-caption {  padding-bottom: 30px; }


    .page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

    .thumbnail
    {
        margin-bottom: 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item
    {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }
    .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
    {
        background: #428bca;
    }

    .item.list-group-item .list-group-image
    {
        margin-right: 10px;
    }
    .item.list-group-item .thumbnail
    {
        margin-bottom: 0px;
    }
    .item.list-group-item .caption
    {
        padding: 9px 9px 0px 9px;
    }
    .item.list-group-item:nth-of-type(odd)
    {
        background: #eeeeee;
    }

    .item.list-group-item:before, .item.list-group-item:after
    {
        display: table;
        content: \" \";
    }

    .item.list-group-item img
    {
        float: left;
    }
    .item.list-group-item:after
    {
        clear: both;
    }
    .list-group-item-text
    {
        margin: 0 0 11px;
    }

    .w3-bar-item {padding:20px}

    .shoppingcard
    {

        padding-left: 810px;
    }
    .loginbutton
    {
        padding-top: 5px;
        padding-left: 1000px;
    }
    .table
    {
        width: 400px;
        text-align: center;
        margin-right:10px ;
        style-border:none;
    }
    .table tbody td

    {
        text-align: center;
    }



    /*dropdown menu */

    .dropdown {
        position: relative;
        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }


    .total
    {
        padding-left: 15px;
    }

    .cartboot
    {
        position: relative;
        float:left;
        display: inline;
    }
    .taskcart
    {
        padding-left: 73px;
    }
    .emtrycart
    {
        text-align: center;
        width: 300px;
        height: 100px;
        padding-top: 20px;
        font-size: 28px;
        color: red;

    }
</style>


<script>
    \$(document).ready(function () {
        // var message = localStorage.getItem(\"deleteMessage\");
        // if (message === null) {
        //     \$(\"#delete-message\").hide();
        // } else {
        //     \$(\"#delete-message\").append('<p>' + message + '</p>');
        //     \$(\"#delete-message\").show();
        //     localStorage.removeItem('deleteMessage');
        // }




        \$('button[name=\"delete-product\"]').click(function () {
            \$.ajax({
                url: 'http://localhost:8000/CustomerDel/' + \$(this).attr(\"id\"),
                type: 'post',
                dataType: \"json\",
                success : function (data){
                    // localStorage.setItem(\"deleteMessage\", data.data);
                    alert(data.data);
                    location.reload(true);
                }
            })
        });
    });
</script>





", "admin/customers.html.twig", "/var/www/html/myProject/datshop/templates/admin/customers.html.twig");
    }
}
