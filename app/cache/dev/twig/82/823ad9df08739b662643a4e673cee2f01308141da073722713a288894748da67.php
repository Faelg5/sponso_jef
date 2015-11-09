<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6aae6205350697120924f243b32e36729457adccfa42e52d45ac1e73bf99afb8 extends Twig_Template
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
        $__internal_37379f20db5c4f56786a8602f3afacb6d16d60cfb4001c5d5065b67994555807 = $this->env->getExtension("native_profiler");
        $__internal_37379f20db5c4f56786a8602f3afacb6d16d60cfb4001c5d5065b67994555807->enter($__internal_37379f20db5c4f56786a8602f3afacb6d16d60cfb4001c5d5065b67994555807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_37379f20db5c4f56786a8602f3afacb6d16d60cfb4001c5d5065b67994555807->leave($__internal_37379f20db5c4f56786a8602f3afacb6d16d60cfb4001c5d5065b67994555807_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
