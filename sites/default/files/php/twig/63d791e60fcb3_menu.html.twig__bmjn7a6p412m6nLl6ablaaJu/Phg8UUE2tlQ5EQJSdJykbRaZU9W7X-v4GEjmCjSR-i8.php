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

/* themes/custom/acs/templates/menu/menu.html.twig */
class __TwigTemplate_5c0d4a43c65ae89b40a0629d5e58c49065b2155257f7b0e26916bed87d37be68 extends \Twig\Template
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
        // line 21
        echo "

";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "

 ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 26, $context, $this->getSourceContext()));
        echo "

";
        // line 55
        echo " 

";
    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "  ";
            $macros["menus"] = $this;
            // line 30
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 31
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 32
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 34
                    echo "      <ul class=\"submenu\">
    ";
                }
                // line 36
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "        ";
                    $context["item_classes"] = [0 => "menu-item", 1 => ("menu-item-level-" . (                    // line 39
($context["menu_level"] ?? null) + 1)), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 40
$context["item"], "in_active_trail", [], "any", false, false, true, 40)) ? ("menu-item-active") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "below", [], "any", false, false, true, 41)) ? ("menu-item-has-children") : (""))];
                    // line 44
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 44), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 45), 45, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 45), 45, $this->source)), "html", null, true);
                    echo "

          ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 47)) {
                        // line 48
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 48, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 50
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  123 => 50,  117 => 48,  115 => 47,  110 => 45,  105 => 44,  103 => 41,  102 => 40,  101 => 39,  99 => 37,  94 => 36,  90 => 34,  84 => 32,  81 => 31,  78 => 30,  75 => 29,  60 => 28,  54 => 55,  49 => 26,  45 => 24,  43 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 * Theme template file for main navigation is menu--main.html.twig
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}


{% import _self as menus %}


 {{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('menu') }}>
    {% else %}
      <ul class=\"submenu\">
    {% endif %}
      {% for item in items %}
        {% set item_classes = [
            'menu-item',
            'menu-item-level-' ~ (menu_level + 1),
            item.in_active_trail ? 'menu-item-active',
            item.below ? 'menu-item-has-children',
          ]
        %}
        <li{{ item.attributes.addClass(item_classes) }}>
          {{ link(item.title, item.url) }}

          {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          {% endif %}
        </li>
      {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
 

", "themes/custom/acs/templates/menu/menu.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\menu\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 28, "if" => 30, "for" => 36, "set" => 37);
        static $filters = array("escape" => 32);
        static $functions = array("link" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
