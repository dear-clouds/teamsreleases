<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/alisand-fansub */
class __TwigTemplate_aa977a8000224e2e351ab55ee53fffee7507e36072f4844efd28c04db6e66a3e extends Twig_Template
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
        echo "<p><strong>Qu'est ce qu'est la AliSand Fansub ?</strong></p>
<p>Team crée en mai 2013, notre première sortis à était faite le 29 Mai 2013. Nous sommes 7 filles âgées de 20 à 24 ans. Avec un travail ou en étant étudiant. Pour connaître un peu plus les membres de la team : <a href=\"http://alisandfansub.eklablog.com/presentation-de-la-team-a112744604\">Allez ici</a></p>
<p><strong>Dramas et films que nous ferons</strong></p>
<p>Pour parler des dramas ou des films que nous ferons, on feras surtout des dramas abandonnés par d'autres teams de fansub ou des dramas/films qui sont sortis il y a quelques années, déjà. On ne pense pas prendre de drama récent, car il existe déjà, plusieurs teams de fansub qui les prennent. On ne prendra aussi aucun drama coréen licencié ou récent car ils risquent d'être licencié plusieurs mois après leur sortis. Vous pouvez aussi nous proposer des drama et films sur cet article \"Proposer des dramas et des films\".<br />
Chaque membre de la team prend le projet qui lui plait. Et le traduit entièrement et si besoin d'aide, des personnes peuvent nous aider.</p>
<p><strong>Ddl ou streaming ???</strong></p>
<p>Et pour finir, nous mettrons releases en ddl et en streaming (merci de ne pas mettre nos releases en streaming, vu que nous le ferrons nous mêmes. Il seront soit mis sur daily ou sur wat, sur les comptes de Sandie, ou sur le compte Youtube de la team pour les films principalement.</p>
<h3>Dernières sorties de la team</h3>
<div class=\"row\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            if (($context["name"] == "AliSand Fansub")) {
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 12
                    echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                    // line 15
                    echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
                    echo "</div>
<br><a href=\"%7B%7B%20item.url%20%7D%7D\" target=\"_blank\"><div class=\"item-image\">";
                    // line 16
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div></a>
 <h2 class=\"truncate\">
<i class=\"tiny material-icons\">play_arrow</i><a href=\"%7B%7B%20item.url%20%7D%7D\" target=\"_blank\">";
                    // line 18
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
</h2>
<div class=\"rssincl-itemfeedtitle\">";
                    // line 20
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
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/alisand-fansub";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  58 => 20,  53 => 18,  48 => 16,  44 => 15,  39 => 12,  35 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><strong>Qu'est ce qu'est la AliSand Fansub ?</strong></p>
<p>Team crée en mai 2013, notre première sortis à était faite le 29 Mai 2013. Nous sommes 7 filles âgées de 20 à 24 ans. Avec un travail ou en étant étudiant. Pour connaître un peu plus les membres de la team : <a href=\"http://alisandfansub.eklablog.com/presentation-de-la-team-a112744604\">Allez ici</a></p>
<p><strong>Dramas et films que nous ferons</strong></p>
<p>Pour parler des dramas ou des films que nous ferons, on feras surtout des dramas abandonnés par d'autres teams de fansub ou des dramas/films qui sont sortis il y a quelques années, déjà. On ne pense pas prendre de drama récent, car il existe déjà, plusieurs teams de fansub qui les prennent. On ne prendra aussi aucun drama coréen licencié ou récent car ils risquent d'être licencié plusieurs mois après leur sortis. Vous pouvez aussi nous proposer des drama et films sur cet article \"Proposer des dramas et des films\".<br />
Chaque membre de la team prend le projet qui lui plait. Et le traduit entièrement et si besoin d'aide, des personnes peuvent nous aider.</p>
<p><strong>Ddl ou streaming ???</strong></p>
<p>Et pour finir, nous mettrons releases en ddl et en streaming (merci de ne pas mettre nos releases en streaming, vu que nous le ferrons nous mêmes. Il seront soit mis sur daily ou sur wat, sur les comptes de Sandie, ou sur le compte Youtube de la team pour les films principalement.</p>
<h3>Dernières sorties de la team</h3>
<div class=\"row\">
{% for name, feed in twig_feeds if name == 'AliSand Fansub' %}
{% for item in feed.items %}
<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">{{ item.date.date | date(\"d M Y (H:i)\") }}</div>
<br><a href=\"%7B%7B%20item.url%20%7D%7D\" target=\"_blank\"><div class=\"item-image\">{{ item.content }}</div></a>
 <h2 class=\"truncate\">
<i class=\"tiny material-icons\">play_arrow</i><a href=\"%7B%7B%20item.url%20%7D%7D\" target=\"_blank\">{{ item.title }}</a>
</h2>
<div class=\"rssincl-itemfeedtitle\">{{ item.name }}</div>
</div>
</div>
{% endfor %}
{% endfor %}
</div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/alisand-fansub", "");
    }
}
