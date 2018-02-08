<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_06fcaf60c44ab0afb85620421f07263f2791b20a3b3178eef540e1e688b70a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "    ";
        $context["titre"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        // line 8
        echo "
    <div class=\"list-blog-header\">
        <!-- <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "c");
        echo "\">
                <span>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 13
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
            </time>
        </span> -->
        <div class=\"right\">";
        // line 16
        echo call_user_func_array($this->env->getFunction('stars')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array())));
        echo "</div>
        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 18
            echo "            <h1 class=\"p-name\">
                ";
            // line 19
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 20
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 22
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h1>
        ";
        } else {
            // line 25
            echo "            <h1 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 29
            echo "        <span class=\"tags\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"chip\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </span>
        ";
        }
        // line 35
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 36
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 37
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 40
                echo "            ";
            }
            // line 41
            echo "            ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "classes", array(0 => "img-responsive"), "method"), "html", array());
            echo "
        ";
        }
        // line 43
        echo "
    </div>

    <div class=\"gap\"></div>
    <div class=\"list-blog-padding\">

<section id=\"infos-team\" class=\"valign-wrapper\">
        <div class=\"col s12 m6 l9\">
        <div class=\"card blue lighten-4\">
            <div class=\"card-content\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 54
            echo "
        <h2 class=\"valign-wrapper\"> <i class=\"tiny material-icons\" style=\"margin-right: 10px;\">favorite_border</i> <a href=\"";
            // line 55
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a> </h2>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        ";
        // line 58
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "type", array())) {
            // line 59
            echo "        <p class=\"types\"><strong>Type de traductions :</strong>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "type", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 61
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/type";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["type"];
                echo "\">";
                echo $context["type"];
                echo "</a> ;
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </p>
        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "pays", array())) {
            // line 67
            echo "        <p class=\"payss\"><strong>Origines des traductions :</strong>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "pays", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 69
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/pays";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["pays"];
                echo "\">";
                echo $context["pays"];
                echo "</a> ;
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </p>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "genre", array())) {
            // line 75
            echo "        <p class=\"genres\"><strong>Genres principaux :</strong>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "genre", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 77
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/genre";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["genre"];
                echo "\">";
                echo $context["genre"];
                echo "</a> ;
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </p>
        ";
        }
        // line 81
        echo "    </div>
</div>
</div>

<div class=\"col s12 m6 l3\"><a href=\"";
        // line 85
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "site", array());
        echo "\" class=\"waves-effect waves-light btn\" target=\"_blank\"><i class=\"material-icons left\">insert_link</i>Site web</a>
</div>
</section>

        <div class=\"gap clearfix\"></div>

    ";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 92
            echo "        <div class=\"e-content\">
            ";
            // line 93
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 95
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 96
                echo "        ";
                $context["show_prev_next"] = true;
                // line 97
                echo "        ";
            }
            // line 98
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 99
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 100
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <p><a href=\"";
            // line 101
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 103
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 104
            echo "        <div class=\"p-summary e-content\">

            <p><a href=\"";
            // line 106
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 109
            echo "        <div class=\"e-content\">
            ";
            // line 110
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
<div class=\"gap\"></div>
";
            // line 113
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "twigfeeds", array()), "enabled", array())) {
                // line 114
                echo "        <!-- <h3>Dernières sorties de la team</h3>

        <div class=\"row\">
";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
                foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
                    if (($context["name"] == "{{ titre }}")) {
                        // line 118
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 119
                            echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                            // line 122
                            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
                            echo "</div><br>
<a href=\"";
                            // line 123
                            echo $this->getAttribute($context["item"], "url", array());
                            echo "\" target=\"_blank\"><div class=\"item-image\">";
                            echo $this->getAttribute($context["item"], "content", array());
                            echo "</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
                            // line 124
                            echo $this->getAttribute($context["item"], "url", array());
                            echo "\" target=\"_blank\">";
                            echo $this->getAttribute($context["item"], "title", array());
                            echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
                            // line 125
                            echo $this->getAttribute($context["item"], "name", array());
                            echo "</div>
</div>
</div>
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['feed'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "</div> -->
";
            }
            // line 132
            echo "
<section id=\"communaute\" class=\"scrollspy\">

                <h2>Commentaires</h2>

                <div id=\"disqus_thread\"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                var disqus_config = function () {
                this.page.url = '";
            // line 145
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
            echo "';  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = '";
            // line 146
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array());
            echo "'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://teams-releases.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

</section>


        ";
            // line 161
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
                // line 162
                echo "    <h3>Teams dans le même genre</h3>
    ";
                // line 163
                $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 163)->display($context);
            }
            // line 165
            echo "

        ";
            // line 167
            $context["show_prev_next"] = true;
            // line 168
            echo "    ";
        }
        // line 169
        echo "
    ";
        // line 170
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 171
            echo "
        <!-- <p class=\"prev-next\">
            ";
            // line 173
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 174
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 178
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 180
            echo "        </p> -->
    ";
        }
        // line 182
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 182,  481 => 180,  473 => 178,  471 => 177,  468 => 176,  460 => 174,  458 => 173,  454 => 171,  452 => 170,  449 => 169,  446 => 168,  444 => 167,  440 => 165,  437 => 163,  434 => 162,  432 => 161,  414 => 146,  410 => 145,  395 => 132,  391 => 130,  376 => 125,  370 => 124,  364 => 123,  360 => 122,  355 => 119,  351 => 118,  346 => 117,  341 => 114,  339 => 113,  333 => 110,  330 => 109,  322 => 106,  318 => 104,  316 => 103,  309 => 101,  305 => 100,  302 => 99,  299 => 98,  296 => 97,  293 => 96,  291 => 95,  286 => 93,  283 => 92,  281 => 91,  272 => 85,  266 => 81,  262 => 79,  248 => 77,  244 => 76,  241 => 75,  239 => 74,  236 => 73,  232 => 71,  218 => 69,  214 => 68,  211 => 67,  209 => 66,  206 => 65,  202 => 63,  188 => 61,  184 => 60,  181 => 59,  179 => 58,  176 => 57,  163 => 55,  160 => 54,  156 => 53,  144 => 43,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  126 => 37,  123 => 36,  120 => 35,  116 => 33,  102 => 31,  98 => 30,  95 => 29,  93 => 28,  90 => 27,  82 => 25,  73 => 22,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  56 => 16,  50 => 13,  46 => 12,  42 => 11,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}
    {% set titre = page.title %}

    <div class=\"list-blog-header\">
        <!-- <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
        </span> -->
        <div class=\"right\">{{ stars(page.route) }}</div>
        {% if page.header.link %}
            <h1 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h1>
        {% else %}
            <h1 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h1>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"chip\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).classes('img-responsive').html }}
        {% endif %}

    </div>

    <div class=\"gap\"></div>
    <div class=\"list-blog-padding\">

<section id=\"infos-team\" class=\"valign-wrapper\">
        <div class=\"col s12 m6 l9\">
        <div class=\"card blue lighten-4\">
            <div class=\"card-content\">
                {% for category in page.taxonomy.category %}

        <h2 class=\"valign-wrapper\"> <i class=\"tiny material-icons\" style=\"margin-right: 10px;\">favorite_border</i> <a href=\"{{ blog.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a> </h2>
{% endfor %}

        {% if page.taxonomy.type %}
        <p class=\"types\"><strong>Type de traductions :</strong>
            {% for type in page.taxonomy.type %}
            <a href=\"{{ blog.url|rtrim('/') }}/type{{ config.system.param_sep }}{{ type }}\">{{ type }}</a> ;
            {% endfor %}
        </p>
        {% endif %}

        {% if page.taxonomy.pays %}
        <p class=\"payss\"><strong>Origines des traductions :</strong>
            {% for pays in page.taxonomy.pays %}
            <a href=\"{{ blog.url|rtrim('/') }}/pays{{ config.system.param_sep }}{{ pays }}\">{{ pays }}</a> ;
            {% endfor %}
        </p>
        {% endif %}

        {% if page.taxonomy.genre %}
        <p class=\"genres\"><strong>Genres principaux :</strong>
            {% for genre in page.taxonomy.genre %}
            <a href=\"{{ blog.url|rtrim('/') }}/genre{{ config.system.param_sep }}{{ genre }}\">{{ genre }}</a> ;
            {% endfor %}
        </p>
        {% endif %}
    </div>
</div>
</div>

<div class=\"col s12 m6 l3\"><a href=\"{{ page.header.site }}\" class=\"waves-effect waves-light btn\" target=\"_blank\"><i class=\"material-icons left\">insert_link</i>Site web</a>
</div>
</section>

        <div class=\"gap clearfix\"></div>

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">

            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>
<div class=\"gap\"></div>
{% if config.plugins.twigfeeds.enabled %}
        <!-- <h3>Dernières sorties de la team</h3>

        <div class=\"row\">
{% for name, feed in twig_feeds if name == '{{ titre }}' %}
{% for item in feed.items %}
<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">{{ item.date.date | date(\"d M Y (H:i)\") }}</div><br>
<a href=\"{{ item.url }}\" target=\"_blank\"><div class=\"item-image\">{{ item.content }}</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"{{ item.url }}\" target=\"_blank\">{{ item.title }}</a></h2>
<div class=\"rssincl-itemfeedtitle\">{{ item.name }}</div>
</div>
</div>
{% endfor %}
{% endfor %}
</div> -->
{% endif %}

<section id=\"communaute\" class=\"scrollspy\">

                <h2>Commentaires</h2>

                <div id=\"disqus_thread\"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                var disqus_config = function () {
                this.page.url = '{{ page.route }}';  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = '{{ page.id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://teams-releases.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

</section>


        {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h3>Teams dans le même genre</h3>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}


        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <!-- <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p> -->
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\themes\\antimatter\\templates\\partials\\blog_item.html.twig");
    }
}
