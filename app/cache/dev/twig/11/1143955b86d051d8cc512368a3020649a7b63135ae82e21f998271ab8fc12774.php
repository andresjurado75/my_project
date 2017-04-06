<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9d82ca6f3f03ebf7f3b1415e9cfa10c4f6805f4f1f6e9cc896a33ee5c3eafde2 extends Twig_Template
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
        $__internal_0d9bbfaf06a066c7a5b42f7198162676a0b56b92886c9a59e27875b1409d4fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9bbfaf06a066c7a5b42f7198162676a0b56b92886c9a59e27875b1409d4fbd->enter($__internal_0d9bbfaf06a066c7a5b42f7198162676a0b56b92886c9a59e27875b1409d4fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0d9bbfaf06a066c7a5b42f7198162676a0b56b92886c9a59e27875b1409d4fbd->leave($__internal_0d9bbfaf06a066c7a5b42f7198162676a0b56b92886c9a59e27875b1409d4fbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
