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

/* adminbase.html.twig */
class __TwigTemplate_bb74219947e4ee2f5ba12976a6c4cec3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'top_menu' => [$this, 'block_top_menu'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'script_sidebar' => [$this, 'block_script_sidebar'],
            'content' => [$this, 'block_content'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('top_menu', $context, $blocks);
        // line 29
        $this->displayBlock('sidebar', $context, $blocks);
        // line 83
        $this->displayBlock('script_sidebar', $context, $blocks);
        // line 97
        $this->displayBlock('content', $context, $blocks);
        // line 100
        $this->displayBlock('page', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_top_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_menu"));

        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
            <li><a class=\"btn btn-theme04 logout\" \">Deconnexion</a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a  class=\"logout\">Créer un patient </a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a  class=\"logout\">Créer un Docteur </a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a \" class=\"logout\">Créer un Laboratoire </a></li>
        </ul>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/zabuto_calendar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/lib/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "
    <li class=\"sub-menu\">
        <a id=\"index\">
            <i class=\"fa fa-dashboard\"></i>
            <span>Acceuil</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-desktop\"></i>
            <span>Patients</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-cogs\"></i>
            <span>Laboratoires</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a \">
            <i class=\"fa fa-book\"></i>
            <span>Docteurs</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-cogs\"></i>
            <span>Specialités</span>
        </a>
    </li>
    <li class=\"sub-menu\">
       
            <i class=\"fa fa-desktop\"></i>
            <span>Services</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        
            <i class=\"fa fa-book\"></i>
            <span>Medicaments</span>
        </a>
    </li>
    <li class=\"sub-menu\">
       
            <i class=\"fa fa-address-book\"></i>
            <span>Maladies</span>
        </a>
    </li>

    </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_script_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_sidebar"));

        // line 84
        echo "    <script>
        var Ids = [\"index\", \"rendezvous\", \"rech\", \"PoseQuest\", \"MesQuest\", \"edit\"];
        Ids.forEach(myFunction)

        function myFunction(item, index) {
            if (item == '";
        // line 89
        $this->displayBlock("page", $context, $blocks);
        echo "') {
                document.getElementById(item).classList.add(\"active\");
            } else {
                document.getElementById(item).classList.remove(\"active\");
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 98
        echo "    ";
        $this->displayBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  288 => 100,  275 => 98,  265 => 97,  247 => 89,  240 => 84,  230 => 83,  168 => 30,  158 => 29,  146 => 11,  142 => 10,  138 => 9,  134 => 8,  130 => 7,  126 => 6,  122 => 5,  117 => 4,  107 => 3,  82 => 13,  80 => 3,  70 => 2,  60 => 100,  58 => 97,  56 => 83,  54 => 29,  52 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block top_menu %}
{% block stylesheets %}
<link href=\"{{ asset('admin/css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/css/zabuto_calendar.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/lib/gritter/css/jquery.gritter.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('admin/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">
    <script src=\"{{ asset('admin/lib/chart-master/Chart.js') }}\"></script>
    {% endblock %}
    <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
            <li><a class=\"btn btn-theme04 logout\" \">Deconnexion</a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a  class=\"logout\">Créer un patient </a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a  class=\"logout\">Créer un Docteur </a></li>
        </ul>
        <ul class=\"nav pull-right top-menu\">
            <li><a \" class=\"logout\">Créer un Laboratoire </a></li>
        </ul>

    </div>
{% endblock %}
{% block sidebar %}

    <li class=\"sub-menu\">
        <a id=\"index\">
            <i class=\"fa fa-dashboard\"></i>
            <span>Acceuil</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-desktop\"></i>
            <span>Patients</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-cogs\"></i>
            <span>Laboratoires</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a \">
            <i class=\"fa fa-book\"></i>
            <span>Docteurs</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        <a >
            <i class=\"fa fa-cogs\"></i>
            <span>Specialités</span>
        </a>
    </li>
    <li class=\"sub-menu\">
       
            <i class=\"fa fa-desktop\"></i>
            <span>Services</span>
        </a>
    </li>
    <li class=\"sub-menu\">
        
            <i class=\"fa fa-book\"></i>
            <span>Medicaments</span>
        </a>
    </li>
    <li class=\"sub-menu\">
       
            <i class=\"fa fa-address-book\"></i>
            <span>Maladies</span>
        </a>
    </li>

    </ul>
    </div>
{% endblock %}
{% block script_sidebar %}
    <script>
        var Ids = [\"index\", \"rendezvous\", \"rech\", \"PoseQuest\", \"MesQuest\", \"edit\"];
        Ids.forEach(myFunction)

        function myFunction(item, index) {
            if (item == '{{ block('page') }}') {
                document.getElementById(item).classList.add(\"active\");
            } else {
                document.getElementById(item).classList.remove(\"active\");
            }
        }
    </script>
{% endblock %}
{% block content %}
    {{ block('content') }}
{% endblock %}
{% block page %}
{% endblock %}", "adminbase.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\adminbase.html.twig");
    }
}
