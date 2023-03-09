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

/* evennement/show.html.twig */
class __TwigTemplate_6d18b58ef6fd2a05b6f3e222b71f3bff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/show.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "evennement/show.html.twig", 1);
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

        echo "Evennement";
        
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
        <tbody>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date début</th>
                <td>";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>";
        // line 27
        ((twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Consultationurl</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 31, $this->source); })()), "consultationurl", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nb. Participants</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 35, $this->source); })()), "reservations", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Liste des participants</th>
                <td>
                <ul>
                 ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evennement"]) || array_key_exists("evennement", $context) ? $context["evennement"] : (function () { throw new RuntimeError('Variable "evennement" does not exist.', 41, $this->source); })()), "participants", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </ul>
                </td>
            </tr>
        </tbody>
    </table>
     ";
        // line 49
        echo twig_include($this->env, $context, "evennement/_delete_form.html.twig");
        echo "
    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_index");
        echo "\">back to list</a>
            </div>
        
  
  </div>
 
        </div>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evennement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  165 => 49,  158 => 44,  147 => 42,  143 => 41,  134 => 35,  127 => 31,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Evennement{% endblock %}

{% block body %}

<div class=\"col-md-12\">
          <div class=\"tile\">
           
            <div class=\"table-responsive\">
              <table class=\"table\">
        <tbody>
            <tr>
                <th>Titre</th>
                <td>{{ evennement.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evennement.description }}</td>
            </tr>
            <tr>
                <th>Date début</th>
                <td>{{ evennement.dateDebut ? evennement.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>{{ evennement.dateFin ? evennement.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Consultationurl</th>
                <td>{{ evennement.consultationurl }}</td>
            </tr>
            <tr>
                <th>Nb. Participants</th>
                <td>{{ evennement.reservations }}</td>
            </tr>
            <tr>
                <th>Liste des participants</th>
                <td>
                <ul>
                 {% for p in evennement.participants %}
                <li>{{ p.nom }} | {{ p.email }}</li>
        {% endfor %}
                </ul>
                </td>
            </tr>
        </tbody>
    </table>
     {{ include('evennement/_delete_form.html.twig') }}
    <a href=\"{{ path('app_evennement_index') }}\">back to list</a>
            </div>
        
  
  </div>
 
        </div>
  
{% endblock %}
", "evennement/show.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\evennement\\show.html.twig");
    }
}
