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

/* product/gender.html.twig */
class __TwigTemplate_6c208b79514de2ec168c6b5bb8eb3b88411c4b1585c1f9a9b10fd569e21c2592 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/gender.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/gender.html.twig"));

        // line 1
        echo "

            <!DOCTYPE html>
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
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/bootstrap"), "html", null, true);
        echo ".css\">
                <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/style"), "html", null, true);
        echo ".css\" />
                <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/home"), "html", null, true);
        echo ".css\" />
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
            <div class=\"page-header-shop\">

                <div class=\"container\">


                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">


                            <div  class=\"navbar-form navbar-left\" >
                                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form');
        echo "
                            </div>

                            <div class=\"page-caption\">

                                ";
        // line 53
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                                    <div class=\"loginbutton \" id=\"login\">

                                        <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                            <span class=\"glyphicon glyphicon-home\" ></span> Login
                                        </a>
                                        ";
            // line 60
            echo "                                    </div>
                                ";
        } else {
            // line 62
            echo "                                    <div  id=\"users\">

                                        <div class=\"dropdown\">
                                            <span > <h5> Hello <b> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 65, $this->source); })()), "last_name", [], "any", false, false, false, 65), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 65, $this->source); })()), "first_name", [], "any", false, false, false, 65), "html", null, true);
            echo "</b></h5> </span>
                                            <!--- <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>--->
                                            <div class=\"dropdown-content\">

                                                <a href=\"http://localhost:8000/Customer01/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"btn btn btn-primary\">Information </a>

                                                <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                                ";
            // line 73
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "role", [], "any", false, false, false, 73), "admin")) {
                // line 74
                echo "                                                    <button id=\"dash-board\" class=\"btn btn btn-primary\"> Dashboard </button>

                                                ";
            }
            // line 77
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 82
        echo "                                <div class=\"logo\"><a href=\"http://localhost:8000/\">

                                        <img  src=\"";
        // line 84
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

            <!-------header topic ------------------->


            <!-- page-side-header -->



            </head>
            <body>



            <br>


            </body>



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
                            <li class=\"sub\">
                                <a href=\"#\">Orders </a>
                                <ul>

                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["productType"]);
        foreach ($context['_seq'] as $context["_key"] => $context["productType"]) {
            // line 240
            echo "
                                        <li><a href=\"http://localhost:8000/product/type/";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productType"], "id", [], "any", false, false, false, 241), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productType"], "type", [], "any", false, false, false, 241), "html", null, true);
            echo "</a></li>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                </ul>
                            </li>
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




                <!------------------conten------------------------->

                <div class=\"items\">


                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 294, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 295
            echo "                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"product-grid4\">
                                <div class=\"product-image4\">
                                    <a href=\"#\">
                                        <img class=\"pic-1\" src=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 299), "html", null, true);
            echo ".jpg\">
                                        <img class=\"pic-2\" src=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/product-"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 300), "html", null, true);
            echo ".jpg\">
                                    </a>
                                    <ul class=\"social\">
                                        <li><a href=\"http://localhost:8000/product/";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 303), "html", null, true);
            echo "\" data-tip=\"Quick View\"><i class=\"fa fa-eye\"></i></a></li>
                                        <li><a href=\"#\"  data-tip=\"Add to cart\" ><i class=\"fa fa-shopping-cart add-to-cart\"  id=\"";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 304), "html", null, true);
            echo "\"  data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 304), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 304), "html", null, true);
            echo "\"  ></i></a></li>
                                        ";
            // line 306
            echo "                                    </ul>
                                    <span class=\"product-discount-label\">-12%</span>
                                </div>
                                <div class=\"product-content\">
                                    <h3 class=\"title\"><a href=\"http://localhost:8000/product/";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 310), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 310), "html", null, true);
            echo "</a></h3>
                                    <div class=\"price\">
                                        ";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 312), "html", null, true);
            echo "  VND
                                        <span>\$20.00</span>
                                    </div>
                                    <button  id=\"";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 315), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", [], "any", false, false, false, 315), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "price", [], "any", false, false, false, 315), "html", null, true);
            echo "\" class=\"add-to-cart \" >Add to cart</button>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "

                    <div>

                        ";
        // line 324
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 324, $this->source); })()));
        echo "
                    </div>

                </div>


                <!--------------------------------------------------------------------end content -------->





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
        // line 420
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 420, $this->source); })()));
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




            </body>




            </html>




            <script>

                // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
                var shoppingCartItems = [];
                \$(document).ready(function () {
                    // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                    if (sessionStorage[\"shopping-cart-items\"] != null) {
                        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                    }

                    // Hiển thị thông tin từ giỏ hàng
                    if (shoppingCartItems.length > 0) {
                        \$(\"#empty-cart\").hide();
                        \$(\"#exist-cart\").show();

                    }

                    displayShoppingCartItems();
                });

                \$(document).ready(function () {
                    // // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                    // if (sessionStorage[\"shopping-cart-items\"] != null) {
                    //     shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                    // }

                    \$(document).ready(function () {
                        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                        if (sessionStorage[\"shopping-cart-items\"] != null) {

                            sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);

                            //  shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                            displayShoppingCartItems();
                        }


                        // Hiển thị thông tin từ giỏ hàng

                        // \$(\"#empty-cart\").hide();
                        // \$(\"#exist-cart\").show();

                        displayShoppingCartItems();
                    });


                    // Hiển thị thông tin từ giỏ hàng

                    //  displayShoppingCartItems();
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
                        // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                        \$.each(shoppingCartItems, function (index, value) {

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
                        // var bien=\"\";
                        var bien = 0;
                        \$.each(shoppingCartItems, function (index, item) {
                            var htmlString = \"\";
                            var itemTotal = item.price * item.quantity;
                            subTotal = subTotal + itemTotal;
                            htmlString += \"<tr>\";
                            // htmlString += \"<td>\" + item.id + \"</td>\";
                            htmlString += \"<td style='width:150px'>\" + item.name + \"</td>\";
                            //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                            htmlString += \"<td  style='width:40px;margin:5px;text-align: right'>\" + \" x \"+item.quantity+\"</td>\";
                            htmlString += \"<td style='text-align: right;width: 80px'>\" + itemTotal + \"</td>\";
                            htmlString += \"<td style='text-align: left; width: 40px'>\" +\" <button class=\\\" btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i class=\\\"fa fa-trash\\\"></i> </button></td>\";

                            htmlString += \"</tr>\";
                            \$(\"#table-products > tbody:last\").append(htmlString);
                            bien = bien +1;

                        });

                        \$(\".dropdowncart\").html( bien +\" items\" );

                        \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4'><p  class=\\\"list-group-item \\\" > <b>Total:</b> \" + subTotal + \" vnd\"+\"</p></td><tr>\");

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/gender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 420,  463 => 324,  457 => 320,  442 => 315,  436 => 312,  429 => 310,  423 => 306,  415 => 304,  411 => 303,  404 => 300,  399 => 299,  393 => 295,  389 => 294,  337 => 244,  326 => 241,  323 => 240,  319 => 239,  161 => 84,  157 => 82,  150 => 77,  145 => 74,  143 => 73,  136 => 69,  127 => 65,  122 => 62,  118 => 60,  111 => 54,  109 => 53,  101 => 48,  69 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

            <!DOCTYPE html>
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

            <!-------header topic ------------------->


            <!-- page-side-header -->



            </head>
            <body>



            <br>


            </body>



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
                            <li class=\"sub\">
                                <a href=\"#\">Orders </a>
                                <ul>

                                    {% for productType in productType %}

                                        <li><a href=\"http://localhost:8000/product/type/{{  productType.id }}\">{{ productType.type }}</a></li>

                                    {% endfor %}
                                </ul>
                            </li>
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




                <!------------------conten------------------------->

                <div class=\"items\">


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
                                    <span class=\"product-discount-label\">-12%</span>
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


                    <div>

                        {{ knp_pagination_render(appointments) }}
                    </div>

                </div>


                <!--------------------------------------------------------------------end content -------->





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




            </body>




            </html>




            <script>

                // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
                var shoppingCartItems = [];
                \$(document).ready(function () {
                    // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                    if (sessionStorage[\"shopping-cart-items\"] != null) {
                        shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                    }

                    // Hiển thị thông tin từ giỏ hàng
                    if (shoppingCartItems.length > 0) {
                        \$(\"#empty-cart\").hide();
                        \$(\"#exist-cart\").show();

                    }

                    displayShoppingCartItems();
                });

                \$(document).ready(function () {
                    // // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                    // if (sessionStorage[\"shopping-cart-items\"] != null) {
                    //     shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                    // }

                    \$(document).ready(function () {
                        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
                        if (sessionStorage[\"shopping-cart-items\"] != null) {

                            sessionStorage[\"shopping-cart-items\"] = JSON.stringify(shoppingCartItems);

                            //  shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString());
                            displayShoppingCartItems();
                        }


                        // Hiển thị thông tin từ giỏ hàng

                        // \$(\"#empty-cart\").hide();
                        // \$(\"#exist-cart\").show();

                        displayShoppingCartItems();
                    });


                    // Hiển thị thông tin từ giỏ hàng

                    //  displayShoppingCartItems();
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
                        // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                        \$.each(shoppingCartItems, function (index, value) {

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
                        // var bien=\"\";
                        var bien = 0;
                        \$.each(shoppingCartItems, function (index, item) {
                            var htmlString = \"\";
                            var itemTotal = item.price * item.quantity;
                            subTotal = subTotal + itemTotal;
                            htmlString += \"<tr>\";
                            // htmlString += \"<td>\" + item.id + \"</td>\";
                            htmlString += \"<td style='width:150px'>\" + item.name + \"</td>\";
                            //  htmlString += \"<td style='text-align: right'>\" + item.price + \"</td>\";
                            htmlString += \"<td  style='width:40px;margin:5px;text-align: right'>\" + \" x \"+item.quantity+\"</td>\";
                            htmlString += \"<td style='text-align: right;width: 80px'>\" + itemTotal + \"</td>\";
                            htmlString += \"<td style='text-align: left; width: 40px'>\" +\" <button class=\\\" btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i class=\\\"fa fa-trash\\\"></i> </button></td>\";

                            htmlString += \"</tr>\";
                            \$(\"#table-products > tbody:last\").append(htmlString);
                            bien = bien +1;

                        });

                        \$(\".dropdowncart\").html( bien +\" items\" );

                        \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='4'><p  class=\\\"list-group-item \\\" > <b>Total:</b> \" + subTotal + \" vnd\"+\"</p></td><tr>\");

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
                        success : function (){
                            location.reload(true);
                        }
                    })
                });


                \$(\"#dash-board\").click().click(function () {
                    location.href = 'http://localhost:8000/admin';
                });


            </script>

", "product/gender.html.twig", "/var/www/html/myProject/datshop/templates/product/gender.html.twig");
    }
}
