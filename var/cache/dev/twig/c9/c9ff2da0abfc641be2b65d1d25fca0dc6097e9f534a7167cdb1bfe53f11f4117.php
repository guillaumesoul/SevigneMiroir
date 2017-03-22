<?php

/* default/index.html.twig */
class __TwigTemplate_5efabe1621405da57da4b2a6532a072134bd2d2f5ec89b63a7c364860496a85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9b48d5fc33160617520d4d6e600ec1a0b4be476697977c94fecc20545010233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b48d5fc33160617520d4d6e600ec1a0b4be476697977c94fecc20545010233->enter($__internal_d9b48d5fc33160617520d4d6e600ec1a0b4be476697977c94fecc20545010233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8b203b03ecdd6e519d0c2d7b0b27fb2bc7db0c3996b37fe18254275ee0f99852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b203b03ecdd6e519d0c2d7b0b27fb2bc7db0c3996b37fe18254275ee0f99852->enter($__internal_8b203b03ecdd6e519d0c2d7b0b27fb2bc7db0c3996b37fe18254275ee0f99852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9b48d5fc33160617520d4d6e600ec1a0b4be476697977c94fecc20545010233->leave($__internal_d9b48d5fc33160617520d4d6e600ec1a0b4be476697977c94fecc20545010233_prof);

        
        $__internal_8b203b03ecdd6e519d0c2d7b0b27fb2bc7db0c3996b37fe18254275ee0f99852->leave($__internal_8b203b03ecdd6e519d0c2d7b0b27fb2bc7db0c3996b37fe18254275ee0f99852_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b423fac8354c455d949fd28a876fe08aa922ef2b592b63127f1749367fdc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b423fac8354c455d949fd28a876fe08aa922ef2b592b63127f1749367fdc19->enter($__internal_34b423fac8354c455d949fd28a876fe08aa922ef2b592b63127f1749367fdc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99b056b46935556bed964df703a35bbef13c0eea321d8a027f1846335b71343f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b056b46935556bed964df703a35bbef13c0eea321d8a027f1846335b71343f->enter($__internal_99b056b46935556bed964df703a35bbef13c0eea321d8a027f1846335b71343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        Je vais faire un menu avec
        <ul>
            <li>
                <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect mdl-button--accent\">
                    <i class=\"material-icons\">add</i>
                </button>
            </li>
            <li>
                <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect mdl-button--accent\">
                    <i class=\"material-icons\">desktop_windows</i>
                </button>
            </li>
        </ul>
    </div>
";
        
        $__internal_99b056b46935556bed964df703a35bbef13c0eea321d8a027f1846335b71343f->leave($__internal_99b056b46935556bed964df703a35bbef13c0eea321d8a027f1846335b71343f_prof);

        
        $__internal_34b423fac8354c455d949fd28a876fe08aa922ef2b592b63127f1749367fdc19->leave($__internal_34b423fac8354c455d949fd28a876fe08aa922ef2b592b63127f1749367fdc19_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13771d6f0fd9d7d929c3d2aa3072f7b16c56f41cb9b2f40df81f82c69398a2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13771d6f0fd9d7d929c3d2aa3072f7b16c56f41cb9b2f40df81f82c69398a2d7->enter($__internal_13771d6f0fd9d7d929c3d2aa3072f7b16c56f41cb9b2f40df81f82c69398a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea4c5e2695b5b5bcd2cc1647ba8375b8eb58ff079d9b828d71ed756c91d98dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4c5e2695b5b5bcd2cc1647ba8375b8eb58ff079d9b828d71ed756c91d98dfe->enter($__internal_ea4c5e2695b5b5bcd2cc1647ba8375b8eb58ff079d9b828d71ed756c91d98dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
";
        
        $__internal_ea4c5e2695b5b5bcd2cc1647ba8375b8eb58ff079d9b828d71ed756c91d98dfe->leave($__internal_ea4c5e2695b5b5bcd2cc1647ba8375b8eb58ff079d9b828d71ed756c91d98dfe_prof);

        
        $__internal_13771d6f0fd9d7d929c3d2aa3072f7b16c56f41cb9b2f40df81f82c69398a2d7->leave($__internal_13771d6f0fd9d7d929c3d2aa3072f7b16c56f41cb9b2f40df81f82c69398a2d7_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 21,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        Je vais faire un menu avec
        <ul>
            <li>
                <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect mdl-button--accent\">
                    <i class=\"material-icons\">add</i>
                </button>
            </li>
            <li>
                <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-js-ripple-effect mdl-button--accent\">
                    <i class=\"material-icons\">desktop_windows</i>
                </button>
            </li>
        </ul>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/SevigneMiroir/app/Resources/views/default/index.html.twig");
    }
}
