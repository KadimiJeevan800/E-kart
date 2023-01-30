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

/* themes/custom/acs/templates/node/node--view--frontpage.html.twig */
class __TwigTemplate_d9833f382016012ba39d6a90d0181e0d0d1af0efd2af0e2667c9550cba359c1f extends \Twig\Template
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
        // line 1
        echo "
<!--acs/node-content -->
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acs/node"), "html", null, true);
        echo "

";
        // line 6
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "bundle", [], "any", false, false, true, 8), 8, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 9)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 10)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("node--unpublished") : ("")), 5 => ((        // line 12
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 12, $this->source)))) : ("")), 6 => "clearfix"];
        // line 16
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
  <header>
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 18, $this->source), "html", null, true);
        echo "
    ";
        // line 19
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 20
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 21, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 24
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 24, $this->source), "html", null, true);
        echo "
    ";
        // line 25
        if (($context["display_submitted"] ?? null)) {
            // line 26
            echo "      <div class=\"node__meta\">
        ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 27, $this->source), "html", null, true);
            echo "
        ";
            // line 33
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 33, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 36
        echo "  </header>
  <div";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "html", null, true);
        echo "
  </div>
</article>

<!--acs/node-content  end-->";
    }

    public function getTemplateName()
    {
        return "themes/custom/acs/templates/node/node--view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  104 => 37,  101 => 36,  94 => 33,  90 => 27,  87 => 26,  85 => 25,  80 => 24,  72 => 21,  67 => 20,  65 => 19,  61 => 18,  55 => 16,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 6,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!--acs/node-content -->
{{ attach_library('acs/node') }}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>
  <header>
    {{ title_prefix }}
    {% if label and not page %}
      <h2{{ title_attributes.addClass('node__title') }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
    {{ title_suffix }}
    {% if display_submitted %}
      <div class=\"node__meta\">
        {{ author_picture }}
        {# {% block submitted %}
          <em{{ author_attributes }}>
            {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
          </em>
        {% endblock %} #}
        {{ metadata }}
      </div>
    {% endif %}
  </header>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {{ content }}
  </div>
</article>

<!--acs/node-content  end-->", "themes/custom/acs/templates/node/node--view--frontpage.html.twig", "C:\\xampp\\htdocs\\E-kart\\themes\\custom\\acs\\templates\\node\\node--view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "if" => 19);
        static $filters = array("escape" => 3, "clean_class" => 8);
        static $functions = array("attach_library" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class'],
                ['attach_library']
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
