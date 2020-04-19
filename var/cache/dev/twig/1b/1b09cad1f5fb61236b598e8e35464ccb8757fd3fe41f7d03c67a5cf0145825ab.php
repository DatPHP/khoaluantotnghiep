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

/* product/product/pagehome.html.twig */
class __TwigTemplate_e305034d2eeb17ea22544a60f93b202ab277083d5f40988ad37ee1668fc55f07 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product/pagehome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/product/pagehome.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Bootstrap Example</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
</head>
<body style=\"height:1500px\">

<div class=\"container-fluid\">
    <br>
    <h3>Sticky Navbar</h3>
    <p>A sticky navigation bar stays fixed at the top of the page when you scroll past it.</p>
    <p>Scroll this page to see the effect. <strong>Note:</strong> sticky-top does not work in IE11 and earlier.</p>
</div>

<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"#\">Logo</a>
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
    </ul>
</nav>

<div class=\"container-fluid\"><br>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
</div>

</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/product/pagehome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Bootstrap Example</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
</head>
<body style=\"height:1500px\">

<div class=\"container-fluid\">
    <br>
    <h3>Sticky Navbar</h3>
    <p>A sticky navigation bar stays fixed at the top of the page when you scroll past it.</p>
    <p>Scroll this page to see the effect. <strong>Note:</strong> sticky-top does not work in IE11 and earlier.</p>
</div>

<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"#\">Logo</a>
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
    </ul>
</nav>

<div class=\"container-fluid\"><br>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
    <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
</div>

</body>
</html>


", "product/product/pagehome.html.twig", "/var/www/html/myProject/datshop/templates/product/product/pagehome.html.twig");
    }
}
