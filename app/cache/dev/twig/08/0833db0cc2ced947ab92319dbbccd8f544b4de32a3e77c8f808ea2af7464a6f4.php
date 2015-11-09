<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f195df24f043a65d9d8076d6f3984030aa5d7cfe53ccb75d4733289a2e5e3177 extends Twig_Template
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
        $__internal_e71c7cf6178a45bbee05fc353b071f3a3a48c6f53c930cc5438d9b6a6f504484 = $this->env->getExtension("native_profiler");
        $__internal_e71c7cf6178a45bbee05fc353b071f3a3a48c6f53c930cc5438d9b6a6f504484->enter($__internal_e71c7cf6178a45bbee05fc353b071f3a3a48c6f53c930cc5438d9b6a6f504484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e71c7cf6178a45bbee05fc353b071f3a3a48c6f53c930cc5438d9b6a6f504484->leave($__internal_e71c7cf6178a45bbee05fc353b071f3a3a48c6f53c930cc5438d9b6a6f504484_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
