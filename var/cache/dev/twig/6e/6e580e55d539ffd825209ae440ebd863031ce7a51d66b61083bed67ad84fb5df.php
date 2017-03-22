<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c22d97982730d0d4058b9bea1bb74a2f52595da1deb791b793bc1f9f9d92daa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8bc8cec39aad5a0f9c434a739d1e213b94e7642f6ebd0f504ceede949593559a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc8cec39aad5a0f9c434a739d1e213b94e7642f6ebd0f504ceede949593559a->enter($__internal_8bc8cec39aad5a0f9c434a739d1e213b94e7642f6ebd0f504ceede949593559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cabe1e3e7191d8b7b800a53664f23957fa8892793f5321f76c2ae918876e7972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabe1e3e7191d8b7b800a53664f23957fa8892793f5321f76c2ae918876e7972->enter($__internal_cabe1e3e7191d8b7b800a53664f23957fa8892793f5321f76c2ae918876e7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc8cec39aad5a0f9c434a739d1e213b94e7642f6ebd0f504ceede949593559a->leave($__internal_8bc8cec39aad5a0f9c434a739d1e213b94e7642f6ebd0f504ceede949593559a_prof);

        
        $__internal_cabe1e3e7191d8b7b800a53664f23957fa8892793f5321f76c2ae918876e7972->leave($__internal_cabe1e3e7191d8b7b800a53664f23957fa8892793f5321f76c2ae918876e7972_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f8b8b87cf18e0655069cb35b29cbe0d4edc3ee02714eb0882040d949e5a7bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8b8b87cf18e0655069cb35b29cbe0d4edc3ee02714eb0882040d949e5a7bd6->enter($__internal_2f8b8b87cf18e0655069cb35b29cbe0d4edc3ee02714eb0882040d949e5a7bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19bbced7998012b717c5dd7716affee4c7b7c77727603bc3348c6224559505b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bbced7998012b717c5dd7716affee4c7b7c77727603bc3348c6224559505b9->enter($__internal_19bbced7998012b717c5dd7716affee4c7b7c77727603bc3348c6224559505b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19bbced7998012b717c5dd7716affee4c7b7c77727603bc3348c6224559505b9->leave($__internal_19bbced7998012b717c5dd7716affee4c7b7c77727603bc3348c6224559505b9_prof);

        
        $__internal_2f8b8b87cf18e0655069cb35b29cbe0d4edc3ee02714eb0882040d949e5a7bd6->leave($__internal_2f8b8b87cf18e0655069cb35b29cbe0d4edc3ee02714eb0882040d949e5a7bd6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dcf9c9cb07eda7477193f93e1bde709f55350b301fa0d09e2d27716bdb73e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcf9c9cb07eda7477193f93e1bde709f55350b301fa0d09e2d27716bdb73e5d->enter($__internal_9dcf9c9cb07eda7477193f93e1bde709f55350b301fa0d09e2d27716bdb73e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0c39939914698351ef2373e207de0e6d492ac26281d065a1709358dc6377fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c39939914698351ef2373e207de0e6d492ac26281d065a1709358dc6377fd3->enter($__internal_a0c39939914698351ef2373e207de0e6d492ac26281d065a1709358dc6377fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a0c39939914698351ef2373e207de0e6d492ac26281d065a1709358dc6377fd3->leave($__internal_a0c39939914698351ef2373e207de0e6d492ac26281d065a1709358dc6377fd3_prof);

        
        $__internal_9dcf9c9cb07eda7477193f93e1bde709f55350b301fa0d09e2d27716bdb73e5d->leave($__internal_9dcf9c9cb07eda7477193f93e1bde709f55350b301fa0d09e2d27716bdb73e5d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c068bd6dcb70b5ecee9f46322584524084ae1b1cc9432f51b642b2c380f5710e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c068bd6dcb70b5ecee9f46322584524084ae1b1cc9432f51b642b2c380f5710e->enter($__internal_c068bd6dcb70b5ecee9f46322584524084ae1b1cc9432f51b642b2c380f5710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e6de273f8dbf022b99825cf392a83525c86ee3d062d334c77335fadfc2c8373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6de273f8dbf022b99825cf392a83525c86ee3d062d334c77335fadfc2c8373->enter($__internal_2e6de273f8dbf022b99825cf392a83525c86ee3d062d334c77335fadfc2c8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2e6de273f8dbf022b99825cf392a83525c86ee3d062d334c77335fadfc2c8373->leave($__internal_2e6de273f8dbf022b99825cf392a83525c86ee3d062d334c77335fadfc2c8373_prof);

        
        $__internal_c068bd6dcb70b5ecee9f46322584524084ae1b1cc9432f51b642b2c380f5710e->leave($__internal_c068bd6dcb70b5ecee9f46322584524084ae1b1cc9432f51b642b2c380f5710e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/SevigneMiroir/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
