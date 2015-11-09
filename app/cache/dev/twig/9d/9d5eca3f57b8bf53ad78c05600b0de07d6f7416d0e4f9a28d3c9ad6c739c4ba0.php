<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_cb2bb91dac23bb931299ec122862b380cff763d5a5371f42186c378231ffd968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bba836ee8fcd7f0dfcd126f8d5a5e037843a552aa8bb8291b01e3fbe2e78f2c = $this->env->getExtension("native_profiler");
        $__internal_3bba836ee8fcd7f0dfcd126f8d5a5e037843a552aa8bb8291b01e3fbe2e78f2c->enter($__internal_3bba836ee8fcd7f0dfcd126f8d5a5e037843a552aa8bb8291b01e3fbe2e78f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bba836ee8fcd7f0dfcd126f8d5a5e037843a552aa8bb8291b01e3fbe2e78f2c->leave($__internal_3bba836ee8fcd7f0dfcd126f8d5a5e037843a552aa8bb8291b01e3fbe2e78f2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae43e2d2b29564ce00f62ae79f2d28f07ff0baa916a40b891893109b63c8818e = $this->env->getExtension("native_profiler");
        $__internal_ae43e2d2b29564ce00f62ae79f2d28f07ff0baa916a40b891893109b63c8818e->enter($__internal_ae43e2d2b29564ce00f62ae79f2d28f07ff0baa916a40b891893109b63c8818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ae43e2d2b29564ce00f62ae79f2d28f07ff0baa916a40b891893109b63c8818e->leave($__internal_ae43e2d2b29564ce00f62ae79f2d28f07ff0baa916a40b891893109b63c8818e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2adec75cbcaab193d06221d7e09f99e0b2d9be41ccea6ff78367a04049d6911a = $this->env->getExtension("native_profiler");
        $__internal_2adec75cbcaab193d06221d7e09f99e0b2d9be41ccea6ff78367a04049d6911a->enter($__internal_2adec75cbcaab193d06221d7e09f99e0b2d9be41ccea6ff78367a04049d6911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2adec75cbcaab193d06221d7e09f99e0b2d9be41ccea6ff78367a04049d6911a->leave($__internal_2adec75cbcaab193d06221d7e09f99e0b2d9be41ccea6ff78367a04049d6911a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_740b84caa8349784330e69e49abb3d43787e28fa183513b5ad89c2c3e5f572e0 = $this->env->getExtension("native_profiler");
        $__internal_740b84caa8349784330e69e49abb3d43787e28fa183513b5ad89c2c3e5f572e0->enter($__internal_740b84caa8349784330e69e49abb3d43787e28fa183513b5ad89c2c3e5f572e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_740b84caa8349784330e69e49abb3d43787e28fa183513b5ad89c2c3e5f572e0->leave($__internal_740b84caa8349784330e69e49abb3d43787e28fa183513b5ad89c2c3e5f572e0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5adabf0c3133f950f759c5560a5495746ce69fd6f8c50cbf7fec4b7747edd5a1 = $this->env->getExtension("native_profiler");
        $__internal_5adabf0c3133f950f759c5560a5495746ce69fd6f8c50cbf7fec4b7747edd5a1->enter($__internal_5adabf0c3133f950f759c5560a5495746ce69fd6f8c50cbf7fec4b7747edd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5adabf0c3133f950f759c5560a5495746ce69fd6f8c50cbf7fec4b7747edd5a1->leave($__internal_5adabf0c3133f950f759c5560a5495746ce69fd6f8c50cbf7fec4b7747edd5a1_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
