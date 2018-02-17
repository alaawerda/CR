<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1fe37e7333fa2302574a681f9e5e027d2256d8d096a297ce8f660b3bf5fbc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_094c94b215985fa08ee471e1e3f1db7f0d57d2bb3eca5229c7c01aa5cbc30ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094c94b215985fa08ee471e1e3f1db7f0d57d2bb3eca5229c7c01aa5cbc30ebd->enter($__internal_094c94b215985fa08ee471e1e3f1db7f0d57d2bb3eca5229c7c01aa5cbc30ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_17f2fabfb7135996f15caa3d2d0c0564072a20d75a065b82371b2419c3a7d4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f2fabfb7135996f15caa3d2d0c0564072a20d75a065b82371b2419c3a7d4e4->enter($__internal_17f2fabfb7135996f15caa3d2d0c0564072a20d75a065b82371b2419c3a7d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094c94b215985fa08ee471e1e3f1db7f0d57d2bb3eca5229c7c01aa5cbc30ebd->leave($__internal_094c94b215985fa08ee471e1e3f1db7f0d57d2bb3eca5229c7c01aa5cbc30ebd_prof);

        
        $__internal_17f2fabfb7135996f15caa3d2d0c0564072a20d75a065b82371b2419c3a7d4e4->leave($__internal_17f2fabfb7135996f15caa3d2d0c0564072a20d75a065b82371b2419c3a7d4e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea24585587aa095aae2e13f408f0373a1587dcdafc7bd58a625d494f94134825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea24585587aa095aae2e13f408f0373a1587dcdafc7bd58a625d494f94134825->enter($__internal_ea24585587aa095aae2e13f408f0373a1587dcdafc7bd58a625d494f94134825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cde0ef914923eb4407bd7a298deb9a6bb0a3665fb2c2c30b157dbd7576ad4f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde0ef914923eb4407bd7a298deb9a6bb0a3665fb2c2c30b157dbd7576ad4f4e->enter($__internal_cde0ef914923eb4407bd7a298deb9a6bb0a3665fb2c2c30b157dbd7576ad4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cde0ef914923eb4407bd7a298deb9a6bb0a3665fb2c2c30b157dbd7576ad4f4e->leave($__internal_cde0ef914923eb4407bd7a298deb9a6bb0a3665fb2c2c30b157dbd7576ad4f4e_prof);

        
        $__internal_ea24585587aa095aae2e13f408f0373a1587dcdafc7bd58a625d494f94134825->leave($__internal_ea24585587aa095aae2e13f408f0373a1587dcdafc7bd58a625d494f94134825_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d3f4abdf86536902958bf94761bbd595b3bfcff75a95967560df9adb754dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d3f4abdf86536902958bf94761bbd595b3bfcff75a95967560df9adb754dea->enter($__internal_29d3f4abdf86536902958bf94761bbd595b3bfcff75a95967560df9adb754dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4c9f63b7100da5f5ed3115233553d74c5ef9e9559890aaaaee8767744101c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c9f63b7100da5f5ed3115233553d74c5ef9e9559890aaaaee8767744101c8d->enter($__internal_f4c9f63b7100da5f5ed3115233553d74c5ef9e9559890aaaaee8767744101c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f4c9f63b7100da5f5ed3115233553d74c5ef9e9559890aaaaee8767744101c8d->leave($__internal_f4c9f63b7100da5f5ed3115233553d74c5ef9e9559890aaaaee8767744101c8d_prof);

        
        $__internal_29d3f4abdf86536902958bf94761bbd595b3bfcff75a95967560df9adb754dea->leave($__internal_29d3f4abdf86536902958bf94761bbd595b3bfcff75a95967560df9adb754dea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\CR\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
