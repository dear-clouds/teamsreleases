<?php

/* partials/base.html.twig */
class __TwigTemplate_81ee777e8237e3223042afcedcdd560a0303be19d4ef4651c43d1b09fad590c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'sidebar_navigation' => array($this, 'block_sidebar_navigation'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "
<link rel=\"manifest\" href=\"/manifest.json\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"e9e639c6-2d91-4e49-a536-f24b17bea41b\",
    });
  });
</script>

</head>
<body id=\"top\" class=\"";
        // line 57
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "
<div class=\"gap\"></div>

        ";
        // line 106
        $this->displayBlock('showcase', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "
        ";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "    </div>
    ";
        // line 146
        $this->displayBlock('sidebar_navigation', $context, $blocks);
        // line 153
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 182
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    <link href=\"Https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh\">

    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/materialize.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 23
        echo "
        ";
        // line 24
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 28
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 29
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 30
            echo "        ";
        }
        // line 31
        echo "    ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 38
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 39
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bin/materialize.min.js"), "method");
        // line 40
        echo "    ";
    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        // line 60
        echo "        <!-- <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 62
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 65
        $this->displayBlock('header_extra', $context, $blocks);
        // line 66
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 67
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 67)->display($context);
            // line 68
            echo "                ";
        }
        // line 69
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 72
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header> -->

        <header>

            <div class=\"navbar-fixed\">
                <nav>
                    <div class=\"nav-wrapper\">
                        <a href=\"";
        // line 81
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "\" class=\"brand-logo center scrollspy\" id=\"top\"><img class=\"responsive-img\" src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\"></a>

                        <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse show-on-small\"><i class=\"material-icons\">menu</i></a>


                        <ul class=\"hide-on-med-and-down\">
                            <li class=\"left\"><a class=\"modal-trigger\" href=\"";
        // line 87
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/teams\">Répertoire Teams</a></li>
                            <li class=\"left\"><a class=\"modal-trigger\" href=\"";
        // line 88
        echo (isset($context["home_url"]) ? $context["home_url"] : null);
        echo "/ajouter-une-team\">Ajouter une Team</a></li>
                            <li class=\"left scrollspy\"><a href=\"#communaute\">Communauté</a></li>
                            <li class=\"right\"><a href=\"http://team.eb.free.fr\" target=\"_blank\">EB TEAM</a></li>
                            <li class=\"right\"><a href=\"https://dearclouds.com\" target=\"_blank\">Dear Clouds</a></li>
                        </ul>

                    </div>
                </nav>
            </div>


        </header>


        ";
    }

    // line 65
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 69
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 70
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "                ";
    }

    // line 106
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " container\">
            ";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "        </section>
        ";
    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
    }

    // line 114
    public function block_footer($context, array $blocks = array())
    {
        // line 115
        echo "        <footer class=\"page-footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col l6 s12\">
                <h4 class=\"white-text\">Teams Releases</h4>
                <p class=\"grey-text text-lighten-4\">Teams Releases est un site indépendant des Teams et ne postera aucun lien de téléchargement (si ce n'est peut-être mes propres traductions) ! Je suis une ancienne Fansubeuse et j'aimerais maintenant aider tout le monde à trouver son bonheur plus facilement. Bonne visite ♥ </p>
              </div>
              <div class=\"col l4 offset-l2 s12\">
                <h4 class=\"white-text\">Liens utiles</h4>
                <ul>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://fansub.d-addicts.com\" target=\"_blank\">Fansub D-Addict</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://dogaru.fr/\" target=\"_blank\">Dogaru</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://interteamsdrama.clicforum.com/\" target=\"_blank\">InterTeams</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://www.dailymanga.org/\" target=\"_blank\">Dailymanga</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://www.animeka.com\" target=\"_blank\">Animeka</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"container\">
            © 2018 Copyright <strong>Teams Releases</strong> - <i>Toutes les ressources utilisées sont open sources</i><br>
            <a href=\"https://github.com/Peechaya/teamsreleases\" target=\"_blank\" class=\"grey-text text-lighten-3\">
              Projet sur GitHub <i class=\"socicon-github\"></i></a> <i>Pull requests bienvenus !</i>
            <a class=\"grey-text text-lighten-4 right scrollspy\" href=\"#top\"><i class=\"material-icons valign-wrapper\">arrow_upward</i> Top</a>
            </div>
          </div>
        </footer>

        ";
    }

    // line 146
    public function block_sidebar_navigation($context, array $blocks = array())
    {
        // line 147
        echo "        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            ";
        // line 149
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 149)->display($context);
        // line 150
        echo "            </div>
        </div>
    ";
    }

    // line 153
    public function block_bottom($context, array $blocks = array())
    {
        // line 154
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
        <script>
    \t\$(document).ready(function(){
    \t\t// the \"href\" attribute of the modal trigger must specify the modal ID that wants to be triggered
    \t\t\$('.modal').modal();
    \t\t\$('.scrollspy').scrollSpy();
    \t\t\$(\".button-collapse\").sideNav();
    \t});
    </script>

    <script type=\"text/javascript\">
    (sc_adv_out = window.sc_adv_out || []).push({
    \tid : \"471414\",
    \tdomain : \"n.ads1-adnow.com\"
    });
    </script>
    <script type=\"text/javascript\" src=\"//st-n.ads1-adnow.com/js/adv_out.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 154,  376 => 153,  370 => 150,  368 => 149,  364 => 147,  361 => 146,  328 => 115,  325 => 114,  320 => 110,  315 => 111,  313 => 110,  308 => 109,  305 => 108,  300 => 106,  296 => 71,  293 => 70,  290 => 69,  285 => 65,  266 => 88,  262 => 87,  251 => 81,  240 => 72,  237 => 69,  234 => 68,  231 => 67,  228 => 66,  226 => 65,  218 => 62,  214 => 60,  211 => 59,  207 => 40,  204 => 39,  201 => 38,  198 => 37,  195 => 36,  192 => 35,  189 => 34,  185 => 31,  182 => 30,  179 => 29,  176 => 28,  173 => 27,  170 => 26,  167 => 25,  165 => 24,  162 => 23,  159 => 22,  156 => 21,  153 => 20,  150 => 19,  147 => 18,  139 => 41,  137 => 34,  131 => 32,  129 => 18,  119 => 11,  115 => 10,  112 => 9,  110 => 8,  102 => 7,  99 => 6,  96 => 5,  90 => 182,  87 => 153,  85 => 146,  82 => 145,  80 => 114,  77 => 113,  75 => 108,  72 => 107,  70 => 106,  65 => 103,  63 => 59,  58 => 57,  43 => 44,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    <link href=\"Https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh\">

    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css/materialize.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/bin/materialize.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}

<link rel=\"manifest\" href=\"/manifest.json\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"e9e639c6-2d91-4e49-a536-f24b17bea41b\",
    });
  });
</script>

</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <!-- <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
            </div>
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% if config.plugins.langswitcher.enabled %}
                {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
                {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header> -->

        <header>

            <div class=\"navbar-fixed\">
                <nav>
                    <div class=\"nav-wrapper\">
                        <a href=\"{{ home_url }}\" class=\"brand-logo center scrollspy\" id=\"top\"><img class=\"responsive-img\" src=\"{{ url('theme://images/logo.png') }}\"></a>

                        <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse show-on-small\"><i class=\"material-icons\">menu</i></a>


                        <ul class=\"hide-on-med-and-down\">
                            <li class=\"left\"><a class=\"modal-trigger\" href=\"{{ home_url }}/teams\">Répertoire Teams</a></li>
                            <li class=\"left\"><a class=\"modal-trigger\" href=\"{{ home_url }}/ajouter-une-team\">Ajouter une Team</a></li>
                            <li class=\"left scrollspy\"><a href=\"#communaute\">Communauté</a></li>
                            <li class=\"right\"><a href=\"http://team.eb.free.fr\" target=\"_blank\">EB TEAM</a></li>
                            <li class=\"right\"><a href=\"https://dearclouds.com\" target=\"_blank\">Dear Clouds</a></li>
                        </ul>

                    </div>
                </nav>
            </div>


        </header>


        {% endblock %}

<div class=\"gap\"></div>

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }} container\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer class=\"page-footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col l6 s12\">
                <h4 class=\"white-text\">Teams Releases</h4>
                <p class=\"grey-text text-lighten-4\">Teams Releases est un site indépendant des Teams et ne postera aucun lien de téléchargement (si ce n'est peut-être mes propres traductions) ! Je suis une ancienne Fansubeuse et j'aimerais maintenant aider tout le monde à trouver son bonheur plus facilement. Bonne visite ♥ </p>
              </div>
              <div class=\"col l4 offset-l2 s12\">
                <h4 class=\"white-text\">Liens utiles</h4>
                <ul>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://fansub.d-addicts.com\" target=\"_blank\">Fansub D-Addict</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://dogaru.fr/\" target=\"_blank\">Dogaru</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://interteamsdrama.clicforum.com/\" target=\"_blank\">InterTeams</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://www.dailymanga.org/\" target=\"_blank\">Dailymanga</a></li>
                  <li><a class=\"grey-text text-lighten-3\" href=\"http://www.animeka.com\" target=\"_blank\">Animeka</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"footer-copyright\">
            <div class=\"container\">
            © 2018 Copyright <strong>Teams Releases</strong> - <i>Toutes les ressources utilisées sont open sources</i><br>
            <a href=\"https://github.com/Peechaya/teamsreleases\" target=\"_blank\" class=\"grey-text text-lighten-3\">
              Projet sur GitHub <i class=\"socicon-github\"></i></a> <i>Pull requests bienvenus !</i>
            <a class=\"grey-text text-lighten-4 right scrollspy\" href=\"#top\"><i class=\"material-icons valign-wrapper\">arrow_upward</i> Top</a>
            </div>
          </div>
        </footer>

        {% endblock %}
    </div>
    {% block sidebar_navigation %}
        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
            </div>
        </div>
    {% endblock %}
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
        <script>
    \t\$(document).ready(function(){
    \t\t// the \"href\" attribute of the modal trigger must specify the modal ID that wants to be triggered
    \t\t\$('.modal').modal();
    \t\t\$('.scrollspy').scrollSpy();
    \t\t\$(\".button-collapse\").sideNav();
    \t});
    </script>

    <script type=\"text/javascript\">
    (sc_adv_out = window.sc_adv_out || []).push({
    \tid : \"471414\",
    \tdomain : \"n.ads1-adnow.com\"
    });
    </script>
    <script type=\"text/javascript\" src=\"//st-n.ads1-adnow.com/js/adv_out.js\"></script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\themes\\antimatter\\templates\\partials\\base.html.twig");
    }
}
