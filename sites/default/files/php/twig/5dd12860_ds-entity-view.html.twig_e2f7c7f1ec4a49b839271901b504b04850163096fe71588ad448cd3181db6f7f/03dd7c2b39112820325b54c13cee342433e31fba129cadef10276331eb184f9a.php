<?php

/* modules/ds/templates/ds-entity-view.html.twig */
class __TwigTemplate_0bcd8cb53aae9138b952e76100246ef9a129c6d007a1923eac3ebe71a56ec3e8 extends Twig_Template
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
        $__internal_a5ad587d1d346529aefd0e91b25c83dbb0ffbf74a6fef6a2c1d48141f92be761 = $this->env->getExtension("native_profiler");
        $__internal_a5ad587d1d346529aefd0e91b25c83dbb0ffbf74a6fef6a2c1d48141f92be761->enter($__internal_a5ad587d1d346529aefd0e91b25c83dbb0ffbf74a6fef6a2c1d48141f92be761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/ds/templates/ds-entity-view.html.twig"));

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

        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_a5ad587d1d346529aefd0e91b25c83dbb0ffbf74a6fef6a2c1d48141f92be761->leave($__internal_a5ad587d1d346529aefd0e91b25c83dbb0ffbf74a6fef6a2c1d48141f92be761_prof);

    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-entity-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Entity View*/
/*  **/
/*  * Available variables:*/
/*  * - content: The render array which contains the layout*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
