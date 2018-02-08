<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/yuna7fansub */
class __TwigTemplate_a11b67eae9b675247fcf108bb0b96ab5cc34669a31780c5378dfe3aee4bcc1d9 extends Twig_Template
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
        echo "Traductrice indépendante de films et dramas asiatiques depuis octobre 2016. J'ai voulu créer une vitrine pour tous mes projets. Si vous avez des questions sur mes projets ou aimeriez en proposer, n'hésitez pas à me contacter via les divers moyens que j'ai mis à votre disposition. (réseaux sociaux, courriel, tchat, etc.)

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>

<div class=\"row\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twig_feeds"]) ? $context["twig_feeds"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
            if (($context["name"] == "Yuna7fansub")) {
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "<div class=\"col s12 m6 l4 xl3\">
<div class=\"card\">
<span class=\"top-icon\"><i class=\"material-icons\">terrain</i></span>
<div class=\"rssincl-itemdate\">";
                    // line 12
                    echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), "d M Y (H:i)");
                    echo "</div><br>
<a href=\"";
                    // line 13
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\"><div class=\"item-image\">";
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "</div></a>
 <h2 class=\"truncate\"><i class=\"tiny material-icons\">play_arrow</i><a href=\"";
                    // line 14
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a></h2>
<div class=\"rssincl-itemfeedtitle\">";
                    // line 15
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
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/yuna7fansub";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  57 => 15,  51 => 14,  45 => 13,  41 => 12,  36 => 9,  32 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Traductrice indépendante de films et dramas asiatiques depuis octobre 2016. J'ai voulu créer une vitrine pour tous mes projets. Si vous avez des questions sur mes projets ou aimeriez en proposer, n'hésitez pas à me contacter via les divers moyens que j'ai mis à votre disposition. (réseaux sociaux, courriel, tchat, etc.)

<div class=\"gap\"></div>
<h3>Dernières sorties de la team</h3>

<div class=\"row\">
{% for name, feed in twig_feeds if name == 'Yuna7fansub' %}
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
</div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/02.teams/yuna7fansub", "");
    }
}
