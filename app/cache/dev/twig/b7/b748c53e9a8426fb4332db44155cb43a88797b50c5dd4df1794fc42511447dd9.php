<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9eb99d33182d4d0cc134aa287b5a8df08b8b04a3df8ce0183b62aa0021d5e8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a5f0a046f9d25694c9a08b4f92d996e149306b86da3380f985c0eacd27f4edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5f0a046f9d25694c9a08b4f92d996e149306b86da3380f985c0eacd27f4edc->enter($__internal_3a5f0a046f9d25694c9a08b4f92d996e149306b86da3380f985c0eacd27f4edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a5f0a046f9d25694c9a08b4f92d996e149306b86da3380f985c0eacd27f4edc->leave($__internal_3a5f0a046f9d25694c9a08b4f92d996e149306b86da3380f985c0eacd27f4edc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6fa059c7d1df90ad28a067b405923abf59b446791fdc93aaf269e028b711cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fa059c7d1df90ad28a067b405923abf59b446791fdc93aaf269e028b711cd7->enter($__internal_a6fa059c7d1df90ad28a067b405923abf59b446791fdc93aaf269e028b711cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6fa059c7d1df90ad28a067b405923abf59b446791fdc93aaf269e028b711cd7->leave($__internal_a6fa059c7d1df90ad28a067b405923abf59b446791fdc93aaf269e028b711cd7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_241532e68c1b37224c16b39f929e370857f139f00ec6fa12d8ee4d02d36f000e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241532e68c1b37224c16b39f929e370857f139f00ec6fa12d8ee4d02d36f000e->enter($__internal_241532e68c1b37224c16b39f929e370857f139f00ec6fa12d8ee4d02d36f000e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_241532e68c1b37224c16b39f929e370857f139f00ec6fa12d8ee4d02d36f000e->leave($__internal_241532e68c1b37224c16b39f929e370857f139f00ec6fa12d8ee4d02d36f000e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1db0434201535c7489bce7e20895997cae4c26b7c70653f830863c7486e07ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1db0434201535c7489bce7e20895997cae4c26b7c70653f830863c7486e07ac->enter($__internal_a1db0434201535c7489bce7e20895997cae4c26b7c70653f830863c7486e07ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1db0434201535c7489bce7e20895997cae4c26b7c70653f830863c7486e07ac->leave($__internal_a1db0434201535c7489bce7e20895997cae4c26b7c70653f830863c7486e07ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
