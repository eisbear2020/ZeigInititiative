<?php

/* themes/bootstrap/templates/menu/menu-local-task.html.twig */
class __TwigTemplate_55a21537e8bfa95ba580ebb8f91eb23e7e467f2f46602a84a1b768e9e8f41b6b extends Twig_Template
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
        $__internal_a49fd3d81a6c0ad79aeaa7bc235c750485c4b135bfd932deecc3415e9fb63b0c = $this->env->getExtension("native_profiler");
        $__internal_a49fd3d81a6c0ad79aeaa7bc235c750485c4b135bfd932deecc3415e9fb63b0c->enter($__internal_a49fd3d81a6c0ad79aeaa7bc235c750485c4b135bfd932deecc3415e9fb63b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/menu/menu-local-task.html.twig"));

        $tags = array("set" => 19);
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

        // line 19
        $context["classes"] = array(0 => ((        // line 20
(isset($context["is_active"]) ? $context["is_active"] : null)) ? ("active") : ("")));
        // line 22
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_a49fd3d81a6c0ad79aeaa7bc235c750485c4b135bfd932deecc3415e9fb63b0c->leave($__internal_a49fd3d81a6c0ad79aeaa7bc235c750485c4b135bfd932deecc3415e9fb63b0c_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/menu/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 22,  47 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a local task link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - is_active: Whether the task item is an active tab.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * Note: This template renders the content for each task item in*/
/*  * menu-local-tasks.html.twig.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_menu_local_task()*/
/*  *//* */
/* #}*/
/* {% set classes = [*/
/*   is_active ? 'active',*/
/* ] %}*/
/* <li{{ attributes.addClass(classes) }}>{{ link }}</li>*/
/* */
