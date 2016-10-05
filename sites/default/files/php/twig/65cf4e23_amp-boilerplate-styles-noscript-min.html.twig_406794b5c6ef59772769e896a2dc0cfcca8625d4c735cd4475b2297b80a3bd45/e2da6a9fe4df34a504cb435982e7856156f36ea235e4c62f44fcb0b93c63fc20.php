<?php

/* @amptheme/amp-css/amp-boilerplate-styles-noscript-min.html.twig */
class __TwigTemplate_608a4acbfbd5979c6a2c03d840d7ff08d0d751ed2c44654fd277e87fe6966fa3 extends Twig_Template
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

        // line 1
        echo "body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
";
    }

    public function getTemplateName()
    {
        return "@amptheme/amp-css/amp-boilerplate-styles-noscript-min.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
";
    }
}
