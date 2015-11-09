<?php

/* ::base.html.twig */
class __TwigTemplate_beed034166668b742a5919bbf5b632afcca8c185b29699a37f583b4e720c5f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440e8b0bdc439f42f790a4dc420305fb678aecb33641ca911b7c707372303ff6 = $this->env->getExtension("native_profiler");
        $__internal_440e8b0bdc439f42f790a4dc420305fb678aecb33641ca911b7c707372303ff6->enter($__internal_440e8b0bdc439f42f790a4dc420305fb678aecb33641ca911b7c707372303ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_440e8b0bdc439f42f790a4dc420305fb678aecb33641ca911b7c707372303ff6->leave($__internal_440e8b0bdc439f42f790a4dc420305fb678aecb33641ca911b7c707372303ff6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b704c07791dc2a90776549232bcfb37454fa26d9ac9e7e53c3f1b90802bf8b9e = $this->env->getExtension("native_profiler");
        $__internal_b704c07791dc2a90776549232bcfb37454fa26d9ac9e7e53c3f1b90802bf8b9e->enter($__internal_b704c07791dc2a90776549232bcfb37454fa26d9ac9e7e53c3f1b90802bf8b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b704c07791dc2a90776549232bcfb37454fa26d9ac9e7e53c3f1b90802bf8b9e->leave($__internal_b704c07791dc2a90776549232bcfb37454fa26d9ac9e7e53c3f1b90802bf8b9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_455fbbd8a54a4cd01a2e2cbff23878dc22fc1f3f886320e0a784342bb4f09550 = $this->env->getExtension("native_profiler");
        $__internal_455fbbd8a54a4cd01a2e2cbff23878dc22fc1f3f886320e0a784342bb4f09550->enter($__internal_455fbbd8a54a4cd01a2e2cbff23878dc22fc1f3f886320e0a784342bb4f09550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_455fbbd8a54a4cd01a2e2cbff23878dc22fc1f3f886320e0a784342bb4f09550->leave($__internal_455fbbd8a54a4cd01a2e2cbff23878dc22fc1f3f886320e0a784342bb4f09550_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5610c78ef3253918cca28cf9196f3b71df9d4bfd015c0c6e1adfd3558248aee0 = $this->env->getExtension("native_profiler");
        $__internal_5610c78ef3253918cca28cf9196f3b71df9d4bfd015c0c6e1adfd3558248aee0->enter($__internal_5610c78ef3253918cca28cf9196f3b71df9d4bfd015c0c6e1adfd3558248aee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5610c78ef3253918cca28cf9196f3b71df9d4bfd015c0c6e1adfd3558248aee0->leave($__internal_5610c78ef3253918cca28cf9196f3b71df9d4bfd015c0c6e1adfd3558248aee0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb6eff079b49710459dcd869b066a25b89a1b73bf9de3454236f81e60ab3ff44 = $this->env->getExtension("native_profiler");
        $__internal_bb6eff079b49710459dcd869b066a25b89a1b73bf9de3454236f81e60ab3ff44->enter($__internal_bb6eff079b49710459dcd869b066a25b89a1b73bf9de3454236f81e60ab3ff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb6eff079b49710459dcd869b066a25b89a1b73bf9de3454236f81e60ab3ff44->leave($__internal_bb6eff079b49710459dcd869b066a25b89a1b73bf9de3454236f81e60ab3ff44_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
