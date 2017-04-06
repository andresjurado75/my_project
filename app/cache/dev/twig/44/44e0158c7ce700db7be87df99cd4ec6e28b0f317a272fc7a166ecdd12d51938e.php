<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fd18e93af6f43ad32d12f2c487f1b8281d5c5bef166dacbda2195f1fbaf3fe5b extends Twig_Template
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
        $__internal_91e76e3c4dcd7c598882dd01df33fcc19219110ca017c032b2867ef3ba1b77a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e76e3c4dcd7c598882dd01df33fcc19219110ca017c032b2867ef3ba1b77a6->enter($__internal_91e76e3c4dcd7c598882dd01df33fcc19219110ca017c032b2867ef3ba1b77a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_91e76e3c4dcd7c598882dd01df33fcc19219110ca017c032b2867ef3ba1b77a6->leave($__internal_91e76e3c4dcd7c598882dd01df33fcc19219110ca017c032b2867ef3ba1b77a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
