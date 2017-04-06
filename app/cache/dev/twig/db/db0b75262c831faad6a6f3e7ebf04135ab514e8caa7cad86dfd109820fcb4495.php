<?php

/* SafetyBundle:Default:crearpersona.html.twig */
class __TwigTemplate_facb8c669b85c349aa389bb0cc09ab31638e53efc8250596e303be696fe2fd6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SafetyBundle:Default:crearpersona.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f386376561654d38d69b7fef355efd85b8b3ce10e792d7577f65de3637ee726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f386376561654d38d69b7fef355efd85b8b3ce10e792d7577f65de3637ee726->enter($__internal_4f386376561654d38d69b7fef355efd85b8b3ce10e792d7577f65de3637ee726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SafetyBundle:Default:crearpersona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f386376561654d38d69b7fef355efd85b8b3ce10e792d7577f65de3637ee726->leave($__internal_4f386376561654d38d69b7fef355efd85b8b3ce10e792d7577f65de3637ee726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b6a6b372becdce848a038adcaaf10c89df252e94b7807ddfdbaa336c5d26a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b6a6b372becdce848a038adcaaf10c89df252e94b7807ddfdbaa336c5d26a2->enter($__internal_d2b6a6b372becdce848a038adcaaf10c89df252e94b7807ddfdbaa336c5d26a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 5
            echo "        <div class=\"alert alert-success\" xmlns=\"http://www.w3.org/1999/html\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 7
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "    <div class=\"row\">
        <div class=\"col s12 m5\">
            <div class=\"card-panel red darken-4\">
                ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuip", array()), 'label', array("label_attr" => array("class" => "white-text")));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuip", array()), 'widget', array("attr" => array("class" => "white-text")));
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuip", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "white-text")));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "white-text")));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "correo", array()), 'label', array("label_attr" => array("class" => "white-text")));
        echo "
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("class" => "white-text")));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "correo", array()), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Guardar
                    <i class=\"material-icons right\">send</i>
                </button>
                ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d2b6a6b372becdce848a038adcaaf10c89df252e94b7807ddfdbaa336c5d26a2->leave($__internal_d2b6a6b372becdce848a038adcaaf10c89df252e94b7807ddfdbaa336c5d26a2_prof);

    }

    public function getTemplateName()
    {
        return "SafetyBundle:Default:crearpersona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  63 => 11,  59 => 9,  50 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
    {% if app.session.flashBag.has('success') %}
        <div class=\"alert alert-success\" xmlns=\"http://www.w3.org/1999/html\">
            {% for msg in app.session.flashBag.get('success') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}
    <div class=\"row\">
        <div class=\"col s12 m5\">
            <div class=\"card-panel red darken-4\">
                {{ form_start(form) }}
                {{ form_errors(form) }}
                {{ form_label(form.nuip, null, {'label_attr': {'class':'white-text'}}) }}
                {{ form_widget(form.nuip, {'attr': {'class':'white-text'}}) }}
                {{ form_errors(form.nuip) }}
                {{ form_label(form.nombre, null, {'label_attr': {'class':'white-text'}}) }}
                {{ form_widget(form.nombre, {'attr': {'class':'white-text'}}) }}
                {{ form_errors(form.nombre) }}
                {{ form_label(form.correo, null, {'label_attr': {'class':'white-text'}}) }}
                {{ form_widget(form.correo, {'attr': {'class':'white-text'}}) }}
                {{ form_errors(form.correo) }}
                {{ form_rest(form) }}
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Guardar
                    <i class=\"material-icons right\">send</i>
                </button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "SafetyBundle:Default:crearpersona.html.twig", "/var/www/html/tecsistemas/my_project/src/SafetyBundle/Resources/views/Default/crearpersona.html.twig");
    }
}
