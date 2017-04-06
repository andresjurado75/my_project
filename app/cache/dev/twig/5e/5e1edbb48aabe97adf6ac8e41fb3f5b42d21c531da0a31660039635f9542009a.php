<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fcf01cabe106963b1a4d51420f575c6f483b78acda8f2a703ab0e064cc19a168 extends Twig_Template
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
        $__internal_8c1dd9be12987dcd1c6b5b43f61e9554951a7cfe57ff562a9511a04c1491e7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1dd9be12987dcd1c6b5b43f61e9554951a7cfe57ff562a9511a04c1491e7b6->enter($__internal_8c1dd9be12987dcd1c6b5b43f61e9554951a7cfe57ff562a9511a04c1491e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8c1dd9be12987dcd1c6b5b43f61e9554951a7cfe57ff562a9511a04c1491e7b6->leave($__internal_8c1dd9be12987dcd1c6b5b43f61e9554951a7cfe57ff562a9511a04c1491e7b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
