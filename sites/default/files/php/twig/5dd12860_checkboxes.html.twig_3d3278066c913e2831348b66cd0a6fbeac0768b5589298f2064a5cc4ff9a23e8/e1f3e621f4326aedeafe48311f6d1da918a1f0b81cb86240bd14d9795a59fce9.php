<?php

/* core/themes/classy/templates/form/checkboxes.html.twig */
class __TwigTemplate_d85c9fad581fba96701e26f3c7fa4366912189f181df77d88d80188d946833c1 extends Twig_Template
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
        $__internal_64869d1d1ac1df314dcaefe8bcead6c975742464e4161cb15bfc89191cb66fe2 = $this->env->getExtension("native_profiler");
        $__internal_64869d1d1ac1df314dcaefe8bcead6c975742464e4161cb15bfc89191cb66fe2->enter($__internal_64869d1d1ac1df314dcaefe8bcead6c975742464e4161cb15bfc89191cb66fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/checkboxes.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-checkboxes"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_64869d1d1ac1df314dcaefe8bcead6c975742464e4161cb15bfc89191cb66fe2->leave($__internal_64869d1d1ac1df314dcaefe8bcead6c975742464e4161cb15bfc89191cb66fe2_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'checkboxes' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered checkboxes.*/
/*  **/
/*  * @see template_preprocess_checkboxes()*/
/*  *//* */
/*  @todo: remove this file once https://www.drupal.org/node/1819284 is resolved.*/
/*  This is identical to core/modules/system/templates/container.html.twig*/
/* #}*/
/* <div{{ attributes.addClass('form-checkboxes') }}>{{ children }}</div>*/
/* */
