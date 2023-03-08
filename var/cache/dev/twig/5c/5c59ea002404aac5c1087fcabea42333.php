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

/* article front/show.html.twig */
class __TwigTemplate_af8c9fe33c55b5a15c33f706f8f9cce1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article front/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article front/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article front/show.html.twig", 1);
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

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
\t\t<h1 class=\"article-title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

\t\t<hr>

\t\t<div class=\"article-content\">
\t\t\t";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "contenu", [], "any", false, false, false, 14);
        echo "
\t\t</div>
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_PdfArticle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Download PDF</a>
\t\t<br/>
\t\t";
        // line 18
        if ((isset($context["liked"]) || array_key_exists("liked", $context) ? $context["liked"] : (function () { throw new RuntimeError('Variable "liked" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_dislike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/dislike.png"), "html", null, true);
            echo " \"/>
\t\t\t</a>
\t\t";
        } else {
            // line 23
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/like.png"), "html", null, true);
            echo " \"/>
\t\t\t</a>
\t\t";
        }
        // line 27
        echo "\t\t<h2 class=\"comments-title mt-5\">
\t\t\t<span id=\"comment-count\">";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "comments", [], "any", false, false, false, 28)), "html", null, true);
        echo "</span>
\t\t\tcommentaire(s)</h2>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Utilisateur</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 38, $this->source); })()), "comments", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "\t\t\t\t\t<tr style=\"background-color: '#f2f2f2', '#fff' \">
\t\t\t\t\t\t<td style=\"padding: 8px; font-weight: bold; margin-bottom: 5px;\">
\t\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding: 8px;\">
\t\t\t\t\t\t\t<p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<span>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t<!-- Ajoutez cette balise de fermeture pour la boucle \"for\" -->
\t\t\t</tbody>
\t\t</table>
\t\t<hr>
\t\t<div class=\"comment-area mb-5\">
\t\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 55, $this->source); })()), 'form', ["attr" => ["class" => "comment-form"]]);
        echo "
\t\t\t\t";
        // line 56
        if ((( !(null === (isset($context["cleanedComment"]) || array_key_exists("cleanedComment", $context) ? $context["cleanedComment"] : (function () { throw new RuntimeError('Variable "cleanedComment" does not exist.', 56, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["cleanedComment"] ?? null), "dirty", [], "any", true, true, false, 56)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["cleanedComment"]) || array_key_exists("cleanedComment", $context) ? $context["cleanedComment"] : (function () { throw new RuntimeError('Variable "cleanedComment" does not exist.', 56, $this->source); })()), "dirty", [], "any", false, false, false, 56)))) {
            // line 57
            echo "\t\t\t\t\t<div class=\"alert alert-danger mt-3\">
\t\t\t\t\t\tLe commentaire contient les mots inappropriés suivants :
\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["cleanedComment"]) || array_key_exists("cleanedComment", $context) ? $context["cleanedComment"] : (function () { throw new RuntimeError('Variable "cleanedComment" does not exist.', 59, $this->source); })()), "dirty", [], "any", false, false, false, 59), ", "), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 62
        echo "\t\t\t</div>


\t\t</div>

\t</div>


</div>


<hr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article front/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 62,  202 => 59,  198 => 57,  196 => 56,  192 => 55,  185 => 50,  175 => 46,  171 => 45,  165 => 42,  161 => 41,  157 => 39,  153 => 38,  140 => 28,  137 => 27,  131 => 24,  126 => 23,  120 => 20,  115 => 19,  113 => 18,  108 => 16,  103 => 14,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{article.titre}}
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<h1 class=\"article-title\">{{ article.titre }}</h1>

\t\t<hr>

\t\t<div class=\"article-content\">
\t\t\t{{ article.contenu|raw }}
\t\t</div>
\t\t<a href=\"{{ path('app_PdfArticle', { 'id': article.id }) }}\" class=\"btn btn-primary\">Download PDF</a>
\t\t<br/>
\t\t{% if liked %}
\t\t\t<a href=\"{{ path('article_dislike', { 'id': article.id }) }}\">
\t\t\t\t<img src=\"{{ asset( \"assets/img/icon/dislike.png\")}} \"/>
\t\t\t</a>
\t\t{% else %}
\t\t\t<a href=\"{{ path('article_like', { 'id': article.id }) }}\">
\t\t\t\t<img src=\"{{ asset( \"assets/img/icon/like.png\")}} \"/>
\t\t\t</a>
\t\t{% endif %}
\t\t<h2 class=\"comments-title mt-5\">
\t\t\t<span id=\"comment-count\">{{ article.comments|length }}</span>
\t\t\tcommentaire(s)</h2>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Utilisateur</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for comment in article.comments %}
\t\t\t\t\t<tr style=\"background-color: '#f2f2f2', '#fff' \">
\t\t\t\t\t\t<td style=\"padding: 8px; font-weight: bold; margin-bottom: 5px;\">
\t\t\t\t\t\t\t{{comment.user.nom}}
\t\t\t\t\t\t\t{{comment.user.prenom}}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding: 8px;\">
\t\t\t\t\t\t\t<p>{{comment.contenu}}</p>
\t\t\t\t\t\t\t<span>{{ comment.createdAt ? comment.createdAt|date('Y-m-d') : '' }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t<!-- Ajoutez cette balise de fermeture pour la boucle \"for\" -->
\t\t\t</tbody>
\t\t</table>
\t\t<hr>
\t\t<div class=\"comment-area mb-5\">
\t\t\t{{ form(commentForm, { attr: { class: 'comment-form' } }) }}
\t\t\t\t{% if cleanedComment is not null and cleanedComment.dirty is defined and cleanedComment.dirty is not empty %}
\t\t\t\t\t<div class=\"alert alert-danger mt-3\">
\t\t\t\t\t\tLe commentaire contient les mots inappropriés suivants :
\t\t\t\t\t\t{{ cleanedComment.dirty|join(', ') }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>


\t\t</div>

\t</div>


</div>


<hr>{% endblock %}
", "article front/show.html.twig", "C:\\Users\\yasmi\\Pidev WeHealth\\WeHealth\\templates\\Article front\\show.html.twig");
    }
}
