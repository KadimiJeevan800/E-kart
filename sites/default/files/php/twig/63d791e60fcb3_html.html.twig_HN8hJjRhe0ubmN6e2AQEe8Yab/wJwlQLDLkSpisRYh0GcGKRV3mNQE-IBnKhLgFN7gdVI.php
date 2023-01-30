<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/acs/templates/layout/html.html.twig */
class __TwigTemplate_4a69dce9384387d80152374dda940268ad19684eea9b942fb80bebbe40cd68aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 29
        $context["body_classes"] = [0 => (( !        // line 30
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), 1 => ((        // line 31
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), 2 => ((( !twig_get_attribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("no-sidebar") : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-left") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34))) ? ("one-sidebar sidebar-right") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 35
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 35) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 35))) ? ("two-sidebar") : (""))];
        // line 38
        echo "<!DOCTYPE html>
<html";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        echo "</title>
    ";
        // line 43
        if ((($context["google_font"] ?? null) == "local")) {
            // line 44
            echo "    <link rel=\"preload\" as=\"font\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            echo "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
            echo "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
            echo "/fonts/roboto-bold.woff2\" type=\"font/woff2\" crossorigin>
    ";
        } elseif ((        // line 47
($context["google_font"] ?? null) == "googlecdn")) {
            // line 48
            echo "    <link rel=\"preconnect\" href=\"//fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"//fonts.gstatic.com\" crossorigin>
    <link href=\"//fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">
    ";
        }
        // line 52
        echo "    <css-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 52, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 53, $this->source), "html", null, true);
        echo "\">
";
        // line 54
        if (($context["styling"] ?? null)) {
            // line 55
            echo "<style>
";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null), 56, $this->source));
            echo "
</style>
";
        }
        // line 59
        echo "  </head>
  <body";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">
    ";
        // line 65
        echo "   
    ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 66, $this->source), "html", null, true);
        echo "
    ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 67, $this->source), "html", null, true);
        echo "
    ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 68, $this->source), "html", null, true);
        echo "
   
    <js-bottom-placeholder token=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 70,  127 => 68,  123 => 67,  119 => 66,  116 => 65,  112 => 60,  109 => 59,  103 => 56,  100 => 55,  98 => 54,  94 => 53,  89 => 52,  83 => 48,  81 => 47,  77 => 46,  73 => 45,  68 => 44,  66 => 43,  62 => 42,  58 => 41,  53 => 39,  50 => 38,  48 => 35,  47 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 29,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
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
 *
 * @see template_preprocess_html()
 */
#}

{# Add class to body #}
{%
  set body_classes = [
    not root_path ? 'homepage' : 'site-page',
    node_type ? 'page-type-' ~ node_type|clean_class,
    not page.sidebar_first and not page.sidebar_second ? 'no-sidebar',
    page.sidebar_first and not page.sidebar_second ? 'one-sidebar sidebar-left',
    page.sidebar_second and not page.sidebar_first ? 'one-sidebar sidebar-right',
    page.sidebar_first and page.sidebar_second ? 'two-sidebar'
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    {% if google_font == 'local' %}
    <link rel=\"preload\" as=\"font\" href=\"{{ base_path ~ directory }}/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"{{ base_path ~ directory }}/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"{{ base_path ~ directory }}/fonts/roboto-bold.woff2\" type=\"font/woff2\" crossorigin>
    {% elseif google_font == 'googlecdn' %}
    <link rel=\"preconnect\" href=\"//fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"//fonts.gstatic.com\" crossorigin>
    <link href=\"//fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">
    {% endif %}
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
{% if styling %}
<style>
{{ styling_code | raw }}
</style>
{% endif %}
  </head>
  <body{{ attributes.addClass(body_classes) }}>
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
   
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
   
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
  </body>
</html>
", "themes/custom/acs/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 43);
        static $filters = array("clean_class" => 31, "escape" => 39, "safe_join" => 42, "raw" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
