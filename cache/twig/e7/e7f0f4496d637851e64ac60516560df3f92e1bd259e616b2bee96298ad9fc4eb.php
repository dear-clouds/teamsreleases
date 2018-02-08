<?php

/* @Var:[Ajouter une Team] {{ form.value.name|e }} */
class __TwigTemplate_da60566d078ac7821c2d36b6f561d94de6f33b0e37bf0b5036b425ff1cf628ca extends Twig_Template
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
        echo "[Ajouter une Team] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[Ajouter une Team] {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("[Ajouter une Team] {{ form.value.name|e }}", "@Var:[Ajouter une Team] {{ form.value.name|e }}", "");
    }
}
