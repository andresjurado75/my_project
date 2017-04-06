<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f4a88f13071c7ad92bb97c4d94da3c44d52336e6468b6b1ecbad68b556e4c1ed extends Twig_Template
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
        $__internal_e9f60094974253a4cf601307f67d886b3a2ac0d3e6ca2a233f25046ab7fb40ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f60094974253a4cf601307f67d886b3a2ac0d3e6ca2a233f25046ab7fb40ad->enter($__internal_e9f60094974253a4cf601307f67d886b3a2ac0d3e6ca2a233f25046ab7fb40ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e9f60094974253a4cf601307f67d886b3a2ac0d3e6ca2a233f25046ab7fb40ad->leave($__internal_e9f60094974253a4cf601307f67d886b3a2ac0d3e6ca2a233f25046ab7fb40ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
