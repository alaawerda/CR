<?php

/* chapitre/edit.html.twig */
class __TwigTemplate_9e6f2cea3dec653d844e07325f60488e16db08b39021a7ff8b4884e08a5a26e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chapitre/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8284b14d4331bfb01ce89f40789b1f7120f597b54883fe7d05eba2057b07852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8284b14d4331bfb01ce89f40789b1f7120f597b54883fe7d05eba2057b07852->enter($__internal_c8284b14d4331bfb01ce89f40789b1f7120f597b54883fe7d05eba2057b07852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chapitre/edit.html.twig"));

        $__internal_c13b4363fa5ea261c547591ae23705bc3e94c6f76dfe21b83ead859229ab1f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13b4363fa5ea261c547591ae23705bc3e94c6f76dfe21b83ead859229ab1f5d->enter($__internal_c13b4363fa5ea261c547591ae23705bc3e94c6f76dfe21b83ead859229ab1f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chapitre/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8284b14d4331bfb01ce89f40789b1f7120f597b54883fe7d05eba2057b07852->leave($__internal_c8284b14d4331bfb01ce89f40789b1f7120f597b54883fe7d05eba2057b07852_prof);

        
        $__internal_c13b4363fa5ea261c547591ae23705bc3e94c6f76dfe21b83ead859229ab1f5d->leave($__internal_c13b4363fa5ea261c547591ae23705bc3e94c6f76dfe21b83ead859229ab1f5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0242e56a93684fb2edbaf061001fcbefe5ed03e9c77703abe0a858c5cddf9c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0242e56a93684fb2edbaf061001fcbefe5ed03e9c77703abe0a858c5cddf9c80->enter($__internal_0242e56a93684fb2edbaf061001fcbefe5ed03e9c77703abe0a858c5cddf9c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a86e86a7f139231825cc6a38be744136b34fd23c41ea93403b0753012082912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86e86a7f139231825cc6a38be744136b34fd23c41ea93403b0753012082912d->enter($__internal_a86e86a7f139231825cc6a38be744136b34fd23c41ea93403b0753012082912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chapitre edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapitre_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a86e86a7f139231825cc6a38be744136b34fd23c41ea93403b0753012082912d->leave($__internal_a86e86a7f139231825cc6a38be744136b34fd23c41ea93403b0753012082912d_prof);

        
        $__internal_0242e56a93684fb2edbaf061001fcbefe5ed03e9c77703abe0a858c5cddf9c80->leave($__internal_0242e56a93684fb2edbaf061001fcbefe5ed03e9c77703abe0a858c5cddf9c80_prof);

    }

    public function getTemplateName()
    {
        return "chapitre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chapitre edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('chapitre_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "chapitre/edit.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\chapitre\\edit.html.twig");
    }
}
