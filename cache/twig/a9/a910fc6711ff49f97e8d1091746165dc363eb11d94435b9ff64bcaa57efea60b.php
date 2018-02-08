<?php

/* partials/tagcloud.html.twig */
class __TwigTemplate_0b7bc40da7e2abaf1d6a2c109323ec458a58b6e383b6a869d2923cd6afcf7135 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
            // line 4
            echo "  ";
            $context["max"] = max($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "tag", array(), "array"));
            // line 5
            echo "  ";
            $context["threshold"] = 0;
            // line 6
            echo "  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array(), "any", false, true), "tagcloud", array(), "any", false, true), "threshold", array(), "any", true, true)) {
                // line 7
                echo "    ";
                $context["threshold"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tagcloud", array()), "threshold", array());
                // line 8
                echo "  ";
            }
            // line 9
            echo "<div id=\"tagcloud\">
  ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "tag", array(), "array")));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 11
                echo "    ";
                $context["percent"] = (($context["value"] / (isset($context["max"]) ? $context["max"] : null)) * 100);
                // line 12
                echo "    ";
                if (((isset($context["percent"]) ? $context["percent"] : null) > (isset($context["threshold"]) ? $context["threshold"] : null))) {
                    // line 13
                    echo "      ";
                    $context["class"] = "largest";
                    // line 14
                    echo "      ";
                    if (((isset($context["percent"]) ? $context["percent"] : null) < 20)) {
                        // line 15
                        echo "        ";
                        $context["class"] = "smallest";
                        // line 16
                        echo "      ";
                    } elseif ((((isset($context["percent"]) ? $context["percent"] : null) >= 20) && ((isset($context["percent"]) ? $context["percent"] : null) < 40))) {
                        // line 17
                        echo "        ";
                        $context["class"] = "small";
                        // line 18
                        echo "      ";
                    } elseif ((((isset($context["percent"]) ? $context["percent"] : null) >= 40) && ((isset($context["percent"]) ? $context["percent"] : null) < 60))) {
                        // line 19
                        echo "        ";
                        $context["class"] = "medium";
                        // line 20
                        echo "      ";
                    } elseif ((((isset($context["percent"]) ? $context["percent"] : null) >= 50) && ((isset($context["percent"]) ? $context["percent"] : null) < 80))) {
                        // line 21
                        echo "        ";
                        $context["class"] = "large";
                        // line 22
                        echo "      ";
                    }
                    // line 23
                    echo "      <span class=\"";
                    echo (isset($context["class"]) ? $context["class"] : null);
                    echo "\" title=\"";
                    echo $context["value"];
                    echo " posts\"><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo twig_escape_filter($this->env, $context["tax"], "url");
                    echo "\" class=\"chip\">";
                    echo $context["tax"];
                    echo "</a></span>
    ";
                }
                // line 25
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/tagcloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  99 => 25,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
  {% set max = max(taxlist['tag']) %}
  {% set threshold = 0 %}
  {% if config.plugins.tagcloud.threshold is defined %}
    {% set threshold = config.plugins.tagcloud.threshold %}
  {% endif %}
<div id=\"tagcloud\">
  {% for tax,value in taxlist['tag']|ksort %}
    {% set percent = (value / max) * 100 %}
    {% if percent > threshold %}
      {% set class = 'largest' %}
      {% if percent < 20 %}
        {% set class = 'smallest' %}
      {% elseif percent >= 20 and percent < 40 %}
        {% set class = 'small' %}
      {% elseif percent >= 40 and percent < 60 %}
        {% set class = 'medium' %}
      {% elseif percent >= 50 and percent < 80 %}
        {% set class = 'large' %}
      {% endif %}
      <span class=\"{{ class }}\" title=\"{{ value }} posts\"><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tax|e('url') }}\" class=\"chip\">{{ tax }}</a></span>
    {% endif %}
  {% endfor %}
</div>
{% endif %}
", "partials/tagcloud.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\tagcloud\\templates\\partials\\tagcloud.html.twig");
    }
}
