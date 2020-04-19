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

/* default/submit.html.twig */
class __TwigTemplate_c506e8252f6b0546c6a15a68a685825b623031fdbb10b67da310c54d9a0577e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/submit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/submit.html.twig"));

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


<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>


<!------ Include the above in your HEAD tag ---------->
<body>

<!-- page-header -->
<div class=\"page-header-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">
                    <a id=\"xoa\" href=\"http://localhost:8000\" class=\"btn btn-info btn-lg\">
                        <span  class=\"glyphicon glyphicon-home\" ></span> Home
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->


<!------------------------------------------content ---------------------------------------->
<!-------header topic ------------------->
<!-- page-header -->

<!-- /.page-header-->
<!-------------end header topic-------------->

<h1>

    <div class=\"alert alert-success\">
        <strong>ORDER SUCCESS!

        </strong>thank you for buying!
        Orders will be shipped soonest!
    </div>

</h1>



<!----------------------------Bill--------------------------------------------------------->

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/datshop"), "html", null, true);
        echo ".png\" style=\"width: 310px ; height:160px\">
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-1\">Invoice #550</p>
                            <p class=\"text-muted\">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>
                    <hr class=\"my-5\">
                    <div class=\"row pb-5 p-5\">
                        <div class=\"col-md-6\">
                            <p class=\"font-weight-bold mb-4\">Client Information</p>

                          <p class=\"mb-1\">";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "  </p>
                            <p>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "</p>
                            <p class=\"mb-1\">  ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "<br> </p>
                            <p class=\"mb-1\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "<br></p>



                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-4\">Payment Details</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT: </span> 1425782</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT ID: </span> 10253642</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Payment Type: </span> Root</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class=\"row p-5\">
                        <div class=\"col-md-12\">
                            <table class=\"table table-bordered\" id=\"table-products\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>

                                </tr>
                                </thead>
                                <tbody  >

                                ";
        // line 120
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["idsp"]) || array_key_exists("idsp", $context) ? $context["idsp"] : (function () { throw new RuntimeError('Variable "idsp" does not exist.', 120, $this->source); })())), 0)) {
            // line 121
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (twig_length_filter($this->env, (isset($context["idsp"]) || array_key_exists("idsp", $context) ? $context["idsp"] : (function () { throw new RuntimeError('Variable "idsp" does not exist.', 121, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 122
                echo "                                    <tr>
                                          <td>

                                              ";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 125, $this->source); })()), $context["i"], [], "array", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
                echo "
                                          </td>

                                          <td>
                                             ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 129, $this->source); })()), $context["i"], [], "array", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
                echo "
                                          </td>
                                        <td>
                                            ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 132, $this->source); })()), $context["i"], [], "array", false, false, false, 132), "price", [], "any", false, false, false, 132), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                                ";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sosp"]) || array_key_exists("sosp", $context) ? $context["sosp"] : (function () { throw new RuntimeError('Variable "sosp" does not exist.', 135, $this->source); })()), $context["i"], [], "array", false, false, false, 135), "html", null, true);
                echo "
                                        </td>
                                        <td>

                                            ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tong"]) || array_key_exists("tong", $context) ? $context["tong"] : (function () { throw new RuntimeError('Variable "tong" does not exist.', 139, $this->source); })()), $context["i"], [], "array", false, false, false, 139), "html", null, true);
                echo "

                                        </td>
                                    </tr>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                                ";
        }
        // line 146
        echo "
                                </tbody>

                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <p>if bill is bigger than 500 000  VND ,Customer will discount 10% </p>

                    <div class=\"d-flex flex-row-reverse bg-dark text-white p-4\">
                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Grand Total</div>
                            <div class=\"h2 font-weight-light\">";
        // line 159
        echo twig_escape_filter($this->env, ((isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 159, $this->source); })()) - ((isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 159, $this->source); })()) * 0.1)), "html", null, true);
        echo " vnd</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Discount</div>
                            <div class=\"h2 font-weight-light\">10%</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Sub - Total amount</div>
                            <div class=\"h2 font-weight-light\">";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " vnd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"paypal\">
        <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
            <input type=\"hidden\" name=\"hosted_button_id\" value=\"XHUL6W3ZQN6AJ\">
            <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
            <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
        </form>


    </div>

    <div>
        <a href=\"http://localhost:8000/pdf/\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Print bill</a>
    </div>

    <div class=\"text-light mt-5 mb-5 text-center small\">by : <a class=\"text-light\" target=\"_blank\" href=\"http://totoprayogo.com\">totoprayogo.com</a></div>

</div>
<style>

    body {
        background: grey;
        margin-top: 120px;
        margin-bottom: 120px;
    }

</style>


<!-----------------------------end bill---------------------------------------------------------->

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<style>
    /*Font-awesome integration*/
    @import url(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\");
    /*Google font integration*/
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    #contact{
        background-color:#f1f1f1;
        font-family: 'Roboto', sans-serif;
    }

    #contact .well{
        margin-top:30px;
        border-radius:0;
    }

    #contact .form-control{
        border-radius: 0;
        border:2px solid #1e1e1e;
    }

    #contact button{
        border-radius:0;
        border:2px solid #1e1e1e;
    }

    #contact .row{
        margin-bottom:30px;
    }

    @media (max-width: 768px) {
        #contact iframe {
            margin-bottom: 15px;
        }

    }
    .infor
    {
        text-align: center;
    }


</style>



<section id=\"contact\">
    <div class=\"container\">
        <div class=\"well well-sm\">
            <h3><strong>Contact Us</strong></h3>
        </div>




        <div class=\"row\">
            <div class=\"col-md-7\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230\" width=\"100%\" height=\"315\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>

            <div class=\"col-md-5\">
                <h4><strong>Get in Touch</strong></h4>
                <form>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 278, $this->source); })()), "html", null, true);
        echo " \" placeholder=\"FistName\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 281, $this->source); })()), "html", null, true);
        echo " \" placeholder=\"FistName\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" name=\"\" value=\"";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 284, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"E-mail\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"tel\" class=\"form-control\" name=\"\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 288, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Phone\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\" ";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 292, $this->source); })()), "html", null, true);
        echo "  \" placeholder=\"Address\">
                    </div>

                    <div class=\"form-group\">
                        <textarea class=\"form-control\" name=\"\" rows=\"3\" placeholder=\"Message\"></textarea>
                    </div>
                    <button class=\"btn btn-default\" type=\"submit\" name=\"button\">
                        <i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>




<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"w3-row-padding w3-padding-32\">
    <div class=\"w3-third\">
        <h3>FOOTER</h3>
        <h2>DatShop</h2>
        Contact:
        <p>Phone:0162 808 9939</p>
        <p>Email: nguyenvandat170296@gmail.com</p>
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
        border-radius: 8px;;



    }
    .table tbody td

    {

        text-align: center;


    }

    /*dropdown menu */

    .dropdown {
        position: relative;
        display: inline-block;
        padding-right: 50px;
        margin-right: 50px;
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





</style>

<script>
    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var bill = [];

    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        bill = JSON.parse(sessionStorage[\"bill\"].toString());
        if (bill.length > 0) {
            \$(\"#exist-cart\").show();

            \$(\".notice\").hide();

        }
        if ( bill.length <=0)
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



    \$(\"#xoa \").click(function () {

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
        if (shoppingCartItems.length > 0) {
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table


            var subTotal = 0;
            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                number = index + 1;
                htmlString += \"<tr>\";
                htmlString += \"<td width='20px'>\" + number + \"</td>\";
                htmlString += \"<td style='width: 300px'>\" + item.name + \"</td>\";
                htmlString += \"<td style='text-align: center;width: 100px' >\" + item.price + \"</td>\";
                htmlString += \"<td data-th=\\\"Quantity\\\" style='text-align: center;width: 270px'><input class=\\\"form-control1 text-center\\\" id='quantity-item-\" + index + \"' value='\" + item.quantity + \"' type=\\\"number\\\">\" + \"</td>\";
                // htmlString += \"<td style='text-align: right'>\" + item.price * item.quantity + \"</td>\";


                htmlString += \"<td style='text-align: center'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" + \" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";

                //htmlString += \"<td>\" +\" <button class=\\\"btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> x </button></td>\";

                htmlString += \"</tr>\";

                \$(\"#table-products > tbody:last\").append(htmlString);
            });
            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='6'><p  class=\\\"list-group-item btn btn-outline-secondary btn-bl text-right\\\" style='font-size: 23px; text-align: right'> <b>Total:</b> \" + subTotal + \"vnd\" + \"</p></td></tr>\");


            htmlString += \"<td>\" + \" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + 1 + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";
            //  htmlString += \"</tr>\";

            // \$(\"#table-products > tbody:last\").append(htmlString);

        }
        else {
            \$(\"form\").hide();
            \$(\".notice\").show();
            \$(\".wrapper\").html(\" \");


        }
    }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 292,  393 => 288,  386 => 284,  380 => 281,  374 => 278,  262 => 169,  249 => 159,  234 => 146,  231 => 145,  219 => 139,  212 => 135,  206 => 132,  200 => 129,  193 => 125,  188 => 122,  183 => 121,  181 => 120,  148 => 90,  144 => 89,  140 => 88,  134 => 87,  118 => 74,  43 => 1,);
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


<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>


<!------ Include the above in your HEAD tag ---------->
<body>

<!-- page-header -->
<div class=\"page-header-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-caption\">
                    <a id=\"xoa\" href=\"http://localhost:8000\" class=\"btn btn-info btn-lg\">
                        <span  class=\"glyphicon glyphicon-home\" ></span> Home
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->


<!------------------------------------------content ---------------------------------------->
<!-------header topic ------------------->
<!-- page-header -->

<!-- /.page-header-->
<!-------------end header topic-------------->

<h1>

    <div class=\"alert alert-success\">
        <strong>ORDER SUCCESS!

        </strong>thank you for buying!
        Orders will be shipped soonest!
    </div>

</h1>



<!----------------------------Bill--------------------------------------------------------->

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                            <img src=\"{{asset('build/images/datshop')}}.png\" style=\"width: 310px ; height:160px\">
                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-1\">Invoice #550</p>
                            <p class=\"text-muted\">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>
                    <hr class=\"my-5\">
                    <div class=\"row pb-5 p-5\">
                        <div class=\"col-md-6\">
                            <p class=\"font-weight-bold mb-4\">Client Information</p>

                          <p class=\"mb-1\">{{ firstName }}  {{ lastName }}  </p>
                            <p>{{ phone }}</p>
                            <p class=\"mb-1\">  {{ email }}<br> </p>
                            <p class=\"mb-1\">{{ address }}<br></p>



                        </div>

                        <div class=\"col-md-6 text-right\">
                            <p class=\"font-weight-bold mb-4\">Payment Details</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT: </span> 1425782</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">VAT ID: </span> 10253642</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Payment Type: </span> Root</p>
                            <p class=\"mb-1\"><span class=\"text-muted\">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class=\"row p-5\">
                        <div class=\"col-md-12\">
                            <table class=\"table table-bordered\" id=\"table-products\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>

                                </tr>
                                </thead>
                                <tbody  >

                                {% if idsp|length > 0 %}
                                    {% for i in range(1, (idsp|length - 1)) %}
                                    <tr>
                                          <td>

                                              {{ sp[i].id }}
                                          </td>

                                          <td>
                                             {{ sp[i].name }}
                                          </td>
                                        <td>
                                            {{ sp[i].price }}
                                        </td>
                                        <td>
                                                {{ sosp[i] }}
                                        </td>
                                        <td>

                                            {{ tong[i] }}

                                        </td>
                                    </tr>

                                    {% endfor %}
                                {% endif %}

                                </tbody>

                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <p>if bill is bigger than 500 000  VND ,Customer will discount 10% </p>

                    <div class=\"d-flex flex-row-reverse bg-dark text-white p-4\">
                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Grand Total</div>
                            <div class=\"h2 font-weight-light\">{{ tongcong -(tongcong*0.1) }} vnd</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Discount</div>
                            <div class=\"h2 font-weight-light\">10%</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Sub - Total amount</div>
                            <div class=\"h2 font-weight-light\">{{ tongcong }} vnd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"paypal\">
        <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
            <input type=\"hidden\" name=\"hosted_button_id\" value=\"XHUL6W3ZQN6AJ\">
            <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
            <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
        </form>


    </div>

    <div>
        <a href=\"http://localhost:8000/pdf/\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Print bill</a>
    </div>

    <div class=\"text-light mt-5 mb-5 text-center small\">by : <a class=\"text-light\" target=\"_blank\" href=\"http://totoprayogo.com\">totoprayogo.com</a></div>

</div>
<style>

    body {
        background: grey;
        margin-top: 120px;
        margin-bottom: 120px;
    }

</style>


<!-----------------------------end bill---------------------------------------------------------->

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->


<style>
    /*Font-awesome integration*/
    @import url(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\");
    /*Google font integration*/
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    #contact{
        background-color:#f1f1f1;
        font-family: 'Roboto', sans-serif;
    }

    #contact .well{
        margin-top:30px;
        border-radius:0;
    }

    #contact .form-control{
        border-radius: 0;
        border:2px solid #1e1e1e;
    }

    #contact button{
        border-radius:0;
        border:2px solid #1e1e1e;
    }

    #contact .row{
        margin-bottom:30px;
    }

    @media (max-width: 768px) {
        #contact iframe {
            margin-bottom: 15px;
        }

    }
    .infor
    {
        text-align: center;
    }


</style>



<section id=\"contact\">
    <div class=\"container\">
        <div class=\"well well-sm\">
            <h3><strong>Contact Us</strong></h3>
        </div>




        <div class=\"row\">
            <div class=\"col-md-7\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230\" width=\"100%\" height=\"315\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>

            <div class=\"col-md-5\">
                <h4><strong>Get in Touch</strong></h4>
                <form>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\"{{ firstName }} \" placeholder=\"FistName\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\"{{ lastName }} \" placeholder=\"FistName\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" name=\"\" value=\"{{ email }}\" placeholder=\"E-mail\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"tel\" class=\"form-control\" name=\"\" value=\"{{ phone }}\" placeholder=\"Phone\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"\" value=\" {{ address }}  \" placeholder=\"Address\">
                    </div>

                    <div class=\"form-group\">
                        <textarea class=\"form-control\" name=\"\" rows=\"3\" placeholder=\"Message\"></textarea>
                    </div>
                    <button class=\"btn btn-default\" type=\"submit\" name=\"button\">
                        <i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>




<!---------------------------------------------end content------------------------------------->

<!-- Footer -->
<footer class=\"w3-row-padding w3-padding-32\">
    <div class=\"w3-third\">
        <h3>FOOTER</h3>
        <h2>DatShop</h2>
        Contact:
        <p>Phone:0162 808 9939</p>
        <p>Email: nguyenvandat170296@gmail.com</p>
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
        border-radius: 8px;;



    }
    .table tbody td

    {

        text-align: center;


    }

    /*dropdown menu */

    .dropdown {
        position: relative;
        display: inline-block;
        padding-right: 50px;
        margin-right: 50px;
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





</style>

<script>
    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
    var bill = [];

    \$(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage[\"shopping-cart-items\"] hay chưa?
        bill = JSON.parse(sessionStorage[\"bill\"].toString());
        if (bill.length > 0) {
            \$(\"#exist-cart\").show();

            \$(\".notice\").hide();

        }
        if ( bill.length <=0)
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



    \$(\"#xoa \").click(function () {

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
        if (shoppingCartItems.length > 0) {
            shoppingCartItems = JSON.parse(sessionStorage[\"shopping-cart-items\"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

            \$(\"#table-products > tbody\").html(\"\");
            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table


            var subTotal = 0;
            \$.each(shoppingCartItems, function (index, item) {
                var htmlString = \"\";
                var itemTotal = item.price * item.quantity;
                subTotal = subTotal + itemTotal;
                number = index + 1;
                htmlString += \"<tr>\";
                htmlString += \"<td width='20px'>\" + number + \"</td>\";
                htmlString += \"<td style='width: 300px'>\" + item.name + \"</td>\";
                htmlString += \"<td style='text-align: center;width: 100px' >\" + item.price + \"</td>\";
                htmlString += \"<td data-th=\\\"Quantity\\\" style='text-align: center;width: 270px'><input class=\\\"form-control1 text-center\\\" id='quantity-item-\" + index + \"' value='\" + item.quantity + \"' type=\\\"number\\\">\" + \"</td>\";
                // htmlString += \"<td style='text-align: right'>\" + item.price * item.quantity + \"</td>\";


                htmlString += \"<td style='text-align: center'>\" + itemTotal + \"</td>\";
                htmlString += \"<td>\" + \" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";

                //htmlString += \"<td>\" +\" <button class=\\\"btn btn-danger\\\" name=\\\"button-clear-item[]\\\"  value='\" + index + \"'> x </button></td>\";

                htmlString += \"</tr>\";

                \$(\"#table-products > tbody:last\").append(htmlString);
            });
            \$(\"#table-products > tbody:last\").append(\"<tr><td colspan='6'><p  class=\\\"list-group-item btn btn-outline-secondary btn-bl text-right\\\" style='font-size: 23px; text-align: right'> <b>Total:</b> \" + subTotal + \"vnd\" + \"</p></td></tr>\");


            htmlString += \"<td>\" + \" <button class=\\\" btn btn-danger btn-sm\\\" name=\\\"button-clear-item[]\\\"  value='\" + 1 + \"'> <i  style=\\\"size: 25px\\\"; class=\\\"fa fa-trash\\\"></i> </button></td>\";
            //  htmlString += \"</tr>\";

            // \$(\"#table-products > tbody:last\").append(htmlString);

        }
        else {
            \$(\"form\").hide();
            \$(\".notice\").show();
            \$(\".wrapper\").html(\" \");


        }
    }

</script>", "default/submit.html.twig", "/var/www/html/myProject/datshop/templates/default/submit.html.twig");
    }
}
