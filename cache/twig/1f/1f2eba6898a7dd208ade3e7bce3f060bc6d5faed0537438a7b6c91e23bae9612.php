<?php

/* forms/default/data.txt.twig */
class __TwigTemplate_1b877ddcd00a70db39c4c6fd6b12cab2e2d6dbeb76bf704bb91cfd9738bbd1ab extends Twig_Template
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
        // line 15
        echo ($this->getAttribute($this, "render_field", array(0 => (isset($context["form"]) ? $context["form"] : null), 1 => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array())), "method") . "
");
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                if (((null === (isset($context["input"]) ? $context["input"] : null)) || ((isset($context["input"]) ? $context["input"] : null) == true))) {
                    // line 5
                    $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]))), "method");
                    // line 6
                    echo ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]));
                    echo ": ";
                    echo ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(((twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) ? (twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "yaml")))) . "
");
                } else {
                    // line 8
                    if ($this->getAttribute($context["field"], "fields", array())) {
                        // line 9
                        echo $this->getAttribute($this, "render_field", array(0 => (isset($context["form"]) ? $context["form"] : null), 1 => $this->getAttribute($context["field"], "fields", array())), "method");
                    }
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
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  53 => 8,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  37 => 2,  24 => 1,  19 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro render_field(form, fields) %}
{%- for index, field in fields %}
    {%- set input = attribute(field, \"input@\") %}
        {%- if input is null or input == true %}
        {%- set value = form.value(field.name ?? index) %}
        {{- field.name ?? index }}: {{ string(value is iterable ? value|json_encode : value|escape('yaml')) ~ \"\\r\\n\" }}
    {%- else %}
        {%- if field.fields %}
        {{- _self.render_field(form, field.fields) }}
        {%- endif %}
    {%- endif %}
{%- endfor %}
{%- endmacro %}
{%- autoescape false %}
{{- _self.render_field(form, form.fields) ~ \"\\r\\n\" }}
{%- endautoescape %}", "forms/default/data.txt.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\form\\templates\\forms\\default\\data.txt.twig");
    }
}
