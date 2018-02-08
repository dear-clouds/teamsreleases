<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/rockgakuen */
class __TwigTemplate_987e837bb8d845860fb8647e832c81054063c3b0286ee06a6035eb69a449d590 extends Twig_Template
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
        echo "**RockGakuen Fansub, Depuis quand ? **

RockGakuen Fansub est une Team Indépendante qui à ouvert ces porte le 25/08/2016, pour une première sortie le 14/11/2016,  dans le but de divertis ce monde remplie de brutalité ! x) 

 

**RockGakuen Fansub, Quel Projet ?**

Traducteur indépendant, je choisis mes projets selon l'envie que ce soit des Films, Dramas, Animes.. bien que les projet du Genre \" Horreur \" prendrons une GRANDE place dans cette Team.  
Toutefois, je vous invite vivement à faire vos propositions en cliquant ICI , car ce sera avec joix que je réaliserait la demande souhaiter, dans la mesure du possible. 

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>



<div class=\"row\">
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            if (($context["name"] == "RockGakuen")) {
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                    // line 23
                    echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
                    echo "</div><br>
<a href=\"";
                    // line 24
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\"><div class=\"item-image\">";
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
                    // line 25
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
                    // line 26
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
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/rockgakuen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  68 => 26,  62 => 25,  56 => 24,  52 => 23,  47 => 20,  43 => 19,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("**RockGakuen Fansub, Depuis quand ? **

RockGakuen Fansub est une Team Indépendante qui à ouvert ces porte le 25/08/2016, pour une première sortie le 14/11/2016,  dans le but de divertis ce monde remplie de brutalité ! x) 

 

**RockGakuen Fansub, Quel Projet ?**

Traducteur indépendant, je choisis mes projets selon l'envie que ce soit des Films, Dramas, Animes.. bien que les projet du Genre \" Horreur \" prendrons une GRANDE place dans cette Team.  
Toutefois, je vous invite vivement à faire vos propositions en cliquant ICI , car ce sera avec joix que je réaliserait la demande souhaiter, dans la mesure du possible. 

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>



<div class=\"row\">
{% for name, feed in twig_feeds if name == 'RockGakuen' %}
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
</div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/rockgakuen", "");
    }
}
