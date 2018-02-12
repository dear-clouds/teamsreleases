<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/01.home */
class __TwigTemplate_a54c6d0a414c8f57304bd444d2dbf9f9ef564f2a21359b7c3a92565495f910ef extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["feed"], "type", array()) == "dramas")) {
                // line 7
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 8
                    echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                    // line 11
                    echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
                    echo "</div><br>
<a href=\"";
                    // line 12
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\"><div class=\"item-image\">";
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
                    // line 13
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
                    // line 14
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
        // line 20
        echo "


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

        <div id=\"disqus_thread\"></div>
\t\t\t\t<script>

\t\t\t\t/**
\t\t\t\t*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
\t\t\t\t*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
\t\t\t\t/*
\t\t\t\tvar disqus_config = function () {
\t\t\t\tthis.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
\t\t\t\tthis.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
\t\t\t};
\t\t\t*/
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
        return array (  73 => 20,  58 => 14,  52 => 13,  46 => 12,  42 => 11,  37 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
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


{% for name, feed in twig_feeds %}
    {% if feed.type == 'dramas' %}
\t\t{% for item in feed.items %}
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
{% endif %}
{% endfor %}



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

        <div id=\"disqus_thread\"></div>
\t\t\t\t<script>

\t\t\t\t/**
\t\t\t\t*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
\t\t\t\t*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
\t\t\t\t/*
\t\t\t\tvar disqus_config = function () {
\t\t\t\tthis.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
\t\t\t\tthis.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
\t\t\t};
\t\t\t*/
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
