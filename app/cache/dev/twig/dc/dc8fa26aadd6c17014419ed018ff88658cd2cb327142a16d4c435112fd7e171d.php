<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ba70cb5eec34cd55444c6f8e02f38629359f558a7ca5184bd4d12bbc743b8679 extends Twig_Template
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
        $__internal_7b872fc86bdae97c3b4054a00ec641cf0fc1b3a4c4f872943cc7cce88a2648be = $this->env->getExtension("native_profiler");
        $__internal_7b872fc86bdae97c3b4054a00ec641cf0fc1b3a4c4f872943cc7cce88a2648be->enter($__internal_7b872fc86bdae97c3b4054a00ec641cf0fc1b3a4c4f872943cc7cce88a2648be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7b872fc86bdae97c3b4054a00ec641cf0fc1b3a4c4f872943cc7cce88a2648be->leave($__internal_7b872fc86bdae97c3b4054a00ec641cf0fc1b3a4c4f872943cc7cce88a2648be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
