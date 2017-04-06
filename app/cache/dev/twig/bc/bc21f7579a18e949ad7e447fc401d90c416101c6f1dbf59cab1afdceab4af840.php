<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e91d159d90f4f307840de3b28223a11b7510cab2d218d4be93821d226cab4779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0c77c2c165d77645c9f1ebde18a1a18881bea17013a10008399ae31d528b9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c77c2c165d77645c9f1ebde18a1a18881bea17013a10008399ae31d528b9df->enter($__internal_d0c77c2c165d77645c9f1ebde18a1a18881bea17013a10008399ae31d528b9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c77c2c165d77645c9f1ebde18a1a18881bea17013a10008399ae31d528b9df->leave($__internal_d0c77c2c165d77645c9f1ebde18a1a18881bea17013a10008399ae31d528b9df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea56f94d7c02cd33be0b5f563800b1c9a0b7639fc5e56f9a5d2ddc508f95126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea56f94d7c02cd33be0b5f563800b1c9a0b7639fc5e56f9a5d2ddc508f95126f->enter($__internal_ea56f94d7c02cd33be0b5f563800b1c9a0b7639fc5e56f9a5d2ddc508f95126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ea56f94d7c02cd33be0b5f563800b1c9a0b7639fc5e56f9a5d2ddc508f95126f->leave($__internal_ea56f94d7c02cd33be0b5f563800b1c9a0b7639fc5e56f9a5d2ddc508f95126f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e27f96e8ddcc852d44e37c06eafb5f6748f9ec84ec5aba5949523e68dd1c132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e27f96e8ddcc852d44e37c06eafb5f6748f9ec84ec5aba5949523e68dd1c132->enter($__internal_2e27f96e8ddcc852d44e37c06eafb5f6748f9ec84ec5aba5949523e68dd1c132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e27f96e8ddcc852d44e37c06eafb5f6748f9ec84ec5aba5949523e68dd1c132->leave($__internal_2e27f96e8ddcc852d44e37c06eafb5f6748f9ec84ec5aba5949523e68dd1c132_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d37a3cffd4f81fea583b9124e0d79308951e597ffa4c97ca2eee18dda3cc657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d37a3cffd4f81fea583b9124e0d79308951e597ffa4c97ca2eee18dda3cc657->enter($__internal_3d37a3cffd4f81fea583b9124e0d79308951e597ffa4c97ca2eee18dda3cc657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d37a3cffd4f81fea583b9124e0d79308951e597ffa4c97ca2eee18dda3cc657->leave($__internal_3d37a3cffd4f81fea583b9124e0d79308951e597ffa4c97ca2eee18dda3cc657_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/tecsistemas/my_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
