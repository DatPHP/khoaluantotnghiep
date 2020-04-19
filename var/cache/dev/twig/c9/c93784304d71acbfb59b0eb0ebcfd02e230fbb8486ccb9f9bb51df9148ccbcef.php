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

/* search/resultSearch.html.twig */
class __TwigTemplate_9e9eb64fce1d5b02f0c5ce927d984ee70a1a2b883a1db1b390d87c3d5d20a959 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/resultSearch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/resultSearch.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<title>Home</title>
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<!------ Include the above in your HEAD tag ---------->


<!-- page-header -->
<div class=\"page-header-shop\">
    
    <div class=\"container\">

        <div  class=\"navbar-form navbar-left\">

            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form');
        echo "

        </div>
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">

                    ";
        // line 27
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "
                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                            ";
            // line 35
            echo "                        </div>
                    ";
        } else {
            // line 37
            echo "                        <div  id=\"users\">

                            <div class=\"dropdown\">
                                ";
            // line 41
            echo "                                <span > <h3> Hello <b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 41, $this->source); })()), "last_name", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 41, $this->source); })()), "first_name", [], "any", false, false, false, 41), "html", null, true);
            echo "</b></h3> </span>
                                <div class=\"dropdown-content\">

                                    <a href=\"http://localhost:8000/Customer01/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"btn btn btn-primary\">Information </a>

                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                    ";
            // line 48
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "role", [], "any", false, false, false, 48), "admin")) {
                // line 49
                echo "                                        <button id=\"dash-board\" class=\"btn btn btn-primary\">Dashboard</button>
                                    ";
            }
            // line 51
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 55
        echo "                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/datshop"), "html", null, true);
        echo ".png\" alt=\"\" style=\"width: 70%;height:70%;padding-left: 35%\"/>

                            ";
        // line 60
        echo "                        </a>
                    </div>


                    <!-------------------------shopping cart-------------------------------->
                    <div class=\"shoppingcard\">
                        <div class=\"dropdown \">

                            <span>
                                <i class=\"fa fa-cart-plus\" style=\"font-size:48px;color:black\"></i>
                                <span class=\"dropdowncart\" style=\"color: red\"></span>
                            </span>
                            <div class=\"dropdown-content\">
                                <div id=\"empty-cart\" class=\"emtrycart\">
                                    <p>Empty Cart</p>
                                </div>

                                <div id=\"exist-cart\" style=\"display: none\">
                                    <div class=\"row\">
                                        <table class=\"table \" id=\"table-products\" >
                                            <!-- <thead>
                                             <tr>
                                                 <th>Name</th>
                                                 <th>Quantity</th>
                                                 <th>Total</th>
                                             </tr>
                                             </thead>-->
                                            <tbody >

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"taskcart\">
                                            <span>
                                            <button class=\"btn btn-lg btn btn-danger\" id=\"button-clear\" style=\"margin: auto\">Clear cart</button>
                                                </span>
                                        <span class=\"submit\">
                                                    <button class=\"btn btn-default btn-lg\" style=\"margin: auto\">  <a href=\"http://localhost:8000/cart/form\">Checkout</a> </button>
                                                </span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!------------------------->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<body>
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/\">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Man<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Women<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/women/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kids<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/3\">Accessories</a></li>
                        </ul>
                    </li>
                </ul>






                <!-------------------------------------------------------------------------
                <form class=\"navbar-form navbar-right\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Search</button>
                </form>
            </div>< /.navbar-collapse -->


            </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->


<div class=\"container\">
    <div id=\"products\" class=\"row list-group\">
        ";
        // line 182
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 182, $this->source); })())), 0)) {
            // line 183
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 183, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 184
                echo "        <a href=\"http://localhost:8000/product/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 184, $this->source); })()), $context["i"], [], "array", false, false, false, 184), "id", [], "any", false, false, false, 184), "html", null, true);
                echo "\">
            <div class=\"item  col-xs-4 col-lg-4\">
                <div class=\"thumbnail\">
                    <img class=\"group list-group-image\" src=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 187, $this->source); })()), $context["i"], [], "array", false, false, false, 187), "id", [], "any", false, false, false, 187), "html", null, true);
                echo ".jpg\" alt=\"\" style=\"width:355px;height: 400px\"/>
                    ";
                // line 189
                echo "                    <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                            ";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 191, $this->source); })()), $context["i"], [], "array", false, false, false, 191), "name", [], "any", false, false, false, 191), "html", null, true);
                echo "
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6\">
                                <p class=\"lead\">
                                    ";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), $context["i"], [], "array", false, false, false, 196), "price", [], "any", false, false, false, 196), "html", null, true);
                echo " VND <br>
                                </p>
                            </div>
        </a>
        <div class=\"col-xs-12 col-md-6\">
            <button id=\"";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 201, $this->source); })()), $context["i"], [], "array", false, false, false, 201), "id", [], "any", false, false, false, 201), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 201, $this->source); })()), $context["i"], [], "array", false, false, false, 201), "name", [], "any", false, false, false, 201), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 201, $this->source); })()), $context["i"], [], "array", false, false, false, 201), "price", [], "any", false, false, false, 201), "html", null, true);
                echo "\" class=\"add-to-cart btn btn-primary\">Add to cart</button>
            <!--- <a class=\"btn btn-success\" href=\"http://www.jquery2dotnet.com\">Add to cart</a>---->
        </div>
    </div>
</div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "
";
        } else {
            // line 211
            echo "    ";
            echo "Product not found.";
            echo "
";
        }
        // line 213
        echo "
</div>
</div>
<!---------------------------------------------end content------------------------------------->
<div>




</div>


<footer class=\"container \">
    <div class=\"row foot\">



        <div id=\"foot3\" class=\"col-md-3 col-sm-3\">
            <h3>Address</h3>
            <h4 class=\"text-muted\">125A Ung Văn Khiêm ,Phường 25,Quận Bình Thạn,TP.HCMt<br>Phone:01628089939 <br>Fax:1 999 999 98 <br> Mail:nguyenvandat170296@gmail.com </h4>
        </div>


        <div id=\"foot4\" class=\"col-md-3 col-sm-3\">
            <h3>Follow Us</h3><br>
            <ul class=\"social-network social-circle\">
                <li><a href=\"https://www.facebook.com/dat.nguyenvan.7792\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"https://www.instagram.com/pexanhlacay/\" class=\"icoLinkedin\" title=\"Instagram\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li><a href=\"#\" class=\"icoTumblr\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>
                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
            </ul>
        </div>

    </div>
</footer>

<style>

    @import \"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\";
    @import \"http://fonts.googleapis.com/css?family=Roboto:400,500\";
    #bg3{background-color:#353535;}
    #bg3 .foot{padding-top: 15px;}
    footer{background-color:white; color: black; padding-bottom:45px;}
    #foot1,#foot2,#foot3,#foot4 a{color:white;padding-left: 5px;}

    #foot5{background-color:black;}

    #foot1 a:hover{
        text-decoration: none;
        color:#FFC831;
    }

    #foot2 a:hover{
        text-decoration: none;
        color:#FFC831;
    }
    h5#firstchild{padding-top:15px;}

    #foot1,#foot2,#foot3,#foot4 h3{color:black;}
    #foot3 h4{padding-top: 15px;line-height: 1.4}

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left:0 !important;
        padding: 0;

    }
    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }

    .social-network a.icoRss {
        background-color: #F56505;
        color:#fff;
    }
    .social-network a.icoFacebook {
        background-color:#3B5998;
        color:#fff;
    }
    .social-network a.icoTwitter{
        background-color:#33ccff; color:#fff;
    }
    .social-network a.icoTumblr {
        background-color:#007bb7; color:#fff;
    }
    .social-network a.icoLinkedin {
        background-color:#3B5998; color:#fff;
    }

    a.socialIcon:hover, .socialHoverClass {
        color:#44BCDD;
    }

    .social-circle li a {
        display:inline-block;
        position:relative;
        margin:0 auto 0 auto;
        -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;
        text-align:center;
        width: 50px;
        height: 50px;
        font-size:20px;

    }
    .social-circle li i {
        margin:0;
        line-height:50px;
        text-align: center;
    }

    .add-to-cart:hover
    {
        background-color: white;
        color:black;

    }



    #users
    {
        float:right;
    }



</style>


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

    .page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
    ";
        // line 370
        echo "    .page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

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
        padding-left: 1050px;
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
        width: 100px;


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

    #logout:hover
    {
        background-color: white;
        color:black;

    }
    #dash-board:hover
    {
        background-color: white;
        color:black;

    }

    #logout
    {
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    #dash-board
    {
        padding-top:10px;
        text-align: center;

    }
</style>


<script>

    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var shoppingCartItems = [];

    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        if (sessionStorage[\"shopping-cart-items\"] != null) {
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        }

        // Hiển thị thông tin từ giỏ hàng
        displayShoppingCartItems();
    });


    // Sự kiện click các button có class=\".add-to-cart\"
    \$(\".add-to-cart\").click(function () {
        var button = \$(this); // Lấy đối tượng button mà người dùng click
        var id = button.attr(\"id\"); // id của sản phẩm là id của button
        var name = button.attr(\"data-name\"); // name của sản phẩm là thuộc tính data-name của button
        var price = button.attr(\"data-price\"); // price của sản phẩm là thuộc tính data-price của button
        var quantity = 1; // Số lượng


        var item = {
            id: id,
            name: name,
            price: price,
            quantity: quantity
        };

        var exists = false;
        if (shoppingCartItems.length > 0) {
            \$.each(shoppingCartItems, function (index, value) {
                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                if (value.id == item.id) {
                    value.quantity++;
                    exists = true;
                    return false;
                }
            });
        }

        // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
        if (!exists) {
            shoppingCartItems.push(item);
        }

        // Lưu thông tin vào sessionStorage
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
        // Gọi hàm hiển thị giỏ hàng
        displayShoppingCartItems();
    });

    // Xóa hết giỏ hàng shoppingCartItems
    \$(\"#button-clear\").click(function () {
        shoppingCartItems = [];
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        \$(\"#table-products > tbody\").html(\"\");
        \$(\".dropdowncart\").html(\" \");
        displayShoppingCartItems();
    });
    // Xóa tung san pham cua  giỏ hàng shoppingCartItems
    \$(document).on('click',\"button[name='button-clear-item[]']\", function(){
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        shoppingCartItems.splice(\$(this).val(), 1);
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        displayShoppingCartItems();
    });

    // Hiển thị giỏ hàng ra table
    function displayShoppingCartItems() {
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.
        if (shoppingCartItems.length > 0) {
            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
            var subTotal = 0;
            var bien= 0 ;
            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                htmlString += \"<tr>\";
                // htmlString += \"<td>\" + item.id + \"</td>\";
                htmlString += \"<td>\" + item.name + \"</td>\";
                //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                htmlString += \"<td style='text-align: right'>\" + \" x \"+item.quantity+\"</td>\";
                htmlString += \"<td style='text-align: right'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\"btn btn-lg btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i class=\\\"fa fa-trash\\\"></i></button></td>\";

                htmlString += \"</tr>\";
                \$(\"#table-products > tbody:last\").append(htmlString);

                bien = bien +1;
            });


            \$(\".dropdowncart\").html( bien +\"items\" );

            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4'><p  class=\\\"list-group-item active\\\" > <b>Total:</b> \" + subTotal + \" vnd\"+\"</p></td><tr>\");
            \$(\"#empty-cart\").hide();
            \$(\"#exist-cart\").show();
        } else {
            \$(\"#empty-cart\").show();
            \$(\"#exist-cart\").hide();
            \$(\".dropdowncart\").html(\" \");
        }
    }

    \$(\"#logout\").click().click(function () {
        \$.ajax({
            url: 'http://localhost:8000/logout',
            type: 'post',
            dataType: \"json\",
            success : function (data){
                console.log(data);
                location.reload(true);
            }
        })
    });


    \$(\"#dash-board\").click().click(function () {
        location.href = 'http://localhost:8000/admin/';
    });



</script>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search/resultSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 370,  321 => 213,  315 => 211,  311 => 209,  293 => 201,  285 => 196,  277 => 191,  273 => 189,  268 => 187,  261 => 184,  256 => 183,  254 => 182,  130 => 60,  125 => 57,  121 => 55,  115 => 51,  111 => 49,  109 => 48,  102 => 44,  93 => 41,  88 => 37,  84 => 35,  76 => 28,  74 => 27,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<title>Home</title>
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<!------ Include the above in your HEAD tag ---------->


<!-- page-header -->
<div class=\"page-header-shop\">
    
    <div class=\"container\">

        <div  class=\"navbar-form navbar-left\">

            {{ form(form) }}

        </div>
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">

                    {% if customer is empty %}

                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                            {# <button type=\"button\" class=\"btn btn-default  \"><a href=\"http://localhost:8000/login\">Login</a> </button> #}
                        </div>
                    {% else %}
                        <div  id=\"users\">

                            <div class=\"dropdown\">
                                {# <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span> #}
                                <span > <h3> Hello <b> {{ customer.last_name }} {{ customer.first_name }}</b></h3> </span>
                                <div class=\"dropdown-content\">

                                    <a href=\"http://localhost:8000/Customer01/{{ user.id }}\" class=\"btn btn btn-primary\">Information </a>

                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                    {% if user.role == 'admin' %}
                                        <button id=\"dash-board\" class=\"btn btn btn-primary\">Dashboard</button>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"{{asset('build/images/datshop')}}.png\" alt=\"\" style=\"width: 70%;height:70%;padding-left: 35%\"/>

                            {#   <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/>  #}
                        </a>
                    </div>


                    <!-------------------------shopping cart-------------------------------->
                    <div class=\"shoppingcard\">
                        <div class=\"dropdown \">

                            <span>
                                <i class=\"fa fa-cart-plus\" style=\"font-size:48px;color:black\"></i>
                                <span class=\"dropdowncart\" style=\"color: red\"></span>
                            </span>
                            <div class=\"dropdown-content\">
                                <div id=\"empty-cart\" class=\"emtrycart\">
                                    <p>Empty Cart</p>
                                </div>

                                <div id=\"exist-cart\" style=\"display: none\">
                                    <div class=\"row\">
                                        <table class=\"table \" id=\"table-products\" >
                                            <!-- <thead>
                                             <tr>
                                                 <th>Name</th>
                                                 <th>Quantity</th>
                                                 <th>Total</th>
                                             </tr>
                                             </thead>-->
                                            <tbody >

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"taskcart\">
                                            <span>
                                            <button class=\"btn btn-lg btn btn-danger\" id=\"button-clear\" style=\"margin: auto\">Clear cart</button>
                                                </span>
                                        <span class=\"submit\">
                                                    <button class=\"btn btn-default btn-lg\" style=\"margin: auto\">  <a href=\"http://localhost:8000/cart/form\">Checkout</a> </button>
                                                </span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!------------------------->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<body>
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/\">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Man<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Women<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/women/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kids<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/3\">Accessories</a></li>
                        </ul>
                    </li>
                </ul>






                <!-------------------------------------------------------------------------
                <form class=\"navbar-form navbar-right\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Search</button>
                </form>
            </div>< /.navbar-collapse -->


            </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->


<div class=\"container\">
    <div id=\"products\" class=\"row list-group\">
        {% if product|length > 0 %}
        {% for i in range(0, (product|length - 1)) %}
        <a href=\"http://localhost:8000/product/{{ product[i].id }}\">
            <div class=\"item  col-xs-4 col-lg-4\">
                <div class=\"thumbnail\">
                    <img class=\"group list-group-image\" src=\"{{asset('build/images/product-')}}{{ product[i].id }}.jpg\" alt=\"\" style=\"width:355px;height: 400px\"/>
                    {# <img class=\"group list-group-image\" src=\"http://localhost/list/product-{{ productList[i].id }}.jpg\" alt=\"\" style=\"width:355px;height: 400px\"/> #}
                    <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                            {{ product[i].name }}
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6\">
                                <p class=\"lead\">
                                    {{ product[i].price }} VND <br>
                                </p>
                            </div>
        </a>
        <div class=\"col-xs-12 col-md-6\">
            <button id=\"{{ product[i].id }}\" data-name=\"{{ product[i].name }}\" data-price=\"{{ product[i].price }}\" class=\"add-to-cart btn btn-primary\">Add to cart</button>
            <!--- <a class=\"btn btn-success\" href=\"http://www.jquery2dotnet.com\">Add to cart</a>---->
        </div>
    </div>
</div>
</div>
</div>
{% endfor %}

{% else %}
    {{ 'Product not found.' }}
{% endif %}

</div>
</div>
<!---------------------------------------------end content------------------------------------->
<div>




</div>


<footer class=\"container \">
    <div class=\"row foot\">



        <div id=\"foot3\" class=\"col-md-3 col-sm-3\">
            <h3>Address</h3>
            <h4 class=\"text-muted\">125A Ung Văn Khiêm ,Phường 25,Quận Bình Thạn,TP.HCMt<br>Phone:01628089939 <br>Fax:1 999 999 98 <br> Mail:nguyenvandat170296@gmail.com </h4>
        </div>


        <div id=\"foot4\" class=\"col-md-3 col-sm-3\">
            <h3>Follow Us</h3><br>
            <ul class=\"social-network social-circle\">
                <li><a href=\"https://www.facebook.com/dat.nguyenvan.7792\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"https://www.instagram.com/pexanhlacay/\" class=\"icoLinkedin\" title=\"Instagram\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li><a href=\"#\" class=\"icoTumblr\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>
                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
            </ul>
        </div>

    </div>
</footer>

<style>

    @import \"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\";
    @import \"http://fonts.googleapis.com/css?family=Roboto:400,500\";
    #bg3{background-color:#353535;}
    #bg3 .foot{padding-top: 15px;}
    footer{background-color:white; color: black; padding-bottom:45px;}
    #foot1,#foot2,#foot3,#foot4 a{color:white;padding-left: 5px;}

    #foot5{background-color:black;}

    #foot1 a:hover{
        text-decoration: none;
        color:#FFC831;
    }

    #foot2 a:hover{
        text-decoration: none;
        color:#FFC831;
    }
    h5#firstchild{padding-top:15px;}

    #foot1,#foot2,#foot3,#foot4 h3{color:black;}
    #foot3 h4{padding-top: 15px;line-height: 1.4}

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left:0 !important;
        padding: 0;

    }
    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }

    .social-network a.icoRss {
        background-color: #F56505;
        color:#fff;
    }
    .social-network a.icoFacebook {
        background-color:#3B5998;
        color:#fff;
    }
    .social-network a.icoTwitter{
        background-color:#33ccff; color:#fff;
    }
    .social-network a.icoTumblr {
        background-color:#007bb7; color:#fff;
    }
    .social-network a.icoLinkedin {
        background-color:#3B5998; color:#fff;
    }

    a.socialIcon:hover, .socialHoverClass {
        color:#44BCDD;
    }

    .social-circle li a {
        display:inline-block;
        position:relative;
        margin:0 auto 0 auto;
        -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;
        text-align:center;
        width: 50px;
        height: 50px;
        font-size:20px;

    }
    .social-circle li i {
        margin:0;
        line-height:50px;
        text-align: center;
    }

    .add-to-cart:hover
    {
        background-color: white;
        color:black;

    }



    #users
    {
        float:right;
    }



</style>


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

    .page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
    {#  .page-caption { padding-top: 30px; padding-bottom: 30px; }  #}
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
        padding-left: 1050px;
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
        width: 100px;


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

    #logout:hover
    {
        background-color: white;
        color:black;

    }
    #dash-board:hover
    {
        background-color: white;
        color:black;

    }

    #logout
    {
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    #dash-board
    {
        padding-top:10px;
        text-align: center;

    }
</style>


<script>

    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var shoppingCartItems = [];

    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        if (sessionStorage[\"shopping-cart-items\"] != null) {
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        }

        // Hiển thị thông tin từ giỏ hàng
        displayShoppingCartItems();
    });


    // Sự kiện click các button có class=\".add-to-cart\"
    \$(\".add-to-cart\").click(function () {
        var button = \$(this); // Lấy đối tượng button mà người dùng click
        var id = button.attr(\"id\"); // id của sản phẩm là id của button
        var name = button.attr(\"data-name\"); // name của sản phẩm là thuộc tính data-name của button
        var price = button.attr(\"data-price\"); // price của sản phẩm là thuộc tính data-price của button
        var quantity = 1; // Số lượng


        var item = {
            id: id,
            name: name,
            price: price,
            quantity: quantity
        };

        var exists = false;
        if (shoppingCartItems.length > 0) {
            \$.each(shoppingCartItems, function (index, value) {
                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                if (value.id == item.id) {
                    value.quantity++;
                    exists = true;
                    return false;
                }
            });
        }

        // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
        if (!exists) {
            shoppingCartItems.push(item);
        }

        // Lưu thông tin vào sessionStorage
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
        // Gọi hàm hiển thị giỏ hàng
        displayShoppingCartItems();
    });

    // Xóa hết giỏ hàng shoppingCartItems
    \$(\"#button-clear\").click(function () {
        shoppingCartItems = [];
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        \$(\"#table-products > tbody\").html(\"\");
        \$(\".dropdowncart\").html(\" \");
        displayShoppingCartItems();
    });
    // Xóa tung san pham cua  giỏ hàng shoppingCartItems
    \$(document).on('click',\"button[name='button-clear-item[]']\", function(){
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        shoppingCartItems.splice(\$(this).val(), 1);
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        displayShoppingCartItems();
    });

    // Hiển thị giỏ hàng ra table
    function displayShoppingCartItems() {
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.
        if (shoppingCartItems.length > 0) {
            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
            var subTotal = 0;
            var bien= 0 ;
            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                htmlString += \"<tr>\";
                // htmlString += \"<td>\" + item.id + \"</td>\";
                htmlString += \"<td>\" + item.name + \"</td>\";
                //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                htmlString += \"<td style='text-align: right'>\" + \" x \"+item.quantity+\"</td>\";
                htmlString += \"<td style='text-align: right'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\"btn btn-lg btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i class=\\\"fa fa-trash\\\"></i></button></td>\";

                htmlString += \"</tr>\";
                \$(\"#table-products > tbody:last\").append(htmlString);

                bien = bien +1;
            });


            \$(\".dropdowncart\").html( bien +\"items\" );

            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4'><p  class=\\\"list-group-item active\\\" > <b>Total:</b> \" + subTotal + \" vnd\"+\"</p></td><tr>\");
            \$(\"#empty-cart\").hide();
            \$(\"#exist-cart\").show();
        } else {
            \$(\"#empty-cart\").show();
            \$(\"#exist-cart\").hide();
            \$(\".dropdowncart\").html(\" \");
        }
    }

    \$(\"#logout\").click().click(function () {
        \$.ajax({
            url: 'http://localhost:8000/logout',
            type: 'post',
            dataType: \"json\",
            success : function (data){
                console.log(data);
                location.reload(true);
            }
        })
    });


    \$(\"#dash-board\").click().click(function () {
        location.href = 'http://localhost:8000/admin/';
    });



</script>



", "search/resultSearch.html.twig", "/var/www/html/myProject/datshop/templates/search/resultSearch.html.twig");
    }
}
