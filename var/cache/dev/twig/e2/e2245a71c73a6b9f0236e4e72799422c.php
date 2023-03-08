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

/* comment/_form.html.twig */
class __TwigTemplate_1b23a58963906585543f665621fb2c1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/_form.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "comment/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<main class=\"app-content\">
\t\t<div class=\"app-title\">
\t\t\t<div>
\t\t\t\t<h1>
\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\tCommenter</h1>

\t\t\t</div>
\t\t\t<ul class=\"app-breadcrumb breadcrumb\">
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<i class=\"fa fa-home fa-lg\"></i>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"#\">Form Components</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"tile mt-3\">
\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Commentaire</label>
\t\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "contenu", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1"]]);
        echo "
\t\t\t\t\t\t\t</div>
                              <div class=\"form-group\">
                            <label for=\"exampleSelect1\">createdAt</label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "createdAt", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleSelect1\">Article</label>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "article", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                         <div class=\"form-group\">
                            <label for=\"exampleSelect1\">User</label>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t
\t\t</div>

\t</div>
\t<div class=\"tile-footer\">
\t\t<button class=\"btn btn-primary\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "ajouter")) : ("ajouter")), "html", null, true);
        echo "</button>
\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
\t</div>

</div></div></div></main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "comment/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  131 => 49,  118 => 39,  111 => 35,  104 => 31,  97 => 27,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig'%}
{% block body%}
\t<main class=\"app-content\">
\t\t<div class=\"app-title\">
\t\t\t<div>
\t\t\t\t<h1>
\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\tCommenter</h1>

\t\t\t</div>
\t\t\t<ul class=\"app-breadcrumb breadcrumb\">
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<i class=\"fa fa-home fa-lg\"></i>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item\">Forms</li>
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"#\">Form Components</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"tile mt-3\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Commentaire</label>
\t\t\t\t\t\t\t\t{{form_widget(form.contenu,{'attr':{'class':'form-control','id':'exampleInputEmail1'}})}}
\t\t\t\t\t\t\t</div>
                              <div class=\"form-group\">
                            <label for=\"exampleSelect1\">createdAt</label>
                            {{form_widget(form.createdAt,{'attr':{'class':'form-control' ,}})}}
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleSelect1\">Article</label>
                            {{form_widget(form.article,{'attr':{'class':'form-control'}})}}
                        </div>
                         <div class=\"form-group\">
                            <label for=\"exampleSelect1\">User</label>
                            {{form_widget(form.user,{'attr':{'class':'form-control'}})}}
                        </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t
\t\t</div>

\t</div>
\t<div class=\"tile-footer\">
\t\t<button class=\"btn btn-primary\">{{ button_label|default('ajouter') }}</button>
\t\t{{ form_end(form) }}
\t</div>

</div></div></div></main>{% endblock %}

", "comment/_form.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\comment\\_form.html.twig");
    }
}
