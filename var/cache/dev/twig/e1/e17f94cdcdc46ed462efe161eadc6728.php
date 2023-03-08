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

/* utils/header.html.twig */
class __TwigTemplate_f9d81d323a4111b40d3584727fabe932 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "\t<header>
\t\t<!--? Header Start -->
\t\t<div class=\"header-area\">
\t\t
\t\t\t<div class=\"main-header header-sticky\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row align-items-center\">
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-1\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img class=\"logowehealth \"src=\"assets/img/logo/applogo.png\" alt=\"\" width=\"110\" height=\"70\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"menu-main d-flex align-items-center justify-content-end\">
\t\t\t\t\t\t\t\t<!-- Main-menu -->
\t\t\t\t\t\t\t\t<div class=\"main-menu f-right d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t<ul id=\"navigation\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wehealth");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"elements.html\">Element</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-right-btn f-right d-none d-lg-block ml-15\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn header-btn\">Make an Appointment</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Mobile Menu -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"mobile_menu d-block d-lg-none\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Header End -->
\t</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utils/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  88 => 25,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
\t<header>
\t\t<!--? Header Start -->
\t\t<div class=\"header-area\">
\t\t
\t\t\t<div class=\"main-header header-sticky\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row align-items-center\">
\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-1\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img class=\"logowehealth \"src=\"assets/img/logo/applogo.png\" alt=\"\" width=\"110\" height=\"70\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"menu-main d-flex align-items-center justify-content-end\">
\t\t\t\t\t\t\t\t<!-- Main-menu -->
\t\t\t\t\t\t\t\t<div class=\"main-menu f-right d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t<ul id=\"navigation\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_wehealth') }}\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_blog') }}\">Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"elements.html\">Element</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-right-btn f-right d-none d-lg-block ml-15\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn header-btn\">Make an Appointment</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Mobile Menu -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"mobile_menu d-block d-lg-none\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Header End -->
\t</header>
{% endblock %}
", "utils/header.html.twig", "C:\\Users\\lenovo\\Desktop\\Cities.Skylines.v1.16.0.f3.Incl.ALL.DLC\\Nouveau dossier\\WeHealth\\templates\\utils\\header.html.twig");
    }
}
