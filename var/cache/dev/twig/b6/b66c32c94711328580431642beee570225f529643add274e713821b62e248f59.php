<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_084af64ce33a463e4959d5857f2e6c729494a1b8f1699e7f87b283890a725e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084af64ce33a463e4959d5857f2e6c729494a1b8f1699e7f87b283890a725e00->enter($__internal_084af64ce33a463e4959d5857f2e6c729494a1b8f1699e7f87b283890a725e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_11e811099b9e95e1be517b24906ea7dcc9ef8b1220399319ba74c9feccf5daa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e811099b9e95e1be517b24906ea7dcc9ef8b1220399319ba74c9feccf5daa6->enter($__internal_11e811099b9e95e1be517b24906ea7dcc9ef8b1220399319ba74c9feccf5daa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084af64ce33a463e4959d5857f2e6c729494a1b8f1699e7f87b283890a725e00->leave($__internal_084af64ce33a463e4959d5857f2e6c729494a1b8f1699e7f87b283890a725e00_prof);

        
        $__internal_11e811099b9e95e1be517b24906ea7dcc9ef8b1220399319ba74c9feccf5daa6->leave($__internal_11e811099b9e95e1be517b24906ea7dcc9ef8b1220399319ba74c9feccf5daa6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e0a445d5a60ede761fb618a27d9156f6a61568a57e519fa74968162079a70e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0a445d5a60ede761fb618a27d9156f6a61568a57e519fa74968162079a70e2->enter($__internal_9e0a445d5a60ede761fb618a27d9156f6a61568a57e519fa74968162079a70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_439bf8e524c17b1f5144b962a2c2b29a10a389858d62ede9049d77658e44831f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439bf8e524c17b1f5144b962a2c2b29a10a389858d62ede9049d77658e44831f->enter($__internal_439bf8e524c17b1f5144b962a2c2b29a10a389858d62ede9049d77658e44831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_439bf8e524c17b1f5144b962a2c2b29a10a389858d62ede9049d77658e44831f->leave($__internal_439bf8e524c17b1f5144b962a2c2b29a10a389858d62ede9049d77658e44831f_prof);

        
        $__internal_9e0a445d5a60ede761fb618a27d9156f6a61568a57e519fa74968162079a70e2->leave($__internal_9e0a445d5a60ede761fb618a27d9156f6a61568a57e519fa74968162079a70e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55e4a1feb23cee8a96a5132db0941414de2f7c2d8b50a92d1ef38bfce7521d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e4a1feb23cee8a96a5132db0941414de2f7c2d8b50a92d1ef38bfce7521d99->enter($__internal_55e4a1feb23cee8a96a5132db0941414de2f7c2d8b50a92d1ef38bfce7521d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1921348d8351b34e1386d5caa75fd23db906b20398ea8e6b45db72b3922209c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1921348d8351b34e1386d5caa75fd23db906b20398ea8e6b45db72b3922209c4->enter($__internal_1921348d8351b34e1386d5caa75fd23db906b20398ea8e6b45db72b3922209c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1921348d8351b34e1386d5caa75fd23db906b20398ea8e6b45db72b3922209c4->leave($__internal_1921348d8351b34e1386d5caa75fd23db906b20398ea8e6b45db72b3922209c4_prof);

        
        $__internal_55e4a1feb23cee8a96a5132db0941414de2f7c2d8b50a92d1ef38bfce7521d99->leave($__internal_55e4a1feb23cee8a96a5132db0941414de2f7c2d8b50a92d1ef38bfce7521d99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ef0db395a1388bd56f52cf215e48e123c4543889fe386dc7f2a7b35e29dae1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef0db395a1388bd56f52cf215e48e123c4543889fe386dc7f2a7b35e29dae1c->enter($__internal_8ef0db395a1388bd56f52cf215e48e123c4543889fe386dc7f2a7b35e29dae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_316206d48cde222f09aa9efeeda39f88c598c673141cb9008a99b60b643a8180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316206d48cde222f09aa9efeeda39f88c598c673141cb9008a99b60b643a8180->enter($__internal_316206d48cde222f09aa9efeeda39f88c598c673141cb9008a99b60b643a8180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_316206d48cde222f09aa9efeeda39f88c598c673141cb9008a99b60b643a8180->leave($__internal_316206d48cde222f09aa9efeeda39f88c598c673141cb9008a99b60b643a8180_prof);

        
        $__internal_8ef0db395a1388bd56f52cf215e48e123c4543889fe386dc7f2a7b35e29dae1c->leave($__internal_8ef0db395a1388bd56f52cf215e48e123c4543889fe386dc7f2a7b35e29dae1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/SevigneMiroir/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
