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

/* admin_feedback/index.html.twig */
class __TwigTemplate_0020949e3955dafa41d9c9486945df7db722f076c1f6402d03136e218e64111e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_feedback/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_feedback/index.html.twig"));

        // line 1
        echo "




<!DOCTYPE html>
<html>
<title>Orders</title>
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
    .date
    {
        width: 200px;
    }
    .status
    {
        width: 200px;
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">Users</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>



            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<div class=\"container\">


    <table class=\"table\">

        <thead class=\"thead-dark\">

        <tr>
            <th scope=\"col\" style=\"text-align: right\">Id</th>
            <th scope=\"col\" style=\"text-align: center\">Name</th>
            <th scope=\"col\" style=\"text-align: center\">Email </th>
            <th scope=\"col\" style=\"text-align: center\">Comment</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 189
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 189, $this->source); })())), 0)) {
            // line 190
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 190, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 191
                echo "                <tr>
                    <td>  ";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 192, $this->source); })()), $context["i"], [], "array", false, false, false, 192), "id", [], "any", false, false, false, 192), "html", null, true);
                echo "  </td>
                    <td><div > ";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 193, $this->source); })()), $context["i"], [], "array", false, false, false, 193), "fullname", [], "any", false, false, false, 193), "html", null, true);
                echo " </div></td>
                    <td><div> ";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 194, $this->source); })()), $context["i"], [], "array", false, false, false, 194), "email", [], "any", false, false, false, 194), "html", null, true);
                echo " </div></td>
                    <td><div class=\"date\"> ";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 195, $this->source); })()), $context["i"], [], "array", false, false, false, 195), "comment", [], "any", false, false, false, 195), "html", null, true);
                echo " </div></td>

";
                // line 205
                echo "

                    <td>
                        <button name=\"delete-product\" id=\"";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 208, $this->source); })()), $context["i"], [], "array", false, false, false, 208), "id", [], "any", false, false, false, 208), "html", null, true);
                echo "\" class=\"btn btn-info btn-lg glyphicon glyphicon-remove\" style=\"background-color: white;color: black\"></button>
                    </td>


                </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "
        ";
        } else {
            // line 217
            echo "            ";
            echo "Feedback not found.";
            echo "
        ";
        }
        // line 219
        echo "        </tbody>


    </table>




    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\">

        ";
        // line 229
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["feedback"]) || array_key_exists("feedback", $context) ? $context["feedback"] : (function () { throw new RuntimeError('Variable "feedback" does not exist.', 229, $this->source); })()));
        echo "
    </div>


</div>
</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"container \">
    <div class=\"row foot\">



        <div id=\"foot3\" class=\"col-md-3 col-sm-3\">
            <h3>Address</h3>
            <h4 class=\"text-muted\">125A Ung Văn Khiêm ,Phường 25,Quận Bình Thạn,TP.HCMt<br>Phone:01628089939 <br>Fax:1 999 999 98 <br> Mail:nguyenvandat170296@gmail.com </h4>
        </div>


        <div id=\"foot4\" class=\"col-md-3 col-sm-3\">
            <h3>Follow Us</h3><br>
            <ul class=\"social-network social-circle\">
                <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li><a href=\"#\" class=\"icoTumblr\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>

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
                url: 'http://localhost:8000/feedback/del/' + \$(this).attr(\"id\"),
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
        return "admin_feedback/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 229,  288 => 219,  282 => 217,  278 => 215,  265 => 208,  260 => 205,  255 => 195,  251 => 194,  247 => 193,  243 => 192,  240 => 191,  235 => 190,  233 => 189,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("




<!DOCTYPE html>
<html>
<title>Orders</title>
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
    .date
    {
        width: 200px;
    }
    .status
    {
        width: 200px;
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">Users</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>



            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<div class=\"container\">


    <table class=\"table\">

        <thead class=\"thead-dark\">

        <tr>
            <th scope=\"col\" style=\"text-align: right\">Id</th>
            <th scope=\"col\" style=\"text-align: center\">Name</th>
            <th scope=\"col\" style=\"text-align: center\">Email </th>
            <th scope=\"col\" style=\"text-align: center\">Comment</th>

        </tr>
        </thead>
        <tbody>
        {% if feedback|length > 0 %}
            {% for i in range(0, (feedback|length - 1)) %}
                <tr>
                    <td>  {{ feedback [i].id }}  </td>
                    <td><div > {{ feedback [i].fullname}} </div></td>
                    <td><div> {{ feedback [i].email}} </div></td>
                    <td><div class=\"date\"> {{ feedback [i].comment}} </div></td>

{#

                    <td> <a href=\"http://localhost:8000/orderEdit/{{ order [i].id }}\" class=\"btn btn-info btn-lg\" style=\"background-color: #ff6666\">
                            <span class=\"glyphicon glyphicon-cog\"></span>
                        </a> </td>


                    {#</td>#}


                    <td>
                        <button name=\"delete-product\" id=\"{{ feedback [i].id }}\" class=\"btn btn-info btn-lg glyphicon glyphicon-remove\" style=\"background-color: white;color: black\"></button>
                    </td>


                </tr>

            {% endfor %}

        {% else %}
            {{ 'Feedback not found.' }}
        {% endif %}
        </tbody>


    </table>




    <div class=\"navigation pagination pagination-lg\" style=\"padding-left: 49%\">

        {{ knp_pagination_render(feedback) }}
    </div>


</div>
</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"container \">
    <div class=\"row foot\">



        <div id=\"foot3\" class=\"col-md-3 col-sm-3\">
            <h3>Address</h3>
            <h4 class=\"text-muted\">125A Ung Văn Khiêm ,Phường 25,Quận Bình Thạn,TP.HCMt<br>Phone:01628089939 <br>Fax:1 999 999 98 <br> Mail:nguyenvandat170296@gmail.com </h4>
        </div>


        <div id=\"foot4\" class=\"col-md-3 col-sm-3\">
            <h3>Follow Us</h3><br>
            <ul class=\"social-network social-circle\">
                <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                <li><a href=\"#\" class=\"icoTumblr\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>

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
                url: 'http://localhost:8000/feedback/del/' + \$(this).attr(\"id\"),
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





", "admin_feedback/index.html.twig", "/var/www/html/myProject/datshop/templates/admin_feedback/index.html.twig");
    }
}
