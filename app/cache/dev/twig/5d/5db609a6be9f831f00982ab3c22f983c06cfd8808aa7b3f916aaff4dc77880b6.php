<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_be73866140fac972e0c5f8f4b17f0dd8ddaa2720ae774215073a233f2c8c7cb4 extends Twig_Template
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
        $__internal_0841803239002beb94d7b04c30f47b9337af79d71a033bb5da78dd8366547441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0841803239002beb94d7b04c30f47b9337af79d71a033bb5da78dd8366547441->enter($__internal_0841803239002beb94d7b04c30f47b9337af79d71a033bb5da78dd8366547441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0841803239002beb94d7b04c30f47b9337af79d71a033bb5da78dd8366547441->leave($__internal_0841803239002beb94d7b04c30f47b9337af79d71a033bb5da78dd8366547441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
