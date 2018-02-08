<?php

/* item.html.twig */
class __TwigTemplate_5a02e54c95f27c0ee63669e03b5ef8f5735d5e97d88fddd73af4355be082028f extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "2036406141")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"row\">
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t<div class=\"blog-content-item col s12 m12 l9\">

\t\t\t<div id=\"item\" class=\"block s12 m12 l10 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>



\t\t</div>

\t\t<div id=\"sidebar\" class=\"col s12 m4 l3 hide-on-med-and-down rightcolumn\">
\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t</div>

\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\themes\\antimatter\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_5a02e54c95f27c0ee63669e03b5ef8f5735d5e97d88fddd73af4355be082028f_2036406141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"row\">
\t\t";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 7
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 7)->display($context);
            // line 8
            echo "\t\t";
        }
        // line 9
        echo "
\t\t<div class=\"blog-content-item col s12 m12 l9\">

\t\t\t<div id=\"item\" class=\"block s12 m12 l10 h-entry\">
\t\t\t    ";
        // line 13
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 13)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 14
        echo "\t\t\t</div>



\t\t</div>

\t\t<div id=\"sidebar\" class=\"col s12 m4 l3 hide-on-med-and-down rightcolumn\">
\t\t\t";
        // line 21
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 21)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 22
        echo "\t\t</div>

\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 22,  130 => 21,  121 => 14,  119 => 13,  113 => 9,  110 => 8,  107 => 7,  105 => 6,  101 => 4,  98 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"row\">
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t<div class=\"blog-content-item col s12 m12 l9\">

\t\t\t<div id=\"item\" class=\"block s12 m12 l10 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>



\t\t</div>

\t\t<div id=\"sidebar\" class=\"col s12 m4 l3 hide-on-med-and-down rightcolumn\">
\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t</div>

\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\themes\\antimatter\\templates\\item.html.twig");
    }
}
