<?php

/* forms/default/data.html.twig */
class __TwigTemplate_0af9689ae9e744a19a3286bde6221d823e763688c2fdec16595dca600bdd8b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        echo "
";
        // line 38
        echo $this->getAttribute($this, "render_field", array(0 => (isset($context["form"]) ? $context["form"] : null), 1 => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array())), "method");
        echo "

";
    }

    // line 6
    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "                    <div>
                        ";
        // line 8
        $this->displayBlock('field_label', $context, $blocks);
        // line 11
        echo "
                        ";
        // line 12
        $this->displayBlock('field_value', $context, $blocks);
        // line 27
        echo "                    </div>
                ";
    }

    // line 8
    public function block_field_label($context, array $blocks = array())
    {
        // line 9
        echo "                            <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())));
        echo "</strong>:
                        ";
    }

    // line 12
    public function block_field_value($context, array $blocks = array())
    {
        // line 13
        echo "                            ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) == "checkboxes")) {
            // line 14
            echo "                                <ul>
                                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 16
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), $context["value"], array(), "array"));
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                                </ul>
                            ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["field"]) ? $context["field"] : null), "type", array()) == "checkbox")) {
            // line 20
            echo "                                ";
            echo ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO"))));
            echo "
                            ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["field"]) ? $context["field"] : null), "type", array()) == "select")) {
            // line 22
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), "method"), array(), "array"));
            echo "
                            ";
        } else {
            // line 24
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), "method")), "html", null, true));
            echo "
                            ";
        }
        // line 26
        echo "                        ";
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
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
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                echo "        ";
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                echo "        ";
                if (((null === (isset($context["input"]) ? $context["input"] : null)) || ((isset($context["input"]) ? $context["input"] : null) == true))) {
                    // line 5
                    echo "            ";
                    if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) {
                        // line 6
                        echo "                ";
                        $this->displayBlock('field', $context, $blocks);
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "        ";
                } else {
                    // line 31
                    echo "            ";
                    if ($this->getAttribute($context["field"], "fields", array())) {
                        // line 32
                        echo "                ";
                        echo $this->getAttribute($this, "render_field", array(0 => (isset($context["form"]) ? $context["form"] : null), 1 => $this->getAttribute($context["field"], "fields", array())), "method");
                        echo "
            ";
                    }
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 35,  168 => 34,  162 => 32,  159 => 31,  156 => 30,  153 => 29,  150 => 6,  147 => 5,  144 => 4,  141 => 3,  123 => 2,  110 => 1,  106 => 26,  100 => 24,  94 => 22,  92 => 21,  87 => 20,  85 => 19,  82 => 18,  73 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  53 => 9,  50 => 8,  45 => 27,  43 => 12,  40 => 11,  38 => 8,  35 => 7,  32 => 6,  25 => 38,  22 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_field(form, fields) %}
    {% for index, field in fields %}
        {% set input = attribute(field, \"input@\") %}
        {% if input is null or input == true %}
            {% if form.value(field.name) %}
                {% block field %}
                    <div>
                        {% block field_label %}
                            <strong>{{ field.label|t|e }}</strong>:
                        {% endblock %}

                        {% block field_value %}
                            {% if field.type == 'checkboxes' %}
                                <ul>
                                    {% for value in form.value(field.name) %}
                                        <li>{{ field.options[value]|e }}</li>
                                    {% endfor %}
                                </ul>
                            {% elseif field.type == 'checkbox' %}
                                {{ (form.value(field.name) == 1) ? \"PLUGIN_FORM.YES\"|t|e : \"PLUGIN_FORM.NO\"|t|e }}
                            {% elseif field.type == 'select' %}
                                {{ field.options[form.value(field.name)]|e }}
                            {% else %}
                                {{ string(form.value(field.name))|nl2br }}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endif %}
        {% else %}
            {% if field.fields %}
                {{ _self.render_field(form, field.fields) }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{{ _self.render_field(form, form.fields) }}

", "forms/default/data.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\form\\templates\\forms\\default\\data.html.twig");
    }
}
