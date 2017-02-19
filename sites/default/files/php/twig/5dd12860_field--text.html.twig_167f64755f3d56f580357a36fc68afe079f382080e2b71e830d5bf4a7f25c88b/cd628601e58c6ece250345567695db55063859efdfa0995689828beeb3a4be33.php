<?php

/* core/themes/classy/templates/field/field--text.html.twig */
class __TwigTemplate_5d5f0087639e761910bfe6e0e771125a0a20f6388d0c55e22a0a9044dfd2ef78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field.html.twig", "core/themes/classy/templates/field/field--text.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdaf9762dbfb9ed31445b62777dc3827c06eec517549453868d20361fed74b32 = $this->env->getExtension("native_profiler");
        $__internal_bdaf9762dbfb9ed31445b62777dc3827c06eec517549453868d20361fed74b32->enter($__internal_bdaf9762dbfb9ed31445b62777dc3827c06eec517549453868d20361fed74b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--text.html.twig"));

        $tags = array("set" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 28
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix", 1 => "text-formatted"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdaf9762dbfb9ed31445b62777dc3827c06eec517549453868d20361fed74b32->leave($__internal_bdaf9762dbfb9ed31445b62777dc3827c06eec517549453868d20361fed74b32_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 28,  11 => 1,);
    }
}
/* {% extends "field.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a text field.*/
/*  **/
/*  * A 'clearfix' class is added, because 'text' fields have a 'format' property*/
/*  * that allows a Text Format to be associated with the entered text, which then*/
/*  * applies filtering on output. A common use case is to align images to the left*/
/*  * or right, and without this 'clearfix' class, such aligned images may be*/
/*  * rendered outside of the 'text' field formatter's boundaries, and hence*/
/*  * overlap with other fields. By setting the 'clearfix' class on all 'text'*/
/*  * fields, we prevent that.*/
/*  **/
/*  * @see https://www.drupal.org/node/2358529*/
/*  **/
/*  * A 'text-formatted' class is added to assist with default styling of base*/
/*  * elements such as paragraphs and lists that may not have classes assigned to*/
/*  * them. This allows user entered content to have default styling without*/
/*  * interfering with the styles of other UI components such as system generated*/
/*  * lists or other dynamic content.*/
/*  **/
/*  * @see https://www.drupal.org/node/2539860*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('clearfix', 'text-formatted') %}*/
/* */
