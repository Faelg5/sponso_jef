<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_133b1967270b8bba3fc2eca4416c3a05bb06b82e47382de4334c20a75987a200 extends Twig_Template
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
        $__internal_7c2df437eb9f0defea9ef3c2c7aedc4fd3c82ba96d29f63a06e03d1a7556dd0a = $this->env->getExtension("native_profiler");
        $__internal_7c2df437eb9f0defea9ef3c2c7aedc4fd3c82ba96d29f63a06e03d1a7556dd0a->enter($__internal_7c2df437eb9f0defea9ef3c2c7aedc4fd3c82ba96d29f63a06e03d1a7556dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7c2df437eb9f0defea9ef3c2c7aedc4fd3c82ba96d29f63a06e03d1a7556dd0a->leave($__internal_7c2df437eb9f0defea9ef3c2c7aedc4fd3c82ba96d29f63a06e03d1a7556dd0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
