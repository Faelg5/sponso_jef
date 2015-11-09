<?php

/* JEFPerformanceBundle:Performance:view.html.twig */
class __TwigTemplate_92c0012e7eddbb98035790f4ab85fccba76c234353d0228e8010c674172fedce extends Twig_Template
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
\t\t<title>Affichage d'un document (";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ")</title>
\t</head>
\t<body>
\t\t<h1>Affichage du document ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</h1>
\t\t<p>
\t\t\tVoici l'annonce numéro : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ".
\t\t\t<!-- Génère l'URL absolue depuis cette vue, avec la fonction \"url\".-->
\t\t\t<!-- <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jef_performance_view", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">
\t\t\tLien vers le document à l'id ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "
\t\t\t</a> -->
\t\t</p>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "JEFPerformanceBundle:Performance:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  40 => 11,  35 => 9,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Affichage d'un document ({{ id }})</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Affichage du document {{ id }}</h1>*/
/* 		<p>*/
/* 			Voici l'annonce numéro : {{ id }}.*/
/* 			<!-- Génère l'URL absolue depuis cette vue, avec la fonction "url".-->*/
/* 			<!-- <a href="{{ path('jef_performance_view', { "id": id}) }}">*/
/* 			Lien vers le document à l'id {{ id }}*/
/* 			</a> -->*/
/* 		</p>*/
/* 	</body>*/
/* </html>*/
