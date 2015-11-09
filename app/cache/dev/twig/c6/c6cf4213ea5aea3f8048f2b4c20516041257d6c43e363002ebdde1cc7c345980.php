<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e5cff65a6e4d23c303047ceed5b6f49c3330ad09184a9c47a0c007a18e71fe1a extends Twig_Template
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
        $__internal_db549e005d4a3064dbf58a527b7009e8ccfdbbdb380e7f2109b79d39bf6f9c2c = $this->env->getExtension("native_profiler");
        $__internal_db549e005d4a3064dbf58a527b7009e8ccfdbbdb380e7f2109b79d39bf6f9c2c->enter($__internal_db549e005d4a3064dbf58a527b7009e8ccfdbbdb380e7f2109b79d39bf6f9c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_db549e005d4a3064dbf58a527b7009e8ccfdbbdb380e7f2109b79d39bf6f9c2c->leave($__internal_db549e005d4a3064dbf58a527b7009e8ccfdbbdb380e7f2109b79d39bf6f9c2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
