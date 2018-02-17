<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_18cd2c618c278f60164a22cece3f092c74096b2cd0c55e340a75cc119cb05de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cd2c618c278f60164a22cece3f092c74096b2cd0c55e340a75cc119cb05de7->enter($__internal_18cd2c618c278f60164a22cece3f092c74096b2cd0c55e340a75cc119cb05de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9420eccd62093d19d1167b90abe616d548933b1fabb2d4fda55850d40773234a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9420eccd62093d19d1167b90abe616d548933b1fabb2d4fda55850d40773234a->enter($__internal_9420eccd62093d19d1167b90abe616d548933b1fabb2d4fda55850d40773234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18cd2c618c278f60164a22cece3f092c74096b2cd0c55e340a75cc119cb05de7->leave($__internal_18cd2c618c278f60164a22cece3f092c74096b2cd0c55e340a75cc119cb05de7_prof);

        
        $__internal_9420eccd62093d19d1167b90abe616d548933b1fabb2d4fda55850d40773234a->leave($__internal_9420eccd62093d19d1167b90abe616d548933b1fabb2d4fda55850d40773234a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1cb4a2c8df198b216924ff08a5927a6a4196f44e4dc2247416cd8a23f302ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cb4a2c8df198b216924ff08a5927a6a4196f44e4dc2247416cd8a23f302ee0->enter($__internal_d1cb4a2c8df198b216924ff08a5927a6a4196f44e4dc2247416cd8a23f302ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6376aa13c990123874fe24db20e70dedb4259402634ef77459a34dffb304493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6376aa13c990123874fe24db20e70dedb4259402634ef77459a34dffb304493->enter($__internal_d6376aa13c990123874fe24db20e70dedb4259402634ef77459a34dffb304493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6376aa13c990123874fe24db20e70dedb4259402634ef77459a34dffb304493->leave($__internal_d6376aa13c990123874fe24db20e70dedb4259402634ef77459a34dffb304493_prof);

        
        $__internal_d1cb4a2c8df198b216924ff08a5927a6a4196f44e4dc2247416cd8a23f302ee0->leave($__internal_d1cb4a2c8df198b216924ff08a5927a6a4196f44e4dc2247416cd8a23f302ee0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f25e0fab13ab1b9150e5ecca4604add6f14d0dfbafaa0c1f42ff2811572012ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25e0fab13ab1b9150e5ecca4604add6f14d0dfbafaa0c1f42ff2811572012ed->enter($__internal_f25e0fab13ab1b9150e5ecca4604add6f14d0dfbafaa0c1f42ff2811572012ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ab00a209cdc29f704e6af0a58490395a4defeffc698a4cf9d8d8f6861657914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab00a209cdc29f704e6af0a58490395a4defeffc698a4cf9d8d8f6861657914->enter($__internal_9ab00a209cdc29f704e6af0a58490395a4defeffc698a4cf9d8d8f6861657914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ab00a209cdc29f704e6af0a58490395a4defeffc698a4cf9d8d8f6861657914->leave($__internal_9ab00a209cdc29f704e6af0a58490395a4defeffc698a4cf9d8d8f6861657914_prof);

        
        $__internal_f25e0fab13ab1b9150e5ecca4604add6f14d0dfbafaa0c1f42ff2811572012ed->leave($__internal_f25e0fab13ab1b9150e5ecca4604add6f14d0dfbafaa0c1f42ff2811572012ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e0bacb95715e6673eab89602f97d832cef4b3b01a6901bea093ff0bf0819d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0bacb95715e6673eab89602f97d832cef4b3b01a6901bea093ff0bf0819d60->enter($__internal_4e0bacb95715e6673eab89602f97d832cef4b3b01a6901bea093ff0bf0819d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d97b366318164227c2d27ecc1dac7d5a94fae7cefbaaeee6f09ef849ec1c2272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97b366318164227c2d27ecc1dac7d5a94fae7cefbaaeee6f09ef849ec1c2272->enter($__internal_d97b366318164227c2d27ecc1dac7d5a94fae7cefbaaeee6f09ef849ec1c2272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d97b366318164227c2d27ecc1dac7d5a94fae7cefbaaeee6f09ef849ec1c2272->leave($__internal_d97b366318164227c2d27ecc1dac7d5a94fae7cefbaaeee6f09ef849ec1c2272_prof);

        
        $__internal_4e0bacb95715e6673eab89602f97d832cef4b3b01a6901bea093ff0bf0819d60->leave($__internal_4e0bacb95715e6673eab89602f97d832cef4b3b01a6901bea093ff0bf0819d60_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\CR\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
