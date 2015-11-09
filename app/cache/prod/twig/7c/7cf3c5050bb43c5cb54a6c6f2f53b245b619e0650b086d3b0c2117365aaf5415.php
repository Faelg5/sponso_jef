<?php

/* JEFPerformanceBundle:Performance:index.html.twig */
class __TwigTemplate_bb7c41f705adc73ba1db99c7e5c645eb2366d01aa66f1a32320223668a27fa59 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
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
        return array (  39 => 14,  37 => 13,  35 => 12,  33 => 11,  29 => 9,  19 => 1,);
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
