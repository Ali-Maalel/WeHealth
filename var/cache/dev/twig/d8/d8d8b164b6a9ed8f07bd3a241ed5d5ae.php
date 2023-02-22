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
        echo "<div class=\"p-4\">
\t<h4 class=\"fst-italic\">Catégories</h4>
\t<ol class=\"list-unstyled mb-0\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 5
            echo "\t\t\t<li>
\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\" style=\"color: black\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "nom", [], "any", false, false, false, 6), "html", null, true);
            echo "</a>

\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t</ol>
</div>
";
        
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
        return array (  67 => 10,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"p-4\">
\t<h4 class=\"fst-italic\">Catégories</h4>
\t<ol class=\"list-unstyled mb-0\">
\t\t{% for Categorie in categories %}
\t\t\t<li>
\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('categorie_show', {'id': Categorie.id}) }}\" style=\"color: black\">{{ Categorie.nom }}</a>

\t\t\t</li>
\t\t{% endfor %}

\t</ol>
</div>
", "widget/categories.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\widget\\categories.html.twig");
    }
}
