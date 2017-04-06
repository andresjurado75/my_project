<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d9f0bc1d57d4e8f455df82c8ee64bd43373565a6581e1aeccb94674e14fc4901 extends Twig_Template
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
        $__internal_e4219e476c01c9d6eebeb9eb91ea16acc6f2df27ba7f1c160b860062744bc27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4219e476c01c9d6eebeb9eb91ea16acc6f2df27ba7f1c160b860062744bc27a->enter($__internal_e4219e476c01c9d6eebeb9eb91ea16acc6f2df27ba7f1c160b860062744bc27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e4219e476c01c9d6eebeb9eb91ea16acc6f2df27ba7f1c160b860062744bc27a->leave($__internal_e4219e476c01c9d6eebeb9eb91ea16acc6f2df27ba7f1c160b860062744bc27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
