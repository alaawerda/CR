<?php

/* moniteur/show.html.twig */
class __TwigTemplate_b4854db46159e35221306ca34b045203bfe1e6cda3f108fb265a8e8c2f4a07a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "moniteur/show.html.twig", 1);
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
        $__internal_f8e6477bc85361efb2fc86d1a398678009aafbc0cff347a59e6b4461796a18f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e6477bc85361efb2fc86d1a398678009aafbc0cff347a59e6b4461796a18f2->enter($__internal_f8e6477bc85361efb2fc86d1a398678009aafbc0cff347a59e6b4461796a18f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/show.html.twig"));

        $__internal_5e4dbdbd7b0c1d83f27d2f8df56586b0a28e93caadd5ae9c88e194a90952b3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4dbdbd7b0c1d83f27d2f8df56586b0a28e93caadd5ae9c88e194a90952b3ce->enter($__internal_5e4dbdbd7b0c1d83f27d2f8df56586b0a28e93caadd5ae9c88e194a90952b3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e6477bc85361efb2fc86d1a398678009aafbc0cff347a59e6b4461796a18f2->leave($__internal_f8e6477bc85361efb2fc86d1a398678009aafbc0cff347a59e6b4461796a18f2_prof);

        
        $__internal_5e4dbdbd7b0c1d83f27d2f8df56586b0a28e93caadd5ae9c88e194a90952b3ce->leave($__internal_5e4dbdbd7b0c1d83f27d2f8df56586b0a28e93caadd5ae9c88e194a90952b3ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3c536d8f6b85230d959416ec50689c295f32fa8569fbfcbbd454032453bf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3c536d8f6b85230d959416ec50689c295f32fa8569fbfcbbd454032453bf26->enter($__internal_6d3c536d8f6b85230d959416ec50689c295f32fa8569fbfcbbd454032453bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cfcf11f4155fdf49a0c01eab4063840e7ebea9e9752357865df82d582a66700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfcf11f4155fdf49a0c01eab4063840e7ebea9e9752357865df82d582a66700->enter($__internal_7cfcf11f4155fdf49a0c01eab4063840e7ebea9e9752357865df82d582a66700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moniteur</h1>

    <table>
        <tbody>
            <tr>
                <th>Cin</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "cin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponiblite</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "disponiblite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "contact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idmoniteur</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "idmoniteur", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_edit", array("idmoniteur" => $this->getAttribute((isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "idmoniteur", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7cfcf11f4155fdf49a0c01eab4063840e7ebea9e9752357865df82d582a66700->leave($__internal_7cfcf11f4155fdf49a0c01eab4063840e7ebea9e9752357865df82d582a66700_prof);

        
        $__internal_6d3c536d8f6b85230d959416ec50689c295f32fa8569fbfcbbd454032453bf26->leave($__internal_6d3c536d8f6b85230d959416ec50689c295f32fa8569fbfcbbd454032453bf26_prof);

    }

    public function getTemplateName()
    {
        return "moniteur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Moniteur</h1>

    <table>
        <tbody>
            <tr>
                <th>Cin</th>
                <td>{{ moniteur.cin }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ moniteur.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ moniteur.prenom }}</td>
            </tr>
            <tr>
                <th>Disponiblite</th>
                <td>{{ moniteur.disponiblite }}</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ moniteur.contact }}</td>
            </tr>
            <tr>
                <th>Idmoniteur</th>
                <td>{{ moniteur.idmoniteur }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('moniteur_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('moniteur_edit', { 'idmoniteur': moniteur.idmoniteur }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "moniteur/show.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\moniteur\\show.html.twig");
    }
}
