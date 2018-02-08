<?php

/* forms/default/form.html.twig */
class __TwigTemplate_974d393df6c72ce9abe2f08abb79ee94c38103f6c7b8a08db69cc07a412b1352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === (isset($context["form"]) ? $context["form"] : null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 13
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        $context["action"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array())) . $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()))));
        // line 18
        echo "
";
        // line 19
        if (((isset($context["action"]) ? $context["action"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 20
            echo "    ";
            $context["action"] = (((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 22
        echo "
<form name=\"";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 24
        echo twig_trim_filter((isset($context["action"]) ? $context["action"] : null), "/", "right");
        echo "\"
      method=\"";
        // line 25
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo "
      ";
        // line 26
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array());
            echo "\"";
        }
        // line 27
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 30
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "novalidate", array())) {
            echo "novalidate";
        }
        // line 31
        echo ">

  ";
        // line 33
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 36
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 37
                echo "        ";
                $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 38
                echo "    ";
            }
            // line 39
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 40
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 40)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 41
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
  ";
        // line 43
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 43)->display($context);
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 46
        echo "
  ";
        // line 47
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 52
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 53
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 54
                echo "              <a href=\"";
                echo (((is_string($__internal_93d68cf0d2411f3b9cf91cb228586584a3e36457c90fda179161329f4fa30d78 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_ddc453cd15348bcf805387d7c0c77cfacaccf1ae990c8ed1f7ccb41c40856870 = "http") && ('' === $__internal_ddc453cd15348bcf805387d7c0c77cfacaccf1ae990c8ed1f7ccb41c40856870 || 0 === strpos($__internal_93d68cf0d2411f3b9cf91cb228586584a3e36457c90fda179161329f4fa30d78, $__internal_ddc453cd15348bcf805387d7c0c77cfacaccf1ae990c8ed1f7ccb41c40856870)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 56
            echo "          <button
                ";
            // line 57
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 58
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 61
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 62
            echo "
                type=\"";
            // line 63
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 65
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 66
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 68
            echo "            >
                ";
            // line 69
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 71
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 72
                echo "              </a>
          ";
            }
            // line 74
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 75
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 81)->display($context);
        // line 82
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 27
    public function block_form_classes($context, array $blocks = array())
    {
        // line 28
        echo "      class=\"";
        echo (isset($context["form_outer_classes"]) ? $context["form_outer_classes"] : null);
        echo " ";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
        echo "\"
      ";
    }

    // line 33
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 45
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 47
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 48
        echo "  <div class=\"";
        echo (((isset($context["form_button_outer_classes"]) ? $context["form_button_outer_classes"] : null)) ? ((isset($context["form_button_outer_classes"]) ? $context["form_button_outer_classes"] : null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 58
    public function block_button_classes($context, array $blocks = array())
    {
        // line 59
        echo "                class=\"";
        echo (((isset($context["form_button_classes"]) ? $context["form_button_classes"] : null)) ? ((isset($context["form_button_classes"]) ? $context["form_button_classes"] : null)) : ("button"));
        echo " ";
        echo $this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array());
        echo "\"
                ";
    }

    // line 77
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 78
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 78,  349 => 77,  340 => 59,  337 => 58,  330 => 48,  327 => 47,  322 => 45,  317 => 33,  308 => 28,  305 => 27,  297 => 82,  295 => 81,  292 => 80,  290 => 77,  287 => 76,  273 => 75,  268 => 74,  264 => 72,  262 => 71,  257 => 69,  254 => 68,  248 => 66,  246 => 65,  241 => 63,  238 => 62,  233 => 61,  230 => 58,  224 => 57,  221 => 56,  215 => 54,  212 => 53,  205 => 52,  188 => 51,  185 => 50,  183 => 47,  180 => 46,  178 => 45,  175 => 44,  173 => 43,  170 => 42,  156 => 41,  148 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  119 => 35,  116 => 34,  114 => 33,  110 => 31,  105 => 30,  102 => 27,  96 => 26,  90 => 25,  86 => 24,  82 => 23,  79 => 22,  75 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
      {% if form.novalidate %}novalidate{% endif %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/default/form.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}
