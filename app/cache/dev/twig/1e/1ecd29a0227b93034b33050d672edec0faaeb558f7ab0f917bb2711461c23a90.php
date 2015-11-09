<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_284360d3f6e155958dddd4ec1894b75e127858045759e02acf9fdc55104b1c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d22c604d2d39d9e619598d6b7feb047d5ba7a5894f4987310a9d05b55830219 = $this->env->getExtension("native_profiler");
        $__internal_4d22c604d2d39d9e619598d6b7feb047d5ba7a5894f4987310a9d05b55830219->enter($__internal_4d22c604d2d39d9e619598d6b7feb047d5ba7a5894f4987310a9d05b55830219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d22c604d2d39d9e619598d6b7feb047d5ba7a5894f4987310a9d05b55830219->leave($__internal_4d22c604d2d39d9e619598d6b7feb047d5ba7a5894f4987310a9d05b55830219_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc76d12150f2ebfcad4c6e2fa9bcda65593cacc9cc3cdc3d9ad3e54570028b10 = $this->env->getExtension("native_profiler");
        $__internal_bc76d12150f2ebfcad4c6e2fa9bcda65593cacc9cc3cdc3d9ad3e54570028b10->enter($__internal_bc76d12150f2ebfcad4c6e2fa9bcda65593cacc9cc3cdc3d9ad3e54570028b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bc76d12150f2ebfcad4c6e2fa9bcda65593cacc9cc3cdc3d9ad3e54570028b10->leave($__internal_bc76d12150f2ebfcad4c6e2fa9bcda65593cacc9cc3cdc3d9ad3e54570028b10_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
