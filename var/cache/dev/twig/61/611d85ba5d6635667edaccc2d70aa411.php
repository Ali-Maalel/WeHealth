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

/* Article/item.html.twig */
class __TwigTemplate_773740c5fb7dd038047eb16d266b26d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Article/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Article/item.html.twig"));

        // line 1
        $context["article_show"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]);
        // line 2
        echo "
<article class=\"mb-5\">
\t<div class=\"row\">
\t\t<div class=\"col-md-";
        // line 5
        ((array_key_exists("leftCol", $context)) ? (print (twig_escape_filter($this->env, (isset($context["leftCol"]) || array_key_exists("leftCol", $context) ? $context["leftCol"] : (function () { throw new RuntimeError('Variable "leftCol" does not exist.', 5, $this->source); })()), "html", null, true))) : (print (5)));
        echo "\">
\t\t\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "featuredImage", [], "any", false, false, false, 6)) {
            // line 7
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["article_show"]) || array_key_exists("article_show", $context) ? $context["article_show"] : (function () { throw new RuntimeError('Variable "article_show" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"/uploads/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "featuredImage", [], "any", false, false, false, 8), "filename", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "featuredImage", [], "any", false, false, false, 8), "altText", [], "any", false, false, false, 8), "html", null, true);
            echo "\" loading=\"lazy\" width=\"350\" height=\"205\">
\t\t\t\t</a>
\t\t\t";
        }
        // line 11
        echo "\t\t</div>
\t\t<div class=\"col-md-";
        // line 12
        ((array_key_exists("rightCol", $context)) ? (print (twig_escape_filter($this->env, (isset($context["rightCol"]) || array_key_exists("rightCol", $context) ? $context["rightCol"] : (function () { throw new RuntimeError('Variable "rightCol" does not exist.', 12, $this->source); })()), "html", null, true))) : (print (7)));
        echo "\">
\t\t\t<h2 class=\"article-title\">
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["article_show"]) || array_key_exists("article_show", $context) ? $context["article_show"] : (function () { throw new RuntimeError('Variable "article_show" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" class=\"text-decoration-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
\t\t\t</h2>
\t\t\t<p>
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d M Y"), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "featuredText", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "featuredText", [], "any", false, false, false, 19)) : ((twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "contenu", [], "any", false, false, false, 19)), 0, 130) . "..."))), "html", null, true);
        echo "
\t\t</div>
\t</div>
</article>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Article/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  85 => 17,  77 => 14,  72 => 12,  69 => 11,  61 => 8,  56 => 7,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set article_show = path('article_show', {id: article.id}) %}

<article class=\"mb-5\">
\t<div class=\"row\">
\t\t<div class=\"col-md-{{ leftCol is defined ? leftCol : 5 }}\">
\t\t\t{% if article.featuredImage %}
\t\t\t\t<a href=\"{{ article_show }}\">
\t\t\t\t\t<img src=\"/uploads/{{ article.featuredImage.filename }}\" alt=\"{{ article.featuredImage.altText }}\" loading=\"lazy\" width=\"350\" height=\"205\">
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"col-md-{{ rightCol is defined ? rightCol : 7 }}\">
\t\t\t<h2 class=\"article-title\">
\t\t\t\t<a href=\"{{ article_show }}\" class=\"text-decoration-none\">{{ article.titre }}</a>
\t\t\t</h2>
\t\t\t<p>
\t\t\t\t{{ article.createdAt|date('d M Y') }}
\t\t\t</p>
\t\t\t{{ article.featuredText ?: article.contenu|striptags|slice(0, 130) ~ '...' }}
\t\t</div>
\t</div>
</article>
", "Article/item.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\Article\\item.html.twig");
    }
}
