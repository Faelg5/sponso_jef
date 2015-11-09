<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_af15b168122326dcff82d2ec7ab1f13b2c127c664ffefdb0a2760e6623a7a482 extends Twig_Template
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
        $__internal_9de42fbc4b950bc916f733979cf3e4ec4bb7d7ba96bcd9df32947c8ad49400b7 = $this->env->getExtension("native_profiler");
        $__internal_9de42fbc4b950bc916f733979cf3e4ec4bb7d7ba96bcd9df32947c8ad49400b7->enter($__internal_9de42fbc4b950bc916f733979cf3e4ec4bb7d7ba96bcd9df32947c8ad49400b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9de42fbc4b950bc916f733979cf3e4ec4bb7d7ba96bcd9df32947c8ad49400b7->leave($__internal_9de42fbc4b950bc916f733979cf3e4ec4bb7d7ba96bcd9df32947c8ad49400b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
