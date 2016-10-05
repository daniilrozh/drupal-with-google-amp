<?php

/* themes/ampsubtheme_example/templates/navigation/amp-skip-link.html.twig */
class __TwigTemplate_035f96e644a8f7269d2ac6b4918dd9f81981b723af2a125f43f1be0f4fd51b57 extends Twig_Template
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
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        echo "<a href=\"#main-content\" class=\"visually-hidden focusable amp-skip-link\">
  ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["skiptext"]) ? $context["skiptext"] : null), "html", null, true));
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/ampsubtheme_example/templates/navigation/amp-skip-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override of a skip link.
 *
 * Available variables:
 * - skiptext: Text for the skip link.
 */
#}
<a href=\"#main-content\" class=\"visually-hidden focusable amp-skip-link\">
  {{ skiptext }}
</a>
";
    }
}
