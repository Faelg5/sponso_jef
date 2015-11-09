<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7f68d59a87887a833b6fe6d69ae8d1b776fee48202431a58207daf8f0c604aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4519a4a9c404646b4d89649e91c7ac0ab41fe9359023408c4203b49595b825 = $this->env->getExtension("native_profiler");
        $__internal_8b4519a4a9c404646b4d89649e91c7ac0ab41fe9359023408c4203b49595b825->enter($__internal_8b4519a4a9c404646b4d89649e91c7ac0ab41fe9359023408c4203b49595b825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4519a4a9c404646b4d89649e91c7ac0ab41fe9359023408c4203b49595b825->leave($__internal_8b4519a4a9c404646b4d89649e91c7ac0ab41fe9359023408c4203b49595b825_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f1da3430e2900e8bf8304793f95b495aec9e19e1c86fb8d8a7c0d890431ee8 = $this->env->getExtension("native_profiler");
        $__internal_13f1da3430e2900e8bf8304793f95b495aec9e19e1c86fb8d8a7c0d890431ee8->enter($__internal_13f1da3430e2900e8bf8304793f95b495aec9e19e1c86fb8d8a7c0d890431ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_13f1da3430e2900e8bf8304793f95b495aec9e19e1c86fb8d8a7c0d890431ee8->leave($__internal_13f1da3430e2900e8bf8304793f95b495aec9e19e1c86fb8d8a7c0d890431ee8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada479559f0bc1c53a093b232def7884d0282e1d20c24a0a6dd1e23001fbe5d8 = $this->env->getExtension("native_profiler");
        $__internal_ada479559f0bc1c53a093b232def7884d0282e1d20c24a0a6dd1e23001fbe5d8->enter($__internal_ada479559f0bc1c53a093b232def7884d0282e1d20c24a0a6dd1e23001fbe5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ada479559f0bc1c53a093b232def7884d0282e1d20c24a0a6dd1e23001fbe5d8->leave($__internal_ada479559f0bc1c53a093b232def7884d0282e1d20c24a0a6dd1e23001fbe5d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
