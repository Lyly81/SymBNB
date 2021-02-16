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

/* ad/show.html.twig */
class __TwigTemplate_93fa95a3bc75dbf43f62638fb25cbcf8c286629fcf1632f01dc67143057449c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"ad-title\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "coverImage", [], "any", false, false, false, 8), "html", null, true);
        echo ")\">
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
\t\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "introduction", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
\t\t\t<p class=\"h2\">
\t\t\t\t<strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "rooms", [], "any", false, false, false, 13), "html", null, true);
        echo "
\t\t\t\t\tchambres</strong>
\t\t\t\tpour
\t\t\t\t<strong>";
        // line 16
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 16, $this->source); })()), "price", [], "any", false, false, false, 16);
        echo "
\t\t\t\t\t&euro;</strong>
\t\t\t\tpar nuit
\t\t\t</p>
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Réserver !</a>

\t\t\t";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22)))) {
            // line 23
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sûr de vouloir supprimer l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
            echo " ?`)\">Supprimer l'annonce</a>
\t\t\t";
        }
        // line 26
        echo "\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 mb-3\">
\t\t\t\t";
        // line 32
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32);
        echo "
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                echo "active";
            }
            echo "\"></li>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 41
            echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 41)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t<h5>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t";
        // line 61
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 61, $this->source); })()), "author", [], "any", false, false, false, 61);
        // line 62
        echo "\t\t\t\t<div class=\"row mb-3 align-items-center\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 64, $this->source); })()), "slug", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 65, $this->source); })()), "picture", [], "any", false, false, false, 65), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 65, $this->source); })()), "fullName", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 69, $this->source); })()), "slug", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 70, $this->source); })()), "fullName", [], "any", false, false, false, 70), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"badge badge-primary\">";
        // line 72
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 72, $this->source); })()), "ads", [], "any", false, false, false, 72)), "html", null, true);
        echo " annonces</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 75
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 75,  270 => 72,  265 => 70,  261 => 69,  252 => 65,  248 => 64,  244 => 62,  242 => 61,  228 => 49,  210 => 45,  206 => 44,  201 => 42,  194 => 41,  177 => 40,  173 => 38,  152 => 36,  135 => 35,  129 => 32,  121 => 26,  114 => 24,  109 => 23,  107 => 22,  98 => 16,  92 => 13,  87 => 11,  83 => 10,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ad.title}}
{% endblock %}

{% block body %}
\t<div class=\"ad-title\" style=\"background-image: url({{ad.coverImage}})\">
\t\t<div class=\"container\">
\t\t\t<h1>{{ad.title}}</h1>
\t\t\t<p>{{ad.introduction}}</p>
\t\t\t<p class=\"h2\">
\t\t\t\t<strong>{{ad.rooms}}
\t\t\t\t\tchambres</strong>
\t\t\t\tpour
\t\t\t\t<strong>{{ad.price | raw}}
\t\t\t\t\t&euro;</strong>
\t\t\t\tpar nuit
\t\t\t</p>
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Réserver !</a>

\t\t\t{% if app.user and app.user == ad.author %}
\t\t\t\t<a href=\"{{path('ads_edit', {'slug': ad.slug})}}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
\t\t\t\t<a href=\"{{path('ads_delete', {'slug': ad.slug})}}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes-vous sûr de vouloir supprimer l'annonce : {{ad.title}} ?`)\">Supprimer l'annonce</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 mb-3\">
\t\t\t\t{{ad.content | raw}}
\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\" class=\"{% if loop.first %}active{% endif %}\"></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t\t\t<img src=\"{{image.url}}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t<h5>{{ad.title}}</h5>
\t\t\t\t\t\t\t\t\t<p>{{image.caption}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t{% set a = ad.author %}
\t\t\t\t<div class=\"row mb-3 align-items-center\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<a href=\"{{path('user_show', {'slug': a.slug})}}\">
\t\t\t\t\t\t\t<img src=\"{{a.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{a.fullName}}\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<a href=\"{{path('user_show', {'slug': a.slug})}}\">
\t\t\t\t\t\t\t<h3>{{a.fullName}}</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"badge badge-primary\">{{a.ads | length}} annonces</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{a.description | raw}}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "ad/show.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\ad\\show.html.twig");
    }
}
