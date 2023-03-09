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

/* evennementfront/myevents.html.twig */
class __TwigTemplate_cdd70daeb2e42b9285c599ba59e2ce58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennementfront/myevents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evennementfront/myevents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evennementfront/myevents.html.twig", 2);
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
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
</head>
<body>
     
   
";
        // line 19
        $context["btnAttr"] = ["class" => "my-button-class"];
        // line 20
        echo "<div>
 <h1 style=\"margin-left:550px;margin-top:50px;\">Mes évenements</h1>
</div>
   <div style=\"margin-top:50px;margin-left:500px;\">
   
        </div>
    <div class=\"container\">


";
        // line 37
        echo "
    ";
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evennements"]) || array_key_exists("evennements", $context) ? $context["evennements"] : (function () { throw new RuntimeError('Variable "evennements" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evennement"]) {
            // line 40
            echo "        <div class=\"item-container\">
            <div class=\"img-container\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evennement"], "image", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" alt=\"Event image\">
            </div>
            <div class=\"body-container\">
                <div class=\"overlay\"></div>

                <div class=\"event-info\">
                    <p class=\"title\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "titre", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                    <div class=\"separator\"></div>
                 
                    <p class=\"price\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>

                    <div class=\"additional-info\">
                       
                        <p class=\"info\">
                            <i class=\"far fa-calendar-alt\"></i>
                           ";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDebut", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "dateDebut", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                        </p>

                        <p  class=\"info description\">
                           ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evennement"], "description", [], "any", false, false, false, 61), "html", null, true);
            echo "
                        </p>
                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_showevent", ["id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" style=\"color: black;\">Show More</a>
                    </div>
                </div>
                ";
            // line 66
            if (twig_in_filter($context["evennement"], (isset($context["eventList"]) || array_key_exists("eventList", $context) ? $context["eventList"] : (function () { throw new RuntimeError('Variable "eventList" does not exist.', 66, $this->source); })()))) {
                // line 67
                echo "                <a href=\"\">  <button disabled class=\"action\">Payé ✅</button> </a>

                ";
            } else {
                // line 70
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_facture", ["id" => twig_get_attribute($this->env, $this->source, $context["evennement"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">  <button class=\"action\">Payer</button> </a>
                ";
            }
            // line 73
            echo "           </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evennement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    ";
        // line 77
        echo "        
       
        </div>

    
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
            });
        });
    </script>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evennementfront/myevents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 87,  192 => 86,  175 => 77,  173 => 76,  165 => 73,  159 => 70,  154 => 67,  152 => 66,  146 => 63,  141 => 61,  134 => 57,  125 => 51,  119 => 48,  110 => 42,  106 => 40,  101 => 39,  98 => 37,  87 => 20,  85 => 19,  69 => 5,  59 => 4,  36 => 2,);
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
    <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
</head>
<body>
     
   
{% set btnAttr = {'class': 'my-button-class'} %}
<div>
 <h1 style=\"margin-left:550px;margin-top:50px;\">Mes évenements</h1>
</div>
   <div style=\"margin-top:50px;margin-left:500px;\">
   
        </div>
    <div class=\"container\">


{# <form id=\"search-form\" action=\"{{ path('event_search') }}\" method=\"get\">
        <div class=\"form-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>

    <hr> #}

    {# <div id=\"search-results\"> #}
    {% for evennement in evennements %}
        <div class=\"item-container\">
            <div class=\"img-container\">
                <img src=\"{{ asset('uploads/' ~ evennement.image) }}\" alt=\"Event image\">
            </div>
            <div class=\"body-container\">
                <div class=\"overlay\"></div>

                <div class=\"event-info\">
                    <p class=\"title\">{{evennement.titre}}</p>
                    <div class=\"separator\"></div>
                 
                    <p class=\"price\">{{evennement.prix}}</p>

                    <div class=\"additional-info\">
                       
                        <p class=\"info\">
                            <i class=\"far fa-calendar-alt\"></i>
                           {{ evennement.dateDebut ? evennement.dateDebut|date('Y-m-d') : '' }}
                        </p>

                        <p  class=\"info description\">
                           {{evennement.description}}
                        </p>
                <a href=\"{{ path('app_evennement_showevent', {'id': evennement.id}) }}\" style=\"color: black;\">Show More</a>
                    </div>
                </div>
                {% if evennement in eventList %}
                <a href=\"\">  <button disabled class=\"action\">Payé ✅</button> </a>

                {% else %}
                <a href=\"{{ path('add_facture', {'id': evennement.id}) }}\">  <button class=\"action\">Payer</button> </a>
                {% endif %}
{# <button class=\"action\" {{ attribute(({'disabled': 'disabled', 'data-tooltip': 'Vous avez déjà participé.'})) }}>Participer</button>  #}
           </div>
        </div>
    {% endfor %}
    {# </div> #}
        
       
        </div>

    
</body>
</html>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
            });
        });
    </script>
    

{% endblock %}
", "evennementfront/myevents.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\evennementfront\\myevents.html.twig");
    }
}
