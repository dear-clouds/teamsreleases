<?php

/* @Var:Merci pour votre message ! */
class __TwigTemplate_99998e1d41bfc0dfd37e4a936e5884009b442d4a674f891d6233cd294e527278 extends Twig_Template
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
        echo "Merci pour votre message !";
    }

    public function getTemplateName()
    {
        return "@Var:Merci pour votre message !";
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
        return new Twig_Source("Merci pour votre message !", "@Var:Merci pour votre message !", "");
    }
}
