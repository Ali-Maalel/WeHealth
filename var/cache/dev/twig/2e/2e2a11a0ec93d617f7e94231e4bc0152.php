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

/* Article front/PDF.html.twig */
class __TwigTemplate_3d093c12457fd2b022ddb9dd8c4c38fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Article front/PDF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Article front/PDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 12pt;
\t\t\t\tline-height: 1.5;
\t\t\t}
\t\t\th1 {
\t\t\t\tfont-size: 18pt;
\t\t\t}
\t\t\tp {
\t\t\t\tmargin: 0 0 1em;
\t\t\t}
\t\t\t.article-content {
\t\t\t\tmargin-top: 2em;
\t\t\t}
\t\t\t.article-meta {
\t\t\t\tfont-style: italic;
\t\t\t\tmargin-top: 1em;
\t\t\t\tfont-size: 10pt;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h1>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
\t\t<div class=\"article-meta\">
\t\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "featuredText", [], "any", false, false, false, 31)) {
            // line 32
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "featuredText", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t|
\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
        echo "
\t\t</div>

\t\t<div class=\"article-content\">
\t\t\t";
        // line 39
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "contenu", [], "any", false, false, false, 39);
        echo "
\t\t</div>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Article front/PDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  90 => 35,  83 => 32,  81 => 31,  76 => 29,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>{{ article.titre }}</title>
\t\t<style>
\t\t\tbody {
\t\t\t\tfont-family: Arial, sans-serif;
\t\t\t\tfont-size: 12pt;
\t\t\t\tline-height: 1.5;
\t\t\t}
\t\t\th1 {
\t\t\t\tfont-size: 18pt;
\t\t\t}
\t\t\tp {
\t\t\t\tmargin: 0 0 1em;
\t\t\t}
\t\t\t.article-content {
\t\t\t\tmargin-top: 2em;
\t\t\t}
\t\t\t.article-meta {
\t\t\t\tfont-style: italic;
\t\t\t\tmargin-top: 1em;
\t\t\t\tfont-size: 10pt;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h1>{{ article.titre }}</h1>
\t\t<div class=\"article-meta\">
\t\t\t{% if article.featuredText %}
\t\t\t\t{{ article.featuredText }}
\t\t\t\t|
\t\t\t{% endif %}
\t\t\t{{ article.createdAt|date('Y-m-d') }}
\t\t</div>

\t\t<div class=\"article-content\">
\t\t\t{{ article.contenu|raw }}
\t\t</div>
\t</body>
</html>
", "Article front/PDF.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\Article front\\PDF.html.twig");
    }
}
