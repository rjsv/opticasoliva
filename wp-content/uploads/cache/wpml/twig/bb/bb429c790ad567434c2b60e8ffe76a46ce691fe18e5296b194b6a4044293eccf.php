<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* attribute-translation.twig */
class __TwigTemplate_3b23745673d07f411015058dc65f2720b6103cee2fc6b04ffddd95f276a7dc69 extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (twig_test_empty(($context["attributes"] ?? null))) {
            // line 2
            echo "
    <p>";
            // line 3
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "no_attributes", []), "html", null, true);
            echo "</p>

";
        } else {
            // line 6
            echo "
\t<div class=\"wpml-loading-taxonomy\"><span class=\"spinner is-active\"></span>";
            // line 7
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "loading", []), "html", null, true);
            echo "</div>
\t<div class=\"wpml_taxonomy_loaded wcml_attributes_wrap\">
\t\t<h3 class=\"wcml-product-attributes-selector\">
\t\t\t<label>";
            // line 10
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "select_label", []), "html", null, true);
            echo "</label>
\t\t\t<select id=\"wcml_product_attributes\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 13
                echo "\t\t\t\t\t<option
\t\t\t\t\t\t\tvalue=\"pa_";
                // line 14
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "attribute_name", []), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t";
                // line 15
                if (($this->getAttribute($context["attribute"], "attribute_name", []) == $this->getAttribute(($context["selected_attribute"] ?? null), "attribute_name", []))) {
                    echo "selected=\"selected\"";
                }
                // line 16
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["attribute"], "attribute_name", []) == "")) {
                    echo "disabled=\"disabled\"";
                }
                // line 17
                echo "\t\t\t\t\t\t\t>
\t\t\t\t\t\t";
                // line 18
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "attribute_label", []), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</select>
\t\t</h3>
\t\t";
            // line 23
            echo ($context["translation_ui"] ?? null);
            echo "
\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "attribute-translation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  89 => 21,  80 => 18,  77 => 17,  72 => 16,  68 => 15,  64 => 14,  61 => 13,  57 => 12,  52 => 10,  46 => 7,  43 => 6,  37 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "attribute-translation.twig", "/home/opticaso/public_html/opticasoliva.pe/wp-content/plugins/woocommerce-multilingual/templates/attribute-translation.twig");
    }
}
