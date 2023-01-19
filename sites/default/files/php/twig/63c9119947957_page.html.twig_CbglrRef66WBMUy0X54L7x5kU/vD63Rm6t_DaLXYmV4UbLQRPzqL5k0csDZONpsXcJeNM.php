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

/* themes/custom/acs/templates/layout/page.html.twig */
class __TwigTemplate_b2c13c801024092fa29ea08de9ba017e57bd22c1f619cc9278192f81e10f5763 extends \Twig\Template
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
        // line 52
        echo "
<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    <div class=\"main-site-header\">
      <div  class=\"header\">
        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
      </div>  
    </div>    
</header>

<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content-\" id=\"content\" role=\"main\">
      <div class=\"Breadcrumbs\">
         ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Breadcrumbs", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"content\"> 
         ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
      </div>  
   </main>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div>
      ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
   </div>


</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 73,  62 => 67,  56 => 64,  45 => 56,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template.
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
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header_top: Items for the header top region.
 * - page.site_branding: Items (logo / site name / site slogan) for the site branding region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.search_box: Items for the full page search region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.content: The main content of the current page.
 * - page.content_top: Items for the content top region.
 * - page.content_bottom: Items for the content bottom region.
 * - page.sidebar_first: Items for the first / left sidebar.
 * - page.sidebar_second: Items for the second / right sidebar.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    <div class=\"main-site-header\">
      <div  class=\"header\">
        {{ page.header }}
      </div>  
    </div>    
</header>

<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content-\" id=\"content\" role=\"main\">
      <div class=\"Breadcrumbs\">
         {{ page.Breadcrumbs }}
      </div>
      <div class=\"content\"> 
         {{ page.content }}
      </div>  
   </main>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div>
      {{ page.footer}}
   </div>


</footer>", "themes/custom/acs/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
