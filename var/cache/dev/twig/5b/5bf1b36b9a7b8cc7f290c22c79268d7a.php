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

/* baseadmin.html.twig */
class __TwigTemplate_42a4a492c2c8c938b3db714109d79e7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
    <meta name=\"description\" content=\"Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.\">
    <!-- Twitter meta-->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:site\" content=\"@pratikborsadiya\">
    <meta property=\"twitter:creator\" content=\"@pratikborsadiya\">
    <!-- Open Graph Meta-->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"Vali Admin\">
    <meta property=\"og:title\" content=\"Vali - Free Bootstrap 4 admin theme\">
    <meta property=\"og:url\" content=\"http://pratikborsadiya.in/blog/vali-admin\">
    <meta property=\"og:image\" content=\"http://pratikborsadiya.in/blog/vali-admin/hero-social.png\">
    <meta property=\"og:description\" content=\"Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.\">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
  
\t\t<title>
\t\t\t";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        // line 28
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 32
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
\t\t";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "\t</head>
\t<body>
\t\t
\t\t<body class=\"app sidebar-mini\">
    <!-- Navbar-->
    <header class=\"app-header\"><a class=\"app-header__logo\" href=\"index.html\">WeHealth</a>
      <!-- Sidebar toggle button--><a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
      <!-- Navbar Right Menu-->
      <ul class=\"app-nav\">
        <li class=\"app-search\">
          <input class=\"app-search__input\" type=\"search\" placeholder=\"Search\">
          <button class=\"app-search__button\"><i class=\"fa fa-search\"></i></button>
        </li>
        <!--Notification Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Show notifications\"><i class=\"fa fa-bell-o fa-lg\"></i></a>
          <ul class=\"app-notification dropdown-menu dropdown-menu-right\">
            <li class=\"app-notification__title\">You have 4 new notifications.</li>
            <div class=\"app-notification__content\">
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-primary\"></i><i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Lisa sent you a mail</p>
                    <p class=\"app-notification__meta\">2 min ago</p>
                  </div></a></li>
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-danger\"></i><i class=\"fa fa-hdd-o fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Mail server not working</p>
                    <p class=\"app-notification__meta\">5 min ago</p>
                  </div></a></li>
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-success\"></i><i class=\"fa fa-money fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Transaction complete</p>
                    <p class=\"app-notification__meta\">2 days ago</p>
                  </div></a></li>
              <div class=\"app-notification__content\">
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-primary\"></i><i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Lisa sent you a mail</p>
                      <p class=\"app-notification__meta\">2 min ago</p>
                    </div></a></li>
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-danger\"></i><i class=\"fa fa-hdd-o fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Mail server not working</p>
                      <p class=\"app-notification__meta\">5 min ago</p>
                    </div></a></li>
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-success\"></i><i class=\"fa fa-money fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Transaction complete</p>
                      <p class=\"app-notification__meta\">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class=\"app-notification__footer\"><a href=\"#\">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Open Profile Menu\"><i class=\"fa fa-user fa-lg\"></i></a>
          <ul class=\"dropdown-menu settings-menu dropdown-menu-right\">
            <li><a class=\"dropdown-item\" href=\"page-user.html\"><i class=\"fa fa-cog fa-lg\"></i> Settings</a></li>
            <li><a class=\"dropdown-item\" href=\"page-user.html\"><i class=\"fa fa-user fa-lg\"></i> Profile</a></li>
            <li><a class=\"dropdown-item\" href=\"page-login.html\"><i class=\"fa fa-sign-out fa-lg\"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
    <aside class=\"app-sidebar\">
      <div class=\"app-sidebar__user\"><img class=\"app-sidebar__user-avatar\" <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/admin-user-icon-24.jpg"), "html", null, true);
        echo "\">
        <div>
          <p class=\"app-sidebar__user-name\">John Doe</p>
          <p class=\"app-sidebar__user-designation\">Frontend Developer</p>
        </div>
      </div>
      <ul class=\"app-menu\">
       
        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evennement_index");
        echo "\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-laptop\"></i><span class=\"app-menu__label\">gestion des évènements</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          
\t\t  <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"bootstrap-components.html\"><i class=\"icon fa fa-circle-o\"></i> Bootstrap Elements</a></li>
            <li><a class=\"treeview-item\" href=\"https://fontawesome.com/v4.7.0/icons/\" target=\"_blank\" rel=\"noopener\"><i class=\"icon fa fa-circle-o\"></i> Font Icons</a></li>
            <li><a class=\"treeview-item\" href=\"ui-cards.html\"><i class=\"icon fa fa-circle-o\"></i> Cards</a></li>
            <li><a class=\"treeview-item\" href=\"widgets.html\"><i class=\"icon fa fa-circle-o\"></i> Widgets</a></li>
          </ul>
        </li>
\t\t
        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_index");
        echo "\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-edit\"></i><span class=\"app-menu__label\">gestion des vidéos</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"form-components.html\"><i class=\"icon fa fa-circle-o\"></i> Form Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-custom.html\"><i class=\"icon fa fa-circle-o\"></i> Custom Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-samples.html\"><i class=\"icon fa fa-circle-o\"></i> Form Samples</a></li>
            <li><a class=\"treeview-item\" href=\"form-notifications.html\"><i class=\"icon fa fa-circle-o\"></i> Form Notifications</a></li>
          </ul>
        </li>

        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        echo "\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-edit\"></i><span class=\"app-menu__label\">Factures</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"form-components.html\"><i class=\"icon fa fa-circle-o\"></i> Form Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-custom.html\"><i class=\"icon fa fa-circle-o\"></i> Custom Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-samples.html\"><i class=\"icon fa fa-circle-o\"></i> Form Samples</a></li>
            <li><a class=\"treeview-item\" href=\"form-notifications.html\"><i class=\"icon fa fa-circle-o\"></i> Form Notifications</a></li>
          </ul>
        </li>
          
       
        
    </aside>
    
    <!-- Essential javascripts for application to work-->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/main.js\"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src=\"js/plugins/pace.min.js\"></script>
    <!-- Page specific javascripts-->
    <script type=\"text/javascript\" src=\"js/plugins/chart.js\"></script>
    <script type=\"text/javascript\">
      var data = {
      \tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\"],
      \tdatasets: [
      \t\t{
      \t\t\tlabel: \"My First dataset\",
      \t\t\tfillColor: \"rgba(220,220,220,0.2)\",
      \t\t\tstrokeColor: \"rgba(220,220,220,1)\",
      \t\t\tpointColor: \"rgba(220,220,220,1)\",
      \t\t\tpointStrokeColor: \"#fff\",
      \t\t\tpointHighlightFill: \"#fff\",
      \t\t\tpointHighlightStroke: \"rgba(220,220,220,1)\",
      \t\t\tdata: [65, 59, 80, 81, 56]
      \t\t},
      \t\t{
      \t\t\tlabel: \"My Second dataset\",
      \t\t\tfillColor: \"rgba(151,187,205,0.2)\",
      \t\t\tstrokeColor: \"rgba(151,187,205,1)\",
      \t\t\tpointColor: \"rgba(151,187,205,1)\",
      \t\t\tpointStrokeColor: \"#fff\",
      \t\t\tpointHighlightFill: \"#fff\",
      \t\t\tpointHighlightStroke: \"rgba(151,187,205,1)\",
      \t\t\tdata: [28, 48, 40, 19, 86]
      \t\t}
      \t]
      };
      var pdata = [
      \t{
      \t\tvalue: 300,
      \t\tcolor: \"#46BFBD\",
      \t\thighlight: \"#5AD3D1\",
      \t\tlabel: \"Complete\"
      \t},
      \t{
      \t\tvalue: 50,
      \t\tcolor:\"#F7464A\",
      \t\thighlight: \"#FF5A5E\",
      \t\tlabel: \"In-Progress\"
      \t}
      ]
      
      var ctxl = \$(\"#lineChartDemo\").get(0).getContext(\"2d\");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = \$(\"#pieChartDemo\").get(0).getContext(\"2d\");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type=\"text/javascript\">
      if(document.location.hostname == 'pratikborsadiya.in') {
      \t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      \t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      \tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      \t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      \tga('create', 'UA-72504830-1', 'auto');
      \tga('send', 'pageview');
      }
    </script>
  </body>
\t\t";
        // line 215
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "\t
\t</body>
</html></body</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "\t\t\t <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/main.css"), "html", null, true);
        echo "\"> 
       
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 215
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 216
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 216,  359 => 215,  349 => 39,  339 => 38,  325 => 34,  315 => 33,  295 => 26,  282 => 217,  280 => 215,  196 => 134,  184 => 125,  171 => 115,  160 => 107,  91 => 40,  89 => 38,  86 => 37,  84 => 33,  81 => 32,  76 => 28,  74 => 26,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
    <meta name=\"description\" content=\"Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.\">
    <!-- Twitter meta-->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:site\" content=\"@pratikborsadiya\">
    <meta property=\"twitter:creator\" content=\"@pratikborsadiya\">
    <!-- Open Graph Meta-->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"Vali Admin\">
    <meta property=\"og:title\" content=\"Vali - Free Bootstrap 4 admin theme\">
    <meta property=\"og:url\" content=\"http://pratikborsadiya.in/blog/vali-admin\">
    <meta property=\"og:image\" content=\"http://pratikborsadiya.in/blog/vali-admin/hero-social.png\">
    <meta property=\"og:description\" content=\"Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.\">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Main CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">
    <!-- Font-icon css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
  
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t{% block stylesheets %}
\t\t\t <link rel=\"stylesheet\" href=\"{{asset('admin/css/main.css')}}\"> 
       
\t\t{% endblock %}
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
\t\t{% block javascripts %}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t
\t\t<body class=\"app sidebar-mini\">
    <!-- Navbar-->
    <header class=\"app-header\"><a class=\"app-header__logo\" href=\"index.html\">WeHealth</a>
      <!-- Sidebar toggle button--><a class=\"app-sidebar__toggle\" href=\"#\" data-toggle=\"sidebar\" aria-label=\"Hide Sidebar\"></a>
      <!-- Navbar Right Menu-->
      <ul class=\"app-nav\">
        <li class=\"app-search\">
          <input class=\"app-search__input\" type=\"search\" placeholder=\"Search\">
          <button class=\"app-search__button\"><i class=\"fa fa-search\"></i></button>
        </li>
        <!--Notification Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Show notifications\"><i class=\"fa fa-bell-o fa-lg\"></i></a>
          <ul class=\"app-notification dropdown-menu dropdown-menu-right\">
            <li class=\"app-notification__title\">You have 4 new notifications.</li>
            <div class=\"app-notification__content\">
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-primary\"></i><i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Lisa sent you a mail</p>
                    <p class=\"app-notification__meta\">2 min ago</p>
                  </div></a></li>
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-danger\"></i><i class=\"fa fa-hdd-o fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Mail server not working</p>
                    <p class=\"app-notification__meta\">5 min ago</p>
                  </div></a></li>
              <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-success\"></i><i class=\"fa fa-money fa-stack-1x fa-inverse\"></i></span></span>
                  <div>
                    <p class=\"app-notification__message\">Transaction complete</p>
                    <p class=\"app-notification__meta\">2 days ago</p>
                  </div></a></li>
              <div class=\"app-notification__content\">
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-primary\"></i><i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Lisa sent you a mail</p>
                      <p class=\"app-notification__meta\">2 min ago</p>
                    </div></a></li>
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-danger\"></i><i class=\"fa fa-hdd-o fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Mail server not working</p>
                      <p class=\"app-notification__meta\">5 min ago</p>
                    </div></a></li>
                <li><a class=\"app-notification__item\" href=\"javascript:;\"><span class=\"app-notification__icon\"><span class=\"fa-stack fa-lg\"><i class=\"fa fa-circle fa-stack-2x text-success\"></i><i class=\"fa fa-money fa-stack-1x fa-inverse\"></i></span></span>
                    <div>
                      <p class=\"app-notification__message\">Transaction complete</p>
                      <p class=\"app-notification__meta\">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class=\"app-notification__footer\"><a href=\"#\">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class=\"dropdown\"><a class=\"app-nav__item\" href=\"#\" data-toggle=\"dropdown\" aria-label=\"Open Profile Menu\"><i class=\"fa fa-user fa-lg\"></i></a>
          <ul class=\"dropdown-menu settings-menu dropdown-menu-right\">
            <li><a class=\"dropdown-item\" href=\"page-user.html\"><i class=\"fa fa-cog fa-lg\"></i> Settings</a></li>
            <li><a class=\"dropdown-item\" href=\"page-user.html\"><i class=\"fa fa-user fa-lg\"></i> Profile</a></li>
            <li><a class=\"dropdown-item\" href=\"page-login.html\"><i class=\"fa fa-sign-out fa-lg\"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class=\"app-sidebar__overlay\" data-toggle=\"sidebar\"></div>
    <aside class=\"app-sidebar\">
      <div class=\"app-sidebar__user\"><img class=\"app-sidebar__user-avatar\" <img src=\"{{asset('admin/assets/images/admin-user-icon-24.jpg') }}\">
        <div>
          <p class=\"app-sidebar__user-name\">John Doe</p>
          <p class=\"app-sidebar__user-designation\">Frontend Developer</p>
        </div>
      </div>
      <ul class=\"app-menu\">
       
        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"{{path('app_evennement_index')}}\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-laptop\"></i><span class=\"app-menu__label\">gestion des évènements</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          
\t\t  <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"bootstrap-components.html\"><i class=\"icon fa fa-circle-o\"></i> Bootstrap Elements</a></li>
            <li><a class=\"treeview-item\" href=\"https://fontawesome.com/v4.7.0/icons/\" target=\"_blank\" rel=\"noopener\"><i class=\"icon fa fa-circle-o\"></i> Font Icons</a></li>
            <li><a class=\"treeview-item\" href=\"ui-cards.html\"><i class=\"icon fa fa-circle-o\"></i> Cards</a></li>
            <li><a class=\"treeview-item\" href=\"widgets.html\"><i class=\"icon fa fa-circle-o\"></i> Widgets</a></li>
          </ul>
        </li>
\t\t
        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"{{path('app_video_index')}}\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-edit\"></i><span class=\"app-menu__label\">gestion des vidéos</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"form-components.html\"><i class=\"icon fa fa-circle-o\"></i> Form Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-custom.html\"><i class=\"icon fa fa-circle-o\"></i> Custom Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-samples.html\"><i class=\"icon fa fa-circle-o\"></i> Form Samples</a></li>
            <li><a class=\"treeview-item\" href=\"form-notifications.html\"><i class=\"icon fa fa-circle-o\"></i> Form Notifications</a></li>
          </ul>
        </li>

        <li class=\"treeview\"><a class=\"app-menu__item\" href=\"{{path('app_facture_index')}}\" data-toggle=\"treeview\"><i class=\"app-menu__icon fa fa-edit\"></i><span class=\"app-menu__label\">Factures</span><i class=\"treeview-indicator fa fa-angle-right\"></i></a>
          <ul class=\"treeview-menu\">
            <li><a class=\"treeview-item\" href=\"form-components.html\"><i class=\"icon fa fa-circle-o\"></i> Form Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-custom.html\"><i class=\"icon fa fa-circle-o\"></i> Custom Components</a></li>
            <li><a class=\"treeview-item\" href=\"form-samples.html\"><i class=\"icon fa fa-circle-o\"></i> Form Samples</a></li>
            <li><a class=\"treeview-item\" href=\"form-notifications.html\"><i class=\"icon fa fa-circle-o\"></i> Form Notifications</a></li>
          </ul>
        </li>
          
       
        
    </aside>
    
    <!-- Essential javascripts for application to work-->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/main.js\"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src=\"js/plugins/pace.min.js\"></script>
    <!-- Page specific javascripts-->
    <script type=\"text/javascript\" src=\"js/plugins/chart.js\"></script>
    <script type=\"text/javascript\">
      var data = {
      \tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\"],
      \tdatasets: [
      \t\t{
      \t\t\tlabel: \"My First dataset\",
      \t\t\tfillColor: \"rgba(220,220,220,0.2)\",
      \t\t\tstrokeColor: \"rgba(220,220,220,1)\",
      \t\t\tpointColor: \"rgba(220,220,220,1)\",
      \t\t\tpointStrokeColor: \"#fff\",
      \t\t\tpointHighlightFill: \"#fff\",
      \t\t\tpointHighlightStroke: \"rgba(220,220,220,1)\",
      \t\t\tdata: [65, 59, 80, 81, 56]
      \t\t},
      \t\t{
      \t\t\tlabel: \"My Second dataset\",
      \t\t\tfillColor: \"rgba(151,187,205,0.2)\",
      \t\t\tstrokeColor: \"rgba(151,187,205,1)\",
      \t\t\tpointColor: \"rgba(151,187,205,1)\",
      \t\t\tpointStrokeColor: \"#fff\",
      \t\t\tpointHighlightFill: \"#fff\",
      \t\t\tpointHighlightStroke: \"rgba(151,187,205,1)\",
      \t\t\tdata: [28, 48, 40, 19, 86]
      \t\t}
      \t]
      };
      var pdata = [
      \t{
      \t\tvalue: 300,
      \t\tcolor: \"#46BFBD\",
      \t\thighlight: \"#5AD3D1\",
      \t\tlabel: \"Complete\"
      \t},
      \t{
      \t\tvalue: 50,
      \t\tcolor:\"#F7464A\",
      \t\thighlight: \"#FF5A5E\",
      \t\tlabel: \"In-Progress\"
      \t}
      ]
      
      var ctxl = \$(\"#lineChartDemo\").get(0).getContext(\"2d\");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = \$(\"#pieChartDemo\").get(0).getContext(\"2d\");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type=\"text/javascript\">
      if(document.location.hostname == 'pratikborsadiya.in') {
      \t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      \t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      \tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      \t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      \tga('create', 'UA-72504830-1', 'auto');
      \tga('send', 'pageview');
      }
    </script>
  </body>
\t\t{% block body %}
\t\t{% endblock %}
\t
\t</body>
</html></body</html>
", "baseadmin.html.twig", "C:\\Users\\sarra\\OneDrive\\Desktop\\myapp\\WeHealth\\templates\\baseadmin.html.twig");
    }
}
