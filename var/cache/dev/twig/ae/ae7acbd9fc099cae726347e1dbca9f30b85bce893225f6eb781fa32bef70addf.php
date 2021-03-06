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

/* admin/dashboard.html.twig */
class __TwigTemplate_90f4638edfb75554bcfc8f0aeaab719a24da26ce99f24879a778844ea9486dfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<title>Dashboard</title>
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
                        <button type=\"button\" class=\"btn btn btn-outline-dark logout \"><a href=\"http://localhost:8000\">Log out </a> </button>
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">Customers</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<!-------header topic ------------------->

<!-- /.page-header-->


<!-------------end header topic-------------->


<style>
    #home_quicklinks {
        padding: 20px 0;
        text-align: center;
    }
    a.quicklink.link1 {
        background: #fc6719;
    }
    a.quicklink {
        display: inline-block;
        width: 302px;
        height: 173px;
        position: relative;
        margin: 90px 30px;
    }
    a.quicklink .ql_caption {
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
    }
    .outer {
        display: table;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    .inner {
        display: table-cell;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    a.quicklink .ql_caption h2 {
        margin: 0px;
        padding: 0px;
        text-transform: uppercase;
        line-height: 1.46em;
        color: #fff;
    }
    a.quicklink.link1 .ql_top {
        border-bottom-color: #fc6719;
    }
    a.quicklink.link1 .ql_bottom {
        border-top-color: #fc6719;
    }


    .ql_top {
        bottom: 173px;
        border-bottom: 89px solid #ccc;
    }
    .ql_bottom {
        top: 173px;
        border-top: 89px solid #ccc;
    }
    .ql_top, .ql_bottom {
        position: absolute;
        left: 0px;
        width: 0px;
        border-left: 151px solid transparent;
        border-right: 151px solid transparent;
    }

    a.quicklink.link2 {
        background: #fcf4e7;
    }
    a.quicklink.link2 .ql_top {
        border-bottom-color: #fcf4e7;
    }
    a.quicklink.link2 .ql_bottom {
        border-top-color: #fcf4e7;
    }


    a.quicklink.link3 .ql_top {
        border-bottom-color: #bcbdc0;
    }
    a.quicklink.link3 .ql_bottom {
        border-top-color: #bcbdc0;
    }
    a.quicklink.link3 {
        background: #bcbdc0;
    }
    a.quicklink {
        font-size: 36px;
        font-weight: 500;
        text-decoration:none;
    }
    .hexagon {
        position: relative;
        width: 300px;
        height: 173.21px;
        margin: 86.60px 0;
        background-image: url(http://csshexagon.com/img/meow.jpg);
        background-size: auto 334.8632px;
        background-position: center;
        box-shadow: 0 0 20px rgba(0,128,192,0.6);
        border-left: solid 5px #4a401c;
        border-right: solid 5px #4a401c;
    }

    .hexTop,
    .hexBottom {
        position: absolute;
        z-index: 1;
        width: 212.13px;
        height: 212.13px;
        overflow: hidden;
        -webkit-transform: scaleY(0.5774) rotate(-45deg);
        -ms-transform: scaleY(0.5774) rotate(-45deg);
        transform: scaleY(0.5774) rotate(-45deg);
        background: inherit;
        left: 38.93px;
        box-shadow: 0 0 20px rgba(0,128,192,0.6);
    }

    /*counter transform the bg image on the caps*/
    .hexTop:after,
    .hexBottom:after {
        content: \"\";
        position: absolute;
        width: 290.0000px;
        height: 167.4315780649915px;
        -webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        -ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        transform:          rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        -webkit-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        background: inherit;
    }

    .hexTop {
        top: -106.0660px;
        border-top: solid 7.0711px #4a401c;
        border-right: solid 7.0711px #4a401c;
    }

    .hexTop:after {
        background-position: center top;
    }

    .hexBottom {
        bottom: -106.0660px;
        border-bottom: solid 7.0711px #4a401c;
        border-left: solid 7.0711px #4a401c;
    }

    .hexBottom:after {
        background-position: center bottom;
    }

    .hexagon:after {
        content: \"\";
        position: absolute;
        top: 2.8868px;
        left: 0;
        width: 290.0000px;
        height: 167.4316px;
        z-index: 2;
        background: inherit;
    }

    .logout
    {
        color:white;
    }
</style>

<div class=\"container\">







    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div id=\"home_quicklinks\">
        <a class=\"quicklink link1\" href=\"http://localhost:8000/admin/customers\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["taikhoan"]) || array_key_exists("taikhoan", $context) ? $context["taikhoan"] : (function () { throw new RuntimeError('Variable "taikhoan" does not exist.', 360, $this->source); })()), "html", null, true);
        echo "</h1>
                                                <h2>Member</h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link1\" href=\"http://localhost:8000/admin/orders\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["dathang"]) || array_key_exists("dathang", $context) ? $context["dathang"] : (function () { throw new RuntimeError('Variable "dathang" does not exist.', 373, $this->source); })()), "html", null, true);
        echo "</h1>
                                                <h2>Orders</h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link3\" href=\"http://localhost:8000/admin/products\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["sanpham"]) || array_key_exists("sanpham", $context) ? $context["sanpham"] : (function () { throw new RuntimeError('Variable "sanpham" does not exist.', 386, $this->source); })()), "html", null, true);
        echo "</h1>
                                                <h2>Products </h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link3\" href=\"http://localhost:8000/admin/feedback\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["phanhoi"]) || array_key_exists("phanhoi", $context) ? $context["phanhoi"] : (function () { throw new RuntimeError('Variable "phanhoi" does not exist.', 399, $this->source); })()), "html", null, true);
        echo "</h1>
                                                <h2>Contacts </h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <div class=\"clear\"></div>
    </div>



</div>

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
<div class=\"container\">
    <h2>Our  Partners</h2>
    <section class=\"customer-logos slider\">
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg\"></div>
    </section>
</div>
<style>

    h2{
        text-align:center;
        padding: 20px;
    }
    /* Slider */

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider
    {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .slick-list:focus
    {
        outline: none;
    }
    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }
    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }
    .slick-track:after
    {
        clear: both;
    }
    .slick-loading .slick-track
    {
        visibility: hidden;
    }

    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }
    [dir='rtl'] .slick-slide
    {
        float: right;
    }
    .slick-slide img
    {
        display: block;
    }
    .slick-slide.slick-loading img
    {
        display: none;
    }
    .slick-slide.dragging img
    {
        pointer-events: none;
    }
    .slick-initialized .slick-slide
    {
        display: block;
    }
    .slick-loading .slick-slide
    {
        visibility: hidden;
    }
    .slick-vertical .slick-slide
    {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }
    .slick-arrow.slick-hidden {
        display: none;
    }







</style>
<script>

    \$(document).ready(function(){
        \$('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });



</script>









</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"container \">
    <h1>Số người ghé thăm trang web hôm nay  :  ";
        // line 606
        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 606, $this->source); })()), "html", null, true);
        echo " </h1>
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

    \$(\".logout\").click(function ()
    {

        unset(\$_SESSION['user_id']);


    });



</script>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 606,  452 => 399,  436 => 386,  420 => 373,  404 => 360,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<title>Dashboard</title>
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
                        <button type=\"button\" class=\"btn btn btn-outline-dark logout \"><a href=\"http://localhost:8000\">Log out </a> </button>
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
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/customers\">Customers</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/products\">Products</a>
                <a class=\"navbar-brand\" href=\"http://localhost:8000/admin/feedback\">Feedbacks</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!------------------------------------------content ---------------------------------------->

<!-------header topic ------------------->

<!-- /.page-header-->


<!-------------end header topic-------------->


<style>
    #home_quicklinks {
        padding: 20px 0;
        text-align: center;
    }
    a.quicklink.link1 {
        background: #fc6719;
    }
    a.quicklink {
        display: inline-block;
        width: 302px;
        height: 173px;
        position: relative;
        margin: 90px 30px;
    }
    a.quicklink .ql_caption {
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
    }
    .outer {
        display: table;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    .inner {
        display: table-cell;
        position: relative;
        vertical-align: middle;
        text-align: center;
        height: 100%;
        width: 100%;
        border-spacing: 0px;
        padding: 0px;
    }
    a.quicklink .ql_caption h2 {
        margin: 0px;
        padding: 0px;
        text-transform: uppercase;
        line-height: 1.46em;
        color: #fff;
    }
    a.quicklink.link1 .ql_top {
        border-bottom-color: #fc6719;
    }
    a.quicklink.link1 .ql_bottom {
        border-top-color: #fc6719;
    }


    .ql_top {
        bottom: 173px;
        border-bottom: 89px solid #ccc;
    }
    .ql_bottom {
        top: 173px;
        border-top: 89px solid #ccc;
    }
    .ql_top, .ql_bottom {
        position: absolute;
        left: 0px;
        width: 0px;
        border-left: 151px solid transparent;
        border-right: 151px solid transparent;
    }

    a.quicklink.link2 {
        background: #fcf4e7;
    }
    a.quicklink.link2 .ql_top {
        border-bottom-color: #fcf4e7;
    }
    a.quicklink.link2 .ql_bottom {
        border-top-color: #fcf4e7;
    }


    a.quicklink.link3 .ql_top {
        border-bottom-color: #bcbdc0;
    }
    a.quicklink.link3 .ql_bottom {
        border-top-color: #bcbdc0;
    }
    a.quicklink.link3 {
        background: #bcbdc0;
    }
    a.quicklink {
        font-size: 36px;
        font-weight: 500;
        text-decoration:none;
    }
    .hexagon {
        position: relative;
        width: 300px;
        height: 173.21px;
        margin: 86.60px 0;
        background-image: url(http://csshexagon.com/img/meow.jpg);
        background-size: auto 334.8632px;
        background-position: center;
        box-shadow: 0 0 20px rgba(0,128,192,0.6);
        border-left: solid 5px #4a401c;
        border-right: solid 5px #4a401c;
    }

    .hexTop,
    .hexBottom {
        position: absolute;
        z-index: 1;
        width: 212.13px;
        height: 212.13px;
        overflow: hidden;
        -webkit-transform: scaleY(0.5774) rotate(-45deg);
        -ms-transform: scaleY(0.5774) rotate(-45deg);
        transform: scaleY(0.5774) rotate(-45deg);
        background: inherit;
        left: 38.93px;
        box-shadow: 0 0 20px rgba(0,128,192,0.6);
    }

    /*counter transform the bg image on the caps*/
    .hexTop:after,
    .hexBottom:after {
        content: \"\";
        position: absolute;
        width: 290.0000px;
        height: 167.4315780649915px;
        -webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        -ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        transform:          rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
        -webkit-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        background: inherit;
    }

    .hexTop {
        top: -106.0660px;
        border-top: solid 7.0711px #4a401c;
        border-right: solid 7.0711px #4a401c;
    }

    .hexTop:after {
        background-position: center top;
    }

    .hexBottom {
        bottom: -106.0660px;
        border-bottom: solid 7.0711px #4a401c;
        border-left: solid 7.0711px #4a401c;
    }

    .hexBottom:after {
        background-position: center bottom;
    }

    .hexagon:after {
        content: \"\";
        position: absolute;
        top: 2.8868px;
        left: 0;
        width: 290.0000px;
        height: 167.4316px;
        z-index: 2;
        background: inherit;
    }

    .logout
    {
        color:white;
    }
</style>

<div class=\"container\">







    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div id=\"home_quicklinks\">
        <a class=\"quicklink link1\" href=\"http://localhost:8000/admin/customers\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>{{ taikhoan }}</h1>
                                                <h2>Member</h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link1\" href=\"http://localhost:8000/admin/orders\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>{{ dathang }}</h1>
                                                <h2>Orders</h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link3\" href=\"http://localhost:8000/admin/products\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>{{ sanpham }}</h1>
                                                <h2>Products </h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <a class=\"quicklink link3\" href=\"http://localhost:8000/admin/feedback\">
                                    <span class=\"ql_caption\">
                                        <span class=\"outer\">
                                            <span class=\"inner\">
                                                <h1>{{ phanhoi }}</h1>
                                                <h2>Contacts </h2>
                                            </span>
                                        </span>
                                    </span>
            <span class=\"ql_top\"></span>
            <span class=\"ql_bottom\"></span>
        </a>

        <div class=\"clear\"></div>
    </div>



</div>

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
<div class=\"container\">
    <h2>Our  Partners</h2>
    <section class=\"customer-logos slider\">
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg\"></div>
        <div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg\"></div>
    </section>
</div>
<style>

    h2{
        text-align:center;
        padding: 20px;
    }
    /* Slider */

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider
    {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .slick-list:focus
    {
        outline: none;
    }
    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }
    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }
    .slick-track:after
    {
        clear: both;
    }
    .slick-loading .slick-track
    {
        visibility: hidden;
    }

    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }
    [dir='rtl'] .slick-slide
    {
        float: right;
    }
    .slick-slide img
    {
        display: block;
    }
    .slick-slide.slick-loading img
    {
        display: none;
    }
    .slick-slide.dragging img
    {
        pointer-events: none;
    }
    .slick-initialized .slick-slide
    {
        display: block;
    }
    .slick-loading .slick-slide
    {
        visibility: hidden;
    }
    .slick-vertical .slick-slide
    {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }
    .slick-arrow.slick-hidden {
        display: none;
    }







</style>
<script>

    \$(document).ready(function(){
        \$('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });



</script>









</div>
<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"container \">
    <h1>Số người ghé thăm trang web hôm nay  :  {{ counter }} </h1>
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

    \$(\".logout\").click(function ()
    {

        unset(\$_SESSION['user_id']);


    });



</script>




", "admin/dashboard.html.twig", "/var/www/html/myProject/datshop/templates/admin/dashboard.html.twig");
    }
}
