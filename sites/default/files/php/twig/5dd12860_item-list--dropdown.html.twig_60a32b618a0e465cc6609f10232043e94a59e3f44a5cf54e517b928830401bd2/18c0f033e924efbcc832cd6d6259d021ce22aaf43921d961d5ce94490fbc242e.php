<?php

/* themes/bootstrap/templates/bootstrap/item-list--dropdown.html.twig */
class __TwigTemplate_7b6c021515778c80cac6a78642caeafdb1486ba67b84452fbe7e3b640b095d37 extends Twig_Template
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
        $__internal_a8a83e16c9d8d25b796423b9cfe5956cf8f0430b92f0d7449a89dc310a251b54 = $this->env->getExtension("native_profiler");
        $__internal_a8a83e16c9d8d25b796423b9cfe5956cf8f0430b92f0d7449a89dc310a251b54->enter($__internal_a8a83e16c9d8d25b796423b9cfe5956cf8f0430b92f0d7449a89dc310a251b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/bootstrap/item-list--dropdown.html.twig"));

        $tags = array("set" => 26, "if" => 32, "for" => 35);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
                array()
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

        // line 26
        $context["classes"] = array(0 => "dropdown-menu", 1 => (((        // line 28
(isset($context["alignment"]) ? $context["alignment"] : null) == "left")) ? ("dropdown-menu-left") : ("")), 2 => (((        // line 29
(isset($context["alignment"]) ? $context["alignment"] : null) == "right")) ? ("dropdown-menu-right") : ("")));
        // line 32
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 33
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo " role=\"menu\">";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 36
                    echo "<li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true));
                echo ">";
            } else {
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            }
        }
        
        $__internal_a8a83e16c9d8d25b796423b9cfe5956cf8f0430b92f0d7449a89dc310a251b54->leave($__internal_a8a83e16c9d8d25b796423b9cfe5956cf8f0430b92f0d7449a89dc310a251b54_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/bootstrap/item-list--dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  73 => 38,  63 => 36,  59 => 35,  54 => 34,  52 => 33,  50 => 32,  48 => 29,  47 => 28,  46 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an item list.*/
/*  **/
/*  * Available variables:*/
/*  * - alignment: (optional) The alignment of the dropdown menu.*/
/*  * - items: A list of items. Each item contains:*/
/*  *   - attributes: HTML attributes to be applied to each list item.*/
/*  *   - value: The content of the list element.*/
/*  * - title: The title of the list.*/
/*  * - list_type: The tag for list element ("ul" or "ol").*/
/*  * - wrapper_attributes: HTML attributes to be applied to the list wrapper.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - empty: A message to display when there are no items. Allowed value is a*/
/*  *   string or render array.*/
/*  * - context: A list of contextual data associated with the list. May contain:*/
/*  *   - list_style: The custom list style.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_item_list()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'dropdown-menu',*/
/*     alignment == 'left' ? 'dropdown-menu-left',*/
/*     alignment == 'right' ? 'dropdown-menu-right',*/
/*   ]*/
/* %}*/
/* {% if items or empty -%}*/
/*   {%- if items -%}*/
/*     <{{ list_type }}{{ attributes.addClass(classes) }} role="menu">*/
/*       {%- for item in items -%}*/
/*         <li{{ item.attributes }}>{{ item.value }}</li>*/
/*       {%- endfor -%}*/
/*     </{{ list_type }}>*/
/*   {%- else -%}*/
/*     {{- empty -}}*/
/*   {%- endif -%}*/
/* {%- endif %}*/
/* */
