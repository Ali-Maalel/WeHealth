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

/* facture/facture.html.twig */
class __TwigTemplate_41acf217d5a304d3e09d15cd270d2d00 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/facture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/facture.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1> `</h1>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<section class=\"cart-section spad\">
  <div class=\"container\">
    <main class=\"product-container\">
      <div class=\"container\">
        <div class=\"row gutters\">
          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
            <div class=\"card\">
              <div class=\"card-body p-0\">
                <div class=\"invoice-container\" style=\"width: 1100px;\">
                  <div class=\"invoice-header\">
                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"custom-actions-btns mb-5\">
                          <a
                            href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_facture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\"
                            class=\"btn btn-primary\"
                          >
                            <i class=\"fas fa-download\"></i> Exporter facture
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                        <span class=\"invoice-logo\"> WeHealth </span>
                      </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class=\"row gutters\">
                      ";
        // line 52
        echo "                    </div>
                    <!-- Row end -->
                  </div>

                  <div class=\"invoice-body\">
                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"table-responsive\">
                          <table class=\"table custom-table m-0\">
                            <thead>
                              <tr>
                                <th style=\"font-size: 20px;\">Facture</th>
                                <th style=\"font-size: 20px;\">Date</th>
                                <th style=\"font-size: 20px;\">Prix payé</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style=\"font-size: 20px;\">
                                  Num. ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 72, $this->source); })()), "num", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                  <p class=\"m-0 text-muted\">
                                  Nom de l'evenement:
                                  ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 75, $this->source); })()), "event", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 76
            echo "                                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 76) == twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76))) {
                // line 77
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 77), "html", null, true);
                echo "
                                    ";
            }
            // line 79
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                  </p>
                                </td>
                                <td style=\"font-size: 20px;\">";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 82, $this->source); })()), "createdAt", [], "any", false, false, false, 82), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                                <td style=\"font-size: 20px;\">
                                  ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 84, $this->source); })()), "price", [], "any", false, false, false, 84), "html", null, true);
        echo " TND
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->
                  </div>

                  <div class=\"invoice-footer\">Thank you for participating in this event. We can't wait to see you within us.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style type=\"text/css\">
        body {
          margin: 0;
          padding: 0;
          font: 400 0.875rem \"Open Sans\", sans-serif;
          color: #000000;
          background: #ffffff;
          position: relative;
          height: 100%;
        }
        .invoice-container {
          padding: 1rem;
        }
        .invoice-container .invoice-header .invoice-logo {
          margin: 0.8rem 0 0 0;
          display: inline-block;
          font-size: 1.6rem;
          font-weight: 700;
          color: #000000;
        }
        .invoice-container .invoice-header .invoice-logo img {
          max-width: 130px;
        }
        .invoice-container .invoice-header address {
          font-size: 0.8rem;
          color: #8a99b5;
          margin: 0;
        }
        .invoice-container .invoice-details {
          margin: 1rem 0 0 0;
          padding: 1rem;
          line-height: 180%;
          background: #1a233a;
        }
        .invoice-container .invoice-details .invoice-num {
          text-align: right;
          font-size: 0.8rem;
        }
        .invoice-container .invoice-body {
          padding: 1rem 0 0 0;
        }
        .invoice-container .invoice-footer {
          text-align: center;
          font-size: 1.7rem;
          margin: 5px 0 0 0;
        }

        .invoice-status {
          text-align: center;
          padding: 1rem;
          background: #272e48;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
          margin-bottom: 1rem;
        }
        .invoice-status h2.status {
          margin: 0 0 0.8rem 0;
        }
        .invoice-status h5.status-title {
          margin: 0 0 0.8rem 0;
          color: #8a99b5;
        }
        .invoice-status p.status-type {
          margin: 0.5rem 0 0 0;
          padding: 0;
          line-height: 150%;
        }
        .invoice-status i {
          font-size: 1.5rem;
          margin: 0 0 1rem 0;
          display: inline-block;
          padding: 1rem;
          background: #1a233a;
          -webkit-border-radius: 50px;
          -moz-border-radius: 50px;
          border-radius: 50px;
        }
        .invoice-status .badge {
          text-transform: uppercase;
        }

        @media (max-width: 767px) {
          .invoice-container {
            padding: 1rem;
          }
        }

        .card {
          background: #f0f0f0;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
          border: 0;
          margin-bottom: 1rem;
        }

        .custom-table {
          border: 1px solid #2b3958;
        }
        .custom-table thead {
          background: #f0f0f0;
        }
        .custom-table thead th {
          border: 0;
          color: #000000;
        }
        .custom-table > tbody tr:hover {
          background: #f0f0f0;
        }
        .custom-table > tbody tr:nth-of-type(even) {
          background-color: #1a243a;
        }
        .custom-table > tbody td {
          border: 1px solid #2e3d5f;
        }

        .table {
          background: #f0f0f0;
          color: #000000;
          font-size: 0.75rem;
        }
        .text-success {
          color: #c0d64a !important;
        }
        .custom-actions-btns {
          margin: auto;
          display: flex;
          justify-content: flex-end;
        }
        .custom-actions-btns .btn {
          margin: 0.3rem 0 0.3rem 0.3rem;
        }
      </style>
    </main>
  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 84,  162 => 82,  158 => 80,  152 => 79,  146 => 77,  143 => 76,  139 => 75,  133 => 72,  111 => 52,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block body %}
<h1> `</h1>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<section class=\"cart-section spad\">
  <div class=\"container\">
    <main class=\"product-container\">
      <div class=\"container\">
        <div class=\"row gutters\">
          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
            <div class=\"card\">
              <div class=\"card-body p-0\">
                <div class=\"invoice-container\" style=\"width: 1100px;\">
                  <div class=\"invoice-header\">
                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"custom-actions-btns mb-5\">
                          <a
                            href=\"{{ path('print_facture', {'id': facture.id}) }}\"
                            class=\"btn btn-primary\"
                          >
                            <i class=\"fas fa-download\"></i> Exporter facture
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                        <span class=\"invoice-logo\"> WeHealth </span>
                      </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class=\"row gutters\">
                      {#
                      <div class=\"col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12\">
                        <div class=\"invoice-details\">
                          <div class=\"invoice-num\">
                            <div>Invoice - #009</div>
                            <div>January 10th 2020</div>
                          </div>
                        </div>
                      </div>
                      #}
                    </div>
                    <!-- Row end -->
                  </div>

                  <div class=\"invoice-body\">
                    <!-- Row start -->
                    <div class=\"row gutters\">
                      <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div class=\"table-responsive\">
                          <table class=\"table custom-table m-0\">
                            <thead>
                              <tr>
                                <th style=\"font-size: 20px;\">Facture</th>
                                <th style=\"font-size: 20px;\">Date</th>
                                <th style=\"font-size: 20px;\">Prix payé</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style=\"font-size: 20px;\">
                                  Num. {{ facture.num }}
                                  <p class=\"m-0 text-muted\">
                                  Nom de l'evenement:
                                  {% for e in facture.event %}
                                  {% if e.id == event.id %}
                                    {{ e.titre }}
                                    {% endif %}
                                    {% endfor %}
                                  </p>
                                </td>
                                <td style=\"font-size: 20px;\">{{ facture.createdAt|date('Y-m-d H:i:s') }}</td>
                                <td style=\"font-size: 20px;\">
                                  {{ facture.price }} TND
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->
                  </div>

                  <div class=\"invoice-footer\">Thank you for participating in this event. We can't wait to see you within us.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style type=\"text/css\">
        body {
          margin: 0;
          padding: 0;
          font: 400 0.875rem \"Open Sans\", sans-serif;
          color: #000000;
          background: #ffffff;
          position: relative;
          height: 100%;
        }
        .invoice-container {
          padding: 1rem;
        }
        .invoice-container .invoice-header .invoice-logo {
          margin: 0.8rem 0 0 0;
          display: inline-block;
          font-size: 1.6rem;
          font-weight: 700;
          color: #000000;
        }
        .invoice-container .invoice-header .invoice-logo img {
          max-width: 130px;
        }
        .invoice-container .invoice-header address {
          font-size: 0.8rem;
          color: #8a99b5;
          margin: 0;
        }
        .invoice-container .invoice-details {
          margin: 1rem 0 0 0;
          padding: 1rem;
          line-height: 180%;
          background: #1a233a;
        }
        .invoice-container .invoice-details .invoice-num {
          text-align: right;
          font-size: 0.8rem;
        }
        .invoice-container .invoice-body {
          padding: 1rem 0 0 0;
        }
        .invoice-container .invoice-footer {
          text-align: center;
          font-size: 1.7rem;
          margin: 5px 0 0 0;
        }

        .invoice-status {
          text-align: center;
          padding: 1rem;
          background: #272e48;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
          margin-bottom: 1rem;
        }
        .invoice-status h2.status {
          margin: 0 0 0.8rem 0;
        }
        .invoice-status h5.status-title {
          margin: 0 0 0.8rem 0;
          color: #8a99b5;
        }
        .invoice-status p.status-type {
          margin: 0.5rem 0 0 0;
          padding: 0;
          line-height: 150%;
        }
        .invoice-status i {
          font-size: 1.5rem;
          margin: 0 0 1rem 0;
          display: inline-block;
          padding: 1rem;
          background: #1a233a;
          -webkit-border-radius: 50px;
          -moz-border-radius: 50px;
          border-radius: 50px;
        }
        .invoice-status .badge {
          text-transform: uppercase;
        }

        @media (max-width: 767px) {
          .invoice-container {
            padding: 1rem;
          }
        }

        .card {
          background: #f0f0f0;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
          border: 0;
          margin-bottom: 1rem;
        }

        .custom-table {
          border: 1px solid #2b3958;
        }
        .custom-table thead {
          background: #f0f0f0;
        }
        .custom-table thead th {
          border: 0;
          color: #000000;
        }
        .custom-table > tbody tr:hover {
          background: #f0f0f0;
        }
        .custom-table > tbody tr:nth-of-type(even) {
          background-color: #1a243a;
        }
        .custom-table > tbody td {
          border: 1px solid #2e3d5f;
        }

        .table {
          background: #f0f0f0;
          color: #000000;
          font-size: 0.75rem;
        }
        .text-success {
          color: #c0d64a !important;
        }
        .custom-actions-btns {
          margin: auto;
          display: flex;
          justify-content: flex-end;
        }
        .custom-actions-btns .btn {
          margin: 0.3rem 0 0.3rem 0.3rem;
        }
      </style>
    </main>
  </div>
</section>

{% endblock %}", "facture/facture.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\facture\\facture.html.twig");
    }
}
