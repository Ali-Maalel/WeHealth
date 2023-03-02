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

/* utils/footer.html.twig */
class __TwigTemplate_cf8324a47497afc6ef73abe260e02b14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "\t<footer>
\t\t<div class=\"footer-wrappr section-bg3\" data-background=\"assets/img/gallery/footer-bg.png\">
\t\t\t<div class=\"footer-area footer-padding \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"single-footer-caption mb-50\">
\t\t\t\t\t\t\t\t<!-- logo -->
\t\t\t\t\t\t\t\t<div class=\"footer-logo mb-25\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo2_footer.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<d iv class=\"header-area\">
\t\t\t\t\t\t\t\t\t<div class=\"main-header main-header2\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"menu-main d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Main-menu -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-menu main-menu2\">
\t\t\t\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</d>
\t\t\t\t\t\t\t\t<!-- social -->
\t\t\t\t\t\t\t\t<div class=\"footer-social mt-50\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"https://bit.ly/sai4ull\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"single-footer-caption\">
\t\t\t\t\t\t\t\t<div class=\"footer-tittle mb-50\">
\t\t\t\t\t\t\t\t\t<h4>Subscribe newsletter</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Form -->
\t\t\t\t\t\t\t\t<div class=\"footer-form\">
\t\t\t\t\t\t\t\t\t<div id=\"mc_embed_signup\">
\t\t\t\t\t\t\t\t\t\t<form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"subscribe_form relative mail_part\" novalidate=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"EMAIL\" id=\"newsletter-form-email\" placeholder=\" Email Address \" class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your email'\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" id=\"newsletter-submit\" class=\"email_icon newsletter-submit button-contactForm\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-10 info\"></div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-tittle\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-pera\">
\t\t\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium misem ut ipsum.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer-bottom area -->
\t\t\t<div class=\"footer-bottom-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer-border\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-10 \">
\t\t\t\t\t\t\t\t<div class=\"footer-copy-right\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utils/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
\t<footer>
\t\t<div class=\"footer-wrappr section-bg3\" data-background=\"assets/img/gallery/footer-bg.png\">
\t\t\t<div class=\"footer-area footer-padding \">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"single-footer-caption mb-50\">
\t\t\t\t\t\t\t\t<!-- logo -->
\t\t\t\t\t\t\t\t<div class=\"footer-logo mb-25\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo2_footer.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<d iv class=\"header-area\">
\t\t\t\t\t\t\t\t\t<div class=\"main-header main-header2\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"menu-main d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Main-menu -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-menu main-menu2\">
\t\t\t\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</d>
\t\t\t\t\t\t\t\t<!-- social -->
\t\t\t\t\t\t\t\t<div class=\"footer-social mt-50\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"https://bit.ly/sai4ull\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"single-footer-caption\">
\t\t\t\t\t\t\t\t<div class=\"footer-tittle mb-50\">
\t\t\t\t\t\t\t\t\t<h4>Subscribe newsletter</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Form -->
\t\t\t\t\t\t\t\t<div class=\"footer-form\">
\t\t\t\t\t\t\t\t\t<div id=\"mc_embed_signup\">
\t\t\t\t\t\t\t\t\t\t<form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"subscribe_form relative mail_part\" novalidate=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"EMAIL\" id=\"newsletter-form-email\" placeholder=\" Email Address \" class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter your email'\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" id=\"newsletter-submit\" class=\"email_icon newsletter-submit button-contactForm\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-10 info\"></div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-tittle\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-pera\">
\t\t\t\t\t\t\t\t\t\t<p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium misem ut ipsum.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer-bottom area -->
\t\t\t<div class=\"footer-bottom-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer-border\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-10 \">
\t\t\t\t\t\t\t\t<div class=\"footer-copy-right\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
{% endblock %}
", "utils/footer.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\utils\\footer.html.twig");
    }
}
