<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3fdf07de99902c53e8e045fac41cf67d4448377f7fa69bd75a4da6376d751cfd extends Twig_Template
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
        $__internal_d1da72fc5dd4d063eb0b0368657a0ec4e8a6a81f3a696e55d47bbaee01b02bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1da72fc5dd4d063eb0b0368657a0ec4e8a6a81f3a696e55d47bbaee01b02bb2->enter($__internal_d1da72fc5dd4d063eb0b0368657a0ec4e8a6a81f3a696e55d47bbaee01b02bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d1da72fc5dd4d063eb0b0368657a0ec4e8a6a81f3a696e55d47bbaee01b02bb2->leave($__internal_d1da72fc5dd4d063eb0b0368657a0ec4e8a6a81f3a696e55d47bbaee01b02bb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
