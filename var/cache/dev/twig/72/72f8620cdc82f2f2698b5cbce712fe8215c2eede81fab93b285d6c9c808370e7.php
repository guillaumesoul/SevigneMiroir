<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0675c6ffd1f35dad0ca6f74b8cf9efc87c12a32d24f76d3c7a8fe7b3e99492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0675c6ffd1f35dad0ca6f74b8cf9efc87c12a32d24f76d3c7a8fe7b3e99492->enter($__internal_2c0675c6ffd1f35dad0ca6f74b8cf9efc87c12a32d24f76d3c7a8fe7b3e99492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8c41f768c3ce09bf3ae46884d146baed3e2fae603cb9a8720aece9026b88e98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41f768c3ce09bf3ae46884d146baed3e2fae603cb9a8720aece9026b88e98f->enter($__internal_8c41f768c3ce09bf3ae46884d146baed3e2fae603cb9a8720aece9026b88e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_2c0675c6ffd1f35dad0ca6f74b8cf9efc87c12a32d24f76d3c7a8fe7b3e99492->leave($__internal_2c0675c6ffd1f35dad0ca6f74b8cf9efc87c12a32d24f76d3c7a8fe7b3e99492_prof);

        
        $__internal_8c41f768c3ce09bf3ae46884d146baed3e2fae603cb9a8720aece9026b88e98f->leave($__internal_8c41f768c3ce09bf3ae46884d146baed3e2fae603cb9a8720aece9026b88e98f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_265e875c0a918c85d843952b3b2978632b124947a63092767344e99ca685e309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265e875c0a918c85d843952b3b2978632b124947a63092767344e99ca685e309->enter($__internal_265e875c0a918c85d843952b3b2978632b124947a63092767344e99ca685e309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5df13be496f77674265e78b7fe3d67db5562ebcf3478db6815bbddec6aca6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5df13be496f77674265e78b7fe3d67db5562ebcf3478db6815bbddec6aca6b6->enter($__internal_f5df13be496f77674265e78b7fe3d67db5562ebcf3478db6815bbddec6aca6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Informations médicales";
        
        $__internal_f5df13be496f77674265e78b7fe3d67db5562ebcf3478db6815bbddec6aca6b6->leave($__internal_f5df13be496f77674265e78b7fe3d67db5562ebcf3478db6815bbddec6aca6b6_prof);

        
        $__internal_265e875c0a918c85d843952b3b2978632b124947a63092767344e99ca685e309->leave($__internal_265e875c0a918c85d843952b3b2978632b124947a63092767344e99ca685e309_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea949c50fc2ca5f17b357b03f43549ed5480775b50e1204b1372b5c8a9f1ab48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea949c50fc2ca5f17b357b03f43549ed5480775b50e1204b1372b5c8a9f1ab48->enter($__internal_ea949c50fc2ca5f17b357b03f43549ed5480775b50e1204b1372b5c8a9f1ab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d02e71a5921e88848219cfcef2d35aadceb497f0f213a11621162e06cc7cd18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02e71a5921e88848219cfcef2d35aadceb497f0f213a11621162e06cc7cd18e->enter($__internal_d02e71a5921e88848219cfcef2d35aadceb497f0f213a11621162e06cc7cd18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
        ";
        
        $__internal_d02e71a5921e88848219cfcef2d35aadceb497f0f213a11621162e06cc7cd18e->leave($__internal_d02e71a5921e88848219cfcef2d35aadceb497f0f213a11621162e06cc7cd18e_prof);

        
        $__internal_ea949c50fc2ca5f17b357b03f43549ed5480775b50e1204b1372b5c8a9f1ab48->leave($__internal_ea949c50fc2ca5f17b357b03f43549ed5480775b50e1204b1372b5c8a9f1ab48_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_39572c7e049a000da976691d6d6de0373f48af413c858485645608776a7dd2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39572c7e049a000da976691d6d6de0373f48af413c858485645608776a7dd2f9->enter($__internal_39572c7e049a000da976691d6d6de0373f48af413c858485645608776a7dd2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0de1fa06cdac507c6352c937f92bb80e6a697a02ba4da9628d4646418f15e52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de1fa06cdac507c6352c937f92bb80e6a697a02ba4da9628d4646418f15e52c->enter($__internal_0de1fa06cdac507c6352c937f92bb80e6a697a02ba4da9628d4646418f15e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0de1fa06cdac507c6352c937f92bb80e6a697a02ba4da9628d4646418f15e52c->leave($__internal_0de1fa06cdac507c6352c937f92bb80e6a697a02ba4da9628d4646418f15e52c_prof);

        
        $__internal_39572c7e049a000da976691d6d6de0373f48af413c858485645608776a7dd2f9->leave($__internal_39572c7e049a000da976691d6d6de0373f48af413c858485645608776a7dd2f9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28454583865192e0c4e41be3ce73d3b9f09644603c5b7176d01d3d4753554d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28454583865192e0c4e41be3ce73d3b9f09644603c5b7176d01d3d4753554d04->enter($__internal_28454583865192e0c4e41be3ce73d3b9f09644603c5b7176d01d3d4753554d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82ea12bb38faba08789a006647226f9a9cfdafaa575cf798e2df4ea023b07c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ea12bb38faba08789a006647226f9a9cfdafaa575cf798e2df4ea023b07c47->enter($__internal_82ea12bb38faba08789a006647226f9a9cfdafaa575cf798e2df4ea023b07c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
        ";
        
        $__internal_82ea12bb38faba08789a006647226f9a9cfdafaa575cf798e2df4ea023b07c47->leave($__internal_82ea12bb38faba08789a006647226f9a9cfdafaa575cf798e2df4ea023b07c47_prof);

        
        $__internal_28454583865192e0c4e41be3ce73d3b9f09644603c5b7176d01d3d4753554d04->leave($__internal_28454583865192e0c4e41be3ce73d3b9f09644603c5b7176d01d3d4753554d04_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 17,  125 => 16,  108 => 14,  97 => 8,  88 => 7,  70 => 5,  58 => 19,  56 => 16,  53 => 15,  51 => 14,  45 => 11,  42 => 10,  40 => 7,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Informations médicales{% endblock %}</title>

        {% block stylesheets %}

        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}

        {% block javascripts %}
            <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/SevigneMiroir/app/Resources/views/base.html.twig");
    }
}
