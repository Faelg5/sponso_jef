<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c26413e9a87d94961ab8b355baa93c88ae62838a842340d9decab0d1d2395407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad936d03b5161536f458fd8a051b25cd11b803c9418b9acf4ba9820db9e2405b = $this->env->getExtension("native_profiler");
        $__internal_ad936d03b5161536f458fd8a051b25cd11b803c9418b9acf4ba9820db9e2405b->enter($__internal_ad936d03b5161536f458fd8a051b25cd11b803c9418b9acf4ba9820db9e2405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad936d03b5161536f458fd8a051b25cd11b803c9418b9acf4ba9820db9e2405b->leave($__internal_ad936d03b5161536f458fd8a051b25cd11b803c9418b9acf4ba9820db9e2405b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6309f697c5fedefab1286555b8594b5b8fded44cec5b3b8da6b0f60d83d8420a = $this->env->getExtension("native_profiler");
        $__internal_6309f697c5fedefab1286555b8594b5b8fded44cec5b3b8da6b0f60d83d8420a->enter($__internal_6309f697c5fedefab1286555b8594b5b8fded44cec5b3b8da6b0f60d83d8420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6309f697c5fedefab1286555b8594b5b8fded44cec5b3b8da6b0f60d83d8420a->leave($__internal_6309f697c5fedefab1286555b8594b5b8fded44cec5b3b8da6b0f60d83d8420a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5992ecde08a0bd3a5919059042e31528e44b3a5c2e68042e4eecde1dddf04cdf = $this->env->getExtension("native_profiler");
        $__internal_5992ecde08a0bd3a5919059042e31528e44b3a5c2e68042e4eecde1dddf04cdf->enter($__internal_5992ecde08a0bd3a5919059042e31528e44b3a5c2e68042e4eecde1dddf04cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5992ecde08a0bd3a5919059042e31528e44b3a5c2e68042e4eecde1dddf04cdf->leave($__internal_5992ecde08a0bd3a5919059042e31528e44b3a5c2e68042e4eecde1dddf04cdf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61a1994a5c388f0eed6304b1052d18c1ee3f00c157ad03254feeada8b5827d39 = $this->env->getExtension("native_profiler");
        $__internal_61a1994a5c388f0eed6304b1052d18c1ee3f00c157ad03254feeada8b5827d39->enter($__internal_61a1994a5c388f0eed6304b1052d18c1ee3f00c157ad03254feeada8b5827d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_61a1994a5c388f0eed6304b1052d18c1ee3f00c157ad03254feeada8b5827d39->leave($__internal_61a1994a5c388f0eed6304b1052d18c1ee3f00c157ad03254feeada8b5827d39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
