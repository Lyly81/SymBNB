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

/* booking/show.html.twig */
class __TwigTemplate_0dee831711bc97ff5898384c826974e418a29d9729d2d17f383f9843233b3506 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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

        echo "Réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    ";
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "ad", [], "any", false, false, false, 6);
        // line 7
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "author", [], "any", false, false, false, 7);
        // line 8
        echo "
    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo ")</h1>

        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "withAlert"], "method", false, false, false, 12)) {
            // line 13
            echo "            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de 
                    <strong>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 18, $this->source); })()), "fullName", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                    </strong>
                    pour l'annonce 
                    <strong>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                    </strong>
                    a bien été prise en compte !
                </p>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 36, $this->source); })()), "startDate", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 38, $this->source); })()), "endDate", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "duration", [], "any", false, false, false, 40), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 42, $this->source); })()), "amount", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 44), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                    </dl>

                    <hr>

                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 52, $this->source); })()), "picture", [], "any", false, false, false, 52), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 52, $this->source); })()), "fullName", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 56, $this->source); })()), "slug", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 56, $this->source); })()), "fullName", [], "any", false, false, false, 56), "html", null, true);
        echo "</a>
                            </h4>

                            <span class=\"badge badge-primary\">";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 59, $this->source); })()), "ads", [], "any", false, false, false, 59)), "html", null, true);
        echo " annonces</span>
                        </div>
                    </div>
                    ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62);
        echo "

                    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 64, $this->source); })()), "slug", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'infos sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 64, $this->source); })()), "firstName", [], "any", false, false, false, 64), "html", null, true);
        echo "</a>
                </div>
                <div class=\"alert alert-ligth\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    ";
        // line 68
        if (1 === twig_compare(twig_date_converter($this->env), twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 68, $this->source); })()), "endDate", [], "any", false, false, false, 68)))) {
            // line 69
            echo "                        ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 69, $this->source); })()), "ad", [], "any", false, false, false, 69), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)], "method", false, false, false, 69);
            // line 70
            echo "                        ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 70, $this->source); })()))) {
                // line 71
                echo "                            <blockquote>
                                ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 72, $this->source); })()), "content", [], "any", false, false, false, 72), "html", null, true);
                echo "
                            </blockquote>

                            <strong>Note : </strong> ";
                // line 75
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 75)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 75, $this->source); })()), "rating", [], "any", false, false, false, 75)]));
                // line 76
                echo "                        ";
            } else {
                // line 77
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
                echo "
                            ";
                // line 78
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
                echo "
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            ";
                // line 80
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
                echo "
                        ";
            }
            // line 82
            echo "                    ";
        } else {
            // line 83
            echo "                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    ";
        }
        // line 85
        echo "                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-ligth\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>

                    <h4>
                        <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 92, $this->source); })()), "slug", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 92, $this->source); })()), "title", [], "any", false, false, false, 92), "html", null, true);
        echo "</a>
                    </h4>

                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 95, $this->source); })()), "coverImage", [], "any", false, false, false, 95), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 95, $this->source); })()), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "\" class=\"img-fluid\">

                    ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 97, $this->source); })()), "content", [], "any", false, false, false, 97);
        echo "

                    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 99, $this->source); })()), "slug", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'informations</a>
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
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 99,  282 => 97,  275 => 95,  267 => 92,  258 => 85,  254 => 83,  251 => 82,  246 => 80,  241 => 78,  236 => 77,  233 => 76,  231 => 75,  225 => 72,  222 => 71,  219 => 70,  216 => 69,  214 => 68,  205 => 64,  200 => 62,  194 => 59,  186 => 56,  177 => 52,  166 => 44,  161 => 42,  156 => 40,  151 => 38,  146 => 36,  141 => 34,  133 => 28,  122 => 22,  113 => 18,  106 => 13,  104 => 12,  99 => 10,  95 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Réservation n°{{booking.id}}{% endblock %}

{% block body %}
    {% set ad = booking.ad %}
    {% set author = ad.author %}

    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°{{booking.id}})</h1>

        {% if app.request.query.get('withAlert') %}
            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de 
                    <strong>
                        <a href=\"{{path('user_show', {'slug': author.slug})}}\">{{author.fullName}}</a>
                    </strong>
                    pour l'annonce 
                    <strong>
                        <a href=\"{{path('ads_show', {'slug': ad.slug})}}\">{{ad.title}}</a>
                    </strong>
                    a bien été prise en compte !
                </p>
            </div>
        {% endif %}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">{{booking.id}}</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">{{booking.startDate | date('d/m/Y')}}</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">{{booking.endDate | date('d/m/Y')}}</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">{{booking.duration}}</dd>
                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">{{booking.amount | number_format(2, ',', ' ')}} &euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">{{booking.comment | default('Aucun commentaire')}}</dd>
                    </dl>

                    <hr>

                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"{{author.picture}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{author.fullName}}\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"{{path('user_show', {'slug': author.slug})}}\">{{author.fullName}}</a>
                            </h4>

                            <span class=\"badge badge-primary\">{{author.ads | length}} annonces</span>
                        </div>
                    </div>
                    {{author.description | raw}}

                    <a href=\"{{path('user_show', {'slug': author.slug})}}\" class=\"btn btn-primary\">Plus d'infos sur {{author.firstName}}</a>
                </div>
                <div class=\"alert alert-ligth\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    {% if date() > date(booking.endDate) %}
                        {% set comment = booking.ad.commentFromAuthor(app.user) %}
                        {% if comment is not null %}
                            <blockquote>
                                {{comment.content}}
                            </blockquote>

                            <strong>Note : </strong> {% include \"partials/rating.html.twig\" with {'rating': comment.rating} %}
                        {% else %}
                            {{form_start(form)}}
                            {{form_widget(form)}}
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            {{form_end(form)}}
                        {% endif %}
                    {% else %}
                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    {% endif %}
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-ligth\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>

                    <h4>
                        <a href=\"{{path('ads_show', {'slug': ad.slug})}}\">{{ad.title}}</a>
                    </h4>

                    <img src=\"{{ad.coverImage}}\" alt=\"Image de {{ad.title}}\" class=\"img-fluid\">

                    {{ad.content | raw}}

                    <a href=\"{{path('ads_show', {'slug': ad.slug})}}\" class=\"btn btn-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "booking/show.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\booking\\show.html.twig");
    }
}
