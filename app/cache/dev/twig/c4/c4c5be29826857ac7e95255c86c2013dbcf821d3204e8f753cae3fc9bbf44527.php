<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3fac8f992083bb9e945ec0946e10ab25aae1a0cd02fb6b04da854d63d9d904be extends Twig_Template
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
        $__internal_15c2b846a39ab45cb9a45b92482a519f17fd7374eecf33498505c4418a0d5e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c2b846a39ab45cb9a45b92482a519f17fd7374eecf33498505c4418a0d5e06->enter($__internal_15c2b846a39ab45cb9a45b92482a519f17fd7374eecf33498505c4418a0d5e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_15c2b846a39ab45cb9a45b92482a519f17fd7374eecf33498505c4418a0d5e06->leave($__internal_15c2b846a39ab45cb9a45b92482a519f17fd7374eecf33498505c4418a0d5e06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
