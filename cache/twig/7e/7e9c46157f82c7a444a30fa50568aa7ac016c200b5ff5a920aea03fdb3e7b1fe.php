<?php

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_7d04c7dcfd870d6610eb5f064b03ad83401dd987a887d79da96c2478075a5847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["last_page_route"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "getLastPageRoute", array());
        // line 5
        echo "    ";
        $context["show_slug_val"] = true;
        // line 6
        echo "    ";
        $context["show_fullpath_val"] = false;
        // line 7
        echo "
    ";
        // line 8
        $context["show_parents"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "plugins.admin.pages.show_parents"), "method");
        // line 9
        echo "    ";
        if (((isset($context["show_parents"]) ? $context["show_parents"] : null) == "folder")) {
            // line 10
            echo "        ";
            $context["show_slug_val"] = false;
            // line 11
            echo "    ";
        } elseif (((isset($context["show_parents"]) ? $context["show_parents"] : null) == "fullpath")) {
            // line 12
            echo "        ";
            $context["show_fullpath_val"] = true;
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        $context["defaults"] = array("show_root" => true, "show_all" => true, "show_slug" => (isset($context["show_slug_val"]) ? $context["show_slug_val"] : null), "show_fullpath" => (isset($context["show_fullpath_val"]) ? $context["show_fullpath_val"] : null), "default" => (isset($context["last_page_route"]) ? $context["last_page_route"] : null));
        // line 16
        echo "    ";
        $context["field"] = twig_array_merge((isset($context["field"]) ? $context["field"] : null), (isset($context["defaults"]) ? $context["defaults"] : null));
        // line 17
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  65 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/pages/pages.html.twig\" %}

{% block input %}
    {% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:true, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\parents\\parents.html.twig");
    }
}
