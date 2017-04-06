<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5ccc87e70488085e7d3413f9ab23d559aee47268a687b0f12a554f81888d0949 extends Twig_Template
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
        $__internal_375612046aec33641fd7aa4dd30a919e6a0642e7700199204f8d0e7def98b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375612046aec33641fd7aa4dd30a919e6a0642e7700199204f8d0e7def98b013->enter($__internal_375612046aec33641fd7aa4dd30a919e6a0642e7700199204f8d0e7def98b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_375612046aec33641fd7aa4dd30a919e6a0642e7700199204f8d0e7def98b013->leave($__internal_375612046aec33641fd7aa4dd30a919e6a0642e7700199204f8d0e7def98b013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
