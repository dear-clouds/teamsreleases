<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/01.home */
class __TwigTemplate_8d0bc925026ae8d6785f14a5218389bc8bb5be36aa4d7d09e7a86515f1a67dc5 extends Twig_Template
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
        echo "<div class=\"row\">
<div class=\"col s12 m12 l10\">


";
        // line 5
        $context["index"] = 1;
        // line 6
        $context["feed_items"] = array();
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "        ";
                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                // line 12
                echo "        ";
                $context["item"] = twig_array_merge($context["item"], array("retrievedTitle" => $this->getAttribute($context["feed"], "name", array())));
                // line 13
                echo "        ";
                $context["item"] = twig_array_merge($context["item"], array("sortDate" => $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array())));
                // line 14
                echo "        ";
                $context["feed_items"] = twig_array_merge((isset($context["feed_items"]) ? $context["feed_items"] : null), array((isset($context["index"]) ? $context["index"] : null) => $context["item"]));
                // line 15
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "page"), "method")) {
            // line 19
            echo "    ";
            $context["currentPage"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "page"), "method");
        } else {
            // line 21
            echo "    ";
            $context["currentPage"] = 1;
        }
        // line 23
        $context["perPage"] = 32;
        // line 24
        $context["totalPages"] = twig_round((twig_length_filter($this->env, (isset($context["feed_items"]) ? $context["feed_items"] : null)) / (isset($context["perPage"]) ? $context["perPage"] : null)), 0, "ceil");
        // line 25
        $context["start"] = (((isset($context["currentPage"]) ? $context["currentPage"] : null) * (isset($context["perPage"]) ? $context["perPage"] : null)) - (isset($context["perPage"]) ? $context["perPage"] : null));
        // line 26
        $context["paginationLimit"] = 4;
        // line 27
        echo "
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->sortByKeyFilter((isset($context["feed_items"]) ? $context["feed_items"] : null), "sortDate")), (isset($context["start"]) ? $context["start"] : null), (isset($context["perPage"]) ? $context["perPage"] : null)));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 29
            echo "
<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
            // line 33
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
            echo "</div><br>
<div class=\"item-image\">";
            // line 34
            echo $this->getAttribute($context["item"], "content", array());
            echo "</div>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
            // line 35
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
            // line 36
            echo $this->getAttribute($context["item"], "retrievedTitle", array());
            echo "</div>
</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
<div class=\"gap\"></div>

<center>
";
        // line 45
        if (((isset($context["totalPages"]) ? $context["totalPages"] : null) > 1)) {
            // line 46
            echo "<div class=\"gap\"></div>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 48
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) <= 1)) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 49
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/page:";
            echo 1;
            echo "\">Début</a>
        </li>
        <li class=\"page-item ";
            // line 51
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) <= 1)) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 52
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/page:";
            echo ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1);
            echo "\"><i class=\"tiny material-icons\">navigate_before</i></a>
        </li>
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) ? $context["totalPages"] : null)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "            ";
                if (((((isset($context["currentPage"]) ? $context["currentPage"] : null) - (isset($context["paginationLimit"]) ? $context["paginationLimit"] : null)) - $this->getAttribute($context["loop"], "index", array())) == 0)) {
                    // line 56
                    echo "                <li class=\"page-item\">
                    <span>&hellip;</span>
                </li>
            ";
                } elseif ((((                // line 59
(isset($context["currentPage"]) ? $context["currentPage"] : null) + (isset($context["paginationLimit"]) ? $context["paginationLimit"] : null)) - $this->getAttribute($context["loop"], "index", array())) == 0)) {
                    // line 60
                    echo "                <li class=\"page-item\">
                    <span>&hellip;</span>
                </li>

            ";
                } elseif ((((                // line 64
(isset($context["currentPage"]) ? $context["currentPage"] : null) - (isset($context["paginationLimit"]) ? $context["paginationLimit"] : null)) - $this->getAttribute($context["loop"], "index", array())) > 0)) {
                    // line 65
                    echo "            ";
                } elseif (((((isset($context["currentPage"]) ? $context["currentPage"] : null) + (isset($context["paginationLimit"]) ? $context["paginationLimit"] : null)) - $this->getAttribute($context["loop"], "index", array())) < 0)) {
                    // line 66
                    echo "
            ";
                } else {
                    // line 68
                    echo "                <li class=\"page-item ";
                    if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == $this->getAttribute($context["loop"], "index", array()))) {
                        echo " active";
                    }
                    echo "\">
                    <a href=\"";
                    // line 69
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                    echo "/page:";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "</a>
                </li>
            ";
                }
                // line 72
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        <li class=\"page-item ";
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) >= (isset($context["totalPages"]) ? $context["totalPages"] : null))) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 74
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/page:";
            echo ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1);
            echo "\"> <i class=\"tiny material-icons\">navigate_next</i> </a>
        </li>
        <li class=\"page-item ";
            // line 76
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) >= (isset($context["totalPages"]) ? $context["totalPages"] : null))) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 77
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/page:";
            echo (isset($context["totalPages"]) ? $context["totalPages"] : null);
            echo "\">Fin</a>
        </li>
    </ul>
";
        }
        // line 81
        echo "</center>


  </div>


\t\t\t\t<div class=\"col s12 m4 l2 hide-on-med-and-down rightcolumn\">

\t\t\t\t\t<div class=\"card red lighten-2 white-text\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">VERSION BÊTA</span>
\t\t\t\t\t\t\t<p><small>Des bugs peuvent apparaîtrent pendant la phase de transition et des changements peuvent avoir lieu aussi. Pour l'instant, il vaut mieux rester sur la <a href=\"http://team.eb.free.fr/SORTIES%20VOSTFR.php\">version stable</a> mais vous pouvez déjà bookmarker ce site et discuter de vos dramas favoris dans les commentaires tout en bas !</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"card amber lighten-5\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">Note aux Teams</span>
\t\t\t\t\t\t\t<p><small>Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes <a href=\"\">logos</a> (en création).</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<h3>Dramas du moment</h3>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<img src=\"https://78.media.tumblr.com/edd0ef70cdf1429fff63a4f380368c5e/tumblr_o2dx18csTn1twd51do6_r1_250.gif\">

\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"https://sjdkfansub.wordpress.com/2018/01/08/leh-lub-salub-rarng/\" target=\"_blank\"><i class=\"material-icons\">insert_link</i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">Leh Lub Salub Rarng</span>
\t\t\t\t\t\t\t<p><small>Petra Pawadee est une actrice célèbre très orgueilleuse et arrogante. Tandis que Ramin, un policier haut gradé, est égocentrique et dragueur.
\t\t\t\t\t\t\t\tUn jour, ils permutent de corps. La seule manière pour eux de retrouver leur corps est une compréhension mutuelle.</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3>Team à l'affiche</h3>
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"https://teamsreleases.dearclouds.com/assets/images/team.png\">

\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"https://dramaholixvip.wordpress.com/\" target=\"_blank\"><i class=\"material-icons\">insert_link</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title\">DramaHolix</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

</div>
</div>

<section id=\"communaute\" class=\"scrollspy\">

\t\t\t\t<h2>Communauté</h2>

\t\t\t\t<div id=\"disqus_thread\"></div>
\t\t\t\t<script>

\t\t\t\t/**
\t\t\t\t*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
\t\t\t\t*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

\t\t\t\tvar disqus_config = function () {
\t\t\t\tthis.page.url = '";
        // line 144
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "';  // Replace PAGE_URL with your page's canonical URL variable
\t\t\t\tthis.page.identifier = '";
        // line 145
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array());
        echo "'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
\t\t\t};

\t\t\t(function() { // DON'T EDIT BELOW THIS LINE
\t\t\tvar d = document, s = d.createElement('script');
\t\t\ts.src = 'https://teams-releases.disqus.com/embed.js';
\t\t\ts.setAttribute('data-timestamp', +new Date());
\t\t\t(d.head || d.body).appendChild(s);
\t\t})();
\t</script>
\t<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

</section>


\t<div class=\"fixed-action-btn hide-on-small-only\">
\t\t<a class=\"btn-floating btn-large red\">
\t\t\t<i class=\"large material-icons\">star</i>
\t\t</a>
\t\t<ul>
\t\t\t<li><a class=\"btn-floating grey steam\" href=\"http://steamcommunity.com/id/mio__\" target=\"_blank\"><i class=\"material-icons socicon socicon-steam\"></i></a></li>
\t\t\t<li><a class=\"btn-floating red accent-4\" href=\"https://trakt.tv/users/mio_\" target=\"_blank\"><i class=\"material-icons\">live_tv</i></a></li>
\t\t\t<li><a class=\"btn-floating green\" href=\"https://ask.fm/DEAR_CLOUDS\" target=\"_blank\"><i class=\"material-icons\">email</i></a></li>
\t\t\t<li><a class=\"btn-floating blue twitter\" href=\"https://twitter.com/DEAR_CLOUDS\" target=\"_blank\"><i class=\"material-icons socicon socicon-twitter\"></i></a></li>
\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 145,  327 => 144,  262 => 81,  253 => 77,  247 => 76,  240 => 74,  233 => 73,  219 => 72,  209 => 69,  202 => 68,  198 => 66,  195 => 65,  193 => 64,  187 => 60,  185 => 59,  180 => 56,  177 => 55,  160 => 54,  153 => 52,  147 => 51,  140 => 49,  134 => 48,  130 => 46,  128 => 45,  122 => 41,  111 => 36,  105 => 35,  101 => 34,  97 => 33,  91 => 29,  87 => 28,  84 => 27,  82 => 26,  80 => 25,  78 => 24,  76 => 23,  72 => 21,  68 => 19,  66 => 18,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  39 => 10,  36 => 9,  32 => 8,  29 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
<div class=\"col s12 m12 l10\">


{% set index = 1 %}
{% set feed_items = [] %}

{% for name, feed, type in twig_feeds %}

    {% for item in feed.items %}
        {% set index = index + 1 %}
        {% set item = item|merge({ 'retrievedTitle': feed.name }) %}
        {% set item = item|merge({ 'sortDate': item.date.date }) %}
        {% set feed_items = feed_items|merge({ (index): (item) }) %}

    {% endfor %}
{% endfor %}
{% if uri.param('page') %}
    {% set currentPage = uri.param('page') %}
{% else %}
    {% set currentPage = 1 %}
{% endif %}
{% set perPage = 32 %}
{% set totalPages = (feed_items|length / perPage)|round(0, 'ceil') %}
{% set start = currentPage * perPage - perPage %}
{% set paginationLimit = 4 %}

{% for index, item in feed_items|sort_by_key('sortDate')|reverse|slice(start, perPage) %}

<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">{{ item.date.date | date(\"d M Y (H:i)\") }}</div><br>
<div class=\"item-image\">{{ item.content }}</div>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"{{ item.url }}\" target=\"_blank\">{{ item.title }}</a></h2>
<div class=\"rssincl-itemfeedtitle\">{{ item.retrievedTitle }}</div>
</div>
</div>

{% endfor %}

<div class=\"gap\"></div>

<center>
{% if totalPages > 1 %}
<div class=\"gap\"></div>
    <ul class=\"pagination\">
        <li class=\"page-item {% if currentPage <= 1 %}disabled{% endif %}\">
            <a href=\"{{ page.url }}/page:{{ 1 }}\">Début</a>
        </li>
        <li class=\"page-item {% if currentPage <= 1 %}disabled{% endif %}\">
            <a href=\"{{ page.url }}/page:{{ currentPage - 1 }}\"><i class=\"tiny material-icons\">navigate_before</i></a>
        </li>
        {% for i in 1..totalPages %}
            {% if (currentPage - paginationLimit) - loop.index == 0 %}
                <li class=\"page-item\">
                    <span>&hellip;</span>
                </li>
            {% elseif (currentPage + paginationLimit) - loop.index == 0 %}
                <li class=\"page-item\">
                    <span>&hellip;</span>
                </li>

            {% elseif (currentPage - paginationLimit) - loop.index > 0 %}
            {% elseif (currentPage + paginationLimit) - loop.index < 0 %}

            {% else %}
                <li class=\"page-item {% if currentPage == loop.index  %} active{% endif %}\">
                    <a href=\"{{ page.url }}/page:{{ loop.index }}\">{{ loop.index }}</a>
                </li>
            {% endif %}
        {% endfor %}
        <li class=\"page-item {% if currentPage >= totalPages %}disabled{% endif %}\">
            <a href=\"{{ page.url }}/page:{{ currentPage + 1 }}\"> <i class=\"tiny material-icons\">navigate_next</i> </a>
        </li>
        <li class=\"page-item {% if currentPage >= totalPages %}disabled{% endif %}\">
            <a href=\"{{ page.url }}/page:{{ totalPages }}\">Fin</a>
        </li>
    </ul>
{% endif %}
</center>


  </div>


\t\t\t\t<div class=\"col s12 m4 l2 hide-on-med-and-down rightcolumn\">

\t\t\t\t\t<div class=\"card red lighten-2 white-text\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">VERSION BÊTA</span>
\t\t\t\t\t\t\t<p><small>Des bugs peuvent apparaîtrent pendant la phase de transition et des changements peuvent avoir lieu aussi. Pour l'instant, il vaut mieux rester sur la <a href=\"http://team.eb.free.fr/SORTIES%20VOSTFR.php\">version stable</a> mais vous pouvez déjà bookmarker ce site et discuter de vos dramas favoris dans les commentaires tout en bas !</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"card amber lighten-5\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">Note aux Teams</span>
\t\t\t\t\t\t\t<p><small>Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes <a href=\"\">logos</a> (en création).</small></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<h3>Dramas du moment</h3>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<img src=\"https://78.media.tumblr.com/edd0ef70cdf1429fff63a4f380368c5e/tumblr_o2dx18csTn1twd51do6_r1_250.gif\">

\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"https://sjdkfansub.wordpress.com/2018/01/08/leh-lub-salub-rarng/\" target=\"_blank\"><i class=\"material-icons\">insert_link</i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title\">Leh Lub Salub Rarng</span>
\t\t\t\t\t\t\t<p><small>Petra Pawadee est une actrice célèbre très orgueilleuse et arrogante. Tandis que Ramin, un policier haut gradé, est égocentrique et dragueur.
\t\t\t\t\t\t\t\tUn jour, ils permutent de corps. La seule manière pour eux de retrouver leur corps est une compréhension mutuelle.</small></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3>Team à l'affiche</h3>
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"https://teamsreleases.dearclouds.com/assets/images/team.png\">

\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"https://dramaholixvip.wordpress.com/\" target=\"_blank\"><i class=\"material-icons\">insert_link</i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<span class=\"card-title\">DramaHolix</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

</div>
</div>

<section id=\"communaute\" class=\"scrollspy\">

\t\t\t\t<h2>Communauté</h2>

\t\t\t\t<div id=\"disqus_thread\"></div>
\t\t\t\t<script>

\t\t\t\t/**
\t\t\t\t*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
\t\t\t\t*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

\t\t\t\tvar disqus_config = function () {
\t\t\t\tthis.page.url = '{{ page.route }}';  // Replace PAGE_URL with your page's canonical URL variable
\t\t\t\tthis.page.identifier = '{{ page.id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
\t\t\t};

\t\t\t(function() { // DON'T EDIT BELOW THIS LINE
\t\t\tvar d = document, s = d.createElement('script');
\t\t\ts.src = 'https://teams-releases.disqus.com/embed.js';
\t\t\ts.setAttribute('data-timestamp', +new Date());
\t\t\t(d.head || d.body).appendChild(s);
\t\t})();
\t</script>
\t<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

</section>


\t<div class=\"fixed-action-btn hide-on-small-only\">
\t\t<a class=\"btn-floating btn-large red\">
\t\t\t<i class=\"large material-icons\">star</i>
\t\t</a>
\t\t<ul>
\t\t\t<li><a class=\"btn-floating grey steam\" href=\"http://steamcommunity.com/id/mio__\" target=\"_blank\"><i class=\"material-icons socicon socicon-steam\"></i></a></li>
\t\t\t<li><a class=\"btn-floating red accent-4\" href=\"https://trakt.tv/users/mio_\" target=\"_blank\"><i class=\"material-icons\">live_tv</i></a></li>
\t\t\t<li><a class=\"btn-floating green\" href=\"https://ask.fm/DEAR_CLOUDS\" target=\"_blank\"><i class=\"material-icons\">email</i></a></li>
\t\t\t<li><a class=\"btn-floating blue twitter\" href=\"https://twitter.com/DEAR_CLOUDS\" target=\"_blank\"><i class=\"material-icons socicon socicon-twitter\"></i></a></li>
\t\t</ul>
\t</div>
", "@Page:C:/wamp64/www/teamsreleases/user/pages/01.home", "");
    }
}
