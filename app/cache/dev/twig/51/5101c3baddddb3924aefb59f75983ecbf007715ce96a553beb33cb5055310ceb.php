<?php

/* JEFPerformanceBundle:Performance:index.html.twig */
class __TwigTemplate_7f77058635b29cca441b6eafdb0fef482b1923aa6f79373c51ad939e73a69435 extends Twig_Template
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
        $__internal_5fc71780c4acc75782aa9a9818d24da7597519d09a3da3b205853dda83cf6ccd = $this->env->getExtension("native_profiler");
        $__internal_5fc71780c4acc75782aa9a9818d24da7597519d09a3da3b205853dda83cf6ccd->enter($__internal_5fc71780c4acc75782aa9a9818d24da7597519d09a3da3b205853dda83cf6ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JEFPerformanceBundle:Performance:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Bienvenue sur la page d'analyse des performances.</title>
\t</head>
\t<body>
\t\t<h1>Analyse des performances</h1>
\t\t<p>
\t\t\tBienvenue, ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo ".
\t\t\t";
        // line 11
        echo "\t\t\t";
        // line 12
        echo "\t\t\t";
        // line 13
        echo "\t\t\t";
        // line 14
        echo "\t\t</p>
\t</body>
</html>";
        
        $__internal_5fc71780c4acc75782aa9a9818d24da7597519d09a3da3b205853dda83cf6ccd->leave($__internal_5fc71780c4acc75782aa9a9818d24da7597519d09a3da3b205853dda83cf6ccd_prof);

    }

    public function getTemplateName()
    {
        return "JEFPerformanceBundle:Performance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  40 => 13,  38 => 12,  36 => 11,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Bienvenue sur la page d'analyse des performances.</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Analyse des performances</h1>*/
/* 		<p>*/
/* 			Bienvenue, {{ nom }}.*/
/* 			{# Génère l'URL absolue depuis cette vue, avec la fonction "url". #}*/
/* 			{# <a href="{{ path('jef_performance_view', { "id": id}) }}" #}*/
/* 			{# Lien vers le document à l'id {{ name }} #}*/
/* 			{# </a> #}*/
/* 		</p>*/
/* 	</body>*/
/* </html>*/
