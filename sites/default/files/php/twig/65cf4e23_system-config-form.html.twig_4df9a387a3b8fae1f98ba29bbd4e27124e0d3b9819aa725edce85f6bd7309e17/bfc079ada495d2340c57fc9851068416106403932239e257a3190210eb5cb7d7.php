<?php

/* core/themes/stable/templates/admin/system-config-form.html.twig */
class __TwigTemplate_a3de12d384348d4230dfecf7e0fd16e60f1ee4a422825d4b5aabab2013979bd0 extends Twig_Template
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

        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a system settings form.
 *
 * This template will be used when a system config form specifies 'config_form'
 * as its #theme callback.  Otherwise, by default, system config forms will be
 * themed by form.html.twig. This does not alter the appearance of a form at all,
 * but is provided as a convenience for themers.
 *
 * Available variables:
 * - form: The confirm form.
 */
#}
{{ form }}
";
    }
}
