<?php

/* pages.html.twig */
class __TwigTemplate_cd158915b04ead37e0df0d26cc6095b920240aa83c01294c6762ec10cf6aebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 59
        $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 60
        $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "frontend_pages_target", array());
        // line 61
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((((((("<a class=\"button\" target=\"" . (isset($context["preview_target"]) ? $context["preview_target"] : null)) . "\" href=\"") . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if ((isset($context["exists"]) ? $context["exists"] : null)) {
            // line 39
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "plugins://quicksave/admin/assets/healthy_snackbar.css"), "method");
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        if ((isset($context["exists"]) ? $context["exists"] : null)) {
            // line 48
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "plugins://quicksave/admin/assets/healthy_snackbar.js"), "method");
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 53
        echo "    ";
        if ((isset($context["exists"]) ? $context["exists"] : null)) {
            // line 54
            echo "        ";
            $this->loadTemplate("quicksave_ajax.html.twig", "pages.html.twig", 54)->display($context);
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
    }

    // line 141
    public function block_titlebar($context, array $blocks = array())
    {
        // line 142
        echo "    <div class=\"button-bar\">
        ";
        // line 143
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 144
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 147
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 148
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                       data-remodal-target=\"modal-add_modal-";
                    // line 149
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 152
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a>
                    </li>
                    <li><a class=\"button\" href=\"#modal-folder\"
                           data-remodal-target=\"modal-folder\">";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 165
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 166
                echo "                        <li><a class=\"button\" href=\"#modular\"
                               data-remodal-target=\"modular\">";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 169
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 170
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 171
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                   data-remodal-target=\"modal-add_modal-";
                    // line 172
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 174
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                </ul>
            </div>

            ";
            // line 178
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 179
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 182
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 183
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 185
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array())) > 1)) {
                    // line 186
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu language-switcher\">
                            ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 191
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 192
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                            // line 193
                            echo "                                    <li>
                                        <a href=\"";
                            // line 194
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</a>
                                    </li>
                                ";
                        }
                        // line 197
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                        </ul>
                    ";
                }
                // line 200
                echo "                </div>
            ";
            }
            // line 202
            echo "        ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 203
            echo "
            ";
            // line 204
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "

            <a class=\"button\" href=\"";
            // line 206
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i
                        class=\"fa fa-reply\"></i></a>

            ";
            // line 209
            $context["siblings"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "parent", array(), "method"), "children", array(), "method");
            // line 210
            echo "
            ";
            // line 211
            if ( !$this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "path", array())), "method")) {
                // line 212
                echo "                ";
                $context["sib"] = $this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "path", array())), "method");
                // line 213
                echo "                ";
                $context["sib_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "rawRoute", array()))));
                // line 214
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["sib_url"]) ? $context["sib_url"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i
                            class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 217
            echo "
            ";
            // line 218
            if ( !$this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), "isLast", array(0 => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "path", array())), "method")) {
                // line 219
                echo "                ";
                $context["sib"] = $this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "path", array())), "method");
                // line 220
                echo "                ";
                $context["sib_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["sib"]) ? $context["sib"] : null), "rawRoute", array()))));
                // line 221
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["sib_url"]) ? $context["sib_url"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i
                            class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 224
            echo "
            ";
            // line 225
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 226
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\"
                               data-remodal-target=\"modal\">";
                // line 235
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\"
                               data-remodal-target=\"modal-folder\">";
                // line 237
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 238
                if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                    // line 239
                    echo "                            <li><a class=\"button\" href=\"#modular\"
                                   data-remodal-target=\"modular\">";
                    // line 240
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 242
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\"
                   href=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\"
                   class=\"page-copy\"><i class=\"fa fa-copy\"></i> ";
                // line 247
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i
                            class=\"fa fa-arrows\"></i> ";
                // line 249
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 250
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 251
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i
                                class=\"fa fa-history\"></i> ";
                    // line 252
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 254
                echo "                ";
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 255
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\"
                       data-delete-url=\"";
                    // line 256
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i
                                class=\"fa fa-close\"></i> ";
                    // line 257
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 259
                    echo "                    <a class=\"button disable-after-click\"
                       href=\"";
                    // line 260
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"
                       class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 263
                echo "            ";
            }
            // line 264
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i
                            class=\"fa fa-check\"></i> ";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 268
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 269
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 270
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 274
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 275
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 276
                        echo "                            ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 277
                            echo "                            <li>
                                <button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            // line 278
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\"
                                        form=\"blueprints\"
                                        type=\"submit\">";
                            // line 280
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 282
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 283
                    echo "                        </ul>
                    ";
                }
                // line 285
                echo "                ";
            }
            // line 286
            echo "                ";
            // line 287
            echo "                ";
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 288
                echo "                    <span>
                    <form id=\"saveajax\" style=\"display: inline-block\">
                        <button class=\"button\">
                            <i class=\"fa fa-check\"></i> ";
                // line 291
                echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE") . " Content"), "html", null, true);
                echo "
                        </button>
                    </form>
                    <div id=\"healthy_snackbar\"></div>
                </span>
                ";
            }
            // line 297
            echo "                ";
            // line 298
            echo "            </div>
        ";
        }
        // line 300
        echo "    </div>
    ";
        // line 301
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 302
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 303
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 304
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 308
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 312
    public function block_content($context, array $blocks = array())
    {
        // line 313
        echo "    <div class=\"clear admin-pages\">
        ";
        // line 314
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 315
            echo "            ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 315)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 316
            echo "        ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 317
            echo "            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">

                    ";
            // line 320
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 321
                echo "                        <div id=\"admin-lang-toggle\" class=\"button-group\">
                            <button type=\"button\" class=\"button disabled\">
                                ";
                // line 323
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 324
                    echo "                                    ";
                    echo twig_escape_filter($this->env, (isset($context["page_lang"]) ? $context["page_lang"] : null), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 326
                    echo "                                    ";
                    echo twig_escape_filter($this->env, (isset($context["admin_lang"]) ? $context["admin_lang"] : null), "html", null, true);
                    echo "
                                ";
                }
                // line 328
                echo "                            </button>
                            ";
                // line 329
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 330
                    echo "                                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu language-switcher\">
                                    ";
                    // line 334
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 335
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 336
                            echo "                                    <li>
                                        <button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            // line 337
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\"
                                                redirect=\"";
                            // line 338
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\"
                                                form=\"blueprints\">";
                            // line 339
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                        ";
                        }
                        // line 341
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 342
                    echo "                                </ul>
                            ";
                }
                // line 344
                echo "                        </div>
                    ";
            }
            // line 346
            echo "
                    ";
            // line 347
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 348
                echo "                        ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 349
                echo "                        ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 350
                echo "                        ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 351
                echo "                        ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 352
                echo "                        ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 353
                echo "                        <form id=\"admin-mode-toggle\">
                            <div class=\"switch-toggle switch-grav\">
                                <input type=\"radio\" value=\"normal\"
                                       data-leave-url=\"";
                // line 356
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\"
                                       id=\"normal\" name=\"mode-switch\"
                                       class=\"highlight\" ";
                // line 358
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                                <label for=\"normal\">";
                // line 359
                echo (isset($context["normalText"]) ? $context["normalText"] : null);
                echo "</label>
                                <input type=\"radio\" value=\"expert\"
                                       data-leave-url=\"";
                // line 361
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\"
                                       id=\"expert\" name=\"mode-switch\"
                                       class=\"highlight\" ";
                // line 363
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                                <label for=\"expert\">";
                // line 364
                echo (isset($context["expertText"]) ? $context["expertText"] : null);
                echo "</label>
                                <a></a>
                            </div>
                        </form>
                    ";
            }
            // line 369
            echo "
                </div>

                ";
            // line 372
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 373
                echo "                    ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 373)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 374
                echo "                ";
            } else {
                // line 375
                echo "                    ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 375)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("admin/pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 376
                echo "                ";
            }
            // line 377
            echo "            </div>
        ";
        } else {
            // line 379
            echo "            <form id=\"page-filtering\">
                <div class=\"page-filters\">
                    <input type=\"text\"
                           data-filter-labels=\"";
            // line 382
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\"
                           data-filter-types=\"";
            // line 383
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\"
                           data-filter-access-levels=\"";
            // line 384
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "accessLevels", array())), "html_attr");
            echo "\"
                           placeholder=\"";
            // line 385
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\"/>
                </div>
                <div class=\"page-search\">
                    <input type=\"text\" placeholder=\"";
            // line 388
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\"/>
                </div>
                <div class=\"page-shortcuts\">
                    <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i
                                class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 392
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                    <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i
                                class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 394
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
                </div>
            </form>
            <div class=\"pages-list\">
                <ul class=\"depth-0\">
                    ";
            // line 399
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
                </ul>
                ";
            // line 401
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 401)->display($context);
            // line 402
            echo "            </div>
        ";
        }
        // line 404
        echo "    </div>

    ";
        // line 406
        if ((isset($context["context"]) ? $context["context"] : null)) {
            // line 407
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->cloneFunc((isset($context["context"]) ? $context["context"] : null));
            // line 408
            echo "
        ";
            // line 409
            if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
                // line 410
                echo "            ";
                $this->getAttribute((isset($context["obj_data"]) ? $context["obj_data"] : null), "folder", array(0 => ""), "method");
                // line 411
                echo "        ";
            }
            // line 412
            echo "    ";
        }
        // line 413
        echo "
    ";
        // line 414
        if ((((isset($context["mode"]) ? $context["mode"] : null) == "list") || ((isset($context["mode"]) ? $context["mode"] : null) == "edit"))) {
            // line 415
            echo "        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 416
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 416)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => (isset($context["obj_data"]) ? $context["obj_data"] : null), "form_id" => "new-page")));
            // line 417
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 420
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 420)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => (isset($context["obj_data"]) ? $context["obj_data"] : null), "form_id" => "new-folder")));
            // line 421
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 424
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 424)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => (isset($context["obj_data"]) ? $context["obj_data"] : null), "form_id" => "new-modular")));
            // line 425
            echo "        </div>

        ";
            // line 427
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "add_modals", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 428
                echo "            <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                 data-remodal-options=\"hashTracking: false\">
                ";
                // line 430
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 430)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => (isset($context["context"]) ? $context["context"] : null), "form_id" => "add-modal"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 431
                echo "            </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            echo "    ";
        }
        // line 434
        echo "

    ";
        // line 436
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 437
            echo "        <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

            ";
            // line 439
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 439)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 440
            echo "        </div>
        <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 442
            try {
                $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 442)->display(array_merge($context, array("data" => (isset($context["context"]) ? $context["context"] : null))));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 443
            echo "        </div>
    ";
        }
        // line 445
        echo "
    ";
        // line 446
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 446)->display($context);
        // line 447
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 452
        if ((isset($context["context"]) ? $context["context"] : null)) {
            // line 453
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 455
        echo "            </p>
            <p class=\"bigger\">
                ";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i
                            class=\"fa fa-fw fa-close\"></i> ";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i
                            class=\"fa fa-fw fa-check\"></i> ";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 469
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 469)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 470
        echo "
";
    }

    // line 473
    public function block_bottom($context, array $blocks = array())
    {
        // line 474
        echo "    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 65
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "plugins", array()), "admin", array()), "pages_list_display_field", array());
            // line 66
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 67
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 68
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 69
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 70
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 71
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 72
            echo "
    ";
            // line 73
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 74
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "custom", array())) {
                    // line 75
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "custom", array())), "method");
                    // line 76
                    echo "        ";
                } else {
                    // line 77
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                    // line 78
                    echo "        ";
                }
                // line 79
                echo "    ";
            } else {
                // line 80
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 81
                echo "    ";
            }
            // line 82
            echo "
    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 84
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 85
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 86
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 87
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 88
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 89
                echo "        ";
                // line 90
                echo "        ";
                // line 91
                echo "        ";
                // line 92
                echo "        ";
                // line 93
                echo "        ";
                // line 94
                echo "        ";
                // line 95
                echo "
        ";
                // line 96
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 97
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 100
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 101
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 105
                echo twig_trim_filter((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\"
                              class=\"hint--top page-item__content-hint\">
                            ";
                // line 107
                $context["page_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", array()), (isset($context["display_field"]) ? $context["display_field"] : null)), $this->getAttribute($context["p"], (isset($context["display_field"]) ? $context["display_field"] : null))), $this->getAttribute($context["p"], "title", array()));
                // line 108
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["page_url"]) ? $context["page_url"] : null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, (isset($context["page_label"]) ? $context["page_label"] : null));
                echo "</a>
                        </span>
                        ";
                // line 110
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 111
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 113
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", array())) {
                    // line 114
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 116
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 117
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i
                                    class=\"fa fa-long-arrow-right\"></i></span> ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 121
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 122
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\"
                           data-delete-url=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"
                           class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 126
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"
                           class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 129
                echo "                </span>
            </div>
            ";
                // line 131
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 132
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, ((isset($context["depth"]) ? $context["depth"] : null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 133
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
                </ul>
            ";
                }
                // line 136
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1240 => 136,  1234 => 133,  1229 => 132,  1227 => 131,  1223 => 129,  1216 => 126,  1210 => 123,  1207 => 122,  1205 => 121,  1199 => 118,  1195 => 117,  1192 => 116,  1188 => 114,  1185 => 113,  1175 => 111,  1173 => 110,  1165 => 108,  1163 => 107,  1158 => 105,  1149 => 101,  1145 => 100,  1140 => 98,  1137 => 97,  1135 => 96,  1132 => 95,  1130 => 94,  1128 => 93,  1126 => 92,  1124 => 91,  1122 => 90,  1120 => 89,  1118 => 88,  1117 => 87,  1116 => 86,  1115 => 85,  1113 => 84,  1109 => 83,  1106 => 82,  1103 => 81,  1100 => 80,  1097 => 79,  1094 => 78,  1091 => 77,  1088 => 76,  1085 => 75,  1082 => 74,  1080 => 73,  1077 => 72,  1074 => 71,  1071 => 70,  1068 => 69,  1065 => 68,  1062 => 67,  1059 => 66,  1056 => 65,  1053 => 64,  1039 => 63,  1021 => 4,  1008 => 3,  1001 => 474,  998 => 473,  993 => 470,  986 => 469,  978 => 464,  973 => 462,  965 => 457,  961 => 455,  953 => 453,  951 => 452,  946 => 450,  941 => 447,  939 => 446,  936 => 445,  932 => 443,  925 => 442,  921 => 440,  919 => 439,  915 => 437,  913 => 436,  909 => 434,  906 => 433,  891 => 431,  889 => 430,  881 => 428,  864 => 427,  860 => 425,  858 => 424,  853 => 421,  851 => 420,  846 => 417,  844 => 416,  841 => 415,  839 => 414,  836 => 413,  833 => 412,  830 => 411,  827 => 410,  825 => 409,  822 => 408,  819 => 407,  817 => 406,  813 => 404,  809 => 402,  807 => 401,  802 => 399,  794 => 394,  789 => 392,  782 => 388,  776 => 385,  772 => 384,  768 => 383,  764 => 382,  759 => 379,  755 => 377,  752 => 376,  749 => 375,  746 => 374,  743 => 373,  741 => 372,  736 => 369,  728 => 364,  722 => 363,  713 => 361,  708 => 359,  702 => 358,  693 => 356,  688 => 353,  685 => 352,  682 => 351,  679 => 350,  676 => 349,  673 => 348,  671 => 347,  668 => 346,  664 => 344,  660 => 342,  654 => 341,  649 => 339,  645 => 338,  641 => 337,  638 => 336,  635 => 335,  631 => 334,  625 => 330,  623 => 329,  620 => 328,  614 => 326,  608 => 324,  606 => 323,  602 => 321,  600 => 320,  595 => 317,  592 => 316,  589 => 315,  587 => 314,  584 => 313,  581 => 312,  573 => 308,  567 => 305,  564 => 304,  562 => 303,  557 => 302,  555 => 301,  552 => 300,  548 => 298,  546 => 297,  537 => 291,  532 => 288,  529 => 287,  527 => 286,  524 => 285,  520 => 283,  514 => 282,  507 => 280,  502 => 278,  499 => 277,  496 => 276,  493 => 275,  489 => 274,  483 => 270,  480 => 269,  478 => 268,  474 => 267,  469 => 264,  466 => 263,  460 => 260,  457 => 259,  452 => 257,  448 => 256,  445 => 255,  442 => 254,  437 => 252,  434 => 251,  432 => 250,  428 => 249,  423 => 247,  419 => 246,  413 => 242,  408 => 240,  405 => 239,  403 => 238,  399 => 237,  394 => 235,  384 => 228,  380 => 226,  378 => 225,  375 => 224,  366 => 221,  363 => 220,  360 => 219,  358 => 218,  355 => 217,  346 => 214,  343 => 213,  340 => 212,  338 => 211,  335 => 210,  333 => 209,  325 => 206,  320 => 204,  317 => 203,  314 => 202,  310 => 200,  306 => 198,  300 => 197,  292 => 194,  289 => 193,  286 => 192,  283 => 191,  279 => 190,  273 => 186,  271 => 185,  265 => 183,  263 => 182,  258 => 179,  256 => 178,  251 => 175,  245 => 174,  238 => 172,  231 => 171,  228 => 170,  223 => 169,  218 => 167,  215 => 166,  213 => 165,  209 => 164,  203 => 161,  194 => 155,  190 => 153,  184 => 152,  176 => 149,  169 => 148,  166 => 147,  162 => 146,  154 => 144,  152 => 143,  149 => 142,  146 => 141,  142 => 56,  139 => 55,  136 => 54,  133 => 53,  128 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 47,  115 => 46,  112 => 45,  105 => 42,  103 => 41,  100 => 40,  97 => 39,  94 => 38,  92 => 37,  89 => 36,  86 => 35,  83 => 34,  80 => 33,  76 => 1,  74 => 61,  72 => 60,  70 => 59,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  57 => 24,  55 => 23,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{% elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {#tt#}
    {% if exists %}
        {% do assets.addCss('plugins://quicksave/admin/assets/healthy_snackbar.css') %}
    {% endif %}
    {#tt end#}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {#tt#}
    {% if exists %}
        {% do assets.addJs('plugins://quicksave/admin/assets/healthy_snackbar.js') %}
    {% endif %}
    {#tt end#}
    {{ parent() }}
    {#tt#}
    {% if exists %}
        {% include 'quicksave_ajax.html.twig' %}
    {% endif %}
    {#tt end#}
{% endblock %}

{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
{% set preview_target = config.plugins.admin.frontend_pages_target %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}

{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set display_field = twig_vars['config'].plugins.admin.pages_list_display_field %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% if page.header.content.order.custom %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc'), page.header.content.order.custom) %}
        {% else %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {% endif %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
            (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
            (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
            (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
            (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}
        {#{% set page_route =  p.rawRoute|trim('/') %}#}
        {#{% if p.language and p.language != admin_lang %}#}
        {#{% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}#}
        {#{% else %}#}
        {#{% set page_url = base_url ~ '/pages/' ~ page_route  %}#}
        {#{% endif %}#}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : '' }}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : '' }} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\"
                              class=\"hint--top page-item__content-hint\">
                            {% set page_label = attribute(p.header, display_field)|defined(attribute(p, display_field))|defined(p.title) %}
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ page_label|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{ p.language }}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i
                                    class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\"
                           data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\"
                           class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\"
                           class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ _self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\"
                       data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a>
                    </li>
                    <li><a class=\"button\" href=\"#modal-folder\"
                           data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\"
                               data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\"
                                   data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {% if admin.languages_enabled|length > 1 %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu language-switcher\">
                            {% for langCode in admin.languages_enabled %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != admin_lang %}
                                    <li>
                                        <a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </div>
            {% endif %}
        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i
                        class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}

            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i
                            class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i
                            class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\"
                               data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\"
                               data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\"
                                   data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                    </ul>
                </div>

                <a class=\"button disable-after-click\"
                   href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\"
                   class=\"page-copy\"><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i
                            class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i
                                class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\"
                       data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i
                                class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\"
                       href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"
                       class=\"page-delete\"><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i
                            class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != page_lang %}
                            <li>
                                <button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{ langCode }}\"
                                        form=\"blueprints\"
                                        type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                                {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
                {#tt#}
                {% if exists %}
                    <span>
                    <form id=\"saveajax\" style=\"display: inline-block\">
                        <button class=\"button\">
                            <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu ~ \" Content\" }}
                        </button>
                    </form>
                    <div id=\"healthy_snackbar\"></div>
                </span>
                {% endif %}
                {#tt end#}
            </div>
        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.menu }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
        {% if mode == 'new' %}
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
        {% elseif mode == 'edit' %}
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">

                    {% if admin.multilang and page_lang %}
                        <div id=\"admin-lang-toggle\" class=\"button-group\">
                            <button type=\"button\" class=\"button disabled\">
                                {% if exists %}
                                    {{ page_lang }}
                                {% else %}
                                    {{ admin_lang }}
                                {% endif %}
                            </button>
                            {% if exists and context.translatedLanguages|length > 1 %}
                                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu language-switcher\">
                                    {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li>
                                        <button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{ language }}\"
                                                redirect=\"{{ context.rawRoute|trim('/') }}\"
                                                form=\"blueprints\">{{ language }}</button>
                                        {% endif %}
                                        {% endfor %}
                                </ul>
                            {% endif %}
                        </div>
                    {% endif %}

                    {% if context.blueprints.fields %}
                        {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                        {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                        {% set maxLen = max([normalText|length, expertText|length]) %}
                        {% set normalText = _self.spanToggle(normalText, maxLen) %}
                        {% set expertText = _self.spanToggle(expertText, maxLen) %}
                        <form id=\"admin-mode-toggle\">
                            <div class=\"switch-toggle switch-grav\">
                                <input type=\"radio\" value=\"normal\"
                                       data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\"
                                       id=\"normal\" name=\"mode-switch\"
                                       class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                                <label for=\"normal\">{{ normalText|raw }}</label>
                                <input type=\"radio\" value=\"expert\"
                                       data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\"
                                       id=\"expert\" name=\"mode-switch\"
                                       class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                                <label for=\"expert\">{{ expertText|raw }}</label>
                                <a></a>
                            </div>
                        </form>
                    {% endif %}

                </div>

                {% if context.blueprints.fields and admin.session.expert == '0' %}
                    {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
                {% else %}
                    {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
                {% endif %}
            </div>
        {% else %}
            <form id=\"page-filtering\">
                <div class=\"page-filters\">
                    <input type=\"text\"
                           data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr') }}\"
                           data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\"
                           data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\"
                           placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\"/>
                </div>
                <div class=\"page-search\">
                    <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\"/>
                </div>
                <div class=\"page-shortcuts\">
                    <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i
                                class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                    <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i
                                class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
                </div>
            </form>
            <div class=\"pages-list\">
                <ul class=\"depth-0\">
                    {{ _self.loop(pages, 0, _context) }}
                </ul>
                {% include 'partials/page-legend.html.twig' %}
            </div>
        {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id:'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id:'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id:'new-modular' } %}
        </div>

        {% for key, add_modal in config.plugins.admin.add_modals %}
            <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\"
                 data-remodal-options=\"hashTracking: false\">
                {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context, form_id:'add-modal' }|merge(add_modal.with|defined({})) %}
            </div>
        {% endfor %}
    {% endif %}


    {% if mode == 'edit' %}
        <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

            {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
        </div>
        <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
            {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] ignore missing with { data: context } %}
        </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i
                            class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i
                            class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock %}
", "pages.html.twig", "C:\\wamp64\\www\\teamsreleases\\user\\plugins\\quicksave\\admin\\templates\\pages.html.twig");
    }
}
