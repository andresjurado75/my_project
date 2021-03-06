<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c057bdb0e34aac703257cb3e1da7e39d33c20b2ac7ca10e0b8d73a71ee914eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c060f3a5fe01e3c348b2be101052374662c2adbaeaf94d9cf1298a91e9ca8711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c060f3a5fe01e3c348b2be101052374662c2adbaeaf94d9cf1298a91e9ca8711->enter($__internal_c060f3a5fe01e3c348b2be101052374662c2adbaeaf94d9cf1298a91e9ca8711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c060f3a5fe01e3c348b2be101052374662c2adbaeaf94d9cf1298a91e9ca8711->leave($__internal_c060f3a5fe01e3c348b2be101052374662c2adbaeaf94d9cf1298a91e9ca8711_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_434cdd36357214c569e0719aeea8ff44ce884410725466774608f9b2eb2479fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434cdd36357214c569e0719aeea8ff44ce884410725466774608f9b2eb2479fd->enter($__internal_434cdd36357214c569e0719aeea8ff44ce884410725466774608f9b2eb2479fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_434cdd36357214c569e0719aeea8ff44ce884410725466774608f9b2eb2479fd->leave($__internal_434cdd36357214c569e0719aeea8ff44ce884410725466774608f9b2eb2479fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24bb28953f21908a2b57f865128c2eff18886d0e801e89a7ab24c17e06d082b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bb28953f21908a2b57f865128c2eff18886d0e801e89a7ab24c17e06d082b9->enter($__internal_24bb28953f21908a2b57f865128c2eff18886d0e801e89a7ab24c17e06d082b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_24bb28953f21908a2b57f865128c2eff18886d0e801e89a7ab24c17e06d082b9->leave($__internal_24bb28953f21908a2b57f865128c2eff18886d0e801e89a7ab24c17e06d082b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
