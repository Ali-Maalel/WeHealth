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

/* professionnel_sante/show.html.twig */
class __TwigTemplate_8bd8a370bd51df8dc5c439eb1cf79959 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professionnel_sante/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professionnel_sante/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "professionnel_sante/show.html.twig", 1);
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

        echo "ProfessionnelSante";
        
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
        echo "    <h1>ProfessionnelSante</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 16, $this->source); })()), "login", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeuser</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 40, $this->source); })()), "typeuser", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 44, $this->source); })()), "matricule", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CIN</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 48, $this->source); })()), "CIN", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_professionnel_sante_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_professionnel_sante_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["professionnel_sante"]) || array_key_exists("professionnel_sante", $context) ? $context["professionnel_sante"] : (function () { throw new RuntimeError('Variable "professionnel_sante" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "professionnel_sante/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "professionnel_sante/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 57,  172 => 55,  167 => 53,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProfessionnelSante{% endblock %}

{% block body %}
    <h1>ProfessionnelSante</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ professionnel_sante.id }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ professionnel_sante.login }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ professionnel_sante.password }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ professionnel_sante.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ professionnel_sante.prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ professionnel_sante.email }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ professionnel_sante.telephone }}</td>
            </tr>
            <tr>
                <th>Typeuser</th>
                <td>{{ professionnel_sante.typeuser }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ professionnel_sante.matricule }}</td>
            </tr>
            <tr>
                <th>CIN</th>
                <td>{{ professionnel_sante.CIN }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_professionnel_sante_index') }}\">back to list</a>

    <a href=\"{{ path('app_professionnel_sante_edit', {'id': professionnel_sante.id}) }}\">edit</a>

    {{ include('professionnel_sante/_delete_form.html.twig') }}
{% endblock %}
", "professionnel_sante/show.html.twig", "C:\\Users\\lenovo\\Desktop\\Cities.Skylines.v1.16.0.f3.Incl.ALL.DLC\\Nouveau dossier\\WeHealth\\templates\\professionnel_sante\\show.html.twig");
    }
}
