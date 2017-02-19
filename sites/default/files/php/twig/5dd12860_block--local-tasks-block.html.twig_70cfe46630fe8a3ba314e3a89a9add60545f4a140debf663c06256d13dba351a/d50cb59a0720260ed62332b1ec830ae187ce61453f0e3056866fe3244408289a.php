<?php

/* themes/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_a0548ce94eb8275b6c89a3163038a2d9170b52bafd8fbcec2ff3571a95dc9937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715156c6bed7d19e5c433a0c65ab398713a1ae424ff3e3690a0922de83d56d82 = $this->env->getExtension("native_profiler");
        $__internal_715156c6bed7d19e5c433a0c65ab398713a1ae424ff3e3690a0922de83d56d82->enter($__internal_715156c6bed7d19e5c433a0c65ab398713a1ae424ff3e3690a0922de83d56d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715156c6bed7d19e5c433a0c65ab398713a1ae424ff3e3690a0922de83d56d82->leave($__internal_715156c6bed7d19e5c433a0c65ab398713a1ae424ff3e3690a0922de83d56d82_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_308d232760f9b2be06d50a82b19f75c86584d5245569ded8847ce1804504be2c = $this->env->getExtension("native_profiler");
        $__internal_308d232760f9b2be06d50a82b19f75c86584d5245569ded8847ce1804504be2c->enter($__internal_308d232760f9b2be06d50a82b19f75c86584d5245569ded8847ce1804504be2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_308d232760f9b2be06d50a82b19f75c86584d5245569ded8847ce1804504be2c->leave($__internal_308d232760f9b2be06d50a82b19f75c86584d5245569ded8847ce1804504be2c_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
