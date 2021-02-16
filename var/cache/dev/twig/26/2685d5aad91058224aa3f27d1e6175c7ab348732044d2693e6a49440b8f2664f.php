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
class __TwigTemplate_1fba65a6f87b0272fc14f14c097f0fa60c9b13381c8fa62989081041f086c05c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), 2, ",", " "), "html", null, true);
        echo " &euro; / nuit</strong>
\t\t\t<br>

\t\t\t";
        // line 9
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 9, $this->source); })()), "comments", [], "any", false, false, false, 9)), 0)) {
            // line 10
            echo "\t\t\t\t";
            $this->loadTemplate("partials/rating.html.twig", "ad/_ad.html.twig", 10)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "avgRatings", [], "any", false, false, false, 10)]));
            // line 11
            echo "\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t<small>Pas encore noté</small>
\t\t\t";
        }
        // line 14
        echo "\t\t</div>

\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 17, $this->source); })()), "coverImage", [], "any", false, false, false, 17), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">
\t\t</a>

\t\t<div class=\"car-body\">
\t\t\t<h4 class=\"card-title\">
\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
\t\t\t</h4>
\t\t\t<p class=\"card-text\">
\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "introduction", [], "any", false, false, false, 25), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary float-right\">En savoir plus</a>

\t\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 29, $this->source); })()), "author", [], "any", false, false, false, 29)))) {
            // line 30
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
\t\t\t\t
\t\t\t";
        }
        // line 33
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  115 => 33,  108 => 30,  106 => 29,  101 => 27,  96 => 25,  88 => 22,  80 => 17,  76 => 16,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = path('ads_show', {'slug': ad.slug}) %}
<div class=\"col-md-4\">
\t<div class=\"card bg-light mb-3\">
\t\t<div class=\"card-header text-center\">
\t\t\t{{ad.rooms}} chambres,
\t\t\t<strong>{{ad.price | number_format(2, ',', ' ')}} &euro; / nuit</strong>
\t\t\t<br>

\t\t\t{% if ad.comments | length > 0 %}
\t\t\t\t{% include \"partials/rating.html.twig\" with {'rating': ad.avgRatings} %}
\t\t\t{% else %}
\t\t\t\t<small>Pas encore noté</small>
\t\t\t{% endif %}
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
\t\t\t<a href=\"{{url}}\" class=\"btn btn-primary float-right\">En savoir plus</a>

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
