<?php

/* themes/bootstrap_subtheme_cdn/templates/page.html.twig */
class __TwigTemplate_46692a556ba83b5a855f798b6c9fe6eced883bdad96a60a98290a1728d5b8b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'center_left' => array($this, 'block_center_left'),
            'center_right' => array($this, 'block_center_right'),
            'bottom_long' => array($this, 'block_bottom_long'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61fabd759aa74565ff294ed645320f43fc68e9e29fa7dd6073eb77da04d2aeea = $this->env->getExtension("native_profiler");
        $__internal_61fabd759aa74565ff294ed645320f43fc68e9e29fa7dd6073eb77da04d2aeea->enter($__internal_61fabd759aa74565ff294ed645320f43fc68e9e29fa7dd6073eb77da04d2aeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_subtheme_cdn/templates/page.html.twig"));

        $tags = array("if" => 61, "block" => 62, "set" => 70);
        $filters = array("clean_class" => 79, "t" => 91);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('clean_class', 't'),
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

        // line 59
        echo "
";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array())) {
            // line 62
            echo "  ";
            $this->displayBlock('logo', $context, $blocks);
        }
        // line 68
        echo "

";
        // line 70
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 71
        echo "
";
        // line 73
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 74
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 111
        echo "
";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 228
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_61fabd759aa74565ff294ed645320f43fc68e9e29fa7dd6073eb77da04d2aeea->leave($__internal_61fabd759aa74565ff294ed645320f43fc68e9e29fa7dd6073eb77da04d2aeea_prof);

    }

    // line 62
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ab8e1ab1a9df481a971f291f71549e70eb68a7d282fd3063d275757178e90715 = $this->env->getExtension("native_profiler");
        $__internal_ab8e1ab1a9df481a971f291f71549e70eb68a7d282fd3063d275757178e90715->enter($__internal_ab8e1ab1a9df481a971f291f71549e70eb68a7d282fd3063d275757178e90715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 63
        echo "    <div class=\"container\" role=\"logo\">
        ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array()), "html", null, true));
        echo "
    </div>
  ";
        
        $__internal_ab8e1ab1a9df481a971f291f71549e70eb68a7d282fd3063d275757178e90715->leave($__internal_ab8e1ab1a9df481a971f291f71549e70eb68a7d282fd3063d275757178e90715_prof);

    }

    // line 74
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_b0f381ddaedf33c957459d590b511f228c31780fb3189a94aaa24b5855347a22 = $this->env->getExtension("native_profiler");
        $__internal_b0f381ddaedf33c957459d590b511f228c31780fb3189a94aaa24b5855347a22->enter($__internal_b0f381ddaedf33c957459d590b511f228c31780fb3189a94aaa24b5855347a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 75
        echo "    ";
        // line 76
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 78
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 79
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 82
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 83
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 84
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 86
        echo "      <div class=\"navbar-header\">
        ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 89
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 90
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 97
        echo "      </div>

      ";
        // line 100
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 101
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 105
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 106
            echo "        </div>
      ";
        }
        // line 108
        echo "    </header>
  ";
        
        $__internal_b0f381ddaedf33c957459d590b511f228c31780fb3189a94aaa24b5855347a22->leave($__internal_b0f381ddaedf33c957459d590b511f228c31780fb3189a94aaa24b5855347a22_prof);

    }

    // line 113
    public function block_main($context, array $blocks = array())
    {
        $__internal_df85b64ef7777e2e05045d545f38e4c077e8f0cb5d34018905ae1aee591b5f3c = $this->env->getExtension("native_profiler");
        $__internal_df85b64ef7777e2e05045d545f38e4c077e8f0cb5d34018905ae1aee591b5f3c->enter($__internal_df85b64ef7777e2e05045d545f38e4c077e8f0cb5d34018905ae1aee591b5f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 114
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 118
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 119
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 124
            echo "      ";
        }
        // line 125
        echo "
      ";
        // line 127
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 128
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 133
            echo "      ";
        }
        // line 134
        echo "


      ";
        // line 138
        echo "      ";
        // line 139
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 140
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 141
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 146
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">


        ";
        // line 150
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "



        ";
        // line 161
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 162
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 165
            echo "        ";
        }
        // line 166
        echo "
        ";
        // line 168
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 169
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 175
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 176
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 179
            echo "        ";
        }
        // line 180
        echo "
        ";
        // line 182
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 187
        echo "

      ";
        // line 190
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "center_left", array())) {
            // line 191
            echo "          ";
            $this->displayBlock('center_left', $context, $blocks);
            // line 194
            echo "        ";
        }
        // line 195
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "center_right", array())) {
            // line 196
            echo "        ";
            $this->displayBlock('center_right', $context, $blocks);
            // line 199
            echo "      ";
        }
        // line 200
        echo "
      ";
        // line 202
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_long", array())) {
            // line 203
            echo "          ";
            $this->displayBlock('bottom_long', $context, $blocks);
            // line 207
            echo "      ";
        }
        // line 208
        echo "



      </section>


      ";
        // line 216
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 217
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 222
            echo "      ";
        }
        // line 223
        echo "    </div>
  </div>
";
        
        $__internal_df85b64ef7777e2e05045d545f38e4c077e8f0cb5d34018905ae1aee591b5f3c->leave($__internal_df85b64ef7777e2e05045d545f38e4c077e8f0cb5d34018905ae1aee591b5f3c_prof);

    }

    // line 119
    public function block_header($context, array $blocks = array())
    {
        $__internal_4efb71ece5ef00f25d3768c8f5d434afb19c2820c253a65c7bad1f5f0e4b7d24 = $this->env->getExtension("native_profiler");
        $__internal_4efb71ece5ef00f25d3768c8f5d434afb19c2820c253a65c7bad1f5f0e4b7d24->enter($__internal_4efb71ece5ef00f25d3768c8f5d434afb19c2820c253a65c7bad1f5f0e4b7d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 120
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_4efb71ece5ef00f25d3768c8f5d434afb19c2820c253a65c7bad1f5f0e4b7d24->leave($__internal_4efb71ece5ef00f25d3768c8f5d434afb19c2820c253a65c7bad1f5f0e4b7d24_prof);

    }

    // line 128
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_c49bb5d5c10572e1b128c23b8c61dda9f692cf2b15febec525983697adf52314 = $this->env->getExtension("native_profiler");
        $__internal_c49bb5d5c10572e1b128c23b8c61dda9f692cf2b15febec525983697adf52314->enter($__internal_c49bb5d5c10572e1b128c23b8c61dda9f692cf2b15febec525983697adf52314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 129
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_c49bb5d5c10572e1b128c23b8c61dda9f692cf2b15febec525983697adf52314->leave($__internal_c49bb5d5c10572e1b128c23b8c61dda9f692cf2b15febec525983697adf52314_prof);

    }

    // line 151
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_7ca6a92e96d0a96960838d648dc953bf204bbc6518567755af9c74f076fb2a5b = $this->env->getExtension("native_profiler");
        $__internal_7ca6a92e96d0a96960838d648dc953bf204bbc6518567755af9c74f076fb2a5b->enter($__internal_7ca6a92e96d0a96960838d648dc953bf204bbc6518567755af9c74f076fb2a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 152
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
            </div>
          ";
        
        $__internal_7ca6a92e96d0a96960838d648dc953bf204bbc6518567755af9c74f076fb2a5b->leave($__internal_7ca6a92e96d0a96960838d648dc953bf204bbc6518567755af9c74f076fb2a5b_prof);

    }

    // line 162
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_97520e8bc11c3140f9f49ec5183060bd80c9dc6ff9e6b82181c9045916ccddc8 = $this->env->getExtension("native_profiler");
        $__internal_97520e8bc11c3140f9f49ec5183060bd80c9dc6ff9e6b82181c9045916ccddc8->enter($__internal_97520e8bc11c3140f9f49ec5183060bd80c9dc6ff9e6b82181c9045916ccddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 163
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_97520e8bc11c3140f9f49ec5183060bd80c9dc6ff9e6b82181c9045916ccddc8->leave($__internal_97520e8bc11c3140f9f49ec5183060bd80c9dc6ff9e6b82181c9045916ccddc8_prof);

    }

    // line 169
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_74d5acd44c8957a40a8197c72f4a6d6acd9aa32008f28ef540c8730746e1b92c = $this->env->getExtension("native_profiler");
        $__internal_74d5acd44c8957a40a8197c72f4a6d6acd9aa32008f28ef540c8730746e1b92c->enter($__internal_74d5acd44c8957a40a8197c72f4a6d6acd9aa32008f28ef540c8730746e1b92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 170
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_74d5acd44c8957a40a8197c72f4a6d6acd9aa32008f28ef540c8730746e1b92c->leave($__internal_74d5acd44c8957a40a8197c72f4a6d6acd9aa32008f28ef540c8730746e1b92c_prof);

    }

    // line 176
    public function block_help($context, array $blocks = array())
    {
        $__internal_720bfbc7162a060292d45b3623d1687f5250153422e6310844225ba105410970 = $this->env->getExtension("native_profiler");
        $__internal_720bfbc7162a060292d45b3623d1687f5250153422e6310844225ba105410970->enter($__internal_720bfbc7162a060292d45b3623d1687f5250153422e6310844225ba105410970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 177
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_720bfbc7162a060292d45b3623d1687f5250153422e6310844225ba105410970->leave($__internal_720bfbc7162a060292d45b3623d1687f5250153422e6310844225ba105410970_prof);

    }

    // line 182
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9f040d37fd85bc0df87b23177efd0f4b4d1f72de0733a8546e1fd1302d04ee6 = $this->env->getExtension("native_profiler");
        $__internal_f9f040d37fd85bc0df87b23177efd0f4b4d1f72de0733a8546e1fd1302d04ee6->enter($__internal_f9f040d37fd85bc0df87b23177efd0f4b4d1f72de0733a8546e1fd1302d04ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 183
        echo "          <a id=\"main-content\">
          </a>
          ";
        // line 185
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_f9f040d37fd85bc0df87b23177efd0f4b4d1f72de0733a8546e1fd1302d04ee6->leave($__internal_f9f040d37fd85bc0df87b23177efd0f4b4d1f72de0733a8546e1fd1302d04ee6_prof);

    }

    // line 191
    public function block_center_left($context, array $blocks = array())
    {
        $__internal_2ddef9e01530f8324cf2e66460e23aa2c396d2513f5bea48c08a4e1d6a9a88c5 = $this->env->getExtension("native_profiler");
        $__internal_2ddef9e01530f8324cf2e66460e23aa2c396d2513f5bea48c08a4e1d6a9a88c5->enter($__internal_2ddef9e01530f8324cf2e66460e23aa2c396d2513f5bea48c08a4e1d6a9a88c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_left"));

        // line 192
        echo "            <div class=\"col-md-6\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "center_left", array()), "html", null, true));
        echo "</div>
           ";
        
        $__internal_2ddef9e01530f8324cf2e66460e23aa2c396d2513f5bea48c08a4e1d6a9a88c5->leave($__internal_2ddef9e01530f8324cf2e66460e23aa2c396d2513f5bea48c08a4e1d6a9a88c5_prof);

    }

    // line 196
    public function block_center_right($context, array $blocks = array())
    {
        $__internal_a8dc4045d7130db92849e4fd67f139a35d5573589e5baa493e26cf0a66b1e2a7 = $this->env->getExtension("native_profiler");
        $__internal_a8dc4045d7130db92849e4fd67f139a35d5573589e5baa493e26cf0a66b1e2a7->enter($__internal_a8dc4045d7130db92849e4fd67f139a35d5573589e5baa493e26cf0a66b1e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "center_right"));

        // line 197
        echo "          <div class=\"col-md-6\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "center_right", array()), "html", null, true));
        echo "</div>
        ";
        
        $__internal_a8dc4045d7130db92849e4fd67f139a35d5573589e5baa493e26cf0a66b1e2a7->leave($__internal_a8dc4045d7130db92849e4fd67f139a35d5573589e5baa493e26cf0a66b1e2a7_prof);

    }

    // line 203
    public function block_bottom_long($context, array $blocks = array())
    {
        $__internal_23392910e3cebf6e2cdfe46b45df1185480b5664f0bf85da1dff447eefcd99e3 = $this->env->getExtension("native_profiler");
        $__internal_23392910e3cebf6e2cdfe46b45df1185480b5664f0bf85da1dff447eefcd99e3->enter($__internal_23392910e3cebf6e2cdfe46b45df1185480b5664f0bf85da1dff447eefcd99e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_long"));

        // line 204
        echo "            <div class=\"col-md-12\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_long", array()), "html", null, true));
        echo "
            </div>
          ";
        
        $__internal_23392910e3cebf6e2cdfe46b45df1185480b5664f0bf85da1dff447eefcd99e3->leave($__internal_23392910e3cebf6e2cdfe46b45df1185480b5664f0bf85da1dff447eefcd99e3_prof);

    }

    // line 217
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_cf187593e9f8b011db6d30ab87ae7ec406a90c635e2477a1a932f75636fc21b3 = $this->env->getExtension("native_profiler");
        $__internal_cf187593e9f8b011db6d30ab87ae7ec406a90c635e2477a1a932f75636fc21b3->enter($__internal_cf187593e9f8b011db6d30ab87ae7ec406a90c635e2477a1a932f75636fc21b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 218
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_cf187593e9f8b011db6d30ab87ae7ec406a90c635e2477a1a932f75636fc21b3->leave($__internal_cf187593e9f8b011db6d30ab87ae7ec406a90c635e2477a1a932f75636fc21b3_prof);

    }

    // line 228
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b006c48e42d2b2188f4a5958f7606b5cfda06f9492002ee002ca7b6a259c6505 = $this->env->getExtension("native_profiler");
        $__internal_b006c48e42d2b2188f4a5958f7606b5cfda06f9492002ee002ca7b6a259c6505->enter($__internal_b006c48e42d2b2188f4a5958f7606b5cfda06f9492002ee002ca7b6a259c6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 229
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 230
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_b006c48e42d2b2188f4a5958f7606b5cfda06f9492002ee002ca7b6a259c6505->leave($__internal_b006c48e42d2b2188f4a5958f7606b5cfda06f9492002ee002ca7b6a259c6505_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme_cdn/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 230,  566 => 229,  560 => 228,  550 => 219,  547 => 218,  541 => 217,  530 => 204,  524 => 203,  514 => 197,  508 => 196,  498 => 192,  492 => 191,  483 => 185,  479 => 183,  473 => 182,  463 => 177,  457 => 176,  447 => 170,  441 => 169,  431 => 163,  425 => 162,  414 => 152,  408 => 151,  398 => 130,  395 => 129,  389 => 128,  379 => 121,  376 => 120,  370 => 119,  361 => 223,  358 => 222,  355 => 217,  352 => 216,  343 => 208,  340 => 207,  337 => 203,  334 => 202,  331 => 200,  328 => 199,  325 => 196,  322 => 195,  319 => 194,  316 => 191,  313 => 190,  309 => 187,  306 => 182,  303 => 180,  300 => 179,  297 => 176,  294 => 175,  291 => 173,  288 => 172,  285 => 169,  282 => 168,  279 => 166,  276 => 165,  273 => 162,  270 => 161,  264 => 156,  261 => 155,  258 => 151,  255 => 150,  248 => 146,  246 => 143,  245 => 142,  244 => 141,  243 => 140,  242 => 139,  240 => 138,  235 => 134,  232 => 133,  229 => 128,  226 => 127,  223 => 125,  220 => 124,  217 => 119,  214 => 118,  207 => 114,  201 => 113,  193 => 108,  189 => 106,  186 => 105,  180 => 102,  177 => 101,  174 => 100,  170 => 97,  161 => 91,  158 => 90,  155 => 89,  151 => 87,  148 => 86,  142 => 84,  140 => 83,  135 => 82,  133 => 79,  132 => 78,  131 => 76,  129 => 75,  123 => 74,  113 => 64,  110 => 63,  104 => 62,  95 => 228,  93 => 227,  90 => 226,  88 => 113,  85 => 111,  81 => 74,  79 => 73,  76 => 71,  74 => 70,  70 => 68,  66 => 62,  64 => 61,  61 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* {# Logo #}*/
/* {% if page.logo %}*/
/*   {% block logo %}*/
/*     <div class="container" role="logo">*/
/*         {{ page.logo }}*/
/*     </div>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* */
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* */
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/* */
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}*/
/*             </div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content">*/
/*           </a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/* */
/* */
/*       {# 2_Articles #}*/
/*         {% if page.center_left %}*/
/*           {% block center_left %}*/
/*             <div class="col-md-6">{{ page.center_left }}</div>*/
/*            {% endblock %}*/
/*         {% endif %}*/
/*       {% if page.center_right %}*/
/*         {% block center_right %}*/
/*           <div class="col-md-6">{{ page.center_right }}</div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# bottom_long #}*/
/*         {% if page.bottom_long %}*/
/*           {% block bottom_long %}*/
/*             <div class="col-md-12">{{ page.bottom_long }}*/
/*             </div>*/
/*           {% endblock %}*/
/*       {% endif %}*/
/* */
/* */
/* */
/* */
/*       </section>*/
/* */
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
