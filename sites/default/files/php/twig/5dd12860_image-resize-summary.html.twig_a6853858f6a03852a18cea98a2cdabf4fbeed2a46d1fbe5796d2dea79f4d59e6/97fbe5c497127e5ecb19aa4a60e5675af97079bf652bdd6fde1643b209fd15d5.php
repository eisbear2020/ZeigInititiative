<?php

/* core/themes/stable/templates/admin/image-resize-summary.html.twig */
class __TwigTemplate_b12820675eeda1ce0fe3c819817f913f62e01b8c5115d7d6ba5abcbed5be6fcd extends Twig_Template
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
        $__internal_23910ba1c38fee8d1f97b40f4cfa55f706223ca89a626dae11c3027c198a10a8 = $this->env->getExtension("native_profiler");
        $__internal_23910ba1c38fee8d1f97b40f4cfa55f706223ca89a626dae11c3027c198a10a8->enter($__internal_23910ba1c38fee8d1f97b40f4cfa55f706223ca89a626dae11c3027c198a10a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/image-resize-summary.html.twig"));

        $tags = array("if" => 16, "trans" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 16
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()))) {
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()), "html", null, true));
            echo "×";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()), "html", null, true));
        } else {
            // line 19
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array())) {
                // line 20
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 21
(isset($context["data"]) ? $context["data"] : null), "width", array()), ));
                // line 23
                echo "  ";
            } elseif ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array())) {
                // line 24
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 25
(isset($context["data"]) ? $context["data"] : null), "height", array()), ));
                // line 27
                echo "  ";
            }
        }
        
        $__internal_23910ba1c38fee8d1f97b40f4cfa55f706223ca89a626dae11c3027c198a10a8->leave($__internal_23910ba1c38fee8d1f97b40f4cfa55f706223ca89a626dae11c3027c198a10a8_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  64 => 25,  62 => 24,  59 => 23,  57 => 21,  55 => 20,  53 => 19,  48 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a summary of an image resize effect.*/
/*  **/
/*  * Available variables:*/
/*  * - data: The current configuration for this resize effect, including:*/
/*  *   - width: The width of the resized image.*/
/*  *   - height: The height of the resized image.*/
/*  * - effect: The effect information, including:*/
/*  *   - id: The effect identifier.*/
/*  *   - label: The effect name.*/
/*  *   - description: The effect description.*/
/*  *//* */
/* #}*/
/* {% if data.width and data.height -%}*/
/*   {{ data.width }}×{{ data.height }}*/
/* {%- else -%}*/
/*   {% if data.width %}*/
/*     {% trans %}*/
/*       width {{ data.width }}*/
/*     {% endtrans %}*/
/*   {% elseif data.height %}*/
/*     {% trans %}*/
/*       height {{ data.height }}*/
/*     {% endtrans %}*/
/*   {% endif %}*/
/* {%- endif %}*/
/* */
