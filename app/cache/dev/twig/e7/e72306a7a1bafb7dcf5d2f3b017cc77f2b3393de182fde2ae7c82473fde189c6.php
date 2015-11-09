<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_619e578118e12360514ef9b4253a4858b34d1cd908adc1d1b3b357c76101c76e extends Twig_Template
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
        $__internal_0a66a546423790d18b365b492cd5d95fa20ead2427f3eec2b8f488a68277c9ae = $this->env->getExtension("native_profiler");
        $__internal_0a66a546423790d18b365b492cd5d95fa20ead2427f3eec2b8f488a68277c9ae->enter($__internal_0a66a546423790d18b365b492cd5d95fa20ead2427f3eec2b8f488a68277c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0a66a546423790d18b365b492cd5d95fa20ead2427f3eec2b8f488a68277c9ae->leave($__internal_0a66a546423790d18b365b492cd5d95fa20ead2427f3eec2b8f488a68277c9ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
