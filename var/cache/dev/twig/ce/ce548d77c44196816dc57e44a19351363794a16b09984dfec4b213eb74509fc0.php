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

/* product/home.html.twig */
class __TwigTemplate_5395ca9fb0890424b433e70814f8ee542b4b165d59a77736f6f3c391c2dc5302 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">


    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/bootstrap"), "html", null, true);
        echo ".css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/style"), "html", null, true);
        echo ".css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/home"), "html", null, true);
        echo ".css\" />
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/respond"), "html", null, true);
        echo ".min.js\"></script>


</head>

<body>

<style>

    .mini-menu .sub > a.active,
    {
        padding-left: 1.3em;
        color: blue;
        content: \"1\";
        float: right;
        margin-right:6px;
        line-height: 12px;
    }
</style>


<!-- page-header -->
<div class=\"page-header-shop pink \">

    <div class=\"container\">


        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">


                <div  class=\"navbar-form navbar-left\" >
                    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form');
        echo "
                </div>

                <div class=\"page-caption\">

                    ";
        // line 56
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                           ";
            // line 63
            echo "                        </div>
                    ";
        } else {
            // line 65
            echo "                    <div  id=\"users\">

                        <div class=\"dropdown\">
                            <span > <h5> Hello <b> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 68, $this->source); })()), "last_name", [], "any", false, false, false, 68), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 68, $this->source); })()), "first_name", [], "any", false, false, false, 68), "html", null, true);
            echo "</b></h5> </span>
                           <!--- <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>--->
                            <div class=\"dropdown-content\">

                                <a href=\"http://localhost:8000/Customer01/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"btn btn btn-primary\">Information </a>

                                <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                ";
            // line 76
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "role", [], "any", false, false, false, 76), "admin")) {
                // line 77
                echo "                                    <button id=\"dash-board\" class=\"btn btn btn-primary\"> Dashboard </button>

                                ";
            }
            // line 80
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 85
        echo "                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"";
        // line 87
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
                            <div class=\"dropdown-content orange\">
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

                             ";
        // line 155
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 155, $this->source); })())), 0)) {
            // line 156
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 156, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 157
                echo "                                 <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 157, $this->source); })()), $context["i"], [], "array", false, false, false, 157), "id", [], "any", false, false, false, 157), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 157, $this->source); })()), $context["i"], [], "array", false, false, false, 157), "type", [], "any", false, false, false, 157), "html", null, true);
                echo "</a>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "
                            ";
        } else {
            // line 162
            echo "                                ";
            echo "Product not found.";
            echo "
                            ";
        }
        // line 164
        echo "
                             </div>

                         </li>

                         <li class=\"nav-item dropdown\">
                             <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Woman
                             </a>
                             <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                 ";
        // line 174
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 174, $this->source); })())), 0)) {
            // line 175
            echo "                                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 175, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 176
                echo "                                         <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 176, $this->source); })()), $context["i"], [], "array", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 176, $this->source); })()), $context["i"], [], "array", false, false, false, 176), "type", [], "any", false, false, false, 176), "html", null, true);
                echo "</a>

                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "
                                 ";
        } else {
            // line 181
            echo "                                     ";
            echo "Product not found.";
            echo "
                                 ";
        }
        // line 183
        echo "                             </div>
                         </li>

                         <li class=\"nav-item dropdown\">
                             <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Kid
                             </a>
                             <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                                 ";
        // line 192
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 192, $this->source); })())), 0)) {
            // line 193
            echo "                                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 193, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 194
                echo "                                         <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 194, $this->source); })()), $context["i"], [], "array", false, false, false, 194), "id", [], "any", false, false, false, 194), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 194, $this->source); })()), $context["i"], [], "array", false, false, false, 194), "type", [], "any", false, false, false, 194), "html", null, true);
                echo "</a>

                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "
                                 ";
        } else {
            // line 199
            echo "                                     ";
            echo "Product not found.";
            echo "
                                 ";
        }
        // line 201
        echo "
                             </div>
                         </li>

                     </ul>
                 </div>
             </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<!-------header topic ------------------->




    <div class=\"wrap\">


        <div class=\"menu\">
            <div class=\"mini-menu\">
                <ul>
                    <li class=\"sub\">
                        <a href=\"#\">WOMAN</a>
                        <ul>
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/women/3\">Accessories</a></li>

                        </ul>
                    </li>
                    <li class=\"sub\">
                        <a href=\"#\">MAN</a>
                        <ul>

                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"sub\">
                        <a href=\"#\">KIDS</a>
                        <ul>
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/3\">Accessories</a></li>
                        </ul>
                    </li>

                    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["productType"]);
        foreach ($context['_seq'] as $context["_key"] => $context["productType"]) {
            // line 251
            echo "                    <li >
                        <a class=\"sub\" href=\"http://localhost:8000/product/type/";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productType"], "id", [], "any", false, false, false, 252), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productType"], "type", [], "any", false, false, false, 252), "html", null, true);
            echo " </a>

                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                </ul>
            </div>
            <div class=\"menu-colors menu-item\">
                <div class=\"header-item\" >Colors</div>
                <ul class=\"color-row1\">
                    <li class=\"color-circle\" style=\"background:#4286f4\"></li>
                    <li class=\"color-circle\" style=\"background:#2acc4b\"></li>
                    <li class=\"color-circle\" style=\"background:#343534\"></li>
                    <li class=\"color-circle\" style=\"background:#5f605f\"></li>
                    <li class=\"color-circle\" style=\"background:#929392\"></li>
                </ul>
                <ul class=\"color-row2\">
                    <li class=\"color-circle\" style=\"background:#9e8045\"></li>
                    <li class=\"color-circle\" style=\"background:#d3d3d3\"></li>
                    <li class=\"color-circle\" style=\"background:#6b6666\"></li>
                    <li class=\"color-circle\" style=\"background:#999797\"></li>
                    <li class=\"color-circle\" style=\"background:#923476\"></li>
                </ul>
            </div>
            <div class=\"menu-size menu-item\">
                <div class=\"header-item\" >Size</div>
                <ul class=\"color-row1\">
                    <li class=\"color-circle size-circle\" ><p class=\"sizedouble\">XS</p></li>
                    <li class=\"color-circle size-circle\" style=\"background-color:#343534\" ><p style=\"color:#999\" class=\"size\">S</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"size\">M</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"size\">L</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"sizedouble\">XL</p></li>
                </ul>
            </div>
            <div class=\"menu-price menu-item\">
                <div class=\"header-item\" >Price</div>
                <p>
                    <!--<label for=\"amount\">Price range:</label>-->
                    <input type=\"text\" readonly id=\"amount\"  style=\"border:0; color:#f6931f; font-weight:bold;\">
                </p>
                <div id=\"slider-range\"></div>
            </div>

        </div>

        <div class=\"items\">



            <!-- page-slider-header ---  advertising-->


            <div class=\"slideshow-container\">

                <div class=\"mySlides fade\">

                    <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/slide-01"), "html", null, true);
        echo ".jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!--- <img src=\"http://localhost/list/slide-05.jpg\" style=\"width:100%\"> --->

                </div>

                <div class=\"mySlides fade\">
                    <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner-05"), "html", null, true);
        echo ".jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!---<img src=\"http://localhost/list/slide-02.jpg\" style=\"width:100%\">----->
                    <!--- <div class=\"text\">Fashion</div> ---->
                </div>

                <div class=\"mySlides fade\">

                    <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/slide-05"), "html", null, true);
        echo ".jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!---  <img src=\"http://localhost/list/slide-03.jpg\" style=\"width:100%\">------>
                    <!-- <div class=\"text\">Mordern</div> --->
                </div>
            </div>
            <br>

            <div style=\"text-align:center\">
                <span class=\"dot\" onclick=\"currentSlide(0)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            </div>

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
                    setTimeout(showSlides, 10000);
                }
                //mặc định hiển thị slide đầu tiên
                showSlides(slideIndex = 0);


                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
            </script>









            <!--------------------------------------ocassion ------------------------->


            <div id=\"colorlib-featured-product\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"http://localhost:8000/product/gender/man\" class=\"f-product-1\" style=\"background-image: url(";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/item-1"), "html", null, true);
        echo ".jpg);\">

                                <h2 style=\"color: white;\">Fahion <br>for <br>men</h2>

                            </a>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a href=\"http://localhost:8000/product/gender/woman\" class=\"f-product-2\" style=\"background-image: url(";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/item-2"), "html", null, true);
        echo ".jpg);\">

                                        <h2>New <br>Arrival <br>Dress</h2>

                                    </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"\" class=\"f-product-2\" style=\"background-image: url(";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/item-4"), "html", null, true);
        echo ".jpg);\">

                                        <h2>Sale <br>20% <br>off</h2>

                                    </a>
                                </div>
                                <div class=\"col-md-12\">
                                    <a href=\"\" class=\"f-product-2\" style=\"background-image: url(";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/item-3"), "html", null, true);
        echo ".jpg);\">

                                        <h2>Shoes <br>for <br>men</h2>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!---------------------end occaaassion------------------------->


            ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 425, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 426
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"product-grid4\">
                        <div class=\"product-image4\">
                            <a href=\"#\">
                                <img class=\"pic-1\" src=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 430), "html", null, true);
            echo ".jpg\">
                                <img class=\"pic-2\" src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 431), "html", null, true);
            echo ".jpg\">
                            </a>
                            <ul class=\"social\">
                                <li><a href=\"http://localhost:8000/product/";
            // line 434
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 434), "html", null, true);
            echo "\" data-tip=\"Quick View\"><i class=\"fa fa-eye\"></i></a></li>
                                <li><a href=\"#\"  data-tip=\"Add to cart\" ><i class=\"fa fa-shopping-cart add-to-cart\"  id=\"";
            // line 435
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 435), "html", null, true);
            echo "\"  data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 435), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 435), "html", null, true);
            echo "\"  ></i></a></li>
                                ";
            // line 437
            echo "                            </ul>
                            <span class=\"product-discount-label\">new</span>
                        </div>
                        <div class=\"product-content\">
                            <h3 class=\"title\"><a href=\"http://localhost:8000/product/";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 441), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 441), "html", null, true);
            echo "</a></h3>
                            <div class=\"price\">
                                ";
            // line 443
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 443), "html", null, true);
            echo "  VND
                                <span>\$20.00</span>
                            </div>
                            <button  id=\"";
            // line 446
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 446), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 446), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 446), "html", null, true);
            echo "\" class=\"add-to-cart \" >Add to cart</button>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "

            </div>


       <!-----     <button class=\"loadmore\">Load More</button>   ------>


            </div>
    </div>

<script
src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
crossorigin=\"anonymous\"></script>

    <!--Menu-->
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".sub > a\").click(function() {
                var ul = \$(this).next(),
                    clone = ul.clone().css({\"height\":\"auto\"}).appendTo(\".mini-menu\"),
                    height = ul.css(\"height\") === \"0px\" ? ul[0].scrollHeight + \"px\" : \"0px\";
                clone.remove();
                ul.animate({\"height\":height});
                return false;
            });
            \$('.mini-menu > ul > li > a').click(function(){
                \$('.sub a').removeClass('active');
                \$(this).addClass('active');
            }),
                \$('.sub ul li a').click(function(){
                    \$('.sub ul li a').removeClass('active');
                    \$(this).addClass('active');
                });
        });
    </script>
    <script src=\"script.js\" ></script>


    <script>
        \$( function() {
            \$( \"#slider-range\" ).slider({
                range: true,
                min: 2000,
                max: 500000,
                values: [ 2000, 400000 ],
                slide: function( event, ui ) {
                    \$( \"#amount\" ).val( \"\$\" + ui.values[ 0 ] + \" - \$\" + ui.values[ 1 ] );
                    var mi = ui.values[0];
                    var mx = ui.values[1];
                    filterSystem(mi, mx);
                }
            });
            \$( \"#amount\" ).val( \"\$\" + \$( \"#slider-range\" ).slider( \"values\", 0 ) +
                \" - \$\" + \$( \"#slider-range\" ).slider( \"values\", 1 ) );
        } );


        function filterSystem(minPrice, maxPrice) {
            \$(\".items div.item\").hide().filter(function () {
                var price = parseInt(\$(this).data(\"price\"), 10);
                return price >= minPrice && price <= maxPrice;
            }).show();
        }
    </script>


    <!-------------------------------end  menu doc-------------------------------------------------------->



    <!---------test giao dien--------------------->





</div>
</div>


</div>




    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\">
        ";
        // line 539
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 539, $this->source); })()));
        echo "
    </div>


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
                    <li><a href=\"http://localhost:8000/product/gender/woman\">Woman</a></li>
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



<!-----end footer------------->


<script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/cart"), "html", null, true);
        echo ".js\"></script>

</body>




</html>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 629,  768 => 539,  678 => 451,  663 => 446,  657 => 443,  650 => 441,  644 => 437,  636 => 435,  632 => 434,  625 => 431,  620 => 430,  614 => 426,  610 => 425,  591 => 409,  581 => 402,  571 => 395,  559 => 386,  492 => 322,  481 => 314,  471 => 307,  418 => 256,  406 => 252,  403 => 251,  399 => 250,  348 => 201,  342 => 199,  338 => 197,  326 => 194,  321 => 193,  319 => 192,  308 => 183,  302 => 181,  298 => 179,  286 => 176,  281 => 175,  279 => 174,  267 => 164,  261 => 162,  257 => 160,  245 => 157,  240 => 156,  238 => 155,  167 => 87,  163 => 85,  156 => 80,  151 => 77,  149 => 76,  142 => 72,  133 => 68,  128 => 65,  124 => 63,  117 => 57,  115 => 56,  107 => 51,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
    <link rel=\"stylesheet\" href=\"{{asset('build/home')}}.css\" />
    <script src=\"{{asset('build/respond')}}.min.js\"></script>


</head>

<body>

<style>

    .mini-menu .sub > a.active,
    {
        padding-left: 1.3em;
        color: blue;
        content: \"1\";
        float: right;
        margin-right:6px;
        line-height: 12px;
    }
</style>


<!-- page-header -->
<div class=\"page-header-shop pink \">

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
                            <div class=\"dropdown-content orange\">
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

                             {% if productType|length > 0 %}
                             {% for i in range(0, (productType|length - 1)) %}
                                 <a class=\"dropdown-item\" href=\"http://localhost:8000/product/man/{{ productType[i].id }}\"> {{ productType[i].type }}</a>

                            {% endfor %}

                            {% else %}
                                {{ 'Product not found.' }}
                            {% endif %}

                             </div>

                         </li>

                         <li class=\"nav-item dropdown\">
                             <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Woman
                             </a>
                             <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                 {% if productType|length > 0 %}
                                     {% for i in range(0, (productType|length - 1)) %}
                                         <a class=\"dropdown-item\" href=\"http://localhost:8000/product/women/{{ productType[i].id }}\"> {{ productType[i].type }}</a>

                                     {% endfor %}

                                 {% else %}
                                     {{ 'Product not found.' }}
                                 {% endif %}
                             </div>
                         </li>

                         <li class=\"nav-item dropdown\">
                             <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 Kid
                             </a>
                             <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                                 {% if productType|length > 0 %}
                                     {% for i in range(0, (productType|length - 1)) %}
                                         <a class=\"dropdown-item\" href=\"http://localhost:8000/product/kids/{{ productType[i].id }}\"> {{ productType[i].type }}</a>

                                     {% endfor %}

                                 {% else %}
                                     {{ 'Product not found.' }}
                                 {% endif %}

                             </div>
                         </li>

                     </ul>
                 </div>
             </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<!-------header topic ------------------->




    <div class=\"wrap\">


        <div class=\"menu\">
            <div class=\"mini-menu\">
                <ul>
                    <li class=\"sub\">
                        <a href=\"#\">WOMAN</a>
                        <ul>
                            <li><a href=\"http://localhost:8000/product/women/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/women/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/women/3\">Accessories</a></li>

                        </ul>
                    </li>
                    <li class=\"sub\">
                        <a href=\"#\">MAN</a>
                        <ul>

                            <li><a href=\"http://localhost:8000/product/man/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/man/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/man/3\">Accessories</a></li>
                        </ul>
                    </li>
                    <li class=\"sub\">
                        <a href=\"#\">KIDS</a>
                        <ul>
                            <li><a href=\"http://localhost:8000/product/kids/1\">Shirt</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/2\">Jean</a></li>
                            <li><a href=\"http://localhost:8000/product/kids/3\">Accessories</a></li>
                        </ul>
                    </li>

                    {% for productType in productType %}
                    <li >
                        <a class=\"sub\" href=\"http://localhost:8000/product/type/{{  productType.id }}\">  {{ productType.type }} </a>

                    </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"menu-colors menu-item\">
                <div class=\"header-item\" >Colors</div>
                <ul class=\"color-row1\">
                    <li class=\"color-circle\" style=\"background:#4286f4\"></li>
                    <li class=\"color-circle\" style=\"background:#2acc4b\"></li>
                    <li class=\"color-circle\" style=\"background:#343534\"></li>
                    <li class=\"color-circle\" style=\"background:#5f605f\"></li>
                    <li class=\"color-circle\" style=\"background:#929392\"></li>
                </ul>
                <ul class=\"color-row2\">
                    <li class=\"color-circle\" style=\"background:#9e8045\"></li>
                    <li class=\"color-circle\" style=\"background:#d3d3d3\"></li>
                    <li class=\"color-circle\" style=\"background:#6b6666\"></li>
                    <li class=\"color-circle\" style=\"background:#999797\"></li>
                    <li class=\"color-circle\" style=\"background:#923476\"></li>
                </ul>
            </div>
            <div class=\"menu-size menu-item\">
                <div class=\"header-item\" >Size</div>
                <ul class=\"color-row1\">
                    <li class=\"color-circle size-circle\" ><p class=\"sizedouble\">XS</p></li>
                    <li class=\"color-circle size-circle\" style=\"background-color:#343534\" ><p style=\"color:#999\" class=\"size\">S</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"size\">M</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"size\">L</p></li>
                    <li class=\"color-circle size-circle\" ><p class=\"sizedouble\">XL</p></li>
                </ul>
            </div>
            <div class=\"menu-price menu-item\">
                <div class=\"header-item\" >Price</div>
                <p>
                    <!--<label for=\"amount\">Price range:</label>-->
                    <input type=\"text\" readonly id=\"amount\"  style=\"border:0; color:#f6931f; font-weight:bold;\">
                </p>
                <div id=\"slider-range\"></div>
            </div>

        </div>

        <div class=\"items\">



            <!-- page-slider-header ---  advertising-->


            <div class=\"slideshow-container\">

                <div class=\"mySlides fade\">

                    <img src=\"{{asset('build/images/slide-01')}}.jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!--- <img src=\"http://localhost/list/slide-05.jpg\" style=\"width:100%\"> --->

                </div>

                <div class=\"mySlides fade\">
                    <img src=\"{{asset('build/images/banner-05')}}.jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!---<img src=\"http://localhost/list/slide-02.jpg\" style=\"width:100%\">----->
                    <!--- <div class=\"text\">Fashion</div> ---->
                </div>

                <div class=\"mySlides fade\">

                    <img src=\"{{asset('build/images/slide-05')}}.jpg\" style=\"width:88%;height:75%;display: block; margin-left: auto; margin-right: auto;\">

                    <!---  <img src=\"http://localhost/list/slide-03.jpg\" style=\"width:100%\">------>
                    <!-- <div class=\"text\">Mordern</div> --->
                </div>
            </div>
            <br>

            <div style=\"text-align:center\">
                <span class=\"dot\" onclick=\"currentSlide(0)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
                <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            </div>

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
                    setTimeout(showSlides, 10000);
                }
                //mặc định hiển thị slide đầu tiên
                showSlides(slideIndex = 0);


                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
            </script>









            <!--------------------------------------ocassion ------------------------->


            <div id=\"colorlib-featured-product\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <a href=\"http://localhost:8000/product/gender/man\" class=\"f-product-1\" style=\"background-image: url({{asset('build/images/item-1')}}.jpg);\">

                                <h2 style=\"color: white;\">Fahion <br>for <br>men</h2>

                            </a>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a href=\"http://localhost:8000/product/gender/woman\" class=\"f-product-2\" style=\"background-image: url({{asset('build/images/item-2')}}.jpg);\">

                                        <h2>New <br>Arrival <br>Dress</h2>

                                    </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"\" class=\"f-product-2\" style=\"background-image: url({{asset('build/images/item-4')}}.jpg);\">

                                        <h2>Sale <br>20% <br>off</h2>

                                    </a>
                                </div>
                                <div class=\"col-md-12\">
                                    <a href=\"\" class=\"f-product-2\" style=\"background-image: url({{asset('build/images/item-3')}}.jpg);\">

                                        <h2>Shoes <br>for <br>men</h2>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!---------------------end occaaassion------------------------->


            {% for appointment in appointments %}
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"product-grid4\">
                        <div class=\"product-image4\">
                            <a href=\"#\">
                                <img class=\"pic-1\" src=\"{{asset('build/images/product-')}}{{appointment.id}}.jpg\">
                                <img class=\"pic-2\" src=\"{{asset('build/images/product-')}}{{appointment.id}}.jpg\">
                            </a>
                            <ul class=\"social\">
                                <li><a href=\"http://localhost:8000/product/{{appointment.id}}\" data-tip=\"Quick View\"><i class=\"fa fa-eye\"></i></a></li>
                                <li><a href=\"#\"  data-tip=\"Add to cart\" ><i class=\"fa fa-shopping-cart add-to-cart\"  id=\"{{appointment.id}}\"  data-name=\"{{ appointment.name }}\" data-price=\"{{ appointment.price }}\"  ></i></a></li>
                                {# <li><a class=\"add-to-cart\" id=\"{{appointment.id}}\" data-name=\"{{ appointment.name }}\" data-price=\"{{ appointment.price }}\" data-tip=\"Add to Cart\" }><i class=\"fa fa-shopping-cart\"></i></a></li>   #}
                            </ul>
                            <span class=\"product-discount-label\">new</span>
                        </div>
                        <div class=\"product-content\">
                            <h3 class=\"title\"><a href=\"http://localhost:8000/product/{{appointment.id}}\">{{ appointment.name }}</a></h3>
                            <div class=\"price\">
                                {{ appointment.price }}  VND
                                <span>\$20.00</span>
                            </div>
                            <button  id=\"{{appointment.id}}\" data-name=\"{{ appointment.name }}\" data-price=\"{{ appointment.price }}\" class=\"add-to-cart \" >Add to cart</button>
                        </div>
                    </div>
                </div>
            {% endfor %}


            </div>


       <!-----     <button class=\"loadmore\">Load More</button>   ------>


            </div>
    </div>

<script
src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
crossorigin=\"anonymous\"></script>

    <!--Menu-->
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".sub > a\").click(function() {
                var ul = \$(this).next(),
                    clone = ul.clone().css({\"height\":\"auto\"}).appendTo(\".mini-menu\"),
                    height = ul.css(\"height\") === \"0px\" ? ul[0].scrollHeight + \"px\" : \"0px\";
                clone.remove();
                ul.animate({\"height\":height});
                return false;
            });
            \$('.mini-menu > ul > li > a').click(function(){
                \$('.sub a').removeClass('active');
                \$(this).addClass('active');
            }),
                \$('.sub ul li a').click(function(){
                    \$('.sub ul li a').removeClass('active');
                    \$(this).addClass('active');
                });
        });
    </script>
    <script src=\"script.js\" ></script>


    <script>
        \$( function() {
            \$( \"#slider-range\" ).slider({
                range: true,
                min: 2000,
                max: 500000,
                values: [ 2000, 400000 ],
                slide: function( event, ui ) {
                    \$( \"#amount\" ).val( \"\$\" + ui.values[ 0 ] + \" - \$\" + ui.values[ 1 ] );
                    var mi = ui.values[0];
                    var mx = ui.values[1];
                    filterSystem(mi, mx);
                }
            });
            \$( \"#amount\" ).val( \"\$\" + \$( \"#slider-range\" ).slider( \"values\", 0 ) +
                \" - \$\" + \$( \"#slider-range\" ).slider( \"values\", 1 ) );
        } );


        function filterSystem(minPrice, maxPrice) {
            \$(\".items div.item\").hide().filter(function () {
                var price = parseInt(\$(this).data(\"price\"), 10);
                return price >= minPrice && price <= maxPrice;
            }).show();
        }
    </script>


    <!-------------------------------end  menu doc-------------------------------------------------------->



    <!---------test giao dien--------------------->





</div>
</div>


</div>




    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\">
        {{ knp_pagination_render(appointments) }}
    </div>


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
                    <li><a href=\"http://localhost:8000/product/gender/woman\">Woman</a></li>
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



<!-----end footer------------->


<script src=\"{{asset('build/cart')}}.js\"></script>

</body>




</html>





", "product/home.html.twig", "/var/www/html/myProject/datshop/templates/product/home.html.twig");
    }
}
