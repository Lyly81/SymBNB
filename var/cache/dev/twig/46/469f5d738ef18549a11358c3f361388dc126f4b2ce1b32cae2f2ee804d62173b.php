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

/* partials/header.html.twig */
class __TwigTemplate_bc31e09f9f9a46c28fd197bc64f41139a6e3d909be07d4c312547b52a9d6e961 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">Annonces</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "picture", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "fullName", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"avatar avatar-mini\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "fullName", [], "any", false, false, false, 20), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\" class=\"dropdown-item\">Créer une annonce</a>
\t\t\t\t\t\t<div class=\"dropdown_divider\"></div>
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"dropdown-item\">Mon compte</a>
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_bookings");
            echo "\" class=\"dropdown-item\">Mes réservations</a>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profil</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"nav-link\">Inscription</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\">Connexion</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 40
        echo "\t\t</ul>
\t</div>
</nav>

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 45
            echo "\t<div class=\"container\">
\t\t<div class=\"alert alert-";
            // line 46
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 48
                echo "\t\t\t\t<p>";
                echo $context["message"];
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
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
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 50,  147 => 48,  143 => 47,  139 => 46,  136 => 45,  132 => 44,  126 => 40,  120 => 37,  114 => 34,  111 => 33,  104 => 29,  99 => 27,  95 => 26,  91 => 25,  86 => 23,  76 => 20,  72 => 18,  70 => 17,  63 => 13,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t<a class=\"navbar-brand\" href=\"{{path('homepage')}}\">SymBNB !</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('homepage')}}\">Accueil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('ads_index')}}\">Annonces</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t{% if app.user %}
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
\t\t\t\t\t\t<img src=\"{{app.user.picture}}\" alt=\"Avatar de {{app.user.fullName}}\" class=\"avatar avatar-mini\"> {{app.user.fullName}}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
\t\t\t\t\t\t<a href=\"{{path('ads_create')}}\" class=\"dropdown-item\">Créer une annonce</a>
\t\t\t\t\t\t<div class=\"dropdown_divider\"></div>
\t\t\t\t\t\t<a href=\"{{path('account_index')}}\" class=\"dropdown-item\">Mon compte</a>
\t\t\t\t\t\t<a href=\"{{path('account_bookings')}}\" class=\"dropdown-item\">Mes réservations</a>
\t\t\t\t\t\t<a href=\"{{path('account_profile')}}\" class=\"dropdown-item\">Modifier mon profil</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"{{path('account_logout')}}\" class=\"dropdown-item\">Déconnexion</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{path('account_register')}}\" class=\"nav-link\">Inscription</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{path('account_login')}}\" class=\"nav-link\">Connexion</a>
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
", "partials/header.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\partials\\header.html.twig");
    }
}
