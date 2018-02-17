<?php

/* chapitre/index.html.twig */
class __TwigTemplate_6d2c4bb4de7246c9a2b3b4c7dc9be074faa6d87f99237fa3042f91b11c776dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chapitre/index.html.twig", 1);
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
        $__internal_f6a9738486673ea665ff7738a115c1e61e6cc899cfe981fd62ecab14acb0f0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a9738486673ea665ff7738a115c1e61e6cc899cfe981fd62ecab14acb0f0c2->enter($__internal_f6a9738486673ea665ff7738a115c1e61e6cc899cfe981fd62ecab14acb0f0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chapitre/index.html.twig"));

        $__internal_8202bc7e994bf478c166e7adf3cbcab9ceb5b7eedba9429ebbfa6f93fae33da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8202bc7e994bf478c166e7adf3cbcab9ceb5b7eedba9429ebbfa6f93fae33da3->enter($__internal_8202bc7e994bf478c166e7adf3cbcab9ceb5b7eedba9429ebbfa6f93fae33da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chapitre/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a9738486673ea665ff7738a115c1e61e6cc899cfe981fd62ecab14acb0f0c2->leave($__internal_f6a9738486673ea665ff7738a115c1e61e6cc899cfe981fd62ecab14acb0f0c2_prof);

        
        $__internal_8202bc7e994bf478c166e7adf3cbcab9ceb5b7eedba9429ebbfa6f93fae33da3->leave($__internal_8202bc7e994bf478c166e7adf3cbcab9ceb5b7eedba9429ebbfa6f93fae33da3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_331a7b66d70620c21da6bcaa5150bdd82ccfb7c0d4709d867a6c951d718583f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331a7b66d70620c21da6bcaa5150bdd82ccfb7c0d4709d867a6c951d718583f9->enter($__internal_331a7b66d70620c21da6bcaa5150bdd82ccfb7c0d4709d867a6c951d718583f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c3a8a29dd926fa1beb6782c6fb1a2f2afe02eb19fae54c669253ff1fd4b1aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a8a29dd926fa1beb6782c6fb1a2f2afe02eb19fae54c669253ff1fd4b1aa7->enter($__internal_5c3a8a29dd926fa1beb6782c6fb1a2f2afe02eb19fae54c669253ff1fd4b1aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chapitres list</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapitres"]) ? $context["chapitres"] : $this->getContext($context, "chapitres")));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapitre_show", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "titre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapitre"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapitre_show", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapitre_edit", array("id" => $this->getAttribute($context["chapitre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chapitre_new");
        echo "\">Create a new chapitre</a>
        </li>
    </ul>
";
        
        $__internal_5c3a8a29dd926fa1beb6782c6fb1a2f2afe02eb19fae54c669253ff1fd4b1aa7->leave($__internal_5c3a8a29dd926fa1beb6782c6fb1a2f2afe02eb19fae54c669253ff1fd4b1aa7_prof);

        
        $__internal_331a7b66d70620c21da6bcaa5150bdd82ccfb7c0d4709d867a6c951d718583f9->leave($__internal_331a7b66d70620c21da6bcaa5150bdd82ccfb7c0d4709d867a6c951d718583f9_prof);

    }

    public function getTemplateName()
    {
        return "chapitre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chapitres list</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for chapitre in chapitres %}
            <tr>
                <td><a href=\"{{ path('chapitre_show', { 'id': chapitre.id }) }}\">{{ chapitre.titre }}</a></td>
                <td>{{ chapitre.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('chapitre_show', { 'id': chapitre.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('chapitre_edit', { 'id': chapitre.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chapitre_new') }}\">Create a new chapitre</a>
        </li>
    </ul>
{% endblock %}
", "chapitre/index.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\chapitre\\index.html.twig");
    }
}
