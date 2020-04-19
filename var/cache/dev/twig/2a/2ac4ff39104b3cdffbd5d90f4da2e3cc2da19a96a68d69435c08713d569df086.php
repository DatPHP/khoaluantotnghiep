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

/* shopcart/cart.html.twig */
class __TwigTemplate_3391137430dad054943e99313fc7aed9f42487eff7dc9d86146af92915e1eef5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopcart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopcart/cart.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html>

<head>
    <title>SHOPPING CART </title>
    <meta charset='utf-8'>
    <script src=\"https://code.jquery.com/jquery-2.1.3.js\"></script>
    <link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"js/jquery-1.11.1.min.js\"></script>

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>


    <style>
        body {
            margin: 20px;
        }

        .wrapper {
            width: 1140px;
            margin: 0 auto;
        }


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
        .page-caption { padding-top: 170px; padding-bottom: 174px; }
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

        .loginbutton
        {
            padding-top: 5px;
            padding-left: 1050px;
        }
        .table
        {
            width:1100px ;
            text-align: center;
            margin: auto;

        }
        .customerform
        {

            height: 220px;
            border: 1px solid black;
            padding: 15px;
            margin: 20px auto;


        }

        .att
        {
            padding-left: 850px ;
        }





        .form-control1 {
            width:20%;
            display: inline !important;
        }

        .table thead tr th
        {

            text-align: center;

        }
        .tasktable
        {
            padding-left: 870px;




        }

        label
        {
            padding-right: 15px;
        }
        button, input, select, textarea {
            margin-bottom: 10px;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        input
        {
            padding-left: 10px;
            position: relative;
        }
        form
        {
            border: 1px solid;
            margin-bottom: 10px;

            width: 1150px;
            padding-top: 60px;
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
        #users
        {
            float:right;
        }






    </style>
</head>


<!-- page-header -->
<div class=\"container\">
    <div class=\"page-header-shop\">


        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">

                    ";
        // line 269
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 269, $this->source); })()))) {
            // line 270
            echo "                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                            ";
            // line 276
            echo "                        </div>
                    ";
        } else {
            // line 278
            echo "                        <div  id=\"users\">
                            <span > <h3> Hello <b> ";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 279, $this->source); })()), "last_name", [], "any", false, false, false, 279), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 279, $this->source); })()), "first_name", [], "any", false, false, false, 279), "html", null, true);
            echo "</b></h3> </span>
                            <div class=\"dropdown\">
                                <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>

                                <div class=\"dropdown-content\">
                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>
                                    ";
            // line 285
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 285, $this->source); })()), "role", [], "any", false, false, false, 285), "admin")) {
                // line 286
                echo "                                        <button id=\"dash-board\" class=\"btn btn btn-primary\">Dashboard</button>
                                    ";
            }
            // line 288
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 292
        echo "                    <div class=\"logo\">
                        <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/>
                    </div>





                    <!-------------------------shopping cart-------------------------------->

                    <!------------------------->

                </div>
            </div>
        </div>
    </div>

    <!-- /.page-header-->




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
                <a class=\"navbar-brand\" href=\"http://localhost:8000\">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Man<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Women<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/woment/2\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kids<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Accessories</a></li>
                        </ul>
                    </li>
                </ul>



                <!---------------------------------------------------------
                <form class=\"navbar-form navbar-right\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Search</button>
                </form>
            </div> /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>




    <!--------------------------content--------------------------------------->

    <div>

        <p id=\"aaa\"></p>







    </div>
    <div class=\" notice alert alert-success\">
        <strong>Cart is blank !</strong>  come back homepage!

    </div>
    <div class=\"notice\">   <button type=\"button\" class=\"btn btn-default\"> <a href=\"http://localhost:8000/\"> Contitue to buy  </a> </button> </div>

    <div class=\"wrapper\">
        <div class=\"form\">
            ";
        // line 393
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), 'form_start');
        echo "

        <span>  <h1>Checkout</h1> </span>
        <p id=\"demo\"> </p>

        <div id=\"empty-cart\"><p id=\"demo1\"></p></div>
        <div class=\"row\" id=\"exist-cart\" style=\"display: none;\">
            <table class=\"table table-bordered\" id=\"table-products\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>      </th>
                </tr>
                </thead>
                <tbody  ></tbody>

                <tfoot>
                </tfoot>
            </table>

            <div class=\"tasktable\">
                            <span>
                                <button  type=\"button\"  class=\"btn btn-lg btn btn-default\" style=\"font-size: 20px;border:3px solid black\"  id=\"button-clear\">Clear cart</button>
                            </span>

                <span>
                                <button type=\"button\" class=\"btn btn-lg btn btn-default\" style=\"font-size: 20px;border:3px solid black\"  id=\"update-cart\">Update cart </button>
                            </span>
            </div>

            <div id=\"exist-cart\" style=\"display: none\">
                <div class=\"row\">
                    <table class=\"table table-bordered\" id=\"table-products\">

                        <tbody >

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <div id=\"none\">
            <h3>Information Customer Order </h3>



           ";
        // line 447
        echo "                <div class=\"row\">

                    ";
        // line 450
        echo "                    <div class=\"col-sm-6 \">
                        ";
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "firstName", [], "any", false, false, false, 451), 'row');
        echo "
                        ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "lastName", [], "any", false, false, false, 452), 'row');
        echo "
                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "address", [], "any", false, false, false, 453), 'row');
        echo "

                    </div>
                    <div class=\"col-sm-6 \">
                        ";
        // line 457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "email", [], "any", false, false, false, 457), 'row');
        echo "
                        ";
        // line 458
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 458, $this->source); })()), "phone", [], "any", false, false, false, 458), 'row');
        echo "
                        ";
        // line 459
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "shoppingcart", [], "any", false, false, false, 459), 'row');
        echo "

                        ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "quantity", [], "any", false, false, false, 461), 'row');
        echo "
                    </div>
                </div>



        ";
        // line 473
        echo "


        </div>
            <div class=\"checkout att\" style=\"margin-bottom:24px;margin-top: 20px \"> <button type=\"submit\" class=\"btn btn-default btn btn-primary btn-lg\">Place Order</button>  </div>
            <!-- <input type=\"submit\" />-->
            ";
        // line 479
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>




    <!-------------------------------------------------------------------->

</div>




<script>
    //cart.html.twig
    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var shoppingCartItems = []

    var bill;
    bill = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());


    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        if (shoppingCartItems.length > 0) {
            \$(\"#exist-cart\").show();

            \$(\".notice\").hide();

        }


        if ( shoppingCartItems.length <=0)
        {
            \$(\"form\").hide();
            \$(\"h3\").hide();
            \$(\"h1\").hide();
            \$(\".att\").hide();
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
        \$(\".wrapper\").html(\" \");
        \$(\"form\").hide();
        \$(\".notice\").show();

        displayShoppingCartItems();

    });

    \$(\".checkout\").click(function () {



     //   var x = sessionStorage.getItem(\"shopping-cart-items\");
      //  var v=JSON.stringify(x);
        //console.log(x);
        // alert(v);



       // \$('#form_shoppingcart').val(v);


        if (sessionStorage[\"shopping-cart-items\"] != null) {

            shoppingCartItems = [];
            sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        }

    });


    \$(\"#update-cart\").click(function () {
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        \$.each(shoppingCartItems, function (index, item) {
            item.quantity = \$(\"#quantity-item-\" + index).val();
        });
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
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
        if (shoppingCartItems.length > 0){
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table


            var subTotal = 0;

            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var str = \"\";
                var tientongcong = 0;
                str+=\"sanpham:\";

                var soluong = \"\";
                soluong+=\"sanpham:\";

                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                number = index + 1;
                htmlString += \"<tr>\";
              //  htmlString += \"<td width='20px'>\" + number + \"</td>\";
                htmlString += \"<td id='key-\" + index + \"' width='20px'>\" + item.id + \"</td>\";

                htmlString += \"<td style='width: 300px'>\" + item.name + \"</td>\";
                htmlString += \"<td style='text-align: center;width: 100px' >\" + item.price + \"</td>\";
                htmlString += \"<td data-th=\\\"Quantity\\\" style='text-align: center;width: 270px'><input class=\\\"form-control1 text-center\\\" id='quantity-item-\" + index + \"' value='\"+item.quantity+\"' type=\\\"number\\\">\" + \"</td>\";
                // htmlString += \"<td style='text-align: right'>\" + item.price * item.quantity + \"</td>\";

                \$.each(shoppingCartItems, function (index, item) {
                   // str +=\"id\"+ item.id+\"sl\"+item.quantity+ \" \";
                    str +=\"id\"+item.id+\" \";
                });

                \$.each(shoppingCartItems, function (index, item) {
                    soluong +=\"id\"+item.quantity+\" \";
                });


                htmlString += \"<td style='text-align: center'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";

                //htmlString += \"<td>\" +\" <button class=\\\"btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> x </button></td>\";

                htmlString += \"</tr>\";

                \$(\"#table-products > tbody:last\").append(htmlString);
               // \$(\"#form_shoppingcart\").append(str);

                \$('#form_shoppingcart').val(str);

                \$('#form_quantity').val(soluong);

                \$(\"#form\")


                \$(document).ready(function() {
                    let myElements = \$(\"#key-\"+index);
                    \$(\"#aaa\").text(\"The text from the id01 paragraph is: \" + myElements[index].innerHTML);
                });







            });
            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='6'><p  class=\\\"list-group-item btn btn-outline-secondary btn-bl text-right\\\" style='font-size: 23px; text-align: right'> <b>Total:</b> \" + subTotal + \"vnd\"+\"</p></td></tr>\");





            \$('#form_total').val(subTotal);


            htmlString += \"<td>\" +\" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + 1 + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";
            //  htmlString += \"</tr>\";

            // \$(\"#table-products > tbody:last\").append(htmlString);

            // Setting a string



        }
        else
        {

            \$(\"form\").hide();
            \$(\".notice\").show();
            \$(\".wrapper\").html(\" \");

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



";
        // line 748
        echo "
</script>

</body>
</html>







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shopcart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 748,  563 => 479,  555 => 473,  546 => 461,  541 => 459,  537 => 458,  533 => 457,  526 => 453,  522 => 452,  518 => 451,  515 => 450,  511 => 447,  455 => 393,  352 => 292,  346 => 288,  342 => 286,  340 => 285,  329 => 279,  326 => 278,  322 => 276,  315 => 270,  313 => 269,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html>

<head>
    <title>SHOPPING CART </title>
    <meta charset='utf-8'>
    <script src=\"https://code.jquery.com/jquery-2.1.3.js\"></script>
    <link href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"js/jquery-1.11.1.min.js\"></script>

    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>


    <style>
        body {
            margin: 20px;
        }

        .wrapper {
            width: 1140px;
            margin: 0 auto;
        }


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
        .page-caption { padding-top: 170px; padding-bottom: 174px; }
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

        .loginbutton
        {
            padding-top: 5px;
            padding-left: 1050px;
        }
        .table
        {
            width:1100px ;
            text-align: center;
            margin: auto;

        }
        .customerform
        {

            height: 220px;
            border: 1px solid black;
            padding: 15px;
            margin: 20px auto;


        }

        .att
        {
            padding-left: 850px ;
        }





        .form-control1 {
            width:20%;
            display: inline !important;
        }

        .table thead tr th
        {

            text-align: center;

        }
        .tasktable
        {
            padding-left: 870px;




        }

        label
        {
            padding-right: 15px;
        }
        button, input, select, textarea {
            margin-bottom: 10px;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        input
        {
            padding-left: 10px;
            position: relative;
        }
        form
        {
            border: 1px solid;
            margin-bottom: 10px;

            width: 1150px;
            padding-top: 60px;
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
        #users
        {
            float:right;
        }






    </style>
</head>


<!-- page-header -->
<div class=\"container\">
    <div class=\"page-header-shop\">


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
                            <span > <h3> Hello <b> {{ customer.last_name }} {{ customer.first_name }}</b></h3> </span>
                            <div class=\"dropdown\">
                                <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>

                                <div class=\"dropdown-content\">
                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>
                                    {% if user.role == 'admin' %}
                                        <button id=\"dash-board\" class=\"btn btn btn-primary\">Dashboard</button>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"logo\">
                        <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/>
                    </div>





                    <!-------------------------shopping cart-------------------------------->

                    <!------------------------->

                </div>
            </div>
        </div>
    </div>

    <!-- /.page-header-->




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
                <a class=\"navbar-brand\" href=\"http://localhost:8000\">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Man<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Women<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/woment/2\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Kids<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/4\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Accessories</a></li>
                        </ul>
                    </li>
                </ul>



                <!---------------------------------------------------------
                <form class=\"navbar-form navbar-right\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Search</button>
                </form>
            </div> /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>




    <!--------------------------content--------------------------------------->

    <div>

        <p id=\"aaa\"></p>







    </div>
    <div class=\" notice alert alert-success\">
        <strong>Cart is blank !</strong>  come back homepage!

    </div>
    <div class=\"notice\">   <button type=\"button\" class=\"btn btn-default\"> <a href=\"http://localhost:8000/\"> Contitue to buy  </a> </button> </div>

    <div class=\"wrapper\">
        <div class=\"form\">
            {{ form_start(form) }}

        <span>  <h1>Checkout</h1> </span>
        <p id=\"demo\"> </p>

        <div id=\"empty-cart\"><p id=\"demo1\"></p></div>
        <div class=\"row\" id=\"exist-cart\" style=\"display: none;\">
            <table class=\"table table-bordered\" id=\"table-products\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>      </th>
                </tr>
                </thead>
                <tbody  ></tbody>

                <tfoot>
                </tfoot>
            </table>

            <div class=\"tasktable\">
                            <span>
                                <button  type=\"button\"  class=\"btn btn-lg btn btn-default\" style=\"font-size: 20px;border:3px solid black\"  id=\"button-clear\">Clear cart</button>
                            </span>

                <span>
                                <button type=\"button\" class=\"btn btn-lg btn btn-default\" style=\"font-size: 20px;border:3px solid black\"  id=\"update-cart\">Update cart </button>
                            </span>
            </div>

            <div id=\"exist-cart\" style=\"display: none\">
                <div class=\"row\">
                    <table class=\"table table-bordered\" id=\"table-products\">

                        <tbody >

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <div id=\"none\">
            <h3>Information Customer Order </h3>



           {#    {{ form_start(form) }} #}
                <div class=\"row\">

                    {#  {{ form_widget(form) }}  #}
                    <div class=\"col-sm-6 \">
                        {{ form_row(form.firstName) }}
                        {{ form_row(form.lastName) }}
                        {{ form_row(form.address) }}

                    </div>
                    <div class=\"col-sm-6 \">
                        {{ form_row(form.email) }}
                        {{ form_row(form.phone) }}
                        {{ form_row(form.shoppingcart) }}

                        {{ form_row(form.quantity) }}
                    </div>
                </div>



        {#
            <div>
                <input  type=\"text\" id=\"form_shoppingcart\" name=\"form[shoppingcart]\" required=\"required\" >
            </div>

            #}



        </div>
            <div class=\"checkout att\" style=\"margin-bottom:24px;margin-top: 20px \"> <button type=\"submit\" class=\"btn btn-default btn btn-primary btn-lg\">Place Order</button>  </div>
            <!-- <input type=\"submit\" />-->
            {{ form_end(form) }}

        </div>
    </div>




    <!-------------------------------------------------------------------->

</div>




<script>
    //cart.html.twig
    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var shoppingCartItems = []

    var bill;
    bill = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());


    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        if (shoppingCartItems.length > 0) {
            \$(\"#exist-cart\").show();

            \$(\".notice\").hide();

        }


        if ( shoppingCartItems.length <=0)
        {
            \$(\"form\").hide();
            \$(\"h3\").hide();
            \$(\"h1\").hide();
            \$(\".att\").hide();
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
        \$(\".wrapper\").html(\" \");
        \$(\"form\").hide();
        \$(\".notice\").show();

        displayShoppingCartItems();

    });

    \$(\".checkout\").click(function () {



     //   var x = sessionStorage.getItem(\"shopping-cart-items\");
      //  var v=JSON.stringify(x);
        //console.log(x);
        // alert(v);



       // \$('#form_shoppingcart').val(v);


        if (sessionStorage[\"shopping-cart-items\"] != null) {

            shoppingCartItems = [];
            sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
        }

    });


    \$(\"#update-cart\").click(function () {
        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
        \$.each(shoppingCartItems, function (index, item) {
            item.quantity = \$(\"#quantity-item-\" + index).val();
        });
        sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);
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
        if (shoppingCartItems.length > 0){
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table


            var subTotal = 0;

            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var str = \"\";
                var tientongcong = 0;
                str+=\"sanpham:\";

                var soluong = \"\";
                soluong+=\"sanpham:\";

                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                number = index + 1;
                htmlString += \"<tr>\";
              //  htmlString += \"<td width='20px'>\" + number + \"</td>\";
                htmlString += \"<td id='key-\" + index + \"' width='20px'>\" + item.id + \"</td>\";

                htmlString += \"<td style='width: 300px'>\" + item.name + \"</td>\";
                htmlString += \"<td style='text-align: center;width: 100px' >\" + item.price + \"</td>\";
                htmlString += \"<td data-th=\\\"Quantity\\\" style='text-align: center;width: 270px'><input class=\\\"form-control1 text-center\\\" id='quantity-item-\" + index + \"' value='\"+item.quantity+\"' type=\\\"number\\\">\" + \"</td>\";
                // htmlString += \"<td style='text-align: right'>\" + item.price * item.quantity + \"</td>\";

                \$.each(shoppingCartItems, function (index, item) {
                   // str +=\"id\"+ item.id+\"sl\"+item.quantity+ \" \";
                    str +=\"id\"+item.id+\" \";
                });

                \$.each(shoppingCartItems, function (index, item) {
                    soluong +=\"id\"+item.quantity+\" \";
                });


                htmlString += \"<td style='text-align: center'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";

                //htmlString += \"<td>\" +\" <button class=\\\"btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> x </button></td>\";

                htmlString += \"</tr>\";

                \$(\"#table-products > tbody:last\").append(htmlString);
               // \$(\"#form_shoppingcart\").append(str);

                \$('#form_shoppingcart').val(str);

                \$('#form_quantity').val(soluong);

                \$(\"#form\")


                \$(document).ready(function() {
                    let myElements = \$(\"#key-\"+index);
                    \$(\"#aaa\").text(\"The text from the id01 paragraph is: \" + myElements[index].innerHTML);
                });







            });
            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='6'><p  class=\\\"list-group-item btn btn-outline-secondary btn-bl text-right\\\" style='font-size: 23px; text-align: right'> <b>Total:</b> \" + subTotal + \"vnd\"+\"</p></td></tr>\");





            \$('#form_total').val(subTotal);


            htmlString += \"<td>\" +\" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + 1 + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";
            //  htmlString += \"</tr>\";

            // \$(\"#table-products > tbody:last\").append(htmlString);

            // Setting a string



        }
        else
        {

            \$(\"form\").hide();
            \$(\".notice\").show();
            \$(\".wrapper\").html(\" \");

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



{#
    var x = sessionStorage.getItem(\"shopping-cart-items\");
    var v=JSON.stringify(x);
    //console.log(x);
   // alert(v);
    \$('#form_shoppingcart').val(v);

    #}

</script>

</body>
</html>







", "shopcart/cart.html.twig", "/var/www/html/myProject/datshop/templates/shopcart/cart.html.twig");
    }
}
