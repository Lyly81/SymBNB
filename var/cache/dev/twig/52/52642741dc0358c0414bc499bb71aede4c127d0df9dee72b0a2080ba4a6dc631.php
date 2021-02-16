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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_e23f9664c49d0286c385284d8aab44bc27c6fa81ddf079fc3965a39954136f61 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tableau de bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-primary text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "users", [], "any", false, false, false, 17), "html", null, true);
        echo " utilisateurs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-dark mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "ads", [], "any", false, false, false, 31), "html", null, true);
        echo " annonces postées</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-warning mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "bookings", [], "any", false, false, false, 45), "html", null, true);
        echo " réservations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-success mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "comments", [], "any", false, false, false, 59), "html", null, true);
        echo " avis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-success\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>

                <table class=\"table table-hover\">
                    <thead>
                        <th>Annonce</th>
                        <th>Propriétaire</th>
                        <th>Moyenne</th>
                    </thead>
                    <tbody>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestAds"]) || array_key_exists("bestAds", $context) ? $context["bestAds"] : (function () { throw new RuntimeError('Variable "bestAds" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 79
            echo "                            <tr>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                <td>
                                    <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 82), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 82), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 82), "html", null, true);
            echo "\" class=\"avatar avatar-micro\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 82), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 86
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 86), 1, ",", " "), "html", null, true);
            echo "
                                    </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-danger\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Les pires annonces</h2>

                <table class=\"table table-hover\">
                    <thead>
                        <th>Annonce</th>
                        <th>Propriétaire</th>
                        <th>Moyenne</th>
                    </thead>
                    <tbody>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstAds"]) || array_key_exists("worstAds", $context) ? $context["worstAds"] : (function () { throw new RuntimeError('Variable "worstAds" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 107
            echo "                            <tr>
                                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                <td>
                                    <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 110), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 110), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 110), "html", null, true);
            echo "\" class=\"avatar avatar-micro\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 110), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 110), "html", null, true);
            echo "
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        ";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 114), 1, ",", " "), "html", null, true);
            echo "
                                    </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    </tbody>
                </table>
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
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 119,  256 => 114,  241 => 110,  236 => 108,  233 => 107,  229 => 106,  212 => 91,  201 => 86,  186 => 82,  181 => 80,  178 => 79,  174 => 78,  152 => 59,  135 => 45,  118 => 31,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-primary text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{stats.users}} utilisateurs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-dark mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{stats.ads}} annonces postées</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-warning mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{stats.bookings}} réservations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card text-white bg-success mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">{{stats.comments}} avis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-success\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>

                <table class=\"table table-hover\">
                    <thead>
                        <th>Annonce</th>
                        <th>Propriétaire</th>
                        <th>Moyenne</th>
                    </thead>
                    <tbody>
                        {% for ad in bestAds %}
                            <tr>
                                <td>{{ad.title}}</td>
                                <td>
                                    <img src=\"{{ad.picture}}\" alt=\"Avatar de {{ad.firstName}} {{ad.lastName}}\" class=\"avatar avatar-micro\">{{ad.firstName}} {{ad.lastName}}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        {{ad.note | number_format(1, \",\", \" \")}}
                                    </span>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-danger\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Les pires annonces</h2>

                <table class=\"table table-hover\">
                    <thead>
                        <th>Annonce</th>
                        <th>Propriétaire</th>
                        <th>Moyenne</th>
                    </thead>
                    <tbody>
                        {% for ad in worstAds %}
                            <tr>
                                <td>{{ad.title}}</td>
                                <td>
                                    <img src=\"{{ad.picture}}\" alt=\"Avatar de {{ad.firstName}} {{ad.lastName}}\" class=\"avatar avatar-micro\">{{ad.firstName}} {{ad.lastName}}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge badge-dark\">
                                        {{ad.note | number_format(1, \",\", \" \")}}
                                    </span>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard/index.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\admin\\dashboard\\index.html.twig");
    }
}
