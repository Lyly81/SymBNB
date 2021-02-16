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

/* home.html.twig */
class __TwigTemplate_dafef376443dfc25b1d9bf3f6aa677859c692de25d449b3dd26ef5b5732b3533 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        echo "\tBienvenue sur le meilleur réseau d'appartements !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "\t<h2>Voici le header</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div class=\"container\">
\t\t<div class=\"jumbotron mt-3\">
\t\t\t<h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
\t\t\t<p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location !</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>Vous êtes voyageurs ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
\t\t\t</p>
\t\t</div>

        <h2 class=\"h1 mt-3 md-4\">Nos appartements stars</h2>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"h1 mt-3 md-4\">Nos propriétaires stars !</h2>

        <div class=\"row mt-5\">
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Lior Chamla</h4>

                        <hr>

                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"\" class=\"float-left mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Lior Chamla</h4>

                        <hr>

                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"\" class=\"float-left mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  84 => 11,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tBienvenue sur le meilleur réseau d'appartements !
{% endblock %}

{% block header %}
\t<h2>Voici le header</h2>
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"jumbotron mt-3\">
\t\t\t<h1 class=\"display-3\">Bienvenue sur SymBNB !</h1>
\t\t\t<p class=\"lead\">Nous mettons en relations les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent en proposant leur bien à la location !</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>Vous êtes voyageurs ? Et vous voulez voir où vous pourrez loger pour votre prochain déplacement ?</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Voir nos annonces</a>
\t\t\t</p>
\t\t</div>

        <h2 class=\"h1 mt-3 md-4\">Nos appartements stars</h2>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-header text-center\">
                        3 chambres, <strong>49&euro; / nuit</strong> <br>
                        <small>Pas encore noté</small>
                    </div>

                    <img src=\"http://placehold.it/1000x400\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\">

                    <div class=\"car-body\">
                        <h4 class=\"card-title\">
                            Appartement de ouf !
                        </h4>
                        <p class=\"card-text\">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam debitis perferendis illo. Magnam necessitatibus saepe reiciendis nam, tempora quibusdam iusto!
                        </p>
                        <a href=\"#\" class=\"btn btn-secondary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class=\"h1 mt-3 md-4\">Nos propriétaires stars !</h2>

        <div class=\"row mt-5\">
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Lior Chamla</h4>

                        <hr>

                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"\" class=\"float-left mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-secondary mb-3\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Lior Chamla</h4>

                        <hr>

                        <div class=\"card-text\">
                            <img src=\"http://placehold.it/64x64\" alt=\"\" class=\"float-left mr-3\">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam.</p>
                            <a href=\"#\" class=\"btn btn-success float-right\">En savoir plus !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t</div>
{% endblock %}
", "home.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\home.html.twig");
    }
}
