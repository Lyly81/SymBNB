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

/* admin/account/login.html.twig */
class __TwigTemplate_fdebdd6541c1c9612860775700c87360e80105cdd018d1c567df87de12d9b188 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.13.0/css/all.css\">

\t\t<title>Connexion à l'administration</title>

        <style>
            body {
                display: flex;
                justify-content: center;
                height: 100vh;
            }

            .card {
                margin-top: 10%;
            }
        </style>
        
\t</head>
\t<body>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"card bg-light\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\tConnexion à l'administration
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 34
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<p>Les informations que vous avez fournies ne sont pas bonnes.</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"_username\">Email</label><input type=\"text\" class=\"form-control\" placeholder=\"Adresse email ...\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"_password\">Mot de passe</label><input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe ...\" name=\"_password\"></div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-lock-open\"></i>
\t\t\t\t\t\t\t\tConnexion !
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-left\"></i>
\t\t\t\t\t\t\t\tRetour au site
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  90 => 41,  86 => 39,  80 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.13.0/css/all.css\">

\t\t<title>Connexion à l'administration</title>

        <style>
            body {
                display: flex;
                justify-content: center;
                height: 100vh;
            }

            .card {
                margin-top: 10%;
            }
        </style>
        
\t</head>
\t<body>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"card bg-light\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\tConnexion à l'administration
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t{% if hasError %}
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<p>Les informations que vous avez fournies ne sont pas bonnes.</p>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"_username\">Email</label><input type=\"text\" class=\"form-control\" placeholder=\"Adresse email ...\" name=\"_username\" value=\"{{username}}\"></div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"_password\">Mot de passe</label><input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe ...\" name=\"_password\"></div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-lock-open\"></i>
\t\t\t\t\t\t\t\tConnexion !
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<a href=\"{{path('homepage')}}\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-left\"></i>
\t\t\t\t\t\t\t\tRetour au site
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "admin/account/login.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\admin\\account\\login.html.twig");
    }
}
