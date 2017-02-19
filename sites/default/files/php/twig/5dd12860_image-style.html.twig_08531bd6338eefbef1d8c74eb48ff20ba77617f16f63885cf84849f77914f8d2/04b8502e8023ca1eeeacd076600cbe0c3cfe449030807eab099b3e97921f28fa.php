<?php

/* core/modules/image/templates/image-style.html.twig */
class __TwigTemplate_995cc00a03925ac715fad0da22163d349d0ab3f62576422539de701f85f8604c extends Twig_Template
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
        $__internal_12595b226c08d0990db77f15bfd975795de667af5d4f4a362ce0fd9cf7d2cf0d = $this->env->getExtension("native_profiler");
        $__internal_12595b226c08d0990db77f15bfd975795de667af5d4f4a362ce0fd9cf7d2cf0d->enter($__internal_12595b226c08d0990db77f15bfd975795de667af5d4f4a362ce0fd9cf7d2cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/image/templates/image-style.html.twig"));

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

        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
";
        
        $__internal_12595b226c08d0990db77f15bfd975795de667af5d4f4a362ce0fd9cf7d2cf0d->leave($__internal_12595b226c08d0990db77f15bfd975795de667af5d4f4a362ce0fd9cf7d2cf0d_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an image using a specific image style.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the image, including the following:*/
/*  *   - src: Full URL or relative path to the image file.*/
/*  *   - class: One or more classes to be applied to the image.*/
/*  *   - width: The width of the image (if known).*/
/*  *   - height: The height of the image (if known).*/
/*  *   - title: The title of the image.*/
/*  *   - alt: The alternative text for the image.*/
/*  **/
/*  * @see template_preprocess_image_style()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* */
