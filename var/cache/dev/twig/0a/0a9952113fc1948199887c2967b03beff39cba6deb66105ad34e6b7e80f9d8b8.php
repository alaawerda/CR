<?php

/* cours/edit.html.twig */
class __TwigTemplate_afd8902e67f5f4335c759f0436e2bd7d6efb018e32f20f72364c25687f0907d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cours/edit.html.twig", 1);
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
        $__internal_b96201ef14b41a3a255661b1e6d1e5961ca45f95b07fca5e145e9b51f6572a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96201ef14b41a3a255661b1e6d1e5961ca45f95b07fca5e145e9b51f6572a76->enter($__internal_b96201ef14b41a3a255661b1e6d1e5961ca45f95b07fca5e145e9b51f6572a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $__internal_35e049b87723a3fae0a06f980e2cd06e7ed6f7fd243fb415c8eb2c56e30f1bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e049b87723a3fae0a06f980e2cd06e7ed6f7fd243fb415c8eb2c56e30f1bbd->enter($__internal_35e049b87723a3fae0a06f980e2cd06e7ed6f7fd243fb415c8eb2c56e30f1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96201ef14b41a3a255661b1e6d1e5961ca45f95b07fca5e145e9b51f6572a76->leave($__internal_b96201ef14b41a3a255661b1e6d1e5961ca45f95b07fca5e145e9b51f6572a76_prof);

        
        $__internal_35e049b87723a3fae0a06f980e2cd06e7ed6f7fd243fb415c8eb2c56e30f1bbd->leave($__internal_35e049b87723a3fae0a06f980e2cd06e7ed6f7fd243fb415c8eb2c56e30f1bbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04b0603382a87ab7088baf8173e07bac9e1809a536416af44214db223b8b15f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b0603382a87ab7088baf8173e07bac9e1809a536416af44214db223b8b15f5->enter($__internal_04b0603382a87ab7088baf8173e07bac9e1809a536416af44214db223b8b15f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6367443a12bc574ad354f867acdd3d96f5c1db8f590dcabc9e066a0b6306fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6367443a12bc574ad354f867acdd3d96f5c1db8f590dcabc9e066a0b6306fd5->enter($__internal_e6367443a12bc574ad354f867acdd3d96f5c1db8f590dcabc9e066a0b6306fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cour edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cours_index");
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
        
        $__internal_e6367443a12bc574ad354f867acdd3d96f5c1db8f590dcabc9e066a0b6306fd5->leave($__internal_e6367443a12bc574ad354f867acdd3d96f5c1db8f590dcabc9e066a0b6306fd5_prof);

        
        $__internal_04b0603382a87ab7088baf8173e07bac9e1809a536416af44214db223b8b15f5->leave($__internal_04b0603382a87ab7088baf8173e07bac9e1809a536416af44214db223b8b15f5_prof);

    }

    public function getTemplateName()
    {
        return "cours/edit.html.twig";
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
    <h1>Cour edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cours_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "cours/edit.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\cours\\edit.html.twig");
    }
}
