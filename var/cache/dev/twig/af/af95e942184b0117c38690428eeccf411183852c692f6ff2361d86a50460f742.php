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

/* default/mypdf.html.twig */
class __TwigTemplate_8730843b1c7f2a3be2d25d68fd61d9fe8941be562d00f21888a7cb69670ffb72 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/mypdf.html.twig"));

        // line 2
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Title of the PDF</title>
</head>
<body>

";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<h4>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h4>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                           <h1>Dat Shop</h1>
                            <p>mordern and fashion</p>
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
        // line 34
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "  </p>
                            <p>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</p>
                            <p class=\"mb-1\">  ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "<br> </p>
                            <p class=\"mb-1\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 37, $this->source); })()), "html", null, true);
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
        // line 67
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["idsp"]) || array_key_exists("idsp", $context) ? $context["idsp"] : (function () { throw new RuntimeError('Variable "idsp" does not exist.', 67, $this->source); })())), 0)) {
            // line 68
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (twig_length_filter($this->env, (isset($context["idsp"]) || array_key_exists("idsp", $context) ? $context["idsp"] : (function () { throw new RuntimeError('Variable "idsp" does not exist.', 68, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                                        <tr>
                                            <td>

                                                ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 72, $this->source); })()), $context["i"], [], "array", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
                echo "
                                            </td>

                                            <td>
                                                ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 76, $this->source); })()), $context["i"], [], "array", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 79, $this->source); })()), $context["i"], [], "array", false, false, false, 79), "price", [], "any", false, false, false, 79), "html", null, true);
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sosp"]) || array_key_exists("sosp", $context) ? $context["sosp"] : (function () { throw new RuntimeError('Variable "sosp" does not exist.', 82, $this->source); })()), $context["i"], [], "array", false, false, false, 82), "html", null, true);
                echo "
                                            </td>
                                            <td>

                                                ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tong"]) || array_key_exists("tong", $context) ? $context["tong"] : (function () { throw new RuntimeError('Variable "tong" does not exist.', 86, $this->source); })()), $context["i"], [], "array", false, false, false, 86), "html", null, true);
                echo "

                                            </td>
                                        </tr>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                ";
        }
        // line 93
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
        // line 106
        echo twig_escape_filter($this->env, ((isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 106, $this->source); })()) - ((isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 106, $this->source); })()) * 0.1)), "html", null, true);
        echo " vnd</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Discount</div>
                            <div class=\"h2 font-weight-light\">10%</div>
                        </div>

                        <div class=\"py-3 px-5 text-right\">
                            <div class=\"mb-2\">Sub - Total amount</div>
                            <div class=\"h2 font-weight-light\">";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["tongcong"]) || array_key_exists("tongcong", $context) ? $context["tongcong"] : (function () { throw new RuntimeError('Variable "tongcong" does not exist.', 116, $this->source); })()), "html", null, true);
        echo " vnd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/mypdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 116,  220 => 106,  205 => 93,  202 => 92,  190 => 86,  183 => 82,  177 => 79,  171 => 76,  164 => 72,  159 => 69,  154 => 68,  152 => 67,  119 => 37,  115 => 36,  111 => 35,  105 => 34,  79 => 12,  69 => 11,  57 => 131,  55 => 11,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ./templates/default/mypdf.html.twig #}
<!DOCTYPE html>

<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Title of the PDF</title>
</head>
<body>

{% block body %}
<h4>{{ title }}</h4>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"row p-5\">
                        <div class=\"col-md-6\">
                           <h1>Dat Shop</h1>
                            <p>mordern and fashion</p>
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





{% endblock %}
</body>
</html>
", "default/mypdf.html.twig", "/var/www/html/myProject/datshop/templates/default/mypdf.html.twig");
    }
}
