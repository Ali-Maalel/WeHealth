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

/* wehealth/index.html.twig */
class __TwigTemplate_4d9898ed777249a24eaf3ac7845b63ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wehealth/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wehealth/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wehealth/index.html.twig", 1);
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

        echo "Hello WehealthController!
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
        echo "\t<!-- ? Preloader Start -->
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
\t\t<!--? Slider Area Start-->
\t\t<div class=\"slider-area\">
\t\t\t<div
\t\t\t\tclass=\"slider-active dot-style\">

\t\t\t\t<!-- Slider Single -->
\t\t\t\t<div class=\"single-slider d-flex align-items-center slider-height\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-xl-7 col-lg-8 col-md-10 \">
\t\t\t\t\t\t\t\t<div class=\"hero-wrapper\">

\t\t\t\t\t\t\t\t\t<div class=\"hero__caption\">
\t\t\t\t\t\t\t\t\t\t<h1 data-animation=\"fadeInUp\" data-delay=\".3s\">Health is wealth  keep it healthy
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t<p data-animation=\"fadeInUp\" data-delay=\".6s\">Almost before we knew it, we<br>
\t\t\t\t\t\t\t\t\t\t\thad left the ground</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" data-animation=\"fadeInLeft\" data-delay=\".3s\">Take a Service</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Slider Area End -->
\t\t<!--? About-2 Area Start -->
\t\t<div class=\"about-area2 section-padding40\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-lg-7 col-md-12\">
\t\t\t\t\t\t<!-- about-img -->
\t\t\t\t\t\t<div class=\"about-img \">
\t\t\t\t\t\t\t<img src=\"assets/img/gallery/about.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"about-caption\">
\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t<div class=\"section-tittle mb-35\">
\t\t\t\t\t\t\t\t<h2>Create a healthy 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        life you love!</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"pera-top mb-40\">Almost before we knew it, we had left the ground</p>
\t\t\t\t\t\t\t<p class=\"pera-bottom mb-30\">Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        dignissim dolor, a pretium mi sem ut ipsum. Fusce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    fermentum. Pellentesque libero tortor, tincidunt et.</p>
\t\t\t\t\t\t\t<div class=\"icon-about\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/about1.svg\" alt=\"\" class=\" mr-20\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/about2.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- About-2 Area End -->
\t\t<section class=\"wantToWork-area section-bg3\" data-background=\"assets/img/gallery/section_bg01.png\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wants-wrapper w-padding2\">
\t\t\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t\t\t<div class=\"col-xl-7 col-lg-9 col-md-8\">
\t\t\t\t\t\t\t<div class=\"wantToWork-caption wantToWork-caption2\">
\t\t\t\t\t\t\t\t<h2>Happy mind
\t\t\t\t\t\t\t\t\t<br>healthy life</h2>
\t\t\t\t\t\t\t\t<p>Almost before we knew it, we<br>
\t\t\t\t\t\t\t\t\thad left the ground</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-4\">
\t\t\t\t\t\t\t<a href=\"services.html\" class=\"btn f-right sm-left\">Take a Service</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--? Services Area Start -->
\t\t<div class=\"service-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services1.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services2.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services3.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Services Area End -->
\t\t<!--? Testimonial Area Start -->
\t\t<section class=\"testimonial-area testimonial-padding fix\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t<div class=\" col-lg-9\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"about-caption\">
\t\t\t\t\t\t\t<!-- Testimonial Start -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"h1-testimonial-active dot-style\">
\t\t\t\t\t\t\t\t<!-- Single Testimonial -->
\t\t\t\t\t\t\t\t<div class=\"single-testimonial position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/quotes-sign.png\" alt=\"\" class=\"quotes-sign\">
\t\t\t\t\t\t\t\t\t\t<p>\"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- founder -->
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-founder d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/testimonial.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Robart Brown</span>
\t\t\t\t\t\t\t\t\t\t\t<p>Creative designer at Colorlib</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Single Testimonial -->
\t\t\t\t\t\t\t\t<div class=\"single-testimonial position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/quotes-sign.png\" alt=\"\" class=\"quotes-sign\">
\t\t\t\t\t\t\t\t\t\t<p>\"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- founder -->
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-founder d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/testimonial.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Robart Brown</span>
\t\t\t\t\t\t\t\t\t\t\t<p>Creative designer at Colorlib</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Testimonial End -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--? Testimonial Area End -->

\t\t<!--? Blog Area Start -->
\t\t<section class=\"home-blog-area section-padding30\">
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Section Tittle -->
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-9 col-sm-10\">
\t\t\t\t\t\t<div class=\"section-tittle text-center mb-100\">
\t\t\t\t\t\t\t<h2>Latest Blog</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Your daily meal plan</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Food is a great source of  medicine</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Everyday diet plan</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Blog Area End -->
\t\t<!--? About Law Start-->
\t\t<section class=\"about-low-area mt-30\">
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
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"border-btn\">Make an Appointment</a>
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
\t\t<!-- About Law End-->
\t</main>


\t<!-- Scroll Up -->
\t<div id=\"back-top\">
\t\t<a title=\"Go to Top\" href=\"#\">
\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "wehealth/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello WehealthController!
{% endblock %}

{% block body %}
\t<!-- ? Preloader Start -->
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
\t\t<!--? Slider Area Start-->
\t\t<div class=\"slider-area\">
\t\t\t<div
\t\t\t\tclass=\"slider-active dot-style\">

\t\t\t\t<!-- Slider Single -->
\t\t\t\t<div class=\"single-slider d-flex align-items-center slider-height\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<div class=\"col-xl-7 col-lg-8 col-md-10 \">
\t\t\t\t\t\t\t\t<div class=\"hero-wrapper\">

\t\t\t\t\t\t\t\t\t<div class=\"hero__caption\">
\t\t\t\t\t\t\t\t\t\t<h1 data-animation=\"fadeInUp\" data-delay=\".3s\">Health is wealth  keep it healthy
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t<p data-animation=\"fadeInUp\" data-delay=\".6s\">Almost before we knew it, we<br>
\t\t\t\t\t\t\t\t\t\t\thad left the ground</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\" data-animation=\"fadeInLeft\" data-delay=\".3s\">Take a Service</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Slider Area End -->
\t\t<!--? About-2 Area Start -->
\t\t<div class=\"about-area2 section-padding40\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-lg-7 col-md-12\">
\t\t\t\t\t\t<!-- about-img -->
\t\t\t\t\t\t<div class=\"about-img \">
\t\t\t\t\t\t\t<img src=\"assets/img/gallery/about.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5 col-md-12\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"about-caption\">
\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t<div class=\"section-tittle mb-35\">
\t\t\t\t\t\t\t\t<h2>Create a healthy 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        life you love!</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"pera-top mb-40\">Almost before we knew it, we had left the ground</p>
\t\t\t\t\t\t\t<p class=\"pera-bottom mb-30\">Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        dignissim dolor, a pretium mi sem ut ipsum. Fusce
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    fermentum. Pellentesque libero tortor, tincidunt et.</p>
\t\t\t\t\t\t\t<div class=\"icon-about\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/about1.svg\" alt=\"\" class=\" mr-20\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/about2.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- About-2 Area End -->
\t\t<section class=\"wantToWork-area section-bg3\" data-background=\"assets/img/gallery/section_bg01.png\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"wants-wrapper w-padding2\">
\t\t\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t\t\t<div class=\"col-xl-7 col-lg-9 col-md-8\">
\t\t\t\t\t\t\t<div class=\"wantToWork-caption wantToWork-caption2\">
\t\t\t\t\t\t\t\t<h2>Happy mind
\t\t\t\t\t\t\t\t\t<br>healthy life</h2>
\t\t\t\t\t\t\t\t<p>Almost before we knew it, we<br>
\t\t\t\t\t\t\t\t\thad left the ground</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-3 col-md-4\">
\t\t\t\t\t\t\t<a href=\"services.html\" class=\"btn f-right sm-left\">Take a Service</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--? Services Area Start -->
\t\t<div class=\"service-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services1.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services2.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t<div class=\"single-cat text-center mb-50\">
\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/services3.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cat-cap\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"services.html\">Physical Activity</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae  posuere iaculis, arcu nisl dignissim dolor, a pretium mi  sem ut ipsum.</p>
\t\t\t\t\t\t\t\t<a href=\"services.html\" class=\"plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Services Area End -->
\t\t<!--? Testimonial Area Start -->
\t\t<section class=\"testimonial-area testimonial-padding fix\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t<div class=\" col-lg-9\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"about-caption\">
\t\t\t\t\t\t\t<!-- Testimonial Start -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"h1-testimonial-active dot-style\">
\t\t\t\t\t\t\t\t<!-- Single Testimonial -->
\t\t\t\t\t\t\t\t<div class=\"single-testimonial position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/quotes-sign.png\" alt=\"\" class=\"quotes-sign\">
\t\t\t\t\t\t\t\t\t\t<p>\"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- founder -->
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-founder d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/testimonial.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Robart Brown</span>
\t\t\t\t\t\t\t\t\t\t\t<p>Creative designer at Colorlib</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Single Testimonial -->
\t\t\t\t\t\t\t\t<div class=\"single-testimonial position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-caption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/quotes-sign.png\" alt=\"\" class=\"quotes-sign\">
\t\t\t\t\t\t\t\t\t\t<p>\"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- founder -->
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-founder d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icon/testimonial.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"founder-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Robart Brown</span>
\t\t\t\t\t\t\t\t\t\t\t<p>Creative designer at Colorlib</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Testimonial End -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!--? Testimonial Area End -->

\t\t<!--? Blog Area Start -->
\t\t<section class=\"home-blog-area section-padding30\">
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Section Tittle -->
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-9 col-sm-10\">
\t\t\t\t\t\t<div class=\"section-tittle text-center mb-100\">
\t\t\t\t\t\t\t<h2>Latest Blog</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog1.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Your daily meal plan</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog2.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Food is a great source of  medicine</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"home-blog-single mb-40\">
\t\t\t\t\t\t\t<div class=\"blog-img-cap\">
\t\t\t\t\t\t\t\t<div class=\"blog-img\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/gallery/blog3.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"blog-cap\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<a href=\"blog_details.html\">Everyday diet plan</a>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<P>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            sem ut ipsum.</P>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Blog Area End -->
\t\t<!--? About Law Start-->
\t\t<section class=\"about-low-area mt-30\">
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
\t\t\t\t\t\t\t\t<a href=\"about.html\" class=\"border-btn\">Make an Appointment</a>
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
\t\t<!-- About Law End-->
\t</main>


\t<!-- Scroll Up -->
\t<div id=\"back-top\">
\t\t<a title=\"Go to Top\" href=\"#\">
\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t</a>
\t</div>
{% endblock %}
", "wehealth/index.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\wehealth\\index.html.twig");
    }
}
