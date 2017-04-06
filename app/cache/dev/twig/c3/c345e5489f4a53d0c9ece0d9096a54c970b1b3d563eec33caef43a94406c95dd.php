<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8ba89bdba7be7c1386977801783e6a67d3f4dd3dc233041dfa53375271c48f04 extends Twig_Template
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
        $__internal_b101c023cbb40d3aa9d3386d8f5c1f91c31b9f57ff23ac8f065f4d98d576c68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b101c023cbb40d3aa9d3386d8f5c1f91c31b9f57ff23ac8f065f4d98d576c68d->enter($__internal_b101c023cbb40d3aa9d3386d8f5c1f91c31b9f57ff23ac8f065f4d98d576c68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b101c023cbb40d3aa9d3386d8f5c1f91c31b9f57ff23ac8f065f4d98d576c68d->leave($__internal_b101c023cbb40d3aa9d3386d8f5c1f91c31b9f57ff23ac8f065f4d98d576c68d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
