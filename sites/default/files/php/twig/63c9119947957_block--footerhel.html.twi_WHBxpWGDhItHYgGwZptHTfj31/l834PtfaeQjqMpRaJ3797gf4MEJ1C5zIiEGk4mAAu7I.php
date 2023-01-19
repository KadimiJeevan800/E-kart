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

/* themes/custom/acs/templates/block/block--footerhel.html.twig */
class __TwigTemplate_9357bd9680d0c48050ec20a92c706373fe37a27081b479c8d352bd84c4c54f57 extends \Twig\Template
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
<div";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "block"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 31, $this->source), "html", null, true);
        echo "
  ";
        // line 32
        if (($context["label"] ?? null)) {
            // line 33
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 33, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 35
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 35, $this->source), "html", null, true);
        echo "
  <div class=\"Footer\">
  ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "  </div>
</div> 


";
        // line 117
        echo "

<!--/.block-content end -->
 ";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    
    <div class=\"footer-items\">
    ";
        // line 41
        echo "      <div class=\"footer-top-block\">
        <div class=\"footer-top-logo\">
          <a href=\"/E-kart/\"> ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_web_icon", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo " </a>
        </div>

        <div class=\"footer-top-social-links\">
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-facebook-f\"></i> </a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-youtube\"></i> </a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-twitter\"></i></a>
          </div>

        </div> 
      </div>
      ";
        // line 63
        echo "      <div class=\"footer-menu\">
        <div class=\"row\">
            ";
        // line 70
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer-menu"), "html", null, true);
        echo "
        </div>
      </div>
      ";
        // line 74
        echo "    <div class=\"copy-right\">
      <div class=\"row\">
         <div class=\"copy-right-text\"> 
         Copyright ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Helmer Scientific Inc.

         </div>
         <div class=\"copy-right-links\"> 
            <div class=\"copy-right-link\"> 
            <a href=\"/terms\">Terms of use </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/privacy\">Privacy Policy </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/sales\">Sales Terms & Conditions </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/contact\">Contact Us </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/phone\">800-743-5637 </a>
            </div>
         </div>
      </div>
   </div>

    </div>
  
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/block/block--footerhel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  128 => 74,  121 => 70,  117 => 63,  95 => 43,  91 => 41,  87 => 38,  83 => 37,  76 => 117,  70 => 103,  68 => 37,  62 => 35,  54 => 33,  52 => 32,  48 => 31,  44 => 30,  40 => 28,);
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
<div{{ attributes.addClass('block') }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  <div class=\"Footer\">
  {% block content %}
    
    <div class=\"footer-items\">
    {# footer top #}
      <div class=\"footer-top-block\">
        <div class=\"footer-top-logo\">
          <a href=\"/E-kart/\"> {{ content.field_footer_web_icon }} </a>
        </div>

        <div class=\"footer-top-social-links\">
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-facebook-f\"></i> </a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-youtube\"></i> </a>
          </div>
          <div class=\"footer-top-social-link\">
            <a href=\"\"><i class=\"fa-brands fa-twitter\"></i></a>
          </div>

        </div> 
      </div>
      {# Footer menu  #}
      <div class=\"footer-menu\">
        <div class=\"row\">
            {# <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div> #}
            {{ drupal_menu(\"footer-menu\") }}
        </div>
      </div>
      {# footer copy rights #}
    <div class=\"copy-right\">
      <div class=\"row\">
         <div class=\"copy-right-text\"> 
         Copyright {{ 'now'|date('Y') }} Helmer Scientific Inc.

         </div>
         <div class=\"copy-right-links\"> 
            <div class=\"copy-right-link\"> 
            <a href=\"/terms\">Terms of use </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/privacy\">Privacy Policy </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/sales\">Sales Terms & Conditions </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/contact\">Contact Us </a>
            </div>
            <div class=\"copy-right-link\"> 
            <a href=\"/phone\">800-743-5637 </a>
            </div>
         </div>
      </div>
   </div>

    </div>
  
  {% endblock %}
  </div>
</div> 


{# <div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div> #}


<!--/.block-content end -->
 ", "themes/custom/acs/templates/block/block--footerhel.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\block\\block--footerhel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "block" => 37);
        static $filters = array("escape" => 30, "date" => 77);
        static $functions = array("drupal_menu" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'date'],
                ['drupal_menu']
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
