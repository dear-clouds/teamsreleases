<?php

/* partials/item_layout.html.twig */
class __TwigTemplate_ef8d4019ce0860051171d2cb2ec09f554c57774310a120451ea76a33a0943a69 extends Twig_Template
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
        echo "<div class=\"list-item h-entry col s12 m6 l3\">
<div class=\"card sticky-action\">

    ";
        // line 4
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 5
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 120);
        // line 7
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 8
        echo "
    <div class=\"card-image waves-effect waves-block waves-light activator\" width=\"100%\">
    ";
        // line 10
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 11
            echo "        ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 12
                echo "            ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 15
                echo "        ";
            }
            // line 16
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "classes", array(0 => "teams-image"), "method"), "html", array());
            echo "
    ";
        }
        // line 18
        echo "    </div>


    <div class=\"card-content\">
          <span class=\"card-title grey-text text-darken-4\"><a href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\" class=\"u-url\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</a></a><i class=\"material-icons right activator waves-effect waves-block waves-light\">label_outline</i></span>

        </div>
    <div class=\"card-reveal\">
      <span class=\"card-title grey-text text-darken-4\">";
        // line 26
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "<i class=\"material-icons right\">close</i></span>
      <p>";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "      <a href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</p>


    <p>  <span class=\"tags\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 34
            echo "        <a href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
            echo "/tag";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\" class=\"chip\">";
            echo $context["tag"];
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </p>
    </span>

  </div>
  <div class=\"card-action\"><a href=\"";
        // line 40
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\" class=\"u-url\">Voir la fiche</a> <a href=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "site", array());
        echo "\" class=\"u-url\" target=\"_blank\">Aller sur le site</a></div>

</div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "partials/item_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  123 => 36,  109 => 34,  105 => 33,  99 => 29,  85 => 28,  81 => 27,  77 => 26,  68 => 22,  62 => 18,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  41 => 11,  39 => 10,  35 => 8,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry col s12 m6 l3\">
<div class=\"card sticky-action\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(300) %}
    {% set header_image_height = page.header.header_image_height|defined(120) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"card-image waves-effect waves-block waves-light activator\" width=\"100%\">
    {% if header_image %}
        {% if header_image_file %}
            {% set header_image_media = page.media.images[header_image_file] %}
        {% else %}
            {% set header_image_media = page.media.images|first %}
        {% endif %}
        {{ header_image_media.cropZoom(header_image_width, header_image_height).classes('teams-image').html }}
    {% endif %}
    </div>


    <div class=\"card-content\">
          <span class=\"card-title grey-text text-darken-4\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></a><i class=\"material-icons right activator waves-effect waves-block waves-light\">label_outline</i></span>

        </div>
    <div class=\"card-reveal\">
      <span class=\"card-title grey-text text-darken-4\">{{ page.title }}<i class=\"material-icons right\">close</i></span>
      <p>{% for category in page.taxonomy.category %}
      <a href=\"{{ blog.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
      {% endfor %}</p>


    <p>  <span class=\"tags\">
        {% for tag in page.taxonomy.tag %}
        <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"chip\">{{ tag }}</a>
        {% endfor %}
      </p>
    </span>

  </div>
  <div class=\"card-action\"><a href=\"{{ page.url }}\" class=\"u-url\">Voir la fiche</a> <a href=\"{{ page.header.site }}\" class=\"u-url\" target=\"_blank\">Aller sur le site</a></div>

</div>
  </div>
", "partials/item_layout.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\themes\\antimatter\\templates\\partials\\item_layout.html.twig");
    }
}
