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

/* themes/custom/acs/templates/block/block--header23-2.html.twig */
class __TwigTemplate_ee59e699270ece012c22f8c91dd8c47ce4d7aef9519f4ecfbc273f97fc8b7d7f extends \Twig\Template
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
        // line 1
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "block"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ">
\t";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 2, $this->source), "html", null, true);
        echo "
\t";
        // line 3
        if (($context["label"] ?? null)) {
            // line 4
            echo "\t\t<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 4, $this->source), "html", null, true);
            echo "</h2>
\t";
        }
        // line 6
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 6, $this->source), "html", null, true);
        echo "
\t<div class=\"block-content\">
\t\t";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "\t</div>
</div>
<div class=\"mobile-wrap\" id=\"mobile-v\">
  <div id=\"mobilev\">
\t";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main"), "html", null, true);
        echo "
\t";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("header-2023"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
\t\t\t<div class=\"header-block-items\">
\t\t\t\t";
        // line 12
        echo "\t\t\t\t";
        // line 22
        echo "
\t\t\t\t";
        // line 24
        echo "
\t\t\t\t";
        // line 29
        echo "\t\t\t\t<div class=\"container menu-toggler\" id=\"toggle\" onclick=\"myFunction(this)\">
  \t\t\t\t\t<div class=\"bar1\"></div>
\t\t\t\t\t<div class=\"bar2\"></div>
\t\t\t\t\t<div class=\"bar3\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"site-header-logo\">
\t\t\t\t\t<a href=\"/E-kart\">
\t\t\t\t\t\t";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header_logo", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 41
        echo "
\t\t\t\t<div class=\"site-header-menu-items\">
\t\t\t\t\t<div class=\"header-secondary-menu\">
\t\t\t\t\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("header-2023"), "html", null, true);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"header-primary-menu \">

\t\t\t\t\t\t<div class=\"site-header-primary-menu\">
\t\t\t\t\t\t\t";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("main"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t<div class=\"site-header-icons\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"search-btn\"><a href=\"#\"><i class=\"fa-solid fa-magnifying-glass\"></i></a></li>

\t\t\t\t\t\t\t\t<li id=\"user-account\"><a href=\"/E-kart/user/login\"><i class=\"fa-solid fa-circle-user\"></i></a></li>

\t\t\t\t\t\t\t\t<li id=\"cart-btn\"><a href=\"/E-kart/cart\"><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>


\t\t\t</div>


\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/block/block--header23-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  131 => 50,  122 => 44,  117 => 41,  111 => 37,  101 => 29,  98 => 24,  95 => 22,  93 => 12,  89 => 9,  85 => 8,  77 => 77,  73 => 76,  67 => 72,  65 => 8,  59 => 6,  51 => 4,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{attributes.addClass('block')}}>
\t{{ title_prefix }}
\t{% if label %}
\t\t<h2{{title_attributes.addClass('block-title')}}>{{ label }}</h2>
\t{% endif %}
\t{{ title_suffix }}
\t<div class=\"block-content\">
\t\t{% block content %}

\t\t\t<div class=\"header-block-items\">
\t\t\t\t{# <div class=\"site-header-logo\"> #}
\t\t\t\t{# <div class=\"topnav mobile\" id=\"myTopnavm\">
\t\t\t\t\t\t <div class=\"topnav-links \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               
\t\t\t\t\t\t\t\t\t{{ drupal_menu('main')}}
\t\t\t\t\t\t\t\t\t {{ drupal_menu(\"header-2023\") }}
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>   
\t\t\t\t</div> #}

\t\t\t\t{# Hamberger Menu Button Creation  #}

\t\t\t\t{# <div class=\"menu-toggler\" id=\"toggle\"> 
\t\t\t\t\t<i class=\"fa-solid fa-bars active\" id=\"1\"></i>
\t\t\t\t\t<i class=\"fa-solid fa-times d-none \" id=\"2\"></i>
\t\t\t\t</div> #}
\t\t\t\t<div class=\"container menu-toggler\" id=\"toggle\" onclick=\"myFunction(this)\">
  \t\t\t\t\t<div class=\"bar1\"></div>
\t\t\t\t\t<div class=\"bar2\"></div>
\t\t\t\t\t<div class=\"bar3\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"site-header-logo\">
\t\t\t\t\t<a href=\"/E-kart\">
\t\t\t\t\t\t{{ content.field_header_logo }}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{# </div> #}

\t\t\t\t<div class=\"site-header-menu-items\">
\t\t\t\t\t<div class=\"header-secondary-menu\">
\t\t\t\t\t\t{{ drupal_menu(\"header-2023\") }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"header-primary-menu \">

\t\t\t\t\t\t<div class=\"site-header-primary-menu\">
\t\t\t\t\t\t\t{{  drupal_menu(\"main\") }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# <span id=\"line-br\"></span> #}
\t\t\t\t\t\t<div class=\"site-header-icons\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"search-btn\"><a href=\"#\"><i class=\"fa-solid fa-magnifying-glass\"></i></a></li>

\t\t\t\t\t\t\t\t<li id=\"user-account\"><a href=\"/E-kart/user/login\"><i class=\"fa-solid fa-circle-user\"></i></a></li>

\t\t\t\t\t\t\t\t<li id=\"cart-btn\"><a href=\"/E-kart/cart\"><i class=\"fa-solid fa-cart-shopping\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>


\t\t\t</div>


\t\t{% endblock %}
\t</div>
</div>
<div class=\"mobile-wrap\" id=\"mobile-v\">
  <div id=\"mobilev\">
\t{{  drupal_menu(\"main\") }}
\t{{ drupal_menu(\"header-2023\") }}
  </div>
</div>
", "themes/custom/acs/templates/block/block--header23-2.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\block\\block--header23-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "block" => 8);
        static $filters = array("escape" => 1);
        static $functions = array("drupal_menu" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
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
