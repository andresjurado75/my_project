<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6bf5872709ff3e6fd9b001cb2e356eb51953220bd7a9ee4f6d98959d6388aa36 extends Twig_Template
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
        $__internal_f1455761430ea85555321913082ae98e38d64969e2e89ee6cb27c0ff4d5112ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1455761430ea85555321913082ae98e38d64969e2e89ee6cb27c0ff4d5112ef->enter($__internal_f1455761430ea85555321913082ae98e38d64969e2e89ee6cb27c0ff4d5112ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f1455761430ea85555321913082ae98e38d64969e2e89ee6cb27c0ff4d5112ef->leave($__internal_f1455761430ea85555321913082ae98e38d64969e2e89ee6cb27c0ff4d5112ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
