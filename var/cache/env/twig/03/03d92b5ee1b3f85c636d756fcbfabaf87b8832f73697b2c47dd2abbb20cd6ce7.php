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

/* ad/_ad.html.twig */
class __TwigTemplate_f5a70fff99032759b34b93627534d3dd536d4c84b7ea1f384e3331ddec75efae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "<div class=\"col-md-4\">
\t<div class=\"card bg-light mb-3\">
\t\t<div class=\"card-header text-center\">
\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 5, $this->source); })()), "rooms", [], "any", false, false, false, 5), "html", null, true);
        echo " chambres,
\t\t\t<strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), "html", null, true);
        echo " &euro; / nuit</strong>
\t\t\t<br>
\t\t\t<small>Pas encore noté</small>
\t\t</div>

\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 12, $this->source); })()), "coverImage", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">
\t\t</a>

\t\t<div class=\"car-body\">
\t\t\t<h4 class=\"card-title\">
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
\t\t\t</h4>
\t\t\t<p class=\"card-text\">
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "introduction", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-secondary\">En savoir plus</a>

\t\t\t";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "author", [], "any", false, false, false, 24)))) {
            // line 25
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
\t\t\t\t
\t\t\t";
        }
        // line 28
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  91 => 25,  89 => 24,  84 => 22,  79 => 20,  71 => 17,  63 => 12,  59 => 11,  51 => 6,  47 => 5,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = path('ads_show', {'slug': ad.slug}) %}
<div class=\"col-md-4\">
\t<div class=\"card bg-light mb-3\">
\t\t<div class=\"card-header text-center\">
\t\t\t{{ad.rooms}} chambres,
\t\t\t<strong>{{ad.price}} &euro; / nuit</strong>
\t\t\t<br>
\t\t\t<small>Pas encore noté</small>
\t\t</div>

\t\t<a href=\"{{url}}\">
\t\t\t<img src=\"{{ad.coverImage}}\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">
\t\t</a>

\t\t<div class=\"car-body\">
\t\t\t<h4 class=\"card-title\">
\t\t\t\t<a href=\"{{url}}\">{{ad.title}}</a>
\t\t\t</h4>
\t\t\t<p class=\"card-text\">
\t\t\t\t{{ad.introduction}}
\t\t\t</p>
\t\t\t<a href=\"{{url}}\" class=\"btn btn-secondary\">En savoir plus</a>

\t\t\t{% if app.user and app.user == ad.author %}
\t\t\t\t<a href=\"{{path('ads_edit', {'slug': ad.slug})}}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
\t\t\t\t
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
", "ad/_ad.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\ad\\_ad.html.twig");
    }
}
