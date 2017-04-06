<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dc39729e4c357a7f54b611c73a043d46c50f6e5e172f1243c4a8e456882f78e1 extends Twig_Template
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
        $__internal_049d57dab481c063c94820e6cb9606f46aefdbdafa086df13ee92be7bb9be70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049d57dab481c063c94820e6cb9606f46aefdbdafa086df13ee92be7bb9be70e->enter($__internal_049d57dab481c063c94820e6cb9606f46aefdbdafa086df13ee92be7bb9be70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_049d57dab481c063c94820e6cb9606f46aefdbdafa086df13ee92be7bb9be70e->leave($__internal_049d57dab481c063c94820e6cb9606f46aefdbdafa086df13ee92be7bb9be70e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
