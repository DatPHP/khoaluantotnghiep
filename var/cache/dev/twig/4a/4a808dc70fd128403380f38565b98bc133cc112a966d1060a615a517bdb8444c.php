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

/* customer/Customer01.html.twig */
class __TwigTemplate_fdf414ab678940e6103742108b95e1bc00ebd15825710e349df1a9e07b6dedab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/Customer01.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/Customer01.html.twig"));

        // line 1
        echo "
        <!DOCTYPE html>
        <html lang=\"en\">

        <title>Customer Information </title>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <head>
            <script src=\"jquery/jquery.min.js\"></script>
            <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

            <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
            <!---- boostrap.min link local ----->

            <link rel=\"stylesheet\" href=\"css/style.css\">
            <!---- boostrap.min link local ----->

            <script src=\"js/bootstrap.min.js\"></script>
            <!---- Boostrap js link local ----->

            <link rel=\"icon\" href=\"images/icon.png\" type=\"image/x-icon\" />
            <!---- Icon link local ----->

            <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
            <!---- Font awesom link local ----->



            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->

            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\">

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->

            <!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


            <!----list order test-------------------------->
            <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->
        </head>
        <body>

        <style>
            body {background-color:#eee;}
            .container-fluid {padding:50px;}
            .container{background-color:white;padding:50px;   }
            #title{font-family: 'Lobster', cursive;;}

        </style>


        <style>
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>

        <div class=\"container-fluid\">
            <div class=\"container\">
                <h1 class=\"text-center\" id=\"title\">Dat Shop</h1>
                <p class=\"text-center\">
                    <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:Dat Nguyen Van <a href=\"https://www.facebook.com/dat.nguyenvan.7792\"> hcmus.edu.com.</a></small>
                </p>
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <form role=\"form\" method=\"post\" action=\"register.php\">
                            <fieldset>
                                <p class=\"text-uppercase pull-center\"> User Information </p>


                                <p> Firstname</p>
                                ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 126, $this->source); })()), "firstname", [], "any", false, false, false, 126), "html", null, true);
        echo "</br>
                                <p> LastName </p>
                                ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 128, $this->source); })()), "lastname", [], "any", false, false, false, 128), "html", null, true);
        echo "</br>

                            <br>
                                <br>
                                <br>

                                <div>
                                    <button type=\"button\" class=\"btn btn-outline-dark\"> <a href=\"http://localhost:8000/EditInfo/";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135), "html", null, true);
        echo "\"> Edit Information </a></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class=\"col-md-2\">
                        <!-------null------>
                    </div>

                    <div class=\"col-md-5\">
                        <form role=\"form\">
                            <p>
                                <p class=\"text-uppercase\"> Customer Information: </p>

                                <p> Username </p>
                                ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "username", [], "any", false, false, false, 151), "html", null, true);
        echo "<br>

                                <p>Email </p>
                                ";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 154, $this->source); })()), "email", [], "any", false, false, false, 154), "html", null, true);
        echo "</br>
                                <p> Address </p>
                                ";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 156, $this->source); })()), "address", [], "any", false, false, false, 156), "html", null, true);
        echo "

                                <p> Phone Number </p>
                                ";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 159, $this->source); })()), "phone", [], "any", false, false, false, 159), "html", null, true);
        echo "

                            </fieldset>
                        </form>
                    </div>
                </div>


                <!---------------------test list order----------------------->


                   <h2>Orders History </h2>

                    <div class=\"row\">
                        <div class=\"span12\">
                            <div class=\"menu\">
                                <div class=\"accordion\">
                                    <div class=\"accordion-group\">

                                        ";
        // line 178
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 178, $this->source); })())), 0)) {
            // line 179
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 179, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 180
                echo "
                                        <div class=\"accordion-heading country\">

                                            <div class=\"row\">
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">
                                                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#country";
                // line 185
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 185, $this->source); })()), $context["i"], [], "array", false, false, false, 185), "created_date", [], "any", false, false, false, 185), "html", null, true);
                echo "   </a>
                                                </div>
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">

                                                </div>
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">
                                                    <p> # Order id:  ";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 191, $this->source); })()), $context["i"], [], "array", false, false, false, 191), "id", [], "any", false, false, false, 191), "html", null, true);
                echo " </p>

                                                </div>
                                            </div>

                                        </div>
                                                <div id=\"country";
                // line 197
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"accordion-body collapse\">
                                            <div class=\"accordion-inner\">
                                                <p>Note: discount 10% </p>
                                                <table class=\"table table-striped table-condensed\">
                                                    <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Product name</th>
                                                        <th>quantity</th>
                                                        <th>Total</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 211, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 212
                    echo "                                                    ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 212, $this->source); })()), $context["i"], [], "array", false, false, false, 212), "id", [], "any", false, false, false, 212), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 212, $this->source); })()), $context["k"], [], "array", false, false, false, 212), "orderid", [], "any", false, false, false, 212))) {
                        // line 213
                        echo "                                                    <tr>
                                                        <td> ";
                        // line 214
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 214, $this->source); })()), $context["k"], [], "array", false, false, false, 214), "productid", [], "any", false, false, false, 214), "html", null, true);
                        echo "</td>
                                                        <td>   ";
                        // line 215
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sanpham"]) || array_key_exists("sanpham", $context) ? $context["sanpham"] : (function () { throw new RuntimeError('Variable "sanpham" does not exist.', 215, $this->source); })()), $context["k"], [], "array", false, false, false, 215), "name", [], "any", false, false, false, 215), "html", null, true);
                        echo "</td>
                                                        <td>    ";
                        // line 216
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chitiet"]) || array_key_exists("chitiet", $context) ? $context["chitiet"] : (function () { throw new RuntimeError('Variable "chitiet" does not exist.', 216, $this->source); })()), $context["k"], [], "array", false, false, false, 216), "quantity", [], "any", false, false, false, 216), "html", null, true);
                        echo " </td>
                                                        <td> </td>


                                                    </tr>

                                                      ";
                    }
                    // line 223
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "                                                    </tbody>

                                                    <tfoot>
                                                    <tr colspan =\"2\">

                                                        <td> <b> Total: ";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["danhsach"]) || array_key_exists("danhsach", $context) ? $context["danhsach"] : (function () { throw new RuntimeError('Variable "danhsach" does not exist.', 230, $this->source); })()), $context["i"], [], "array", false, false, false, 230), "total", [], "any", false, false, false, 230), "html", null, true);
                echo " </b></td>
                                                    </tr>

                                                    </tfoot>

                                                </table>
                                            </div>
                                        </div>


                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                        ";
        } else {
            // line 242
            echo "
                                            <div class=\"alert alert-primary\">
                                                <strong>Order is emtry!</strong> Let's continue go to buy!
                                            </div>


                                        ";
        }
        // line 249
        echo "

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <!-------------------------end list order test----------------------------->

            </div>



            <p class=\"text-center\">
                <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:<a href=\"https://www.linkedin.com/in/van-dat-nguyen-b678a2176/?fbclid=IwAR1qBhZhKYeuB6RakrCZ-_RfOFNKVzMEsetBWwhFYAONySRiGiBXdkVrkT8\">Dat Shop manager and service</a> datshop.com.vn : <a href=\"https://localhost:8000/product\">Create by Dat Nguyen Van </a></small>
            </p>

        </div>


        </body>
        ";
        // line 291
        echo "
        </html>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "customer/Customer01.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 291,  365 => 249,  356 => 242,  353 => 241,  336 => 230,  329 => 225,  322 => 223,  312 => 216,  308 => 215,  304 => 214,  301 => 213,  298 => 212,  294 => 211,  277 => 197,  268 => 191,  257 => 185,  250 => 180,  245 => 179,  243 => 178,  221 => 159,  215 => 156,  210 => 154,  204 => 151,  185 => 135,  175 => 128,  170 => 126,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <!DOCTYPE html>
        <html lang=\"en\">

        <title>Customer Information </title>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <head>
            <script src=\"jquery/jquery.min.js\"></script>
            <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

            <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
            <!---- boostrap.min link local ----->

            <link rel=\"stylesheet\" href=\"css/style.css\">
            <!---- boostrap.min link local ----->

            <script src=\"js/bootstrap.min.js\"></script>
            <!---- Boostrap js link local ----->

            <link rel=\"icon\" href=\"images/icon.png\" type=\"image/x-icon\" />
            <!---- Icon link local ----->

            <link href=\"https://fonts.googleapis.com/css?family=Lobster\" rel=\"stylesheet\">
            <!---- Font awesom link local ----->



            <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->

            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\">

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->

            <!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


            <!----list order test-------------------------->
            <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->
        </head>
        <body>

        <style>
            body {background-color:#eee;}
            .container-fluid {padding:50px;}
            .container{background-color:white;padding:50px;   }
            #title{font-family: 'Lobster', cursive;;}

        </style>


        <style>
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>

        <div class=\"container-fluid\">
            <div class=\"container\">
                <h1 class=\"text-center\" id=\"title\">Dat Shop</h1>
                <p class=\"text-center\">
                    <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:Dat Nguyen Van <a href=\"https://www.facebook.com/dat.nguyenvan.7792\"> hcmus.edu.com.</a></small>
                </p>
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <form role=\"form\" method=\"post\" action=\"register.php\">
                            <fieldset>
                                <p class=\"text-uppercase pull-center\"> User Information </p>


                                <p> Firstname</p>
                                {{ customer.firstname }}</br>
                                <p> LastName </p>
                                {{ customer.lastname }}</br>

                            <br>
                                <br>
                                <br>

                                <div>
                                    <button type=\"button\" class=\"btn btn-outline-dark\"> <a href=\"http://localhost:8000/EditInfo/{{ customer.id }}\"> Edit Information </a></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class=\"col-md-2\">
                        <!-------null------>
                    </div>

                    <div class=\"col-md-5\">
                        <form role=\"form\">
                            <p>
                                <p class=\"text-uppercase\"> Customer Information: </p>

                                <p> Username </p>
                                {{ user.username }}<br>

                                <p>Email </p>
                                {{ customer.email }}</br>
                                <p> Address </p>
                                {{ customer.address }}

                                <p> Phone Number </p>
                                {{ customer.phone }}

                            </fieldset>
                        </form>
                    </div>
                </div>


                <!---------------------test list order----------------------->


                   <h2>Orders History </h2>

                    <div class=\"row\">
                        <div class=\"span12\">
                            <div class=\"menu\">
                                <div class=\"accordion\">
                                    <div class=\"accordion-group\">

                                        {% if(danhsach|length>0)  %}
                                            {% for i in range(0, (danhsach|length - 1)) %}

                                        <div class=\"accordion-heading country\">

                                            <div class=\"row\">
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">
                                                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#country{{ i }}\">{{ danhsach[i].created_date }}   </a>
                                                </div>
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">

                                                </div>
                                                <div class=\"col-sm-4\" style=\"background-color:lavender;\">
                                                    <p> # Order id:  {{danhsach[i].id}} </p>

                                                </div>
                                            </div>

                                        </div>
                                                <div id=\"country{{ i }}\" class=\"accordion-body collapse\">
                                            <div class=\"accordion-inner\">
                                                <p>Note: discount 10% </p>
                                                <table class=\"table table-striped table-condensed\">
                                                    <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Product name</th>
                                                        <th>quantity</th>
                                                        <th>Total</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                {% for k in range(0, (chitiet|length - 1)) %}
                                                    {% if danhsach[i].id == chitiet[k].orderid %}
                                                    <tr>
                                                        <td> {{chitiet[k].productid}}</td>
                                                        <td>   {{ sanpham[k].name }}</td>
                                                        <td>    {{chitiet[k].quantity }} </td>
                                                        <td> </td>


                                                    </tr>

                                                      {% endif %}

                                                {% endfor %}
                                                    </tbody>

                                                    <tfoot>
                                                    <tr colspan =\"2\">

                                                        <td> <b> Total: {{ danhsach [i].total }} </b></td>
                                                    </tr>

                                                    </tfoot>

                                                </table>
                                            </div>
                                        </div>


                                            {% endfor %}
                                        {% else %}

                                            <div class=\"alert alert-primary\">
                                                <strong>Order is emtry!</strong> Let's continue go to buy!
                                            </div>


                                        {% endif %}


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <!-------------------------end list order test----------------------------->

            </div>



            <p class=\"text-center\">
                <small id=\"passwordHelpInline\" class=\"text-muted\"> Developer:<a href=\"https://www.linkedin.com/in/van-dat-nguyen-b678a2176/?fbclid=IwAR1qBhZhKYeuB6RakrCZ-_RfOFNKVzMEsetBWwhFYAONySRiGiBXdkVrkT8\">Dat Shop manager and service</a> datshop.com.vn : <a href=\"https://localhost:8000/product\">Create by Dat Nguyen Van </a></small>
            </p>

        </div>


        </body>
        {#
        <script>

            // Trong file JavaScript
            \$(document).ready(function () {
                var url = \$(location).attr('href');
                var title = \$(document).attr('title');

                \$('#this_title').html('<strong>' + title + '</strong>');
                \$('#this_url').html('<strong>' + url + '</strong>');
            });


            localStorage.setItem('code',\$(location).attr('href') );

             localStorage.getItem('code');
        </script>
        #}

        </html>




", "customer/Customer01.html.twig", "/var/www/html/myProject/datshop/templates/customer/Customer01.html.twig");
    }
}
