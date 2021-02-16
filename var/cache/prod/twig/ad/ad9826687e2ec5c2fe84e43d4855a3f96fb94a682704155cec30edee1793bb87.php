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

/* base.html.twig */
class __TwigTemplate_b01fff9c300e49abb685ab7d47cca695a6477d179f1deed38017e5d290f58c38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>SymBNB - 
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/app.css\"> 
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t</head>
\t
\t<body>
\t\t";
        // line 15
        $this->loadTemplate("partials/header.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
\t\t<script src=\"/js/jquery.min.js\"></script>
\t\t<script src=\"/js/popper.min.js\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>
\t\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
\t\t";
        // line 23
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 23)->display($context);
        // line 24
        echo "
\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!
\t\t\t";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  101 => 16,  95 => 11,  87 => 6,  80 => 24,  78 => 23,  75 => 22,  73 => 21,  67 => 17,  64 => 16,  62 => 15,  57 => 12,  55 => 11,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\base.html.twig");
    }
}
