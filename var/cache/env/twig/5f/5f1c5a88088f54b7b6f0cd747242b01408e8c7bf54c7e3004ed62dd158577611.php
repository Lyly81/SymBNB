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

/* ad/_collection.html.twig */
class __TwigTemplate_c7d686976e810cdd0d84d4edb5a9867b09467dabd6cf2b45ad9c5bde9de99406 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_ad_images_widget' => [$this, 'block__ad_images_widget'],
            '_ad_images_entry_row' => [$this, 'block__ad_images_entry_row'],
            '_ad_images_entry_widget' => [$this, 'block__ad_images_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/_collection.html.twig"));

        // line 1
        $this->displayBlock('_ad_images_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_ad_images_entry_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_ad_images_entry_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__ad_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        // line 2
        echo "\t<p>Ici, vous pouvez ajouter vos propres images !</p>

\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'widget');
        echo "

    <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

\t<div class=\"form-group\">
\t\t<button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">Ajouter une image</button>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block__ad_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        // line 14
        echo "\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block__ad_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        // line 18
        echo "\t<div class=\"form-group\" id=\"block_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-10\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "caption", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-2\">
                <button type=\"button\" data-action=\"delete\" data-target=\"#block_";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-danger\">X</button>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  125 => 26,  119 => 23,  110 => 18,  103 => 17,  93 => 14,  86 => 13,  71 => 4,  67 => 2,  60 => 1,  53 => 17,  50 => 16,  48 => 13,  45 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _ad_images_widget %}
\t<p>Ici, vous pouvez ajouter vos propres images !</p>

\t{{form_widget(form)}}

    <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

\t<div class=\"form-group\">
\t\t<button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">Ajouter une image</button>
\t</div>
{% endblock %}

{% block _ad_images_entry_row %}
\t{{form_widget(form)}}
{% endblock %}

{% block _ad_images_entry_widget %}
\t<div class=\"form-group\" id=\"block_{{id}}\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-10\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{form_widget(form.url)}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{form_widget(form.caption)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-2\">
                <button type=\"button\" data-action=\"delete\" data-target=\"#block_{{id}}\" class=\"btn btn-danger\">X</button>
            </div>
\t\t</div>
\t</div>
{% endblock %}
", "ad/_collection.html.twig", "C:\\virtualHost\\liorChamla\\Symfony5\\symbnb\\templates\\ad\\_collection.html.twig");
    }
}
