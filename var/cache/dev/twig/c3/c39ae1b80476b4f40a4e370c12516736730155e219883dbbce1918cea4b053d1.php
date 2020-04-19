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

/* comment/new.html.twig */
class __TwigTemplate_5ac6ffc81ef9331364ecc757d0b795996b9a00cb3f27fea391a90024845b9aca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/new.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>

    <title>Home</title>
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <!------ Include the above in your HEAD tag ---------->


    <!----------bootstarp cua footer-------------------------->

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">

    <!--------------------end bootstrapt----------------->


    <!----------bootstarp cua navbar-------------------------->

    <!----------bootstarp cua footer-------------------------->

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">

    <!--------------------end bootstrapt----------------->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    <!--------------------end bootstrapt nabar----------------->

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" />





</head>



<body>
<!-- page-header -->

<!-- page-header -->
<div class=\"page-header-shop\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">



                <div class=\"page-caption\">

                    ";
        // line 77
        if (twig_test_empty((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 77, $this->source); })()))) {
            // line 78
            echo "                        <div class=\"loginbutton \" id=\"login\">

                            <a href=\"http://localhost:8000/login\" class=\"btn btn-info btn-lg\">
                                <span class=\"glyphicon glyphicon-home\" ></span> Login
                            </a>
                            ";
            // line 84
            echo "                        </div>
                    ";
        } else {
            // line 86
            echo "                        <div  id=\"users\">

                            <div class=\"dropdown\">
                                <span > <h5> Hello <b> ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 89, $this->source); })()), "last_name", [], "any", false, false, false, 89), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 89, $this->source); })()), "first_name", [], "any", false, false, false, 89), "html", null, true);
            echo "</b></h5> </span>
                                <!--- <span > <i class=\"fa fa-navicon\" style=\"font-size:30px \" aria-hidden=\"true\"> </i> </span>--->
                                <div class=\"dropdown-content\">

                                    <a href=\"http://localhost:8000/Customer01/";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" class=\"btn btn btn-primary\">Information </a>

                                    <button id=\"logout\" class=\"btn btn btn-primary\">Logout</button>

                                    ";
            // line 97
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "role", [], "any", false, false, false, 97), "admin")) {
                // line 98
                echo "                                        <button id=\"dash-board\" class=\"btn btn btn-primary\"> Dashboard </button>

                                    ";
            }
            // line 101
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 106
        echo "                    <div class=\"logo\"><a href=\"http://localhost:8000/\">

                            <img  src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/datshop"), "html", null, true);
        echo ".png\"  style=\"text-align:center; width: 80%;height:40%;padding-left: 45%\"/>
                            <!---  <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/> ------>
                        </a>
                    </div>


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



    <main role=\"main\" class=\"container main\">
        ";
        // line 189
        $this->loadTemplate("flash_messages.html.twig", "comment/new.html.twig", 189)->display($context);
        // line 190
        echo "
        ";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 192
        echo "    </main>
    <h2 class=\"text-center\">Contact</h2>





    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class=\"row\">
        <div class=\"col-md-7\">

            <h1 class=\"section-title\">Love to Hear From You</h1>

                <p>My website is new and very much in need of comments, comments and comments from customers. All comments and feedback on policies, product warranty, website errors, product errors .... they are very valuable to me.</p>

                <div class=\"find-widget\">
                    Company:  <a href=\"https://hostriver.ro\">Dat Shop </a>
                </div>
                <div class=\"find-widget\">
                    Email: <a href=\"#\">nguyenvandat170296@gmail.com</a>
                </div>
                <div class=\"find-widget\">
                    Phone:  <a href=\"#\">+ 32 8089939</a>
                </div>

                <div class=\"find-widget\">
                    Website:  <a href=\"https://uny.ro\">www.datshop.ik</a>
                </div>
                <div class=\"find-widget\">
                    Program: <a href=\"#\">Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>








        </div>
        <div class=\"col-md-5\">


            ";
        // line 235
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), 'form_start');
        echo "

            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "name", [], "any", false, false, false, 237), 'row');
        echo "

            ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "email", [], "any", false, false, false, 239), 'row');
        echo "


            ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "request", [], "any", false, false, false, 242), 'row');
        echo "



            ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "send", [], "any", false, false, false, 246), 'row', ["label" => "Send Request"]);
        echo "


            ";
        // line 249
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), 'form_end');
        echo "










        </div>
    </div>




    </div>

     <br>
     <br>








                   <!---- <button type=\"submit\" class=\"btn main-btn pull-right\">Send a message</button>------>







</div>




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


    #form_name { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_request { display: flex; justify-content: space-between; }

</style>











<!--footer starts from here-->
<footer class=\"footer\"  >

    <div>




    </div>

    <div class=\"container bottom_border\" >
        <div class=\"row\">
            <div class=\" col-sm-4 col-md col-sm-4  col-12 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Find us</h5>
                <!--headin5_amrc-->
                <p class=\"mb10\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p><i class=\"fa fa-location-arrow\"></i> 125 Ung Van Khiem street,Binh Thanh Province, HCM city </p>
                <p><i class=\"fa fa-phone\"></i>  0328089939  </p>
                <p><i class=\"fa fa fa-envelope\"></i> nguyenvandat170296@gmail.com  </p>

            </div>


            <div class=\" col-sm-4 col-md  col-6 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                <!--headin5_amrc-->
                <ul class=\"footer_ul_amrc\">
                    <li><a href=\"http://webenlance.com\">Image Rectoucing</a></li>
                    <li><a href=\"http://webenlance.com\">Clipping Path</a></li>
                    <li><a href=\"http://webenlance.com\">Hollow Man Montage</a></li>
                    <li><a href=\"http://webenlance.com\">Ebay & Amazon</a></li>
                    <li><a href=\"http://webenlance.com\">Hair Masking/Clipping</a></li>
                    <li><a href=\"http://webenlance.com\">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=\" col-sm-4 col-md  col-6 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                <!--headin5_amrc-->
                <ul class=\"footer_ul_amrc\">
                    <li><a href=\"http://webenlance.com\">Remove Background</a></li>
                    <li><a href=\"http://webenlance.com\">Shadows & Mirror Reflection</a></li>
                    <li><a href=\"http://webenlance.com\">Logo Design</a></li>
                    <li><a href=\"http://webenlance.com\">Vectorization</a></li>
                    <li><a href=\"http://webenlance.com\">Hair Masking/Clipping</a></li>
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
            <li><a href=\"http://webenlance.com\">Home</a></li>
            <li><a href=\"http://webenlance.com\">About</a></li>
            <li><a href=\"http://webenlance.com\">Services</a></li>
            <li><a href=\"http://webenlance.com\">Pricing</a></li>
            <li><a href=\"http://webenlance.com\">Blog</a></li>
            <li><a href=\"http://webenlance.com\">Contact</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class=\"text-center\">Copyright @2019 | Designed With by <a href=\"#\">Nguyen Van Dat</a></p>

        <ul class=\"social_footer_ul\">
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-facebook-f\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-twitter\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-linkedin\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-instagram\"></i></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>

</footer>


</body>
</html>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 191
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "comment/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 191,  339 => 249,  333 => 246,  326 => 242,  320 => 239,  315 => 237,  310 => 235,  265 => 192,  263 => 191,  260 => 190,  258 => 189,  174 => 108,  170 => 106,  163 => 101,  158 => 98,  156 => 97,  149 => 93,  140 => 89,  135 => 86,  131 => 84,  124 => 78,  122 => 77,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!DOCTYPE html>
<html>

<head>
    <title>Product Detail</title>

    <title>Home</title>
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <!------ Include the above in your HEAD tag ---------->


    <!----------bootstarp cua footer-------------------------->

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">

    <!--------------------end bootstrapt----------------->


    <!----------bootstarp cua navbar-------------------------->

    <!----------bootstarp cua footer-------------------------->

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">

    <!--------------------end bootstrapt----------------->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

    <!--------------------end bootstrapt nabar----------------->

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" />





</head>



<body>
<!-- page-header -->

<!-- page-header -->
<div class=\"page-header-shop\">

    <div class=\"container\">

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

                            <img  src=\"{{asset('build/images/datshop')}}.png\"  style=\"text-align:center; width: 80%;height:40%;padding-left: 45%\"/>
                            <!---  <img  src=\"http://localhost/list/datshop.png\" alt=\"\" style=\"width: 900px;height:300%;padding-left: 230px\"/> ------>
                        </a>
                    </div>


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



    <main role=\"main\" class=\"container main\">
        {% include 'flash_messages.html.twig' %}

        {% block body %}{% endblock %}
    </main>
    <h2 class=\"text-center\">Contact</h2>





    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class=\"row\">
        <div class=\"col-md-7\">

            <h1 class=\"section-title\">Love to Hear From You</h1>

                <p>My website is new and very much in need of comments, comments and comments from customers. All comments and feedback on policies, product warranty, website errors, product errors .... they are very valuable to me.</p>

                <div class=\"find-widget\">
                    Company:  <a href=\"https://hostriver.ro\">Dat Shop </a>
                </div>
                <div class=\"find-widget\">
                    Email: <a href=\"#\">nguyenvandat170296@gmail.com</a>
                </div>
                <div class=\"find-widget\">
                    Phone:  <a href=\"#\">+ 32 8089939</a>
                </div>

                <div class=\"find-widget\">
                    Website:  <a href=\"https://uny.ro\">www.datshop.ik</a>
                </div>
                <div class=\"find-widget\">
                    Program: <a href=\"#\">Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>








        </div>
        <div class=\"col-md-5\">


            {{ form_start(form) }}

            {{ form_row(form.name) }}

            {{ form_row(form.email) }}


            {{ form_row(form.request) }}



            {{ form_row(form.send, { 'label': 'Send Request' }) }}


            {{ form_end(form) }}










        </div>
    </div>




    </div>

     <br>
     <br>








                   <!---- <button type=\"submit\" class=\"btn main-btn pull-right\">Send a message</button>------>







</div>




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


    #form_name { display: flex; justify-content: space-between; }
    #form_email { display: flex; justify-content: space-between; }
    #form_request { display: flex; justify-content: space-between; }

</style>











<!--footer starts from here-->
<footer class=\"footer\"  >

    <div>




    </div>

    <div class=\"container bottom_border\" >
        <div class=\"row\">
            <div class=\" col-sm-4 col-md col-sm-4  col-12 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Find us</h5>
                <!--headin5_amrc-->
                <p class=\"mb10\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p><i class=\"fa fa-location-arrow\"></i> 125 Ung Van Khiem street,Binh Thanh Province, HCM city </p>
                <p><i class=\"fa fa-phone\"></i>  0328089939  </p>
                <p><i class=\"fa fa fa-envelope\"></i> nguyenvandat170296@gmail.com  </p>

            </div>


            <div class=\" col-sm-4 col-md  col-6 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                <!--headin5_amrc-->
                <ul class=\"footer_ul_amrc\">
                    <li><a href=\"http://webenlance.com\">Image Rectoucing</a></li>
                    <li><a href=\"http://webenlance.com\">Clipping Path</a></li>
                    <li><a href=\"http://webenlance.com\">Hollow Man Montage</a></li>
                    <li><a href=\"http://webenlance.com\">Ebay & Amazon</a></li>
                    <li><a href=\"http://webenlance.com\">Hair Masking/Clipping</a></li>
                    <li><a href=\"http://webenlance.com\">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=\" col-sm-4 col-md  col-6 col\">
                <h5 class=\"headin5_amrc col_white_amrc pt2\">Quick links</h5>
                <!--headin5_amrc-->
                <ul class=\"footer_ul_amrc\">
                    <li><a href=\"http://webenlance.com\">Remove Background</a></li>
                    <li><a href=\"http://webenlance.com\">Shadows & Mirror Reflection</a></li>
                    <li><a href=\"http://webenlance.com\">Logo Design</a></li>
                    <li><a href=\"http://webenlance.com\">Vectorization</a></li>
                    <li><a href=\"http://webenlance.com\">Hair Masking/Clipping</a></li>
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
            <li><a href=\"http://webenlance.com\">Home</a></li>
            <li><a href=\"http://webenlance.com\">About</a></li>
            <li><a href=\"http://webenlance.com\">Services</a></li>
            <li><a href=\"http://webenlance.com\">Pricing</a></li>
            <li><a href=\"http://webenlance.com\">Blog</a></li>
            <li><a href=\"http://webenlance.com\">Contact</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class=\"text-center\">Copyright @2019 | Designed With by <a href=\"#\">Nguyen Van Dat</a></p>

        <ul class=\"social_footer_ul\">
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-facebook-f\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-twitter\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-linkedin\"></i></a></li>
            <li><a href=\"http://webenlance.com\"><i class=\"fab fa-instagram\"></i></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>

</footer>


</body>
</html>





", "comment/new.html.twig", "/var/www/html/myProject/datshop/templates/comment/new.html.twig");
    }
}
