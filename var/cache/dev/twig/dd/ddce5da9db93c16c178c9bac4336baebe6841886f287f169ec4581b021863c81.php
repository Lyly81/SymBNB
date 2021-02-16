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

/* admin/partials/header.html.twig */
class __TwigTemplate_13636d142c8545f9036396f0d1dfa8c3fbbeae1155f21814d097ec9c4dfc0949 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">SymBNB !</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                    <i class=\"fas fa-chart-line\"></i>
                    Dashboard
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_index");
        echo "\">
                    <i class=\"fas fa-hotel\"></i>
                    Annonces
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_index");
        echo "\">
                    <i class=\"fas fa-folder\"></i>
                    Réservations
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_index");
        echo "\">
                    <i class=\"fas fa-comments\"></i>
                    Commentaires
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">
                    <i class=\"fas fa-users\"></i>
                    Utilisateurs
                </a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" target=\"_blank\" class=\"nav-link\">
                    <i class=\"fas fa-eye\"></i>
                    Voir le site
                </a>
            </li>
\t\t\t";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
\t\t\t\t\t\t<img src=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "picture", [], "any", false, false, false, 50), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "fullName", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"avatar avatar-mini\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "fullName", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
\t\t\t\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        }
        // line 57
        echo "\t\t</ul>
\t</div>
</nav>

";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 62
            echo "\t<div class=\"container\">
\t\t<div class=\"alert alert-";
            // line 63
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "\t\t\t\t<p>";
                echo $context["message"];
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 67,  156 => 65,  152 => 64,  148 => 63,  145 => 62,  141 => 61,  135 => 57,  128 => 53,  118 => 50,  114 => 48,  112 => 47,  104 => 42,  93 => 34,  84 => 28,  75 => 22,  66 => 16,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"{{path('homepage')}}\">SymBNB !</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin_dashboard')}}\">
                    <i class=\"fas fa-chart-line\"></i>
                    Dashboard
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin_ads_index')}}\">
                    <i class=\"fas fa-hotel\"></i>
                    Annonces
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin_booking_index')}}\">
                    <i class=\"fas fa-folder\"></i>
                    Réservations
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin_comment_index')}}\">
                    <i class=\"fas fa-comments\"></i>
                    Commentaires
                </a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin_user_index')}}\">
                    <i class=\"fas fa-users\"></i>
                    Utilisateurs
                </a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a href=\"{{path('homepage')}}\" target=\"_blank\" class=\"nav-link\">
                    <i class=\"fas fa-eye\"></i>
                    Voir le site
                </a>
            </li>
\t\t\t{% if app.user %}
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
\t\t\t\t\t\t<img src=\"{{app.user.picture}}\" alt=\"Avatar de {{app.user.fullName}}\" class=\"avatar avatar-mini\"> {{app.user.fullName}}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
\t\t\t\t\t\t<a href=\"{{path('admin_account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</div>
</nav>

{% for label, messages in app.flashes %}
\t<div class=\"container\">
\t\t<div class=\"alert alert-{{label}}\">
\t\t\t{% for message in messages %}
\t\t\t\t<p>{{ message | raw }}</p>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endfor %}
", "admin/partials/header.html.twig", "C:\\Users\\lydia\\Documents\\apprentissageDeveloppeur\\Symfony_5\\Lior Chamla\\Symfony_5_SymBNB_LiorChamla\\templates\\admin\\partials\\header.html.twig");
    }
}
