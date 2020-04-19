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

/* list/cart.html.twig */
class __TwigTemplate_3e0025b2973c4c3db746525333c2501b11d9fa8ed89392ad42813192a80b8754 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/cart.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>SHOPPING CARD </title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"><script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"><script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>



    <style type=\"text/css\">
        td {
            vertical-align: middle;
        }
                                                                                                                                     vertical-align: middle;
                                                                                                                                 }

        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width:20%;
                display: inline !important;
            }

            .actions .btn {
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info {
                float:left;
            }

            .actions .btn-danger {
                float:right;
            }

            table#cart thead {
                display: none;
            }

            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width:320px;
            }

            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }

            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }

            table#cart tfoot td {
                display:block;
            }
            table#cart tfoot td .btn {
                display:block;
            }
        }</style>



</head>
<body>

<h2 class=\"text-center\">LIST PRODUCT</h2>


<div class=\"container\">
    <table id=\"cart\" class=\"table table-hover table-condensed\">
        <thead>
        <tr>
            <th style=\"width:20%\">Tên sản phẩm</th>
            <th style=\"width:5%\">Giá</th>
            <th style=\"width:4%\">Số lượng</th>
            <th style=\"width:11%\" class=\"text-center\">Thành tiền</th>
            <th style=\"width:5%\"> </th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 91
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })())), 0)) {
            // line 92
            echo "
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 94
                echo "
        <tr>

            <td data-th=\"Product\">
                <div class=\"row\">
                    <div class=\"col-sm-2 hidden-xs\"><img src=\"http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg\" alt=\"Sản phẩm 1\" class=\"img-responsive\" width=\"100\">
                    </div>
                    <div class=\"col-sm-10\">
                        <h4 class=\"nomargin\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), "html", null, true);
                echo "</h4>
                        <p>Mô tả của sản phẩm 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th=\"Price\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "price", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                                    <td data-th=\"Quantity\"><input class=\"form-control text-center\" value=\"1\" type=\"number\">
                                    </td>
                                    <td data-th=\"Subtotal\" class=\"text-center\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "price", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
                                    <td class=\"actions\" data-th=\"\">
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i>
                                        </button>
                <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i>
                </button>
            </td>
        </tr>


             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "        ";
        }
        // line 122
        echo "

        </tbody><tfoot>
        <tr class=\"visible-xs\">
            <td class=\"text-center\"><strong>Tổng đ</strong>
            </td>
        </tr>
        <tr>
            <td><a href=\"http://hocwebgiare.com/\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Tiếp tục mua hàng</a>
            </td>
            <td colspan=\"2\" class=\"hidden-xs\"> </td>
            <td class=\"hidden-xs text-center\"><strong>Tổng tiền: </strong>
            </td>
            <td><a href=\"http://hocwebgiare.com/\" class=\"btn btn-success btn-block\">Thanh toán <i class=\"fa fa-angle-right\"></i></a>
            </td>
        </tr>
        </tfoot>
    </table>
</div>

</body>
</html>















";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 122,  184 => 121,  167 => 110,  161 => 107,  153 => 102,  143 => 94,  139 => 93,  136 => 92,  134 => 91,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/list/listproduct.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>SHOPPING CARD </title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"><script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\"><script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>



    <style type=\"text/css\">
        td {
            vertical-align: middle;
        }
                                                                                                                                     vertical-align: middle;
                                                                                                                                 }

        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width:20%;
                display: inline !important;
            }

            .actions .btn {
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info {
                float:left;
            }

            .actions .btn-danger {
                float:right;
            }

            table#cart thead {
                display: none;
            }

            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width:320px;
            }

            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }

            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }

            table#cart tfoot td {
                display:block;
            }
            table#cart tfoot td .btn {
                display:block;
            }
        }</style>



</head>
<body>

<h2 class=\"text-center\">LIST PRODUCT</h2>


<div class=\"container\">
    <table id=\"cart\" class=\"table table-hover table-condensed\">
        <thead>
        <tr>
            <th style=\"width:20%\">Tên sản phẩm</th>
            <th style=\"width:5%\">Giá</th>
            <th style=\"width:4%\">Số lượng</th>
            <th style=\"width:11%\" class=\"text-center\">Thành tiền</th>
            <th style=\"width:5%\"> </th>
        </tr>
        </thead>
        <tbody>

        {% if product|length > 0 %}

            {% for i in range(0, (product|length - 1)) %}

        <tr>

            <td data-th=\"Product\">
                <div class=\"row\">
                    <div class=\"col-sm-2 hidden-xs\"><img src=\"http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg\" alt=\"Sản phẩm 1\" class=\"img-responsive\" width=\"100\">
                    </div>
                    <div class=\"col-sm-10\">
                        <h4 class=\"nomargin\">{{ product.name }}</h4>
                        <p>Mô tả của sản phẩm 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th=\"Price\">{{ product.price }}</td>
                                    <td data-th=\"Quantity\"><input class=\"form-control text-center\" value=\"1\" type=\"number\">
                                    </td>
                                    <td data-th=\"Subtotal\" class=\"text-center\">{{ product.price }}</td>
                                    <td class=\"actions\" data-th=\"\">
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i>
                                        </button>
                <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i>
                </button>
            </td>
        </tr>


             {% endfor %}
        {% endif %}


        </tbody><tfoot>
        <tr class=\"visible-xs\">
            <td class=\"text-center\"><strong>Tổng đ</strong>
            </td>
        </tr>
        <tr>
            <td><a href=\"http://hocwebgiare.com/\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Tiếp tục mua hàng</a>
            </td>
            <td colspan=\"2\" class=\"hidden-xs\"> </td>
            <td class=\"hidden-xs text-center\"><strong>Tổng tiền: </strong>
            </td>
            <td><a href=\"http://hocwebgiare.com/\" class=\"btn btn-success btn-block\">Thanh toán <i class=\"fa fa-angle-right\"></i></a>
            </td>
        </tr>
        </tfoot>
    </table>
</div>

</body>
</html>















", "list/cart.html.twig", "/var/www/html/myProject/datshop/templates/list/cart.html.twig");
    }
}
