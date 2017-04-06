<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b455d41fba751bd923405770c3cb65c8935613be915127d2d7f063146dd56b74 extends Twig_Template
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
        $__internal_1ad3364350ac1b5a041b2ab6a32a35c7c416b4baf335e4e8aab074420f4a2553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad3364350ac1b5a041b2ab6a32a35c7c416b4baf335e4e8aab074420f4a2553->enter($__internal_1ad3364350ac1b5a041b2ab6a32a35c7c416b4baf335e4e8aab074420f4a2553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1ad3364350ac1b5a041b2ab6a32a35c7c416b4baf335e4e8aab074420f4a2553->leave($__internal_1ad3364350ac1b5a041b2ab6a32a35c7c416b4baf335e4e8aab074420f4a2553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
