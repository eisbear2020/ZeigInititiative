<?php

/* core/themes/classy/templates/field/file-link.html.twig */
class __TwigTemplate_26d3cc1206bf2933ea9f3c15c298a0e0a841f0cb7e30e95b7f283cbefb89aa1d extends Twig_Template
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
        $__internal_fc54cdfc247840026bd7908d285a773d5c9a9cb453a55413e55f0d5c7db7f55f = $this->env->getExtension("native_profiler");
        $__internal_fc54cdfc247840026bd7908d285a773d5c9a9cb453a55413e55f0d5c7db7f55f->enter($__internal_fc54cdfc247840026bd7908d285a773d5c9a9cb453a55413e55f0d5c7db7f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/file-link.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
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

        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/file"), "html", null, true));
        echo "
<span";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</span>
";
        
        $__internal_fc54cdfc247840026bd7908d285a773d5c9a9cb453a55413e55f0d5c7db7f55f->leave($__internal_fc54cdfc247840026bd7908d285a773d5c9a9cb453a55413e55f0d5c7db7f55f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a link to a file.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: The HTML attributes for the containing element.*/
/*  * - link: A link to the file.*/
/*  * - icon: The icon image representing the file type.*/
/*  **/
/*  * @see template_preprocess_file_link()*/
/*  *//* */
/* #}*/
/* {{ attach_library('classy/file') }}*/
/* <span{{ attributes }}>{{ icon }} {{ link }}</span>*/
/* */
