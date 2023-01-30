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

/* themes/custom/acs/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_505c92d55daa3c75f18c7a323888946d2f4acac5da3cb51f98e613596665929d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
<!--acs/block-content -->
<div class=\"main-search-block\" id=\"search\">
  ";
        // line 36
        echo "  <div class=\"block-content\">
  ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "  <p id=\"search-x\">
  <i class=\"fa-solid fa-xmark\"> </i>
  </p>
  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBreakpoint($this->env, $context), "html", null, true);
        echo "
  </div>
       <div class=\"popular-search\">
       <p> Popular Searches : </p> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/products\">Products </a> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/Service Parts\">Service Parts </a> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/Manuals\">Manuals </a> &nbsp;
      </div>
    </div>
</div> 




<!--/.block-content end -->
 ";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"search-bar-c\">
      <div class=\"search-bar-inside\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
        ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
        echo "
      </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  79 => 38,  75 => 37,  55 => 47,  50 => 44,  48 => 37,  45 => 36,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}

<!--acs/block-content -->
<div class=\"main-search-block\" id=\"search\">
  {# {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }} #}
  <div class=\"block-content\">
  {% block content %}
    <div class=\"search-bar-c\">
      <div class=\"search-bar-inside\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
        {{ content }}
      </div>
  {% endblock %}
  <p id=\"search-x\">
  <i class=\"fa-solid fa-xmark\"> </i>
  </p>
  {{ drupal_breakpoint() }}
  </div>
       <div class=\"popular-search\">
       <p> Popular Searches : </p> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/products\">Products </a> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/Service Parts\">Service Parts </a> &nbsp;
        <a class=\"serach-btns btn-s\"  href=\"/E-kart/Manuals\">Manuals </a> &nbsp;
      </div>
    </div>
</div> 




<!--/.block-content end -->
 ", "themes/custom/acs/templates/block/block--search-form-block.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\block\\block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 37);
        static $filters = array("escape" => 47);
        static $functions = array("drupal_breakpoint" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
                ['drupal_breakpoint']
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
