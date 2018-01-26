<?php

/* themes/iths-master/templates/paragraph--block.html.twig */
class __TwigTemplate_43fbd3c6d28cfa56665f01e41914b960c517ddbcf362be6cf259926b54fabfa2 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<div class=\"container\">
  <div class=\"column is-12 column-text\">
    <div class=\"block_text\">
      <div class=\"columns is-vcentered\">
        <div class=\"column is-8\">
          <h1>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_block_title", array()), "html", null, true));
        echo "</h1>
         <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_block_text", array()), "html", null, true));
        echo "</p></div>
        <div class=\"column\">
         <div class=\"button\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_block_button", array()), "html", null, true));
        echo "</div>
        </div>
      </div>
    </div>  
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/iths-master/templates/paragraph--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  54 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <div class=\"column is-12 column-text\">
    <div class=\"block_text\">
      <div class=\"columns is-vcentered\">
        <div class=\"column is-8\">
          <h1>{{content.field_block_title}}</h1>
         <p>{{content.field_block_text}}</p></div>
        <div class=\"column\">
         <div class=\"button\">{{ content.field_block_button }}</div>
        </div>
      </div>
    </div>  
  </div>
</div>", "themes/iths-master/templates/paragraph--block.html.twig", "/Applications/MAMP/htdocs/drupal_labb/themes/iths-master/templates/paragraph--block.html.twig");
    }
}
