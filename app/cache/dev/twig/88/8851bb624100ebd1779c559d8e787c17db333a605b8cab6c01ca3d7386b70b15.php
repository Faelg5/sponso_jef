<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a279eee4bc2f335abc2a002dc1934d28fe99bdb4ccfa2bbfaf0bcdf4c8c68f9e extends Twig_Template
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
        $__internal_611c4a77d2df427f66e74eb5a1e493ab06357efe279bb4577c0148969b92a659 = $this->env->getExtension("native_profiler");
        $__internal_611c4a77d2df427f66e74eb5a1e493ab06357efe279bb4577c0148969b92a659->enter($__internal_611c4a77d2df427f66e74eb5a1e493ab06357efe279bb4577c0148969b92a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_611c4a77d2df427f66e74eb5a1e493ab06357efe279bb4577c0148969b92a659->leave($__internal_611c4a77d2df427f66e74eb5a1e493ab06357efe279bb4577c0148969b92a659_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
