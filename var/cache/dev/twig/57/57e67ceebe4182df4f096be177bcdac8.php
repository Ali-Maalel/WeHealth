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

/* evennementfront/index.html.twig */
class __TwigTemplate_b045de17f7192c4acc96bc23ffe72e9b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennementfront/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennementfront/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evennementfront/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"./style.css\">
    <title>Events Ticket Card</title>
</head>
<body>
     
    <div class=\"container\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new RuntimeError('Variable "evennements" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 19
            echo "        <div class=\"item-container\">
            <div class=\"img-container\">
                <img src=\"./images/img1.jpg\" alt=\"Event image\">
            </div>
            <div class=\"body-container\">
                <div class=\"overlay\"></div>

                <div class=\"event-info\">
                    <p class=\"title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "titre", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    <div class=\"separator\"></div>
                    <p class=\"info\">Bellmore, NY</p>
                    <p class=\"price\">Free</p>

                    <div class=\"additional-info\">
                        <p class=\"info\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            Grand Central Terminal
                        </p>
                        <p class=\"info\">
                            <i class=\"far fa-calendar-alt\"></i>
                           ";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["evennement"], "date", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "date", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                        </p>

                        <p class=\"info description\">
                           ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "description", [], "any", false, false, false, 43), "html", null, true);
            echo "<span>more...</span>
                        </p>
                    </div>
                </div>
                <button class=\"action\">Participer</button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        
       
        </div>

    
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evennementfront/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  119 => 43,  112 => 39,  97 => 27,  87 => 19,  83 => 18,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"./style.css\">
    <title>Events Ticket Card</title>
</head>
<body>
     
    <div class=\"container\">
    {% for evennement in evennements %}
        <div class=\"item-container\">
            <div class=\"img-container\">
                <img src=\"./images/img1.jpg\" alt=\"Event image\">
            </div>
            <div class=\"body-container\">
                <div class=\"overlay\"></div>

                <div class=\"event-info\">
                    <p class=\"title\">{{evennement.titre}}</p>
                    <div class=\"separator\"></div>
                    <p class=\"info\">Bellmore, NY</p>
                    <p class=\"price\">Free</p>

                    <div class=\"additional-info\">
                        <p class=\"info\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            Grand Central Terminal
                        </p>
                        <p class=\"info\">
                            <i class=\"far fa-calendar-alt\"></i>
                           {{ evennement.date ? evennement.date|date('Y-m-d') : '' }}
                        </p>

                        <p class=\"info description\">
                           {{evennement.description}}<span>more...</span>
                        </p>
                    </div>
                </div>
                <button class=\"action\">Participer</button>
            </div>
        </div>
    {% endfor %}
        
       
        </div>

    
</body>
</html>
{% endblock %}
", "evennementfront/index.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\evennementfront\\index.html.twig");
    }
}
