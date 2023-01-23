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

/* themes/custom/acs/templates/menu/menu--extras--main.html.twig */
class __TwigTemplate_ea78127ffe47f92981ef3626951f5e35b3f83ff2489c2c373f9c289aae74ee6a extends \Twig\Template
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
        // line 57
        echo "



<div class=\"navbar\">
  ";
        // line 62
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 63
        echo "

  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 65, $context, $this->getSourceContext()));
        echo "

  ";
        // line 133
        echo "

</div>

  ";
        // line 162
        echo "



";
    }

    // line 67
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
            // line 68
            echo "    ";
            $macros["menus"] = $this;
            // line 69
            echo "      ";
            if (($context["items"] ?? null)) {
                // line 70
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "field_recent", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
          ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 72
                    echo "            ";
                    // line 73
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73)) {
                        // line 74
                        echo "          
            <div class=\"dropdown nav-items\">
            
              <li class=\"dropbtn\">";
                        // line 77
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77), 77, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 77), 77, $this->source)), "html", null, true);
                        echo "
              <i class=\"fa-solid fa-angle-right\" id=\"arrow\"></i>
              </li>
              

              ";
                        // line 83
                        echo "              ";
                        if (((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 83), "field_show_content", [], "any", false, false, true, 83)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) == "1")) {
                            // line 84
                            echo "                <div class=\"dropdown-content max-cont \">
                  ";
                            // line 86
                            echo "                  ";
                            // line 91
                            echo "                  <div class=\"grand-parent\">
                  <div class=\"recent-product-item\">
                    <h4> Recently Viewed product</h4>
                    ";
                            // line 94
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 94), "field_recent", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                            echo "
                    <a href=\"#\" id=\"rp-link\"> i.Series® Double Door Laboratory Refrigerator  </a>
                    
                  </div>
                ";
                        } else {
                            // line 99
                            echo "              <div class=\"dropdown-content fit-content\">
              
                <div class=\"grand-parent\">

              ";
                        }
                        // line 104
                        echo "              <div class=\"menu-items\">
              ";
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 105));
                        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                            // line 106
                            echo "                <div class=\"grand-parent-children\">
                
                <b class=\"parent\">";
                            // line 108
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, true, 108), 108, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["it"], "url", [], "any", false, false, true, 108), 108, $this->source)), "html", null, true);
                            echo " </b> 
                ";
                            // line 109
                            if (twig_get_attribute($this->env, $this->source, $context["it"], "below", [], "any", false, false, true, 109)) {
                                // line 110
                                echo "                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["it"], "below", [], "any", false, false, true, 110));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    // line 111
                                    echo "                    ";
                                    // line 112
                                    echo "                    ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, true, 112), 112, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["i"], "url", [], "any", false, false, true, 112), 112, $this->source)), "html", null, true);
                                    echo "
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 114
                                echo "                ";
                            }
                            // line 115
                            echo "                </div>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 117
                        echo "              </div>
              </div>
                 
            </div>
          </div>

              
        ";
                        // line 125
                        echo "        ";
                    } else {
                        // line 126
                        echo "          <div class=\"nav-items\">
            ";
                        // line 127
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 127), 127, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 127), 127, $this->source)), "html", null, true);
                        echo "
          </div>
         ";
                    }
                    // line 130
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/menu/menu--extras--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 131,  214 => 130,  208 => 127,  205 => 126,  202 => 125,  193 => 117,  186 => 115,  183 => 114,  174 => 112,  172 => 111,  167 => 110,  165 => 109,  161 => 108,  157 => 106,  153 => 105,  150 => 104,  143 => 99,  135 => 94,  130 => 91,  128 => 86,  125 => 84,  122 => 83,  114 => 77,  109 => 74,  106 => 73,  104 => 72,  100 => 71,  95 => 70,  92 => 69,  89 => 68,  74 => 67,  66 => 162,  60 => 133,  55 => 65,  51 => 63,  49 => 62,  42 => 57,  39 => 21,);
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

{# 
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
        </li>

          {% if item.below %}
            <div class=\"show\" id=\"show\"> 
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            </div>
          {% endif %}
      {% endfor %}
    </ul>
  {% endif %}
{% endmacro %} #}




<div class=\"navbar\">
  {% import _self as menus %}


  {{ menus.menu_links(items, attributes, 0) }}

  {% macro menu_links(items, attributes, menu_level) %}
    {% import _self as menus %}
      {% if items %}
        {{item.field_recent}}
          {% for item in items %}
            {# li elements with children #}
            {% if item.below %}
          
            <div class=\"dropdown nav-items\">
            
              <li class=\"dropbtn\">{{ link(item.title, item.url) }}
              <i class=\"fa-solid fa-angle-right\" id=\"arrow\"></i>
              </li>
              

              {# {{ dump(item.content.field_show_content[0][\"#markup\"]) }} #}
              {% if (item.content.field_show_content[0][\"#markup\"]) == '1'  %}
                <div class=\"dropdown-content max-cont \">
                  {# <div class=\"max-cont\"> #}
                  {# <div class=\"recent-product-item\" >
                    <h4> Recently Viewed product</h4>
                    {{ item.content.field_recent }}
                    <a href=\"#\" id=\"rp-link\"> i.Series® Double Door Laboratory Refrigerator  </a>
                  </div> #}
                  <div class=\"grand-parent\">
                  <div class=\"recent-product-item\">
                    <h4> Recently Viewed product</h4>
                    {{ item.content.field_recent }}
                    <a href=\"#\" id=\"rp-link\"> i.Series® Double Door Laboratory Refrigerator  </a>
                    
                  </div>
                {% else %}
              <div class=\"dropdown-content fit-content\">
              
                <div class=\"grand-parent\">

              {% endif  %}
              <div class=\"menu-items\">
              {% for it in item.below %}
                <div class=\"grand-parent-children\">
                
                <b class=\"parent\">{{ link(it.title, it.url) }} </b> 
                {% if it.below %}
                    {% for i in it.below %}
                    {# <p class=\"parent-children\"> {{ link(i.title, i.url) }} </p>   #}
                    {{ link(i.title, i.url) }}
                    {% endfor %}
                {% endif %}
                </div>
              {% endfor %}
              </div>
              </div>
                 
            </div>
          </div>

              
        {# list items with no children   #}
        {% else %}
          <div class=\"nav-items\">
            {{ link(item.title, item.url) }}
          </div>
         {% endif %}
      {% endfor %}
  {% endif %}
{% endmacro %}


</div>

  {#
   <div class=\"dropdown\">
            
            <li class=\"dropbtn\">{{ link(item.title, item.url) }} 
            </li>
            <div class=\"dropdown-content\">
                 <div class=\"grand-parent\">
                 {% for it in item.below %}
                 
                   <div class=\"parent\"><a>{{ link(it.title, it.url) }} </a> </div>
                    {% if it.below %}
                    <div class=\"children\">
                       {% for i in it.below %}
                        <a>{{ link(i.title, i.url) }} </a> 
                       {% endfor %}
                     </div>
                    {% endif %}
                  
                 {% endfor %}
                 </div>
            </div>
          </div>
  
  
   #}




{# changes.txt we have the content #}", "themes/custom/acs/templates/menu/menu--extras--main.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\menu\\menu--extras--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 62, "macro" => 67, "if" => 69, "for" => 71);
        static $filters = array("escape" => 70);
        static $functions = array("link" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
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
