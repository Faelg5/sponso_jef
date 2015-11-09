<?php

/* JEFPerformanceBundle:Performance:view.html.twig */
class __TwigTemplate_cb158cf52323141555ebbe1bc49400171335dbf01511c2d50e67dd5c893b24c4 extends Twig_Template
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
        $__internal_393b297d009f1c48246e9eae11fa8b97673c4d0fae289d219a3c70c597cbb15f = $this->env->getExtension("native_profiler");
        $__internal_393b297d009f1c48246e9eae11fa8b97673c4d0fae289d219a3c70c597cbb15f->enter($__internal_393b297d009f1c48246e9eae11fa8b97673c4d0fae289d219a3c70c597cbb15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JEFPerformanceBundle:Performance:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Affichage d'un document (";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ")</title>
\t</head>
\t<body>
\t\t<h1>Affichage du document ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
\t\t<p>
\t\t\tVoici l'annonce numéro : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo ".
\t\t\t";
        // line 11
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "\t\t\t\t<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t<!-- Génère l'URL absolue depuis cette vue, avec la fonction \"url\".-->
\t\t\t<!-- <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jef_performance_view", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
\t\t\tLien vers le document à l'id ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
\t\t\t</a> -->
\t\t</p>
\t</body>
</html>";
        
        $__internal_393b297d009f1c48246e9eae11fa8b97673c4d0fae289d219a3c70c597cbb15f->leave($__internal_393b297d009f1c48246e9eae11fa8b97673c4d0fae289d219a3c70c597cbb15f_prof);

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
        return array (  63 => 16,  59 => 15,  56 => 14,  47 => 12,  42 => 11,  38 => 9,  33 => 7,  27 => 4,  22 => 1,);
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
/* 			{# Afficher tous les messages flash dont le nom est "info"#}*/
/* 			{% for message in app.session.flashbag.get('info') %}*/
/* 				<p>Message flash : {{ message }}</p>*/
/* 			{% endfor %}*/
/* 			<!-- Génère l'URL absolue depuis cette vue, avec la fonction "url".-->*/
/* 			<!-- <a href="{{ path('jef_performance_view', { "id": id}) }}">*/
/* 			Lien vers le document à l'id {{ id }}*/
/* 			</a> -->*/
/* 		</p>*/
/* 	</body>*/
/* </html>*/
