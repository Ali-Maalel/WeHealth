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

/* blog/blog.html.twig */
class __TwigTemplate_c66e54dec20e52e9623db38101de1bde extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/blog.html.twig", 1);
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

        echo "Blog -Acceuil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<!--? Preloader Start -->
\t<div id=\"preloader-active\">
\t\t<div class=\"preloader d-flex align-items-center justify-content-center\">
\t\t\t<div class=\"preloader-inner position-relative\">
\t\t\t\t<div class=\"preloader-circle\"></div>
\t\t\t\t<div class=\"preloader-img pere-text\">
\t\t\t\t\t<img src=\"assets/img/logo/loder.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Preloader Start -->

\t<main>
\t\t<h1 class=\"text-center my-5\">Articles récents</h1>
\t\t<!--? Blog Area Start-->
\t\t<div id=\"articles-list\">
\t\t\t";
        // line 24
        $this->loadTemplate("article/list.html.twig", "blog/blog.html.twig", 24)->display(twig_array_merge($context, ["articles" => (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()), "leftCol" => 5, "rightCol" => 7]));
        // line 25
        echo "\t\t</div>
\t\t";
        // line 26
        $this->loadTemplate("widget/categories.html.twig", "blog/blog.html.twig", 26)->display($context);
        // line 27
        echo "
\t\t<section class=\"blog_area section-padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"blog_left_sidebar\">
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<nav class=\"blog-pagination justify-content-center d-flex\">
\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-left\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"blog_right_sidebar\">
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget search_widget\">
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder='Search Keyword' onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btns\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget post_category_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Category</h4>
\t\t\t\t\t\t\t\t<ul class=\"list cat-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Resaurant food</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(37)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Travel news</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(10)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Modern technology</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(03)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Product</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(11)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Inspiration</p>
\t\t\t\t\t\t\t\t\t\t\t<p>21</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Health Care (21)</p>
\t\t\t\t\t\t\t\t\t\t\t<p>09</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget popular_post_widget\">
\t\t\t\t\t\t\t\t<h3 class=\"widget_title\" style=\"color: #2d2d2d;\">Recent Post</h3>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_1.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">From life was you fish...</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>January 12, 2019</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_2.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">The Amazing Hubble</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>02 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_3.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">Astronomy Or Astrology</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>03 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_4.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">Asteroids telescope</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>01 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget tag_cloud_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Tag Clouds</h4>
\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">project</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">love</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">technology</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">travel</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">restaurant</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">life style</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">illustration</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget instagram_feeds\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Instagram Feeds</h4>
\t\t\t\t\t\t\t\t<ul class=\"instagram_row flex-wrap\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_6.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_7.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_8.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_9.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_10.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget newsletter_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Blog Area End -->
\t\t<!--? About Law Start-->
\t\t<section class=\"about-low-area mt-60\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"about-cap-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-5  col-lg-6 col-md-10 offset-xl-1\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"about-caption mb-50\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-35\">
\t\t\t\t\t\t\t\t\t<h2>100% satisfaction guaranteed.</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Almost before we knew it, we had left the ground</p>
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"border-btn\">WeHealth</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t<!-- about-img -->
\t\t\t\t\t\t\t<div class=\"about-img\">
\t\t\t\t\t\t\t\t<div class=\"about-font-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/about2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  113 => 26,  110 => 25,  108 => 24,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog -Acceuil
{% endblock %}

{% block body %}
\t<!--? Preloader Start -->
\t<div id=\"preloader-active\">
\t\t<div class=\"preloader d-flex align-items-center justify-content-center\">
\t\t\t<div class=\"preloader-inner position-relative\">
\t\t\t\t<div class=\"preloader-circle\"></div>
\t\t\t\t<div class=\"preloader-img pere-text\">
\t\t\t\t\t<img src=\"assets/img/logo/loder.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Preloader Start -->

\t<main>
\t\t<h1 class=\"text-center my-5\">Articles récents</h1>
\t\t<!--? Blog Area Start-->
\t\t<div id=\"articles-list\">
\t\t\t{% include 'article/list.html.twig' with { articles: articles, leftCol: 5, rightCol: 7 } %}
\t\t</div>
\t\t{% include 'widget/categories.html.twig' %}

\t\t<section class=\"blog_area section-padding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"blog_left_sidebar\">
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_2.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_3.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_4.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"assets/img/blog/single_blog_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>15</h3>
\t\t\t\t\t\t\t\t\t\t<p>Jan</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>That dominion stars lights dominion divide years for fourth have don't stars is that
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                he earth it first without heaven in place seed it second morning saying.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTravel, Lifestyle</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t03 Comments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<nav class=\"blog-pagination justify-content-center d-flex\">
\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-left\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"blog_right_sidebar\">
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget search_widget\">
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder='Search Keyword' onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btns\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget post_category_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Category</h4>
\t\t\t\t\t\t\t\t<ul class=\"list cat-list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Resaurant food</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(37)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Travel news</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(10)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Modern technology</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(03)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Product</p>
\t\t\t\t\t\t\t\t\t\t\t<p>(11)</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Inspiration</p>
\t\t\t\t\t\t\t\t\t\t\t<p>21</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<p>Health Care (21)</p>
\t\t\t\t\t\t\t\t\t\t\t<p>09</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget popular_post_widget\">
\t\t\t\t\t\t\t\t<h3 class=\"widget_title\" style=\"color: #2d2d2d;\">Recent Post</h3>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_1.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">From life was you fish...</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>January 12, 2019</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_2.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">The Amazing Hubble</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>02 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_3.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">Astronomy Or Astrology</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>03 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media post_item\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/post/post_4.png\" alt=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"color: #2d2d2d;\">Asteroids telescope</h3>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p>01 Hours ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget tag_cloud_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Tag Clouds</h4>
\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">project</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">love</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">technology</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">travel</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">restaurant</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">life style</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">design</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">illustration</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget instagram_feeds\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Instagram Feeds</h4>
\t\t\t\t\t\t\t\t<ul class=\"instagram_row flex-wrap\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_5.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_6.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_7.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_8.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_9.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/post/post_10.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<aside class=\"single_sidebar_widget newsletter_widget\">
\t\t\t\t\t\t\t\t<h4 class=\"widget_title\" style=\"color: #2d2d2d;\">Newsletter</h4>
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Blog Area End -->
\t\t<!--? About Law Start-->
\t\t<section class=\"about-low-area mt-60\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"about-cap-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-5  col-lg-6 col-md-10 offset-xl-1\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"about-caption mb-50\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-35\">
\t\t\t\t\t\t\t\t\t<h2>100% satisfaction guaranteed.</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Almost before we knew it, we had left the ground</p>
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"border-btn\">WeHealth</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t\t<!-- about-img -->
\t\t\t\t\t\t\t<div class=\"about-img\">
\t\t\t\t\t\t\t\t<div class=\"about-font-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/about2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "blog/blog.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\blog\\blog.html.twig");
    }
}
