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

/* widget/categories.html.twig */
class __TwigTemplate_63bfed79e791c8a34f08172b0f854048 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "widget/categories.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 2
            echo "\t";
            $context["nb_articles"] = 0;
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Categorie"], "articles", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
                // line 4
                echo "\t\t";
                $context["nb_articles"] = ((isset($context["nb_articles"]) || array_key_exists("nb_articles", $context) ? $context["nb_articles"] : (function () { throw new RuntimeError('Variable "nb_articles" does not exist.', 4, $this->source); })()) + 1);
                // line 5
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t<li>
\t\t<a class=\"text-decoration-none\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" style=\"color: black\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "nom", [], "any", false, false, false, 7), "html", null, true);
            echo "
\t\t\t(";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["nb_articles"]) || array_key_exists("nb_articles", $context) ? $context["nb_articles"] : (function () { throw new RuntimeError('Variable "nb_articles" does not exist.', 8, $this->source); })()), "html", null, true);
            echo ")</a>
\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "widget/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  67 => 7,  64 => 6,  58 => 5,  55 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for Categorie in categories %}
\t{% set nb_articles = 0 %}
\t{% for Article in Categorie.articles %}
\t\t{% set nb_articles = nb_articles + 1 %}
\t{% endfor %}
\t<li>
\t\t<a class=\"text-decoration-none\" href=\"{{ path('categorie_show', {'id': Categorie.id}) }}\" style=\"color: black\">{{ Categorie.nom }}
\t\t\t({{ nb_articles }})</a>
\t</li>
{% endfor %}
", "widget/categories.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\widget\\categories.html.twig");
    }
}
