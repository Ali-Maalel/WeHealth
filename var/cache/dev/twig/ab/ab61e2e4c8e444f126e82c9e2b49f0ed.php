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

/* evennement/_form.html.twig */
class __TwigTemplate_c7505f720f4f66fb6a2562ae894d9031 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennement/_form.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "evennement/_form.html.twig", 1);
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
        echo "    <main class=\"app-content\">
      <div class=\"app-title\">
        <div>
          <h1><i class=\"fa fa-edit\"></i> Créer un evenement</h1>
          
        </div>
        <ul class=\"app-breadcrumb breadcrumb\">
          <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item\"><a href=\"#\">Form Components</a></li>
        </ul>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"tile\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
              
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Titre</label>
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Description</label>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleInputPassword1"]]);
        echo "
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Date de début de l'évenement</label>
                     ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateDebut", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Date de fin de l'évenement</label>
                     ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateFin", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">lien  evenement</label>
                     ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "consultationurl", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">all_day</label>
                     ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "all_day", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Nombre maximal des participants</label>
                     ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "max", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                   <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Prix de l'evenement</label>
                     ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prix", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Choisir une image</label>
                     ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </select>
                  </div>
              </div>
              
            </div>
            <div class=\"tile-footer\">
             <button class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "ajouter")) : ("ajouter")), "html", null, true);
        echo "</button>
                    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
            </div>
              
          </div>
        </div>
      </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evennement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  166 => 69,  156 => 62,  148 => 57,  140 => 52,  132 => 47,  124 => 42,  116 => 37,  108 => 32,  101 => 28,  94 => 24,  88 => 21,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig'%}
{% block body%}
    <main class=\"app-content\">
      <div class=\"app-title\">
        <div>
          <h1><i class=\"fa fa-edit\"></i> Créer un evenement</h1>
          
        </div>
        <ul class=\"app-breadcrumb breadcrumb\">
          <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item\"><a href=\"#\">Form Components</a></li>
        </ul>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"tile\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
              
                {{ form_start(form) }}
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Titre</label>
                    {{form_widget(form.titre,{'attr':{'class':'form-control','id':'exampleInputEmail1'}})}}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Description</label>
                    {{form_widget(form.description,{'attr':{'class':'form-control', 'id':'exampleInputPassword1'}})}}
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Date de début de l'évenement</label>
                     {{form_widget(form.dateDebut,{'attr':{'class':'form-control' ,}})}}
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Date de fin de l'évenement</label>
                     {{form_widget(form.dateFin,{'attr':{'class':'form-control' ,}})}}
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">lien  evenement</label>
                     {{form_widget(form.consultationurl,{'attr':{'class':'form-control'}})}}
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">all_day</label>
                     {{form_widget(form.all_day,{'attr':{'class':'form-control' ,}})}}
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Nombre maximal des participants</label>
                     {{form_widget(form.max,{'attr':{'class':'form-control'}})}}
                    </select>
                  </div>
                   <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Prix de l'evenement</label>
                     {{form_widget(form.prix,{'attr':{'class':'form-control'}})}}
                    </select>
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleSelect1\">Choisir une image</label>
                     {{form_widget(form.image,{'attr':{'class':'form-control'}})}}
                    </select>
                  </div>
              </div>
              
            </div>
            <div class=\"tile-footer\">
             <button class=\"btn btn-primary\">{{ button_label|default('ajouter') }}</button>
                    {{ form_end(form) }}
            </div>
              
          </div>
        </div>
      </div>
    </main>
{% endblock %}
", "evennement/_form.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\evennement\\_form.html.twig");
    }
}
