<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6e28df0590b2d74c275482c73a1788270eafd9193340efb8fb9b7268d5c961b9 extends Twig_Template
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
        $__internal_1def7b5aa968e7cc4697983a90a7552e6d2c6589450eb39114e03ee7f9acd1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1def7b5aa968e7cc4697983a90a7552e6d2c6589450eb39114e03ee7f9acd1a6->enter($__internal_1def7b5aa968e7cc4697983a90a7552e6d2c6589450eb39114e03ee7f9acd1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1def7b5aa968e7cc4697983a90a7552e6d2c6589450eb39114e03ee7f9acd1a6->leave($__internal_1def7b5aa968e7cc4697983a90a7552e6d2c6589450eb39114e03ee7f9acd1a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
