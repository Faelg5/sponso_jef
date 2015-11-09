<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_17cebba3a067d843ab18052d6dae6f531f964ae5c41770c8385499f8d10dc7ea extends Twig_Template
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
        $__internal_f4a0feb8d828146a849efc05f95313781f64547c80e8d5da1e6ab0df49cf599c = $this->env->getExtension("native_profiler");
        $__internal_f4a0feb8d828146a849efc05f95313781f64547c80e8d5da1e6ab0df49cf599c->enter($__internal_f4a0feb8d828146a849efc05f95313781f64547c80e8d5da1e6ab0df49cf599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f4a0feb8d828146a849efc05f95313781f64547c80e8d5da1e6ab0df49cf599c->leave($__internal_f4a0feb8d828146a849efc05f95313781f64547c80e8d5da1e6ab0df49cf599c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
