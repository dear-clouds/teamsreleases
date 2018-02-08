<?php

/* forms/default/field.html.twig */
class __TwigTemplate_968aef84aa6b681292606e57b9f4101261b16d3b3d7b84f7b6be5e320ffe61db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) && ( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) &&  !(isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null));
        // line 4
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array())) . "-") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 6
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null))))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"";
        echo (((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) ? ((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array());
        echo " ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 11
        $this->displayBlock('contents', $context, $blocks);
        // line 97
        echo "    </div>
";
    }

    // line 10
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 11
    public function block_contents($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()) === false)) {
            // line 13
            echo "                <div class=\"";
            echo (((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) ? ((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "labelclasses", array());
            echo "\">
                    <label class=\"";
            // line 14
            echo (((isset($context["form_field_label_classes"]) ? $context["form_field_label_classes"] : null)) ? ((isset($context["form_field_label_classes"]) ? $context["form_field_label_classes"] : null)) : ("inline"));
            echo "\" ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
                echo "\" ";
            }
            echo " >
                    ";
            // line 15
            $this->displayBlock('label', $context, $blocks);
            // line 32
            echo "                    </label>
                </div>
            ";
        }
        // line 35
        echo "            <div class=\"";
        echo (((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) ? ((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "dataclasses", array());
        echo "\"
                ";
        // line 36
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 41
        echo "            >
                ";
        // line 42
        $this->displayBlock('group', $context, $blocks);
        // line 83
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 84
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 86
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "markdown", array())) {
                // line 87
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()))), false);
                echo "
                            ";
            } else {
                // line 89
                echo "                                ";
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())));
                echo "
                            ";
            }
            // line 91
            echo "                        </span>
                    </div>
                ";
        }
        // line 94
        echo "
            </div>
        ";
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 17
            echo "                            ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "markdown", array())) {
                // line 18
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))));
                echo "</span>
                            ";
            } else {
                // line 20
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
                echo "</span>
                            ";
            }
            // line 22
            echo "                        ";
        } else {
            // line 23
            echo "                            ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "markdown", array())) {
                // line 24
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))));
                echo "
                            ";
            } else {
                // line 26
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
                echo "
                            ";
            }
            // line 28
            echo "                        ";
        }
        // line 29
        echo "
                        ";
        // line 30
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 36
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 37
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 38
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 42
    public function block_group($context, array $blocks = array())
    {
        // line 43
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 82
        echo "                ";
    }

    // line 43
    public function block_input($context, array $blocks = array())
    {
        // line 44
        echo "                        <div class=\"";
        echo (((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) ? ((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 45
        $this->displayBlock('prepend', $context, $blocks);
        // line 46
        echo "                            <input
                                ";
        // line 48
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html_attr");
        echo "\"
                                ";
        // line 51
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 71
        echo "                            />
                            ";
        // line 72
        $this->displayBlock('append', $context, $blocks);
        // line 73
        echo "                            ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()) && (isset($context["errors"]) ? $context["errors"] : null))) {
            // line 74
            echo "                                <div class=\"";
            echo (((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) ? ((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 76
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                </div>
                            ";
        }
        // line 80
        echo "                        </div>
                    ";
    }

    // line 45
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 51
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 52
        echo "                                    class=\"";
        echo (isset($context["form_field_input_classes"]) ? $context["form_field_input_classes"] : null);
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo "\"
                                    ";
        // line 53
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 54
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 55
        echo "                                    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 56
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()));
            echo "\"";
        }
        // line 57
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 58
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 59
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 60
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 61
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array(), "any", true, true)) {
            // line 62
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 63
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                    ";
        }
        // line 66
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 67
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 68
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 69
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 70
        echo "                                ";
    }

    // line 72
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 72,  413 => 70,  407 => 69,  400 => 68,  393 => 67,  388 => 66,  385 => 65,  374 => 63,  369 => 62,  366 => 61,  359 => 60,  354 => 59,  349 => 58,  344 => 57,  337 => 56,  332 => 55,  325 => 54,  319 => 53,  312 => 52,  309 => 51,  304 => 45,  299 => 80,  295 => 78,  286 => 76,  282 => 75,  277 => 74,  274 => 73,  272 => 72,  269 => 71,  266 => 51,  262 => 49,  257 => 48,  254 => 46,  252 => 45,  243 => 44,  240 => 43,  236 => 82,  233 => 43,  230 => 42,  224 => 39,  220 => 38,  215 => 37,  212 => 36,  206 => 30,  203 => 29,  200 => 28,  194 => 26,  188 => 24,  185 => 23,  182 => 22,  174 => 20,  166 => 18,  163 => 17,  160 => 16,  157 => 15,  151 => 94,  146 => 91,  140 => 89,  134 => 87,  132 => 86,  124 => 84,  121 => 83,  119 => 42,  116 => 41,  114 => 36,  107 => 35,  102 => 32,  100 => 15,  90 => 14,  83 => 13,  80 => 12,  77 => 11,  72 => 10,  67 => 97,  65 => 11,  52 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    <label class=\"{{ form_field_label_classes ?: 'inline' }}\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                            {% if field.markdown %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|markdown(false)|e }}\">{{ field.label|markdown(false)|default(field.name|capitalize)|t }}</span>
                            {% else %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                            {% endif %}
                        {% else %}
                            {% if field.markdown %}
                                {{ field.label|markdown(false)|default(field.name|capitalize)|t }}
                            {% else %}
                                {{ field.label|default(field.name|capitalize)|t }}
                            {% endif %}
                        {% endif %}

                        {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                    {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    class=\"{{ form_field_input_classes }} {{ field.classes }}\"
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|tu|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|tu|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}
