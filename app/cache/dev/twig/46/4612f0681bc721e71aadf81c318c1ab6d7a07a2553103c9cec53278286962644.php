<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9e9d9225e4b9d7294a1e1410f4cafc7dd24f871873a3b3299033b537d70712aa extends Twig_Template
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
        $__internal_52f08d5001c6ded81a8298f5e9e1db92fd1ee7b9486a9da65680f953d1336379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f08d5001c6ded81a8298f5e9e1db92fd1ee7b9486a9da65680f953d1336379->enter($__internal_52f08d5001c6ded81a8298f5e9e1db92fd1ee7b9486a9da65680f953d1336379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52f08d5001c6ded81a8298f5e9e1db92fd1ee7b9486a9da65680f953d1336379->leave($__internal_52f08d5001c6ded81a8298f5e9e1db92fd1ee7b9486a9da65680f953d1336379_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b23e8c2b31f1f917d24901bc3f29bfcdd4290b5793146e8d840eb9776815f7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23e8c2b31f1f917d24901bc3f29bfcdd4290b5793146e8d840eb9776815f7b8->enter($__internal_b23e8c2b31f1f917d24901bc3f29bfcdd4290b5793146e8d840eb9776815f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b23e8c2b31f1f917d24901bc3f29bfcdd4290b5793146e8d840eb9776815f7b8->leave($__internal_b23e8c2b31f1f917d24901bc3f29bfcdd4290b5793146e8d840eb9776815f7b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
