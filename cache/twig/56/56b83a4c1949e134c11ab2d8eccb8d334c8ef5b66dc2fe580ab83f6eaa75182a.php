<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_d2f96cf3a730086f99ef1717c0f99761951e99c17b6a566f338b13b97261b4dc extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folderExists", array())) {
            // line 4
            echo "<div class=\"form-field grid vertical ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        ";
            // line 9
            $context["uploadLimit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024);
            // line 10
            echo "        ";
            $context["dropzoneSettings"] = array("maxFileSize" => (isset($context["uploadLimit"]) ? $context["uploadLimit"] : null));
            // line 11
            echo "        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo ".json\"
             data-media-local=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
            echo "\"
             data-media-path=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "relativePagePath", array())), "html", null, true);
            echo "\"
             data-dropzone-options=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["dropzoneSettings"]) ? $context["dropzoneSettings"] : null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"></div>

        ";
            // line 19
            if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                // line 20
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
                echo "\" />
        ";
            }
            // line 22
            echo "    </div>
</div>
";
        } else {
            // line 25
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  89 => 25,  84 => 22,  76 => 20,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  55 => 14,  49 => 13,  45 => 11,  42 => 10,  40 => 9,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}

{% if context.folderExists %}
<div class=\"form-field grid vertical {% if field.classes is defined %}{{ field.classes }}{% endif %}\">
    <div class=\"form-label\">
        <label>{{ field.label|tu }}</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        {% set uploadLimit = grav.config.system.media.upload_limit / 1024 / 1024 %}
        {% set dropzoneSettings = { maxFileSize: uploadLimit } %}
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"
             data-media-local=\"{{ base_url_relative_frontend|rtrim('/') }}/{{ admin.route|trim('/') }}\"
             data-media-path=\"{{ url(context.relativePagePath) }}\"
             data-dropzone-options=\"{{ dropzoneSettings|json_encode|e('html_attr') }}\"
             data-dropzone-field=\"{{ (scope ~ field.name)|fieldName }}\"></div>

        {% if admin.session.expert == '0' %}
        <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|e }}\" />
        {% endif %}
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|tu }}
        </div>
    </div>
</div>
{% endif %}
", "forms/fields/pagemedia/pagemedia.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pagemedia\\pagemedia.html.twig");
    }
}
