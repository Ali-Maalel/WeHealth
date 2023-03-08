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
class __TwigTemplate_f85bd2662e58fb32f572379bdf33db80 extends Template
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
\t\t<h1 class=\"text-center my-5\" style=\"font-weight: bold;  font-family: 'Montserrat', sans-serif; background: linear-gradient(45deg, #2196F3, #0D47A1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;\">
\t\t\t<i class=\"fas fa-newspaper\"></i>
\t\t\tArticles récents</h1>


\t\t<!--? Blog Area Start-->
\t\t<div id=\"articles-list\"></div>
\t</div>

\t<section class=\"blog_area section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 mb-5 mb-lg-0\" style=\"display: flex!important;\">
\t\t\t\t\t<div class=\"blog_left_sidebar\" style=\"margin: 0 10px;\">
\t\t\t\t\t\t";
        // line 35
        $context["leftCol"] = 5;
        // line 36
        echo "\t\t\t\t\t\t";
        $context["rightCol"] = 7;
        // line 37
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"/uploads/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", [], "any", false, false, false, 42), "nomFichier", [], "any", false, false, false, 42), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", [], "any", false, false, false, 42), "altText", [], "any", false, false, false, 42), "html", null, true);
                echo "\" loading=\"lazy\" width=\"350\" height=\"205\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 46), "d"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 47), "M"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 48
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 48)) > 0)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"blog_comment\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 49)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 55), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>";
            // line 57
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 57)), 0, 130) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 63)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 64)) > 1)) ? ("Comments") : ("Comment"));
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog_right_sidebar mt-auto\">
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
\t\t\t\t\t\t\t\t<h4 class=\"widget_title mb-4\" style=\"color: #2d2d2d;\">Catégories</h4>

\t\t\t\t\t\t\t\t<ul class=\"list cat-list\">
\t\t\t\t\t\t\t\t\t";
        // line 93
        $this->loadTemplate("widget/categories.html.twig", "blog/blog.html.twig", 93)->display($context);
        // line 94
        echo "\t\t\t\t\t\t\t\t</ul>
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
\t\t</div>
\t</section>


\t<nav class=\"blog-pagination justify-content-center d-flex\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
\t\t\t\t\t<i class=\"ti-angle-left\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t</li>
\t\t\t<li class=\"page-item active\">
\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Next\">
\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</div></div><div class=\"col-lg-4 float-right d-flex flex-column\"></div></div></section><!-- Blog Area End -->";
        
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
        return array (  235 => 94,  233 => 93,  208 => 70,  196 => 64,  192 => 63,  183 => 57,  178 => 55,  174 => 54,  169 => 51,  163 => 49,  161 => 48,  157 => 47,  153 => 46,  148 => 45,  140 => 42,  135 => 41,  133 => 40,  129 => 38,  124 => 37,  121 => 36,  119 => 35,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t<h1 class=\"text-center my-5\" style=\"font-weight: bold;  font-family: 'Montserrat', sans-serif; background: linear-gradient(45deg, #2196F3, #0D47A1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;\">
\t\t\t<i class=\"fas fa-newspaper\"></i>
\t\t\tArticles récents</h1>


\t\t<!--? Blog Area Start-->
\t\t<div id=\"articles-list\"></div>
\t</div>

\t<section class=\"blog_area section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 mb-5 mb-lg-0\" style=\"display: flex!important;\">
\t\t\t\t\t<div class=\"blog_left_sidebar\" style=\"margin: 0 10px;\">
\t\t\t\t\t\t{% set leftCol = 5 %}
\t\t\t\t\t\t{% set rightCol = 7 %}
\t\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t\t<article class=\"blog_item\">
\t\t\t\t\t\t\t\t<div class=\"blog_item_img\">
\t\t\t\t\t\t\t\t\t{% if article.featuredImage %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('article_show', {id: article.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"card-img rounded-0\" src=\"/uploads/{{ article.featuredImage.nomFichier }}\" alt=\"{{ article.featuredImage.altText }}\" loading=\"lazy\" width=\"350\" height=\"205\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('article_show', {id: article.id}) }}\" class=\"blog_item_date\">
\t\t\t\t\t\t\t\t\t\t<h3>{{ article.createdAt|date('d') }}</h3>
\t\t\t\t\t\t\t\t\t\t<p>{{ article.createdAt|date('M') }}</p>
\t\t\t\t\t\t\t\t\t\t{% if article.comments|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"blog_comment\">{{ article.comments|length }}</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog_details\">
\t\t\t\t\t\t\t\t\t<a class=\"d-inline-block\" href=\"{{ path('article_show', {id: article.id}) }}\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"blog-head\" style=\"color: #2d2d2d;\">{{ article.titre }}</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>{{ article.contenu|striptags|slice(0, 130) ~ '...' }}</p>
\t\t\t\t\t\t\t\t\t<ul class=\"blog-info-link\">

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.comments|length }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ article.comments|length > 1 ? 'Comments' : 'Comment' }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog_right_sidebar mt-auto\">
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
\t\t\t\t\t\t\t\t<h4 class=\"widget_title mb-4\" style=\"color: #2d2d2d;\">Catégories</h4>

\t\t\t\t\t\t\t\t<ul class=\"list cat-list\">
\t\t\t\t\t\t\t\t\t{% include 'widget/categories.html.twig' %}
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
\t\t</div>
\t</section>


\t<nav class=\"blog-pagination justify-content-center d-flex\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
\t\t\t\t\t<i class=\"ti-angle-left\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t</li>
\t\t\t<li class=\"page-item active\">
\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t</li>
\t\t\t<li class=\"page-item\">
\t\t\t\t<a href=\"#\" class=\"page-link\" aria-label=\"Next\">
\t\t\t\t\t<i class=\"ti-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</div></div><div class=\"col-lg-4 float-right d-flex flex-column\"></div></div></section><!-- Blog Area End -->{% endblock %}
", "blog/blog.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\blog\\blog.html.twig");
    }
}
