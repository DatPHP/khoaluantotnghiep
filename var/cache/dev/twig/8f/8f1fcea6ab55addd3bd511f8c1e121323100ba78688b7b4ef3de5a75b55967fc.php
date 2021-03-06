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

/* product/products.html.twig */
class __TwigTemplate_eba9d48a62c2bac609c085c8c77424ad9e974a16be6254fca4e14a45641d4546 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        // line 1
        echo "




<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


    <title>Home</title>

    <style type=\"text/css\">

        h1
        {
            font-size: 70px;
            color:#009999;

        }

        div.container {
            width: 1600px;


        }


        header, footer {
            padding: 1em;
            color: black;
            background-color: white;
            clear: left;
            text-align: center;
        }


        main {
            margin: 10px;
            border: 1px solid gray;
            padding: 15px;
            overflow: hidden;

        }





        .navbar-brand
        {

            font-size: 28px;
        }

        nav {

            max-width: 1600px;
            margin-left: 45px;
            padding: 1em;
            float:left;
            font-size:25px ;

        }

        nav ul {
            list-style-type: none;

        }

        nav ul a {
            text-decoration: none;



        }

        nav ul li
        {
            float: left;
            font-size: 25px;

            padding-left: 35px;
        }

        .left
        {
            width: 300px;
            height: 250px ;
            background-color: whitesmoke;
            border: white solid;
            text-align: center;

            float:left;
        }


        .sub
        {

            width: 1100px;
            height: 350px;
            text-align: center;

        }
        .top
        {
            height:250px ;
            padding: 45px;

        }
        .buttom-top{


            padding-left: 980px;

        }
        .boot
        {

            padding-left: 900px;

        }

    </style>
</head>
<body>



<div class=\"container\">

    <!--------------------------------------------Header------------------------------------>
    <header>
        <div class=\"buttom-top\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\"> Log out </button>
        </div>

  <div class=\"top\">

        <h1><b>CLOTHER SHOP</b></h1>


      <a href=\"#\" class=\"fa fa-cart-plus boot\" style=\"font-size:48px;color:black;\"> </a>

        ";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "

  </div>



    </header>



    <!-------------------------------------Menu Taskbar--------------------------------------->

    <nav>

        <ul class=\"nav nav-tabs nav-justified\">
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info nav-item\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Home</a>  </button>

            </div>
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Brand</a>  </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Lime Orange </a></li>
                    <li><a href=\"#\">Dottie</a></li>
                    <li><a href=\"#\">The Blue </a></li>

                </ul>
            </div>

            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Shirt</a>  </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">T-Shirt</a></li>
                    <li><a href=\"#\">Shirt</a></li>
                    <li><a href=\"#\">jacket</a></li>
                    <li><a href=\"#\">Blouse</a></li>

                </ul>
            </div>
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Trousers</a>  </button>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">jean</a></li>
                    <li><a href=\"#\">shorts</a></li>
                    <li><a href=\"#\">trousers</a></li>

                </ul>
            </div>
            <ul >

                <!-----------------------------------------------
                <li class=\"nav-item\">

                    <form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"search\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\">
                                    <i class=\"glyphicon glyphicon-search\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </li> ------------------------------>
            </ul>
        </ul>
    </nav>

    <!------------------------------------------content ---------------------------------------->


    <div class=\"contain\">

        <div class=\"sub\">

            <img src=\"...\" alt=\"...\" class=\"rounded\">
        </div>



<div>

        ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 258
            echo "            <div id=\"main\" style=\"background-color: white;\">

                <div class=\"left\"> <a href=\"http://localhost:8000/product/";
            // line 260
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" >
                        <img class=\"mr-3\" src=\".../64x64\" alt=\"Generic placeholder image\">

                    <p>  ";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 263, $this->source); })()), $context["i"], [], "array", false, false, false, 263), "name", [], "any", false, false, false, 263), "html", null, true);
            echo " </p> <br>
                    <p> ";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 264, $this->source); })()), $context["i"], [], "array", false, false, false, 264), "price", [], "any", false, false, false, 264), "html", null, true);
            echo " vnd  </p><br>


                <div class=\"card\">

                    <div class=\"card bg-info text-white \">
                        <div class=\"card-body nut\">Add Product</div>

                    </div>
                </div>

            </a>
                </div>

            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "</div>


    </div>
    <!---------------------------------------------end content------------------------------------->
        <!-- Footer -->
        <footer class=\"w3-row-padding w3-padding-32\">
            <div class=\"w3-third\">
                <h3>FOOTER</h3>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" target=\"_blank\">w3.css</a></p>
            </div>

            <div class=\"w3-third\">
                <h3>BLOG POSTS</h3>
                <ul class=\"w3-ul w3-hoverable\">
                    <li class=\"w3-padding-16\">
                        <img src=\"/w3images/workshop.jpg\" class=\"w3-left w3-margin-right\" style=\"width:50px\">
                        <span class=\"w3-large\">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class=\"w3-padding-16\">
                        <img src=\"/w3images/gondol.jpg\" class=\"w3-left w3-margin-right\" style=\"width:50px\">
                        <span class=\"w3-large\">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                </ul>
            </div>

        </footer>





</div>




</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 282,  322 => 264,  318 => 263,  312 => 260,  308 => 258,  304 => 257,  205 => 161,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("




<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


    <title>Home</title>

    <style type=\"text/css\">

        h1
        {
            font-size: 70px;
            color:#009999;

        }

        div.container {
            width: 1600px;


        }


        header, footer {
            padding: 1em;
            color: black;
            background-color: white;
            clear: left;
            text-align: center;
        }


        main {
            margin: 10px;
            border: 1px solid gray;
            padding: 15px;
            overflow: hidden;

        }





        .navbar-brand
        {

            font-size: 28px;
        }

        nav {

            max-width: 1600px;
            margin-left: 45px;
            padding: 1em;
            float:left;
            font-size:25px ;

        }

        nav ul {
            list-style-type: none;

        }

        nav ul a {
            text-decoration: none;



        }

        nav ul li
        {
            float: left;
            font-size: 25px;

            padding-left: 35px;
        }

        .left
        {
            width: 300px;
            height: 250px ;
            background-color: whitesmoke;
            border: white solid;
            text-align: center;

            float:left;
        }


        .sub
        {

            width: 1100px;
            height: 350px;
            text-align: center;

        }
        .top
        {
            height:250px ;
            padding: 45px;

        }
        .buttom-top{


            padding-left: 980px;

        }
        .boot
        {

            padding-left: 900px;

        }

    </style>
</head>
<body>



<div class=\"container\">

    <!--------------------------------------------Header------------------------------------>
    <header>
        <div class=\"buttom-top\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\"> Log out </button>
        </div>

  <div class=\"top\">

        <h1><b>CLOTHER SHOP</b></h1>


      <a href=\"#\" class=\"fa fa-cart-plus boot\" style=\"font-size:48px;color:black;\"> </a>

        {{ \"now\"|date(\"m/d/Y\") }}

  </div>



    </header>



    <!-------------------------------------Menu Taskbar--------------------------------------->

    <nav>

        <ul class=\"nav nav-tabs nav-justified\">
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info nav-item\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Home</a>  </button>

            </div>
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Brand</a>  </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Lime Orange </a></li>
                    <li><a href=\"#\">Dottie</a></li>
                    <li><a href=\"#\">The Blue </a></li>

                </ul>
            </div>

            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Shirt</a>  </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">T-Shirt</a></li>
                    <li><a href=\"#\">Shirt</a></li>
                    <li><a href=\"#\">jacket</a></li>
                    <li><a href=\"#\">Blouse</a></li>

                </ul>
            </div>
            <div class=\"btn-group\">

                <button type=\"button\" class=\"btn btn-outline-info\" data-toggle=\"dropdown\">

                    <a class=\"navbar-brand\" href=\"#\">Trousers</a>  </button>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">jean</a></li>
                    <li><a href=\"#\">shorts</a></li>
                    <li><a href=\"#\">trousers</a></li>

                </ul>
            </div>
            <ul >

                <!-----------------------------------------------
                <li class=\"nav-item\">

                    <form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"search\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\">
                                    <i class=\"glyphicon glyphicon-search\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </li> ------------------------------>
            </ul>
        </ul>
    </nav>

    <!------------------------------------------content ---------------------------------------->


    <div class=\"contain\">

        <div class=\"sub\">

            <img src=\"...\" alt=\"...\" class=\"rounded\">
        </div>



<div>

        {% for i in range(low=0, high=7, step=1) %}
            <div id=\"main\" style=\"background-color: white;\">

                <div class=\"left\"> <a href=\"http://localhost:8000/product/{{ i }}\" >
                        <img class=\"mr-3\" src=\".../64x64\" alt=\"Generic placeholder image\">

                    <p>  {{  product[i].name }} </p> <br>
                    <p> {{  product[i].price  }} vnd  </p><br>


                <div class=\"card\">

                    <div class=\"card bg-info text-white \">
                        <div class=\"card-body nut\">Add Product</div>

                    </div>
                </div>

            </a>
                </div>

            </div>


        {% endfor %}
</div>


    </div>
    <!---------------------------------------------end content------------------------------------->
        <!-- Footer -->
        <footer class=\"w3-row-padding w3-padding-32\">
            <div class=\"w3-third\">
                <h3>FOOTER</h3>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <p>Powered by <a href=\"https://www.w3schools.com/w3css/default.asp\" target=\"_blank\">w3.css</a></p>
            </div>

            <div class=\"w3-third\">
                <h3>BLOG POSTS</h3>
                <ul class=\"w3-ul w3-hoverable\">
                    <li class=\"w3-padding-16\">
                        <img src=\"/w3images/workshop.jpg\" class=\"w3-left w3-margin-right\" style=\"width:50px\">
                        <span class=\"w3-large\">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class=\"w3-padding-16\">
                        <img src=\"/w3images/gondol.jpg\" class=\"w3-left w3-margin-right\" style=\"width:50px\">
                        <span class=\"w3-large\">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                </ul>
            </div>

        </footer>





</div>




</body>
</html>", "product/products.html.twig", "/var/www/html/myProject/datshop/templates/product/products.html.twig");
    }
}
