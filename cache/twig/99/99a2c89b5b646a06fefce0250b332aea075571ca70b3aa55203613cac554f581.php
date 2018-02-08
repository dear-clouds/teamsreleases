<?php

/* quicksave_ajax.html.twig */
class __TwigTemplate_300f65894879800a48dc89ea45c1fcef6e52fad8b1da073d621273f9b6ce638f extends Twig_Template
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
        echo "<script>
    ";
        // line 3
        echo "    \$(document).ready(function () {
        var form = \$('#saveajax');
        form.submit(function (e) {
            // prevent form submission
            e.preventDefault();

            // submit the form via Ajax
            \$.ajax({
                url: '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/save-content',
                type: 'post',
                contentType: \"application/json; charset=utf-8\",
                dataType: 'json',
                data: JSON.stringify({
                    route: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "html", null, true);
        echo "\",
                    content: \$('div.form-field:not(.frontmatter) .CodeMirror')[0].CodeMirror.getValue()
                }),
                success: function (result) {
                    healthy_snackbar(result.message);
                    ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "quicksave", array()), "clear_dirty", array())) {
            // line 22
            echo "                    // clear the dirty state
                    const forms = Grav.default.Forms;
                    forms.FormState.Instance = new forms.FormState.FormState();
                    ";
        }
        // line 26
        echo "                },
                error: function (result) {
                    healthy_snackbar(\"There was an unexpected error while saving the content.\");
                }
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "quicksave_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 26,  50 => 22,  48 => 21,  40 => 16,  32 => 11,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    {# simply makes an ajax post with route and editor content #}
    \$(document).ready(function () {
        var form = \$('#saveajax');
        form.submit(function (e) {
            // prevent form submission
            e.preventDefault();

            // submit the form via Ajax
            \$.ajax({
                url: '{{ base_url }}/save-content',
                type: 'post',
                contentType: \"application/json; charset=utf-8\",
                dataType: 'json',
                data: JSON.stringify({
                    route: \"{{ context.rawRoute }}\",
                    content: \$('div.form-field:not(.frontmatter) .CodeMirror')[0].CodeMirror.getValue()
                }),
                success: function (result) {
                    healthy_snackbar(result.message);
                    {% if config.plugins.quicksave.clear_dirty %}
                    // clear the dirty state
                    const forms = Grav.default.Forms;
                    forms.FormState.Instance = new forms.FormState.FormState();
                    {% endif %}
                },
                error: function (result) {
                    healthy_snackbar(\"There was an unexpected error while saving the content.\");
                }
            });
        });
    });
</script>
", "quicksave_ajax.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\quicksave\\admin\\templates\\quicksave_ajax.html.twig");
    }
}
