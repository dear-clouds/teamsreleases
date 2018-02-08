<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/electric-blackness */
class __TwigTemplate_d2fc5597ba6f94f1b57fc3b12b2fda1abd65b11c634c7c1e7602d634113ba0dd extends Twig_Template
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
        echo "Petite team de _Fansub & Scantrad_ en tout genre.

Nous faisons avant tout ce qu'il nous plaît sans se prendre la tête ^^

On fait principalement des **karaokes**, parce que c'est plus sympa à faire. Et on a décidé de stopper les dramas pour le moment vu notre vitesse actuelle (La plupart des membres ont plus de 20 ans et travaillent donc peu de temps libre) et nous concentrerons sur des **films** (nous terminerons bien évidemment nos séries en cours).

Nos projets sont disponibles sur notre site en DL, Torrent, Streaming, Hardsub, Softsub, et ce librement (pas d'inscription, pas de nombre de messages requis, pas de mots de passe). Mais pensez à nous laisser des petits commentaires pour nous dire ce que vous avez pensé des projets, ça nous ferait plaisir :)

Nous essaierons de ressortir quelques **DJ/OS** bientôt.

On cherche aussi un petite équipe pour traduire des _Visual Novels_ :)

PS: Les fans de Johnny's sont accueillis bras ouverts, nous sommes deux grandes fans dans la team et ne cherchons qu'à faire plus de karaokes/émissions sur eux !

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>


<div class=\"row\">
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            if (($context["name"] == "ELECTRIC BLACKNESS")) {
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)"), "html", null, true);
                    echo "</div><br>
<a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\"><div class=\"item-image\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                    echo "</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
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
        // line 33
        echo "</div
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/electric-blackness";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  70 => 28,  64 => 27,  58 => 26,  54 => 25,  49 => 22,  45 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Petite team de _Fansub & Scantrad_ en tout genre.

Nous faisons avant tout ce qu'il nous plaît sans se prendre la tête ^^

On fait principalement des **karaokes**, parce que c'est plus sympa à faire. Et on a décidé de stopper les dramas pour le moment vu notre vitesse actuelle (La plupart des membres ont plus de 20 ans et travaillent donc peu de temps libre) et nous concentrerons sur des **films** (nous terminerons bien évidemment nos séries en cours).

Nos projets sont disponibles sur notre site en DL, Torrent, Streaming, Hardsub, Softsub, et ce librement (pas d'inscription, pas de nombre de messages requis, pas de mots de passe). Mais pensez à nous laisser des petits commentaires pour nous dire ce que vous avez pensé des projets, ça nous ferait plaisir :)

Nous essaierons de ressortir quelques **DJ/OS** bientôt.

On cherche aussi un petite équipe pour traduire des _Visual Novels_ :)

PS: Les fans de Johnny's sont accueillis bras ouverts, nous sommes deux grandes fans dans la team et ne cherchons qu'à faire plus de karaokes/émissions sur eux !

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>


<div class=\"row\">
{% for name, feed in twig_feeds if name == 'ELECTRIC BLACKNESS' %}
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
</div
", "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/electric-blackness", "");
    }
}
