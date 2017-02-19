<?php

/* modules/token/templates/token-tree-link.html.twig */
class __TwigTemplate_f89211f9cb275b88d2dc985b34cf47ed9b06142178ff66600b542acd0ae80735 extends Twig_Template
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
        $__internal_0135b4102965c5d5cb960bbaabe53939c27c2bdcc4d17238d2a4e72deadd0e2a = $this->env->getExtension("native_profiler");
        $__internal_0135b4102965c5d5cb960bbaabe53939c27c2bdcc4d17238d2a4e72deadd0e2a->enter($__internal_0135b4102965c5d5cb960bbaabe53939c27c2bdcc4d17238d2a4e72deadd0e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/token/templates/token-tree-link.html.twig"));

        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 17
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        }
        
        $__internal_0135b4102965c5d5cb960bbaabe53939c27c2bdcc4d17238d2a4e72deadd0e2a->leave($__internal_0135b4102965c5d5cb960bbaabe53939c27c2bdcc4d17238d2a4e72deadd0e2a_prof);

    }

    public function getTemplateName()
    {
        return "modules/token/templates/token-tree-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the token tree link.*/
/*  **/
/*  * Available variables:*/
/*  * - url: The URL to the token tree page.*/
/*  * - text: The text to be displayed in the link.*/
/*  * - attributes: Attributes for the anchor tag.*/
/*  * - link: The complete link.*/
/*  **/
/*  * @see template_preprocess_token_tree_link()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if link -%}*/
/*   {{ link }}*/
/* {%- endif %}*/
/* */
