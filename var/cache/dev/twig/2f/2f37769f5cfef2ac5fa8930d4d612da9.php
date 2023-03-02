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

/* admin/dashboards.html.twig */
class __TwigTemplate_e4af0c24791239b807bdba4b81d8d052 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboards.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/dashboards.html.twig", 1);
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
        echo " <main class=\"app-content\">
      <div class=\"app-title\">
        <div>
          <h1><i class=\"fa fa-dashboard\"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class=\"app-breadcrumb breadcrumb\">
          <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
          <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
        </ul>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small primary coloured-icon\"><i class=\"icon fa fa-users fa-3x\"></i>
            <div class=\"info\">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-thumbs-o-up fa-3x\"></i>
            <div class=\"info\">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small warning coloured-icon\"><i class=\"icon fa fa-files-o fa-3x\"></i>
            <div class=\"info\">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small danger coloured-icon\"><i class=\"icon fa fa-star fa-3x\"></i>
            <div class=\"info\">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"tile\">
            <h3 class=\"tile-title\">Monthly Sales</h3>
            <div class=\"embed-responsive embed-responsive-16by9\">
              <canvas class=\"embed-responsive-item\" id=\"lineChartDemo\"></canvas>
            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"tile\">
            <h3 class=\"tile-title\">Support Requests</h3>
            <div class=\"embed-responsive embed-responsive-16by9\">
              <canvas class=\"embed-responsive-item\" id=\"pieChartDemo\"></canvas>
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
        return "admin/dashboards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'baseadmin.html.twig' %}
{% block body %}
 <main class=\"app-content\">
      <div class=\"app-title\">
        <div>
          <h1><i class=\"fa fa-dashboard\"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class=\"app-breadcrumb breadcrumb\">
          <li class=\"breadcrumb-item\"><i class=\"fa fa-home fa-lg\"></i></li>
          <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
        </ul>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small primary coloured-icon\"><i class=\"icon fa fa-users fa-3x\"></i>
            <div class=\"info\">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small info coloured-icon\"><i class=\"icon fa fa-thumbs-o-up fa-3x\"></i>
            <div class=\"info\">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small warning coloured-icon\"><i class=\"icon fa fa-files-o fa-3x\"></i>
            <div class=\"info\">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-3\">
          <div class=\"widget-small danger coloured-icon\"><i class=\"icon fa fa-star fa-3x\"></i>
            <div class=\"info\">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"tile\">
            <h3 class=\"tile-title\">Monthly Sales</h3>
            <div class=\"embed-responsive embed-responsive-16by9\">
              <canvas class=\"embed-responsive-item\" id=\"lineChartDemo\"></canvas>
            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"tile\">
            <h3 class=\"tile-title\">Support Requests</h3>
            <div class=\"embed-responsive embed-responsive-16by9\">
              <canvas class=\"embed-responsive-item\" id=\"pieChartDemo\"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
    {% endblock %}", "admin/dashboards.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\admin\\dashboards.html.twig");
    }
}
