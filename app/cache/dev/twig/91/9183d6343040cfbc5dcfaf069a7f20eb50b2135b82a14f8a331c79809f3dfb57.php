<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f5876859d70a26ea95fb5e7623e4079bed5740a7bf4d863eb4cee1a212dab31b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8462febeb8f00a9ae80d2ca2d6ec8a65fff904a16b17c9c946d3575d9992bda = $this->env->getExtension("native_profiler");
        $__internal_a8462febeb8f00a9ae80d2ca2d6ec8a65fff904a16b17c9c946d3575d9992bda->enter($__internal_a8462febeb8f00a9ae80d2ca2d6ec8a65fff904a16b17c9c946d3575d9992bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8462febeb8f00a9ae80d2ca2d6ec8a65fff904a16b17c9c946d3575d9992bda->leave($__internal_a8462febeb8f00a9ae80d2ca2d6ec8a65fff904a16b17c9c946d3575d9992bda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f95e249a3586efa259bc95e8ba6a7ef39e3b3c8fdb5b337c9e70d480d1b18670 = $this->env->getExtension("native_profiler");
        $__internal_f95e249a3586efa259bc95e8ba6a7ef39e3b3c8fdb5b337c9e70d480d1b18670->enter($__internal_f95e249a3586efa259bc95e8ba6a7ef39e3b3c8fdb5b337c9e70d480d1b18670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f95e249a3586efa259bc95e8ba6a7ef39e3b3c8fdb5b337c9e70d480d1b18670->leave($__internal_f95e249a3586efa259bc95e8ba6a7ef39e3b3c8fdb5b337c9e70d480d1b18670_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2e405a93f4729bc77ccf1bb255717d7ed94c9cd86c8a91a641fcb73cb705184 = $this->env->getExtension("native_profiler");
        $__internal_e2e405a93f4729bc77ccf1bb255717d7ed94c9cd86c8a91a641fcb73cb705184->enter($__internal_e2e405a93f4729bc77ccf1bb255717d7ed94c9cd86c8a91a641fcb73cb705184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_e2e405a93f4729bc77ccf1bb255717d7ed94c9cd86c8a91a641fcb73cb705184->leave($__internal_e2e405a93f4729bc77ccf1bb255717d7ed94c9cd86c8a91a641fcb73cb705184_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         {% include '@WebProfiler/Profiler/header.html.twig' only %}*/
/* */
/*         <div id="main">*/
/*             <div class="clear-fix">*/
/*                 <div id="collector-wrapper">*/
/*                     <div id="collector-content">*/
/*                         {% block panel %}*/
/*                             {% if about == 'purge' %}*/
/*                                 <h2>The profiler database was purged successfully</h2>*/
/*                                 <p>*/
/*                                     <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'upload_error' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>No file given or the file was not uploaded successfully.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'already_exists' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>The token already exists in the database.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'no_token' %}*/
/*                                 <h2>Token not found</h2>*/
/*                                 <p>*/
/*                                     <em>Token "{{ token }}" was not found in the database.</em>*/
/*                                 </p>*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="navigation">*/
/*                     {{ render(path('_profiler_search_bar')) }}*/
/*                     {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': '' } only %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
