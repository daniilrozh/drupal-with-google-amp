<?php

/* themes/amptheme/templates/layout/html.html.twig */
class __TwigTemplate_972a06fdf24e999f1797e6dd96d61f1a7e09ab313b78f8d90c34917a7e2591b4 extends Twig_Template
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
        $tags = array("spaceless" => 32, "include" => 32, "if" => 41);
        $filters = array("raw" => 30, "safe_join" => 31);
        $functions = array("active_theme_path" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'include', 'if'),
                array('raw', 'safe_join'),
                array('active_theme_path')
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

        // line 27
        echo "<!doctype html>
<html amp";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <style amp-boilerplate>";
        // line 32
        ob_start();
        $this->loadTemplate("@amptheme/amp-css/amp-boilerplate-styles-min.html.twig", "themes/amptheme/templates/layout/html.html.twig", 32)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</style><noscript><style amp-boilerplate>";
        ob_start();
        $this->loadTemplate("@amptheme/amp-css/amp-boilerplate-styles-noscript-min.html.twig", "themes/amptheme/templates/layout/html.html.twig", 32)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</style></noscript>
    <style amp-custom>
      ";
        // line 34
        $this->loadTemplate(($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/templates/amp-css/amp-custom-styles.html.twig"), "themes/amptheme/templates/layout/html.html.twig", 34)->display($context);
        // line 35
        echo "    </style>
    ";
        // line 37
        echo "    <js-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <script async src=\"https://cdn.ampproject.org/v0.js\"></script>
  </head>
  <body";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 41
        if ((isset($context["amp_skip_link"]) ? $context["amp_skip_link"] : null)) {
            // line 42
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["amp_skip_link"]) ? $context["amp_skip_link"] : null), "html", null, true));
            echo "
    ";
        }
        // line 44
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/amptheme/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  99 => 45,  94 => 44,  88 => 42,  86 => 41,  82 => 40,  75 => 37,  72 => 35,  70 => 34,  59 => 32,  55 => 31,  51 => 30,  46 => 28,  43 => 27,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 * - amp_skip_link: Markup for skip link.
 *
 * @see template_preprocess_html()
 */
#}
<!doctype html>
<html amp{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <style amp-boilerplate>{% spaceless %}{% include '@amptheme/amp-css/amp-boilerplate-styles-min.html.twig' %}{% endspaceless %}</style><noscript><style amp-boilerplate>{% spaceless %}{% include '@amptheme/amp-css/amp-boilerplate-styles-noscript-min.html.twig' %}{% endspaceless %}</style></noscript>
    <style amp-custom>
      {% include active_theme_path() ~ '/templates/amp-css/amp-custom-styles.html.twig' %}
    </style>
    {# Only JS from an AMP library is processed in the placeholder. #}
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
    <script async src=\"https://cdn.ampproject.org/v0.js\"></script>
  </head>
  <body{{ attributes }}>
    {% if amp_skip_link %}
      {{ amp_skip_link }}
    {% endif %}
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
  </body>
</html>
";
    }
}
