<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bf6c18bfb1129490f4d62115d53a1955dfaac55930592df89b6b31bbdabdfcee extends Twig_Template
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
        $__internal_692db06a64de4e7771d365d71b600bcf4b73715546356d1c9b3f75b028a0cc41 = $this->env->getExtension("native_profiler");
        $__internal_692db06a64de4e7771d365d71b600bcf4b73715546356d1c9b3f75b028a0cc41->enter($__internal_692db06a64de4e7771d365d71b600bcf4b73715546356d1c9b3f75b028a0cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_692db06a64de4e7771d365d71b600bcf4b73715546356d1c9b3f75b028a0cc41->leave($__internal_692db06a64de4e7771d365d71b600bcf4b73715546356d1c9b3f75b028a0cc41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
