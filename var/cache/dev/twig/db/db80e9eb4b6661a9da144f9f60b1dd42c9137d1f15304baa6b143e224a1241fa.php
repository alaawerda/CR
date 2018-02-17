<?php

/* moniteur/edit.html.twig */
class __TwigTemplate_2fda6c48ed6f1dbeb428c380dfa8fd9dbdacee490d670e442f1306e233effb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "moniteur/edit.html.twig", 1);
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
        $__internal_fdc969118e5529845c25a357b600783489760c2fa495a489f2b897494f37793f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc969118e5529845c25a357b600783489760c2fa495a489f2b897494f37793f->enter($__internal_fdc969118e5529845c25a357b600783489760c2fa495a489f2b897494f37793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/edit.html.twig"));

        $__internal_23405235d6a242aeecf8107252d4a6bf649401534c910c7b476cec9fb010fc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23405235d6a242aeecf8107252d4a6bf649401534c910c7b476cec9fb010fc2d->enter($__internal_23405235d6a242aeecf8107252d4a6bf649401534c910c7b476cec9fb010fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdc969118e5529845c25a357b600783489760c2fa495a489f2b897494f37793f->leave($__internal_fdc969118e5529845c25a357b600783489760c2fa495a489f2b897494f37793f_prof);

        
        $__internal_23405235d6a242aeecf8107252d4a6bf649401534c910c7b476cec9fb010fc2d->leave($__internal_23405235d6a242aeecf8107252d4a6bf649401534c910c7b476cec9fb010fc2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2124411bdc984fb13af952f7f9dfa7639a2acd62d5cc5ee8f80e227d30c1ad63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2124411bdc984fb13af952f7f9dfa7639a2acd62d5cc5ee8f80e227d30c1ad63->enter($__internal_2124411bdc984fb13af952f7f9dfa7639a2acd62d5cc5ee8f80e227d30c1ad63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f9ca50b231eddbb4119e5f7bacab29b7db8b20128a83bf7f0f1fc3ddef84f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9ca50b231eddbb4119e5f7bacab29b7db8b20128a83bf7f0f1fc3ddef84f24->enter($__internal_3f9ca50b231eddbb4119e5f7bacab29b7db8b20128a83bf7f0f1fc3ddef84f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moniteur edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_index");
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
        
        $__internal_3f9ca50b231eddbb4119e5f7bacab29b7db8b20128a83bf7f0f1fc3ddef84f24->leave($__internal_3f9ca50b231eddbb4119e5f7bacab29b7db8b20128a83bf7f0f1fc3ddef84f24_prof);

        
        $__internal_2124411bdc984fb13af952f7f9dfa7639a2acd62d5cc5ee8f80e227d30c1ad63->leave($__internal_2124411bdc984fb13af952f7f9dfa7639a2acd62d5cc5ee8f80e227d30c1ad63_prof);

    }

    public function getTemplateName()
    {
        return "moniteur/edit.html.twig";
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
    <h1>Moniteur edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('moniteur_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "moniteur/edit.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\moniteur\\edit.html.twig");
    }
}
