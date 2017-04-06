<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6906527171d3caad7d012d522e159453a8d7d7884c7a9e2b500ff98c823c1db5 extends Twig_Template
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
        $__internal_33d4b6f95b8de4d6d1ac61c809fd3c47119cca3b052ca1d975ba44092bd5da17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d4b6f95b8de4d6d1ac61c809fd3c47119cca3b052ca1d975ba44092bd5da17->enter($__internal_33d4b6f95b8de4d6d1ac61c809fd3c47119cca3b052ca1d975ba44092bd5da17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_33d4b6f95b8de4d6d1ac61c809fd3c47119cca3b052ca1d975ba44092bd5da17->leave($__internal_33d4b6f95b8de4d6d1ac61c809fd3c47119cca3b052ca1d975ba44092bd5da17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
