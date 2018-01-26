<?php

/* themes/bulma/templates/system/page.html.twig */
class __TwigTemplate_e43c04c96fc92d555a62df8903c99249a9dd6cffc093025a4742824b3d72426b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'header_and_search' => array($this, 'block_header_and_search'),
            'tabs' => array($this, 'block_tabs'),
            'secondary_menu' => array($this, 'block_secondary_menu'),
            'tiles' => array($this, 'block_tiles'),
            'main' => array($this, 'block_main'),
            'main_content' => array($this, 'block_main_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'bottom' => array($this, 'block_bottom'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 56, "if" => 57, "set" => 197);
        $filters = array("merge" => 197, "without" => 225);
        $functions = array("create_attribute" => 198);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set'),
                array('merge', 'without'),
                array('create_attribute')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 88
        $this->displayBlock('header', $context, $blocks);
        // line 122
        $this->displayBlock('secondary_menu', $context, $blocks);
        // line 132
        $this->displayBlock('tiles', $context, $blocks);
        // line 183
        $this->displayBlock('main', $context, $blocks);
        // line 254
        $this->displayBlock('bottom', $context, $blocks);
        // line 264
        echo "
";
        // line 265
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 56
    public function block_navbar($context, array $blocks = array())
    {
        // line 57
        if ((($this->getAttribute(($context["page"] ?? null), "navbar_branding", array()) || $this->getAttribute(($context["page"] ?? null), "navbar_social", array())) || $this->getAttribute(($context["page"] ?? null), "primary_menu", array()))) {
            // line 59
            echo "<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      ";
            // line 62
            if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", array())) {
                // line 63
                echo "      <div class=\"navbar-item\">
      ";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar_branding", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 67
            echo "      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      ";
            // line 74
            if ($this->getAttribute(($context["page"] ?? null), "navbar_social", array())) {
                // line 75
                echo "      <div class=\"navbar-start\">
        <h1>hej</h1>
      ";
                // line 77
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar_social", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 80
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
                // line 81
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
                echo "
      ";
            }
            // line 83
            echo "    </div>
  </div>
</nav>
";
        }
    }

    // line 88
    public function block_header($context, array $blocks = array())
    {
        // line 89
        echo "<section class=\"hero is-primary\">
  ";
        // line 90
        $this->displayBlock('header_and_search', $context, $blocks);
        // line 110
        echo "  ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 120
        echo "</section>
";
    }

    // line 90
    public function block_header_and_search($context, array $blocks = array())
    {
        // line 91
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "header", array()) || $this->getAttribute(($context["page"] ?? null), "header_search", array()))) {
            // line 92
            echo "  ";
            // line 93
            echo "  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          ";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
            // line 98
            if (($context["is_front"] ?? null)) {
                // line 99
                echo "            <h1 class=\"title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</h1>
          ";
            }
            // line 101
            echo "        </div>
        <div class=\"column is-narrow\">
          ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_search", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 109
        echo "  ";
    }

    // line 110
    public function block_tabs($context, array $blocks = array())
    {
        // line 111
        echo "  ";
        // line 112
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "header_tabs", array())) {
            // line 113
            echo "    <div class=\"hero-footer\">
      <div class=\"container\">
        ";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_tabs", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 119
        echo "  ";
    }

    // line 122
    public function block_secondary_menu($context, array $blocks = array())
    {
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 125
            echo "<nav class=\"nav has-shadow\">
  <div class=\"container\">
    ";
            // line 127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
  </div>
</nav>
";
        }
    }

    // line 132
    public function block_tiles($context, array $blocks = array())
    {
        // line 134
        if ($this->getAttribute(($context["page"] ?? null), "tile_one", array())) {
            // line 135
            echo "<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          ";
            // line 140
            if (($this->getAttribute(($context["page"] ?? null), "tile_one", array()) || $this->getAttribute(($context["page"] ?? null), "tile_two", array()))) {
                // line 141
                echo "            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                ";
                // line 143
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_one", array()), "html", null, true));
                echo "
              </div>
              <div class=\"tile is-child notification is-warning\">
                ";
                // line 146
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_two", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 150
            echo "
          ";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "tile_three", array())) {
                // line 152
                echo "            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                ";
                // line 154
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_three", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 158
            echo "
        </div>

        ";
            // line 161
            if ($this->getAttribute(($context["page"] ?? null), "tile_four", array())) {
                // line 162
                echo "          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              ";
                // line 164
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_four", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 168
            echo "
      </div>

      ";
            // line 171
            if ($this->getAttribute(($context["page"] ?? null), "tile_five", array())) {
                // line 172
                echo "        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            ";
                // line 174
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_five", array()), "html", null, true));
                echo "
          </div>
        </div>
      ";
            }
            // line 178
            echo "    </div>
  </div>
</div>
";
        }
    }

    // line 183
    public function block_main($context, array $blocks = array())
    {
        // line 185
        echo "<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 188
        echo "
    ";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

    <div class=\"columns is-centered\">
      ";
        // line 193
        $this->displayBlock('main_content', $context, $blocks);
        // line 210
        echo "      ";
        $this->displayBlock('sidebar_first', $context, $blocks);
        // line 230
        echo "      ";
        $this->displayBlock('sidebar_second', $context, $blocks);
        // line 249
        echo "    </div>

  </main>
</section>
";
    }

    // line 193
    public function block_main_content($context, array $blocks = array())
    {
        // line 194
        echo "      ";
        // line 195
        echo "      ";
        if ( !$this->getAttribute(($context["page"] ?? null), "content_attributes", array())) {
            // line 196
            echo "      ";
            // line 197
            $context["page"] = twig_array_merge(($context["page"] ?? null), array("content_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "main-content", 1 => "column")), "method")));
            // line 204
            echo "      ";
        }
        // line 205
        echo "      ";
        // line 206
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_attributes", array()), "html", null, true));
        echo ">
        ";
        // line 207
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>
      ";
    }

    // line 210
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 211
        echo "      ";
        // line 212
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 213
            echo "      ";
            // line 214
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", array())) {
                // line 215
                echo "        ";
                // line 216
                $context["page"] = twig_array_merge(($context["page"] ?? null), array("sidebar_first_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "sidebar-first", 1 => "column", 2 => "is-2")), "method")));
                // line 224
                echo "        ";
            }
            // line 225
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", array()), "role"), "html", null, true));
            echo " role=\"complimentary\">
          ";
            // line 226
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 229
        echo "      ";
    }

    // line 230
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 231
        echo "      ";
        // line 232
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 233
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", array())) {
                // line 234
                echo "        ";
                // line 235
                $context["page"] = twig_array_merge(($context["page"] ?? null), array("sidebar_second_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "sidebar-second", 1 => "column", 2 => "is-2")), "method")));
                // line 243
                echo "        ";
            }
            // line 244
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", array()), "role"), "html", null, true));
            echo " role=\"complimentary>
          ";
            // line 245
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 248
        echo "      ";
    }

    // line 254
    public function block_bottom($context, array $blocks = array())
    {
        // line 256
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 257
            echo "<section class=\"hero is-info bsa\">
  <div class=\"container\">
    ";
            // line 259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
  </div>
</section>
";
        }
    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        // line 266
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 267
            echo "  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 269
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  484 => 269,  480 => 267,  478 => 266,  475 => 265,  466 => 259,  462 => 257,  460 => 256,  457 => 254,  453 => 248,  447 => 245,  442 => 244,  439 => 243,  437 => 235,  435 => 234,  432 => 233,  429 => 232,  427 => 231,  424 => 230,  420 => 229,  414 => 226,  409 => 225,  406 => 224,  404 => 216,  402 => 215,  399 => 214,  397 => 213,  394 => 212,  392 => 211,  389 => 210,  382 => 207,  377 => 206,  375 => 205,  372 => 204,  370 => 197,  368 => 196,  365 => 195,  363 => 194,  360 => 193,  352 => 249,  349 => 230,  346 => 210,  344 => 193,  338 => 190,  334 => 189,  331 => 188,  327 => 185,  324 => 183,  316 => 178,  309 => 174,  305 => 172,  303 => 171,  298 => 168,  291 => 164,  287 => 162,  285 => 161,  280 => 158,  273 => 154,  269 => 152,  267 => 151,  264 => 150,  257 => 146,  251 => 143,  247 => 141,  245 => 140,  238 => 135,  236 => 134,  233 => 132,  224 => 127,  220 => 125,  218 => 124,  215 => 122,  211 => 119,  204 => 115,  200 => 113,  197 => 112,  195 => 111,  192 => 110,  188 => 109,  179 => 103,  175 => 101,  169 => 99,  167 => 98,  163 => 97,  157 => 93,  155 => 92,  152 => 91,  149 => 90,  144 => 120,  141 => 110,  139 => 90,  136 => 89,  133 => 88,  125 => 83,  119 => 81,  116 => 80,  110 => 77,  106 => 75,  104 => 74,  95 => 67,  89 => 64,  86 => 63,  84 => 62,  79 => 59,  77 => 57,  74 => 56,  70 => 265,  67 => 264,  65 => 254,  63 => 183,  61 => 132,  59 => 122,  57 => 88,  55 => 56,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Region attributes:
 * - page.content_attributes: The attributes for the main content region
 *   wrapper. If not set, defaults will be used.
 * - page.sidebar_first_attributes: The attributes for the sidebar_first region
 *   wrapper. If not set, defaults will be used.
 * - page.sidebar_second_attributes: The attributes for the sidebar_second
 *   region wrapper. If not set, defaults will be used.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
{% block navbar %}
{% if page.navbar_branding or page.navbar_social or page.primary_menu %}
{# Top navbar #}
<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      {% if page.navbar_branding %}
      <div class=\"navbar-item\">
      {{ page.navbar_branding }}
      </div>
      {% endif %}
      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      {% if page.navbar_social %}
      <div class=\"navbar-start\">
        <h1>hej</h1>
      {{ page.navbar_social }}
      </div>
      {% endif %}
      {% if page.primary_menu %}
      {{ page.primary_menu }}
      {% endif %}
    </div>
  </div>
</nav>
{% endif %}
{% endblock navbar %}
{% block header %}
<section class=\"hero is-primary\">
  {% block header_and_search %}
  {% if page.header or page.header_search %}
  {# Header hero region + search #}
  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          {{ page.header }}
          {% if is_front %}
            <h1 class=\"title\">{{ site_slogan }}</h1>
          {% endif %}
        </div>
        <div class=\"column is-narrow\">
          {{ page.header_search }}
        </div>
      </div>
    </div>
  </div>
  {% endif %}
  {% endblock header_and_search %}
  {% block tabs %}
  {# Drupal tabs #}
  {% if page.header_tabs %}
    <div class=\"hero-footer\">
      <div class=\"container\">
        {{ page.header_tabs }}
      </div>
    </div>
  {% endif %}
  {% endblock tabs %}
</section>
{% endblock header %}
{% block secondary_menu %}
{# Secondary menu #}
{% if page.secondary_menu %}
<nav class=\"nav has-shadow\">
  <div class=\"container\">
    {{ page.secondary_menu }}
  </div>
</nav>
{% endif %}
{% endblock secondary_menu %}
{% block tiles %}
{# Pinterest blocks style #}
{% if page.tile_one %}
<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          {% if page.tile_one or page.tile_two %}
            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                {{ page.tile_one }}
              </div>
              <div class=\"tile is-child notification is-warning\">
                {{ page.tile_two }}
              </div>
            </div>
          {% endif %}

          {% if page.tile_three %}
            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                {{ page.tile_three }}
              </div>
            </div>
          {% endif %}

        </div>

        {% if page.tile_four %}
          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              {{ page.tile_four }}
            </div>
          </div>
        {% endif %}

      </div>

      {% if page.tile_five %}
        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            {{ page.tile_five }}
          </div>
        </div>
      {% endif %}
    </div>
  </div>
</div>
{% endif %}
{% endblock tiles %}
{% block main %}
{# Main section #}
<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {{ page.highlighted }}
    {{ page.help }}

    <div class=\"columns is-centered\">
      {% block main_content %}
      {# Set attributes for content. #}
      {% if not page.content_attributes %}
      {%
        set page = page|merge({
          'content_attributes': create_attribute().addClass([
            'main-content',
            'column',
          ]),
        })
      %}
      {% endif %}
      {# Main content #}
      <div{{page.content_attributes}}>
        {{ page.content }}
      </div>
      {% endblock main_content %}
      {% block sidebar_first %}
      {# Sidebar first #}
      {% if page.sidebar_first %}
      {# Set attributes for content. #}
        {% if not page.sidebar_first_attributes %}
        {%
          set page = page|merge({
            'sidebar_first_attributes': create_attribute().addClass([
              'sidebar-first',
              'column',
              'is-2',
            ]),
          })
        %}
        {% endif %}
        <aside{{page.sidebar_first_attributes|without('role')}} role=\"complimentary\">
          {{ page.sidebar_first }}
        </aside>
      {% endif %}
      {% endblock sidebar_first %}
      {% block sidebar_second %}
      {# Sidebar second #}
      {% if page.sidebar_second %}
        {% if not page.sidebar_second_attributes %}
        {%
          set page = page|merge({
            'sidebar_second_attributes': create_attribute().addClass([
              'sidebar-second',
              'column',
              'is-2',
            ]),
          })
        %}
        {% endif %}
        <aside{{page.sidebar_second_attributes|without('role')}} role=\"complimentary>
          {{ page.sidebar_second }}
        </aside>
      {% endif %}
      {% endblock sidebar_second %}
    </div>

  </main>
</section>
{% endblock main %}
{% block bottom %}
{# Bottom second colored section #}
{% if page.bottom %}
<section class=\"hero is-info bsa\">
  <div class=\"container\">
    {{ page.bottom }}
  </div>
</section>
{% endif %}
{% endblock bottom %}

{% block footer %}
{% if page.footer %}
  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      {{ page.footer }}
    </div>
  </footer>
{% endif %}
{% endblock footer %}
", "themes/bulma/templates/system/page.html.twig", "/Applications/MAMP/htdocs/drupal_labb/themes/bulma/templates/system/page.html.twig");
    }
}
