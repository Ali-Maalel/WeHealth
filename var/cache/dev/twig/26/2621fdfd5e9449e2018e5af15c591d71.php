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

/* evennement/index.html.twig */
class __TwigTemplate_713f760f0ae54af9cb5d57f0eb802f80 extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "evennement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evennement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"col-md-12\">
          <div class=\"tile\">
           
            <div class=\"table-responsive\">
              <table class=\"table\">
                <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Date</th>
                <th>Consultationurl</th>
                <th>actions</th>
            </tr>
        </thead>
                <tbody>
                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new RuntimeError('Variable "evennements" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 24
            echo "                  <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>  
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["evennement"], "date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "date", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "consultationurl", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">supprimer</a>
                    <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
              </table>
              <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_new");
        echo "\">Create new</a>
            </div>
          </div>
        </div>

   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evennement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  150 => 37,  139 => 32,  135 => 31,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Evennement index{% endblock %}

{% block body %}

<div class=\"col-md-12\">
          <div class=\"tile\">
           
            <div class=\"table-responsive\">
              <table class=\"table\">
                <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Date</th>
                <th>Consultationurl</th>
                <th>actions</th>
            </tr>
        </thead>
                <tbody>
                 {% for evennement in evennements %}
                  <tr>
                <td>{{ evennement.id }}</td>
                <td>{{ evennement.titre }}</td>  
                <td>{{ evennement.description }}</td>
                <td>{{ evennement.date ? evennement.date|date('Y-m-d') : '' }}</td>
                <td>{{ evennement.consultationurl }}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_evennement_delete', {'id': evennement.id}) }}\">supprimer</a>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_evennement_edit', {'id': evennement.id}) }}\">edit</a>
                </td>
            </tr>
        
        {% endfor %}
                </tbody>
              </table>
              <a href=\"{{ path('app_evennement_new') }}\">Create new</a>
            </div>
          </div>
        </div>

   
{% endblock %}
", "evennement/index.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\evennement\\index.html.twig");
    }
}
