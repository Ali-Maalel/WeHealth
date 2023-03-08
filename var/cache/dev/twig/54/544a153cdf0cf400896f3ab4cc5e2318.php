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

/* article/view_content.html.twig */
class __TwigTemplate_de1b68705feb5ebf85ffb8b39a3dfe2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/view_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/view_content.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "article/view_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div style=\"margin-top: 80px; text-align: center;\">
\t\t<h1 style=\"max-width: 800px; margin: 0 auto;\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "Titre", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
\t\t<div style=\"max-width: 800px; margin: 0 auto; padding: 0 20px;\"> <!-- Ajout d'une div pour envelopper le contenu -->
\t\t\t<p>";
        // line 8
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "Contenu", [], "any", false, false, false, 8);
        echo "</p>
\t\t</div>
\t</div>

\t<style>
\t\t.custom-table {
\t\t\twidth: 50%; /* ajustez cette valeur en fonction de vos besoins */
\t\t\tmargin: 0 auto; /* centre le tableau horizontalement */
\t\t}
        
        .custom-table td {
            max-width: 200px; /* ajustez cette valeur en fonction de vos besoins */
            word-wrap: break-word; /* permet de forcer le texte à se casser en plusieurs lignes si nécessaire */
        }
\t</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/view_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block body %}

\t<div style=\"margin-top: 80px; text-align: center;\">
\t\t<h1 style=\"max-width: 800px; margin: 0 auto;\">{{ article.Titre }}</h1>
\t\t<div style=\"max-width: 800px; margin: 0 auto; padding: 0 20px;\"> <!-- Ajout d'une div pour envelopper le contenu -->
\t\t\t<p>{{ article.Contenu|raw }}</p>
\t\t</div>
\t</div>

\t<style>
\t\t.custom-table {
\t\t\twidth: 50%; /* ajustez cette valeur en fonction de vos besoins */
\t\t\tmargin: 0 auto; /* centre le tableau horizontalement */
\t\t}
        
        .custom-table td {
            max-width: 200px; /* ajustez cette valeur en fonction de vos besoins */
            word-wrap: break-word; /* permet de forcer le texte à se casser en plusieurs lignes si nécessaire */
        }
\t</style>

{% endblock %}


", "article/view_content.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\article\\view_content.html.twig");
    }
}
