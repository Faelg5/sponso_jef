<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_682f79c9002dcb98a2028a34147739bab20a6e796cf09bf313e0a643dd8d2575 extends Twig_Template
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
        $__internal_7b5ece22e97beecbc99b807964f6751c5a0abb7d9443e23c181eeb980340ee1d = $this->env->getExtension("native_profiler");
        $__internal_7b5ece22e97beecbc99b807964f6751c5a0abb7d9443e23c181eeb980340ee1d->enter($__internal_7b5ece22e97beecbc99b807964f6751c5a0abb7d9443e23c181eeb980340ee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7b5ece22e97beecbc99b807964f6751c5a0abb7d9443e23c181eeb980340ee1d->leave($__internal_7b5ece22e97beecbc99b807964f6751c5a0abb7d9443e23c181eeb980340ee1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
