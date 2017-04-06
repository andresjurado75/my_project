<?php

/* ::base.html.twig */
class __TwigTemplate_53ce7af04b7b27cc1826b9bcd0f138c6bdc05a41b92eef4d5196fa753e788bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9d5f56f80310bd3030ba3af06faad1fb00d763d1b1319548169be8b4337ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9d5f56f80310bd3030ba3af06faad1fb00d763d1b1319548169be8b4337ef1->enter($__internal_4e9d5f56f80310bd3030ba3af06faad1fb00d763d1b1319548169be8b4337ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 18
        $this->displayBlock('js', $context, $blocks);
        // line 19
        echo "</body>
</html>
";
        
        $__internal_4e9d5f56f80310bd3030ba3af06faad1fb00d763d1b1319548169be8b4337ef1->leave($__internal_4e9d5f56f80310bd3030ba3af06faad1fb00d763d1b1319548169be8b4337ef1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65c52edc7d2026e12a0aee3bf56f3aad197aef636090d9f34d35d96d822ee61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c52edc7d2026e12a0aee3bf56f3aad197aef636090d9f34d35d96d822ee61a->enter($__internal_65c52edc7d2026e12a0aee3bf56f3aad197aef636090d9f34d35d96d822ee61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_65c52edc7d2026e12a0aee3bf56f3aad197aef636090d9f34d35d96d822ee61a->leave($__internal_65c52edc7d2026e12a0aee3bf56f3aad197aef636090d9f34d35d96d822ee61a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_06114ff002df10c8de9f70efe24276ac00f6bcbf9f0803f8d18df7cf76f4af02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06114ff002df10c8de9f70efe24276ac00f6bcbf9f0803f8d18df7cf76f4af02->enter($__internal_06114ff002df10c8de9f70efe24276ac00f6bcbf9f0803f8d18df7cf76f4af02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_06114ff002df10c8de9f70efe24276ac00f6bcbf9f0803f8d18df7cf76f4af02->leave($__internal_06114ff002df10c8de9f70efe24276ac00f6bcbf9f0803f8d18df7cf76f4af02_prof);

    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        $__internal_ab85d683b33187d88204473e268b3fb116c2f196452fc9492b831917ae957699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab85d683b33187d88204473e268b3fb116c2f196452fc9492b831917ae957699->enter($__internal_ab85d683b33187d88204473e268b3fb116c2f196452fc9492b831917ae957699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo " ";
        
        $__internal_ab85d683b33187d88204473e268b3fb116c2f196452fc9492b831917ae957699->leave($__internal_ab85d683b33187d88204473e268b3fb116c2f196452fc9492b831917ae957699_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  79 => 15,  67 => 11,  58 => 19,  56 => 18,  52 => 17,  49 => 16,  47 => 15,  42 => 12,  40 => 11,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\" media=\"screen,projection\"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    {% block stylesheets %} {% endblock %}
</head>

<body>
{% block body %} {% endblock %}
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>
{% block js %} {% endblock %}
</body>
</html>
", "::base.html.twig", "/var/www/html/tecsistemas/my_project/app/Resources/views/base.html.twig");
    }
}
