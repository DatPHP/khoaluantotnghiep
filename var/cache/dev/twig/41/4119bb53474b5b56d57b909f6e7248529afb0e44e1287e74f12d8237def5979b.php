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

/* product/productdetail.html.twig */
class __TwigTemplate_0e83afa1edb6d9f5764bdf1418baa1c551049298dd7ae4b8676d20446d935e2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productdetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productdetail.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>


    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">


    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/bootstrap"), "html", null, true);
        echo ".css\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/style"), "html", null, true);
        echo ".css\" />
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/respond"), "html", null, true);
        echo ".min.js\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/home"), "html", null, true);
        echo ".css\" />



</head>



<body>
<!-- page-header -->

<!-- page-header -->
<div class=\"page-header-shop\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">


                <div  class=\"navbar-form navbar-left\" >
                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form');
        echo "
                </div>

                <div class=\"page-caption\">

                    ";
        // line 51
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                            ";
            // line 58
            echo "                        </div>
                    ";
        } else {
            // line 60
            echo "                        <div  id=\"users\">

                            <div class=\"dropdown\">
                                <span > <h5> Hello <b> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 63, $this->source); })()), "last_name", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 63, $this->source); })()), "first_name", [], "any", false, false, false, 63), "html", null, true);
            echo "</b></h5> </span>
                                <!--- <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>--->
                                <div class=\"dropdown-content\">

                                    <a href=\"http://localhost:8000/Customer01/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"btn btn btn-primary\">Information </a>

                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                    ";
            // line 71
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "role", [], "any", false, false, false, 71), "admin")) {
                // line 72
                echo "                                        <button id=\"dash-board\" class=\"btn btn btn-primary\"> Dashboard </button>

                                    ";
            }
            // line 75
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 80
        echo "                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/datshop"), "html", null, true);
        echo ".png\" alt=\"\" style=\"width: 50%;height:40%;padding-left: 15%\"/>
                            <!---  <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/> ------>
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
                                        <table class=\"table \" id=\"table-products\">
                                            <tbody > </tbody>
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

<div class=\"container\">



    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

        <a class=\"navbar-brand\" href=\"#\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">


                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Man
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/3\">Accessories</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Woman
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/3\">Accessories</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Kid
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/3\">Accessories</a>
                    </div>
                </li>


            </ul>
        </div>




    </nav>


</div>

<!------------------------------------------content ---------------------------------------->

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-4 item-photo\">
            <figure class=\"zoom\" style=\"background: url(";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198), "html", null, true);
        echo ".jpg)\"
                    onmousemove=\"zoom(event)\" ontouchmove=\"zoom(event)\">
                 <img style=\"max-width:100%;\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200), "html", null, true);
        echo ".jpg\" />
            </figure>
        </div>
        <div class=\"col-xs-5\" style=\"border:0px solid gray\">
            <h2> <b>";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 204, $this->source); })()), "name", [], "any", false, false, false, 204), "html", null, true);
        echo " </b></h2>
              <h6 class=\"title-price\"><small>Price</small></h6>
              <h3 style=\"margin-top:0px;\">";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 206, $this->source); })()), "price", [], "any", false, false, false, 206), "html", null, true);
        echo " VND</h3>
             <div class=\"section\" style=\"padding-bottom:20px;\">
                <h6 class=\"title-attr\"><small>Quantity</small></h6>
                <div id =\"amont\">
                    <div class=\"btn-minus\"><span class=\"glyphicon glyphicon-minus\"></span></div>
                    <input id=\"quantity-input\" value=\"1\"/>
                    <div class=\"btn-plus\"><span class=\"glyphicon glyphicon-plus\"></span></div>
                </div>
            </div>

            <!-- Botones de compra -->
            <div class=\"section\" style=\"padding-bottom:20px;\">
                <button   class=\"btn btn-success add-to-cart btn btn-primar\" id=\"";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 218, $this->source); })()), "id", [], "any", false, false, false, 218), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 218, $this->source); })()), "name", [], "any", false, false, false, 218), "html", null, true);
        echo "\" data-price=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 218, $this->source); })()), "price", [], "any", false, false, false, 218), "html", null, true);
        echo "\"  ><span style=\"margin-right:20px\" class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to cart </button>
                <script>
                    function myFunction() {
                        alert(\"Are you sure to add this product into cart ?\");
                    }
                </script>
            </div>
        </div>




        <div class=\"col-xs-9\">
            <h1> <b>Description </b> </h1>

            <div style=\"width:100%;border-top:1px solid silver\">
                <p style=\"padding:15px;\">

                    <span> ";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 236, $this->source); })()), "description", [], "any", false, false, false, 236), "html", null, true);
        echo "</span>
                </p>
                <small>
                    <ul>
                        <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                        <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                        <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                        <li>MicroUSB and USB connectivity</li>
                        <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                        <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                        <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                        <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                        <li>Features 16 GB memory and 2 GB RAM</li>
                        <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                        <li>17 hours of talk time, 350 hours standby time on one charge</li>
                        <li>Available in white or black</li>
                        <li>Model I337</li>
                        <li>Package includes phone, charger, battery and user manual</li>
                        <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                    </ul>
                </small>
            </div>
        </div>
    </div>
</div>

<style>
    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
    li.active{border-bottom:3px solid silver;}

    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
    .btn-success{width:100%;border-radius:0;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0;color:black}
    .title-attr{margin-top:0;margin-bottom:0;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}

    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0;}
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
    .nav-item
    {
        width: 100px;
        padding-left: 5%;

    }

</style>

<script>
    \$(document).ready(function(){
        //-- Click on detail
        \$(\"ul.menu-items > li\").on(\"click\",function(){
            \$(\"ul.menu-items > li\").removeClass(\"active\");
            \$(this).addClass(\"active\");
        })

        \$(\".attr,.attr2\").on(\"click\",function(){
            var clase = \$(this).attr(\"class\");

            \$(\".\" + clase).removeClass(\"active\");
            \$(this).addClass(\"active\");
        })

        //-- Click on QUANTITY
        \$(\".btn-minus\").on(\"click\",function(){
            var now = \$(\".section > div > input\").val();
            if (\$.isNumeric(now)){
                if (parseInt(now) -1 > 0){ now--;}
                \$(\".section > div > input\").val(now);
            }else{
                \$(\".section > div > input\").val(\"1\");
            }
            \$('input').val();
        })
        \$(\".btn-plus\").on(\"click\",function(){
            var now = \$(\".section > div > input\").val();
            if (\$.isNumeric(now)){
                \$(\".section > div > input\").val(parseInt(now)+1);
            }else{
                \$(\".section > div > input\").val(\"1\");
            }
            \$('input').val();
        })
    })


    \$(\"#logout\").click().click(function () {
        \$.ajax({
            url: 'http://localhost:8000/logout',
            type: 'post',
            dataType: \"json\",
            success : function (){
                location.reload(true);
            }
        })
    });

    \$(\"#dash-board\").click().click(function () {
        location.href = 'http://localhost:8000/admin';
    });

</script>


";
        // line 441
        echo "


<!------------chuc nang zoom san pham-------------->


<script>
    function zoom(e) {
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = (offsetX / zoomer.offsetWidth) * 100
        y = (offsetY / zoomer.offsetHeight) * 100
        zoomer.style.backgroundPosition = x + \"% \" + y + \"%\";
    }
</script>


<style>

    figure.zoom {
        background-position: 50% 50%;
        position: relative;
        width: 500px;
        overflow: hidden;
        cursor: zoom-in;
    }

    figure.zoom img:hover {
        opacity: 0;
    }

    figure.zoom img {
        transition: opacity 0.5s;
        display: block;
        width: 100%;
    }


</style>

<!-------------------------------------------------------------->

<!---------------------------------------------end content------------------------------------->



    <style>

        /*footer*/
        .col_white_amrc { color:#FFF;}
        footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
        .pt2 { padding-top:40px ; margin-bottom:20px ;}
        footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
        .mb10 { padding-bottom:15px ;}
        .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
        .footer_ul_amrc li {padding:0px 0px 5px 0px;}
        .footer_ul_amrc li a{ color:#CCC;}
        .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
        .fleft { float:left;}
        .padding-right { padding-right:10px; }

        .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
        .footer_ul2_amrc li p { display:table; }
        .footer_ul2_amrc li a:hover { text-decoration:none;}
        .footer_ul2_amrc li i { margin-top:5px;}

        .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
        .foote_bottom_ul_amrc {
            list-style-type:none;
            padding:0px;
            display:table;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            margin-left: auto;
        }
        .foote_bottom_ul_amrc li { display:inline;}
        .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

        .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
        .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
        .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
        .social_footer_ul li i {  width:20px; height:20px; text-align:center;}

    </style>






    <!--footer starts from here-->
    <footer class=\"footer\"  >

        <div class=\"container bottom_border\" >
            <div class=\"row\">
                <div class=\" col-sm-4 col-md col-sm-4  col-12 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Find us</h5>
                    <!--headin5_amrc-->
                    <p class=\"mb10\">Dat Shop là cửa hàng chuyên cung cấp các sản phẩm thời trang cao cấp.Những dòng sản phẩm mới và đang được ưa thích được cập nhật liên tục.</p>
                    <p><i class=\"fa fa-location-arrow\"></i> 125 Ung Van Khiem street,Binh Thanh Province, HCM city </p>
                    <p><i class=\"fa fa-phone\"></i>  0328089939  </p>
                    <p><i class=\"fa fa fa-envelope\"></i> nguyenvandat170296@gmail.com  </p>

                </div>


                <div class=\" col-sm-4 col-md  col-6 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">News</h5>
                    <!--headin5_amrc-->
                    <ul class=\"footer_ul_amrc\">
                        <li><a href=\"#\">Event</a></li>
                        <li><a href=\"#\">Sale</a></li>
                        <li><a href=\"#\">Hot Trend</a></li>
                        <li><a href=\"#\">Ebay & Amazon</a></li>
                        <li><a href=\"#\">Make Beauty</a></li>
                        <li><a href=\"#\">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=\" col-sm-4 col-md  col-6 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class=\"footer_ul_amrc\">
                        <li><a href=\"http://localhost:8000/product/gender/man\">Man</a></li>
                        <li><a href=\"http://localhost:8000/product/gender/woman\">Woman</li>
                        <li><a href=\"http://localhost:8000/product/gender/kids\">Kid</a></li>
                        <li><a href=\"http://webenlance.com\">newtyle</a></li>
                        <li><a href=\"http://webenlance.com\">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=\" col-sm-4 col-md  col-12 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Follow us</h5>
                    <!--headin5_amrc ends here-->

                    <ul class=\"footer_ul2_amrc\">
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>


        <div class=\"container\">
            <ul class=\"foote_bottom_ul_amrc\">
                <li><a href=\"http://localhost:8000/\">Home</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Services</a></li>
                <li><a href=\"#\">Pricing</a></li>
                <li><a href=\"http://localhost:8000/sendrequest\">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class=\"text-center\">Copyright @2019 | Designed With by <a href=\"#\">Nguyen Van Dat</a></p>

            <ul class=\"social_footer_ul\">
                <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
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

    .page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
    ";
        // line 639
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
        text-align: left;
        border: 2px outset;
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

        padding-left: 68px;
    }
    .emtrycart
    {
        text-align: center;
        width: 300px;
        height: 100px;
        color: red;
        font-size: 28px;
        font-style: italic ;
        padding-top: 15px;


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
        var quantity = parseInt(\$(\"#quantity-input\").val());// Số lượngid=\"quantity\"
        var exists = false;

        if (shoppingCartItems.length > 0) {
            \$.each(shoppingCartItems, function (index, item) {
                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                if (item.id == \$(\".add-to-cart\").attr(\"id\")) {
                    item.quantity += quantity;

                    exists = true;
                    return false;
                }
            });
        }

        // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
        if (!exists ) {
            var item = {
                id: \$(this).attr(\"id\"),
                name: \$(this).attr(\"data-name\"),
                price: \$(this).attr(\"data-price\"),
                quantity: quantity,
            };

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
                htmlString += \"<td><b>\" + item.name + \"</b></td>\";
                //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                htmlString += \"<td style='text-align: right'  id='quantity-item-\" + index + \"'>\" + \" x \"+item.quantity+\"</td>\";
                htmlString += \"<td style='text-align: right'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\"btn btn-lg btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"' > <i class=\\\"fa fa-trash\\\"></i> </button></td>\";

                htmlString += \"</tr>\";
                \$(\"#table-products > tbody:last\").append(htmlString);

                bien = bien +1;
            });


            \$(\".dropdowncart\").html( bien +\"items\" );






            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4' style='text-align: center'><p  class=\\\"list-group-item active\\\" > <b>Total:</b> \" + subTotal + \"vnd\"+ \"</p></td><tr>\");
            \$(\"#empty-cart\").hide();
            \$(\"#exist-cart\").show();
        } else {
            \$(\"#empty-cart\").show();
            \$(\"#exist-cart\").hide();
            \$(\".dropdowncart\").html(\" \");


        }
    }

    //
    // \$(\"#logout\").click().click(function () {
    //     \$.ajax({
    //         url: 'http://localhost:8000/logout',
    //         type: 'post',
    //         dataType: \"json\",
    //         success : function (data){
    //             console.log(data);
    //             location.reload(true);
    //         }
    //     })
    // });






</script>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/productdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 639,  501 => 441,  340 => 236,  315 => 218,  300 => 206,  295 => 204,  287 => 200,  281 => 198,  162 => 82,  158 => 80,  151 => 75,  146 => 72,  144 => 71,  137 => 67,  128 => 63,  123 => 60,  119 => 58,  112 => 52,  110 => 51,  102 => 46,  78 => 25,  73 => 23,  69 => 22,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>


    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">


    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"{{asset('build/bootstrap')}}.css\">

    <link rel=\"stylesheet\" href=\"{{asset('build/style')}}.css\" />
    <script src=\"{{asset('build/respond')}}.min.js\"></script>

    <link rel=\"stylesheet\" href=\"{{asset('build/home')}}.css\" />



</head>



<body>
<!-- page-header -->

<!-- page-header -->
<div class=\"page-header-shop\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">


                <div  class=\"navbar-form navbar-left\" >
                    {{ form(form) }}
                </div>

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
                                <span > <h5> Hello <b> {{ customer.last_name }} {{ customer.first_name }}</b></h5> </span>
                                <!--- <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>--->
                                <div class=\"dropdown-content\">

                                    <a href=\"http://localhost:8000/Customer01/{{ user.id }}\" class=\"btn btn btn-primary\">Information </a>

                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                    {% if user.role == 'admin' %}
                                        <button id=\"dash-board\" class=\"btn btn btn-primary\"> Dashboard </button>

                                    {% endif %}

                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"{{asset('build/images/datshop')}}.png\" alt=\"\" style=\"width: 50%;height:40%;padding-left: 15%\"/>
                            <!---  <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/> ------>
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
                                        <table class=\"table \" id=\"table-products\">
                                            <tbody > </tbody>
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

<div class=\"container\">



    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

        <a class=\"navbar-brand\" href=\"#\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">


                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Man
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/3\">Accessories</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Woman
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/3\">Accessories</a>
                    </div>
                </li>

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Kid
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/1\">Shirt</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/2\">Jean</a>
                        <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/3\">Accessories</a>
                    </div>
                </li>


            </ul>
        </div>




    </nav>


</div>

<!------------------------------------------content ---------------------------------------->

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-4 item-photo\">
            <figure class=\"zoom\" style=\"background: url({{asset('build/images/product-')}}{{ product.id }}.jpg)\"
                    onmousemove=\"zoom(event)\" ontouchmove=\"zoom(event)\">
                 <img style=\"max-width:100%;\" src=\"{{asset('build/images/product-')}}{{ product.id }}.jpg\" />
            </figure>
        </div>
        <div class=\"col-xs-5\" style=\"border:0px solid gray\">
            <h2> <b>{{ product.name }} </b></h2>
              <h6 class=\"title-price\"><small>Price</small></h6>
              <h3 style=\"margin-top:0px;\">{{ product.price }} VND</h3>
             <div class=\"section\" style=\"padding-bottom:20px;\">
                <h6 class=\"title-attr\"><small>Quantity</small></h6>
                <div id =\"amont\">
                    <div class=\"btn-minus\"><span class=\"glyphicon glyphicon-minus\"></span></div>
                    <input id=\"quantity-input\" value=\"1\"/>
                    <div class=\"btn-plus\"><span class=\"glyphicon glyphicon-plus\"></span></div>
                </div>
            </div>

            <!-- Botones de compra -->
            <div class=\"section\" style=\"padding-bottom:20px;\">
                <button   class=\"btn btn-success add-to-cart btn btn-primar\" id=\"{{ product.id }}\" data-name=\"{{ product.name }}\" data-price=\"{{ product.price }}\"  ><span style=\"margin-right:20px\" class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to cart </button>
                <script>
                    function myFunction() {
                        alert(\"Are you sure to add this product into cart ?\");
                    }
                </script>
            </div>
        </div>




        <div class=\"col-xs-9\">
            <h1> <b>Description </b> </h1>

            <div style=\"width:100%;border-top:1px solid silver\">
                <p style=\"padding:15px;\">

                    <span> {{ product.description }}</span>
                </p>
                <small>
                    <ul>
                        <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                        <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                        <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                        <li>MicroUSB and USB connectivity</li>
                        <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                        <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                        <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                        <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                        <li>Features 16 GB memory and 2 GB RAM</li>
                        <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                        <li>17 hours of talk time, 350 hours standby time on one charge</li>
                        <li>Available in white or black</li>
                        <li>Model I337</li>
                        <li>Package includes phone, charger, battery and user manual</li>
                        <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                    </ul>
                </small>
            </div>
        </div>
    </div>
</div>

<style>
    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
    li.active{border-bottom:3px solid silver;}

    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
    .btn-success{width:100%;border-radius:0;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0;color:black}
    .title-attr{margin-top:0;margin-bottom:0;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}

    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0;}
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
    .nav-item
    {
        width: 100px;
        padding-left: 5%;

    }

</style>

<script>
    \$(document).ready(function(){
        //-- Click on detail
        \$(\"ul.menu-items > li\").on(\"click\",function(){
            \$(\"ul.menu-items > li\").removeClass(\"active\");
            \$(this).addClass(\"active\");
        })

        \$(\".attr,.attr2\").on(\"click\",function(){
            var clase = \$(this).attr(\"class\");

            \$(\".\" + clase).removeClass(\"active\");
            \$(this).addClass(\"active\");
        })

        //-- Click on QUANTITY
        \$(\".btn-minus\").on(\"click\",function(){
            var now = \$(\".section > div > input\").val();
            if (\$.isNumeric(now)){
                if (parseInt(now) -1 > 0){ now--;}
                \$(\".section > div > input\").val(now);
            }else{
                \$(\".section > div > input\").val(\"1\");
            }
            \$('input').val();
        })
        \$(\".btn-plus\").on(\"click\",function(){
            var now = \$(\".section > div > input\").val();
            if (\$.isNumeric(now)){
                \$(\".section > div > input\").val(parseInt(now)+1);
            }else{
                \$(\".section > div > input\").val(\"1\");
            }
            \$('input').val();
        })
    })


    \$(\"#logout\").click().click(function () {
        \$.ajax({
            url: 'http://localhost:8000/logout',
            type: 'post',
            dataType: \"json\",
            success : function (){
                location.reload(true);
            }
        })
    });

    \$(\"#dash-board\").click().click(function () {
        location.href = 'http://localhost:8000/admin';
    });

</script>


{#

<div class=\"container\">
    <div id=\"products\" class=\"row list-group\">


            <div class=\"item  col-xs-4 col-lg-4\">
                <div class=\"thumbnail\">
                    <img class=\"group list-group-image\" src=\"http://localhost/list/product-{{ product.id }}.jpg\" alt=\"\" />
                    <div class=\"caption\">
                        <h4 class=\"group inner list-group-item-heading\">
                            {{ product.name }}
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6\">
                                <p class=\"lead\">

                                    {{ product.price }} VND <br>

                                </p>
                            </div>
                            <div class=\"col-xs-12 col-md-6\">
                                <button id=\"{{ product.id }}\" data-name=\"{{ product.name }}\" data-price=\"{{ product.price }}\" class=\"add-to-cart btn btn-primary\">Add to cart</button>

                                <!-----<a class=\"btn btn-success\" href=\"http://www.jquery2dotnet.com\">Add to cart</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <div class=\"description\">

            <h1>Description</h1>
            {{ product.name }} <br>
            {{ product.price }} <br>
            {{ product.quantity }} <br>
            {{ product.description}}

        </div>
    </div>
    <div>
    </div>
</div>
#}



<!------------chuc nang zoom san pham-------------->


<script>
    function zoom(e) {
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = (offsetX / zoomer.offsetWidth) * 100
        y = (offsetY / zoomer.offsetHeight) * 100
        zoomer.style.backgroundPosition = x + \"% \" + y + \"%\";
    }
</script>


<style>

    figure.zoom {
        background-position: 50% 50%;
        position: relative;
        width: 500px;
        overflow: hidden;
        cursor: zoom-in;
    }

    figure.zoom img:hover {
        opacity: 0;
    }

    figure.zoom img {
        transition: opacity 0.5s;
        display: block;
        width: 100%;
    }


</style>

<!-------------------------------------------------------------->

<!---------------------------------------------end content------------------------------------->



    <style>

        /*footer*/
        .col_white_amrc { color:#FFF;}
        footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
        .pt2 { padding-top:40px ; margin-bottom:20px ;}
        footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
        .mb10 { padding-bottom:15px ;}
        .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
        .footer_ul_amrc li {padding:0px 0px 5px 0px;}
        .footer_ul_amrc li a{ color:#CCC;}
        .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
        .fleft { float:left;}
        .padding-right { padding-right:10px; }

        .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
        .footer_ul2_amrc li p { display:table; }
        .footer_ul2_amrc li a:hover { text-decoration:none;}
        .footer_ul2_amrc li i { margin-top:5px;}

        .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
        .foote_bottom_ul_amrc {
            list-style-type:none;
            padding:0px;
            display:table;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            margin-left: auto;
        }
        .foote_bottom_ul_amrc li { display:inline;}
        .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

        .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
        .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
        .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
        .social_footer_ul li i {  width:20px; height:20px; text-align:center;}

    </style>






    <!--footer starts from here-->
    <footer class=\"footer\"  >

        <div class=\"container bottom_border\" >
            <div class=\"row\">
                <div class=\" col-sm-4 col-md col-sm-4  col-12 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Find us</h5>
                    <!--headin5_amrc-->
                    <p class=\"mb10\">Dat Shop là cửa hàng chuyên cung cấp các sản phẩm thời trang cao cấp.Những dòng sản phẩm mới và đang được ưa thích được cập nhật liên tục.</p>
                    <p><i class=\"fa fa-location-arrow\"></i> 125 Ung Van Khiem street,Binh Thanh Province, HCM city </p>
                    <p><i class=\"fa fa-phone\"></i>  0328089939  </p>
                    <p><i class=\"fa fa fa-envelope\"></i> nguyenvandat170296@gmail.com  </p>

                </div>


                <div class=\" col-sm-4 col-md  col-6 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">News</h5>
                    <!--headin5_amrc-->
                    <ul class=\"footer_ul_amrc\">
                        <li><a href=\"#\">Event</a></li>
                        <li><a href=\"#\">Sale</a></li>
                        <li><a href=\"#\">Hot Trend</a></li>
                        <li><a href=\"#\">Ebay & Amazon</a></li>
                        <li><a href=\"#\">Make Beauty</a></li>
                        <li><a href=\"#\">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=\" col-sm-4 col-md  col-6 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class=\"footer_ul_amrc\">
                        <li><a href=\"http://localhost:8000/product/gender/man\">Man</a></li>
                        <li><a href=\"http://localhost:8000/product/gender/woman\">Woman</li>
                        <li><a href=\"http://localhost:8000/product/gender/kids\">Kid</a></li>
                        <li><a href=\"http://webenlance.com\">newtyle</a></li>
                        <li><a href=\"http://webenlance.com\">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=\" col-sm-4 col-md  col-12 col\">
                    <h5 class=\"headin5_amrc col_white_amrc pt2\">Follow us</h5>
                    <!--headin5_amrc ends here-->

                    <ul class=\"footer_ul2_amrc\">
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                        <li><a href=\"#\"><i class=\"fab fa-twitter fleft padding-right\"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href=\"#\">https://www.lipsum.com/</a></p></li>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>


        <div class=\"container\">
            <ul class=\"foote_bottom_ul_amrc\">
                <li><a href=\"http://localhost:8000/\">Home</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Services</a></li>
                <li><a href=\"#\">Pricing</a></li>
                <li><a href=\"http://localhost:8000/sendrequest\">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class=\"text-center\">Copyright @2019 | Designed With by <a href=\"#\">Nguyen Van Dat</a></p>

            <ul class=\"social_footer_ul\">
                <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
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

    .page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
    {#   .page-caption {  padding-bottom: 50px; }   #}
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
        text-align: left;
        border: 2px outset;
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

        padding-left: 68px;
    }
    .emtrycart
    {
        text-align: center;
        width: 300px;
        height: 100px;
        color: red;
        font-size: 28px;
        font-style: italic ;
        padding-top: 15px;


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
        var quantity = parseInt(\$(\"#quantity-input\").val());// Số lượngid=\"quantity\"
        var exists = false;

        if (shoppingCartItems.length > 0) {
            \$.each(shoppingCartItems, function (index, item) {
                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                if (item.id == \$(\".add-to-cart\").attr(\"id\")) {
                    item.quantity += quantity;

                    exists = true;
                    return false;
                }
            });
        }

        // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
        if (!exists ) {
            var item = {
                id: \$(this).attr(\"id\"),
                name: \$(this).attr(\"data-name\"),
                price: \$(this).attr(\"data-price\"),
                quantity: quantity,
            };

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
                htmlString += \"<td><b>\" + item.name + \"</b></td>\";
                //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                htmlString += \"<td style='text-align: right'  id='quantity-item-\" + index + \"'>\" + \" x \"+item.quantity+\"</td>\";
                htmlString += \"<td style='text-align: right'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" +\" <button class=\\\"btn btn-lg btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"' > <i class=\\\"fa fa-trash\\\"></i> </button></td>\";

                htmlString += \"</tr>\";
                \$(\"#table-products > tbody:last\").append(htmlString);

                bien = bien +1;
            });


            \$(\".dropdowncart\").html( bien +\"items\" );






            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4' style='text-align: center'><p  class=\\\"list-group-item active\\\" > <b>Total:</b> \" + subTotal + \"vnd\"+ \"</p></td><tr>\");
            \$(\"#empty-cart\").hide();
            \$(\"#exist-cart\").show();
        } else {
            \$(\"#empty-cart\").show();
            \$(\"#exist-cart\").hide();
            \$(\".dropdowncart\").html(\" \");


        }
    }

    //
    // \$(\"#logout\").click().click(function () {
    //     \$.ajax({
    //         url: 'http://localhost:8000/logout',
    //         type: 'post',
    //         dataType: \"json\",
    //         success : function (data){
    //             console.log(data);
    //             location.reload(true);
    //         }
    //     })
    // });






</script>




", "product/productdetail.html.twig", "/var/www/html/myProject/datshop/templates/product/productdetail.html.twig");
    }
}
