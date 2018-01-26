<?php

/* themes/iths-master/templates/page--node.html.twig */
class __TwigTemplate_3b6274e522ced43313a7c6e0bebdd35b01defc6caddd580386c6fe7d8f63c5e1 extends Twig_Template
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
            'main' => array($this, 'block_main'),
            'main_content' => array($this, 'block_main_content'),
            'bottom' => array($this, 'block_bottom'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 56, "if" => 57, "set" => 138);
        $filters = array("merge" => 138);
        $functions = array("create_attribute" => 139);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set'),
                array('merge'),
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
        echo "

";
        // line 124
        $this->displayBlock('main', $context, $blocks);
        // line 157
        $this->displayBlock('bottom', $context, $blocks);
        // line 169
        echo "
";
        // line 170
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

    // line 124
    public function block_main($context, array $blocks = array())
    {
        // line 126
        echo "<section class=\"section\">
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 129
        echo "
    ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

    <div class=\"columns is-centered\">
      ";
        // line 134
        $this->displayBlock('main_content', $context, $blocks);
        // line 151
        echo "      
    </div>

  </main>
</section>
";
    }

    // line 134
    public function block_main_content($context, array $blocks = array())
    {
        // line 135
        echo "      ";
        // line 136
        echo "      ";
        if ( !$this->getAttribute(($context["page"] ?? null), "content_attributes", array())) {
            // line 137
            echo "      ";
            // line 138
            $context["page"] = twig_array_merge(($context["page"] ?? null), array("content_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "main-content", 1 => "column")), "method")));
            // line 145
            echo "      ";
        }
        // line 146
        echo "      ";
        // line 147
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_attributes", array()), "html", null, true));
        echo ">
        ";
        // line 148
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>
      ";
    }

    // line 157
    public function block_bottom($context, array $blocks = array())
    {
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 160
            echo "<section class=\"hero is-info bsa bottom\">
  <div class=\"container\">
    <div class=\"columns\">
      ";
            // line 163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
    </div>
  </div>
</section>
";
        }
    }

    // line 170
    public function block_footer($context, array $blocks = array())
    {
        // line 171
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 172
            echo "  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/iths-master/templates/page--node.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  300 => 174,  296 => 172,  294 => 171,  291 => 170,  281 => 163,  276 => 160,  274 => 159,  271 => 157,  264 => 148,  259 => 147,  257 => 146,  254 => 145,  252 => 138,  250 => 137,  247 => 136,  245 => 135,  242 => 134,  233 => 151,  231 => 134,  225 => 131,  221 => 130,  218 => 129,  214 => 126,  211 => 124,  207 => 119,  200 => 115,  196 => 113,  193 => 112,  191 => 111,  188 => 110,  184 => 109,  175 => 103,  171 => 101,  165 => 99,  163 => 98,  159 => 97,  153 => 93,  151 => 92,  148 => 91,  145 => 90,  140 => 120,  137 => 110,  135 => 90,  132 => 89,  129 => 88,  121 => 83,  115 => 81,  112 => 80,  106 => 77,  102 => 75,  100 => 74,  91 => 67,  85 => 64,  82 => 63,  80 => 62,  75 => 59,  73 => 57,  70 => 56,  66 => 170,  63 => 169,  61 => 157,  59 => 124,  55 => 122,  53 => 88,  51 => 56,);
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


{% block main %}
{# Main section #}
<section class=\"section\">
  <main role=\"main\">
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
      
    </div>

  </main>
</section>
{% endblock main %}
{% block bottom %}
{# Bottom second colored section #}
{% if page.bottom %}
<section class=\"hero is-info bsa bottom\">
  <div class=\"container\">
    <div class=\"columns\">
      {{ page.bottom }}
    </div>
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
", "themes/iths-master/templates/page--node.html.twig", "/Applications/MAMP/htdocs/drupal_labb/themes/iths-master/templates/page--node.html.twig");
    }
}
