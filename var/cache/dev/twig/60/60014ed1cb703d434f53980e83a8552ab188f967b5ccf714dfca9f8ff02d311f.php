<?php

/* cours/index.html.twig */
class __TwigTemplate_d04743e6d42b5deadb0a34a71f9bf2f22d168d0edbc7f752ce29e5b2b8e0f406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cours/index.html.twig", 1);
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
        $__internal_f1a2985266260cfc4e643728d370bb610db142f524051f2b714233db91668620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a2985266260cfc4e643728d370bb610db142f524051f2b714233db91668620->enter($__internal_f1a2985266260cfc4e643728d370bb610db142f524051f2b714233db91668620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_2ffa98c73a8bf5c90e4984ca2dfb6a70db551aadd36aadd0f90d3ddb2d16233f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffa98c73a8bf5c90e4984ca2dfb6a70db551aadd36aadd0f90d3ddb2d16233f->enter($__internal_2ffa98c73a8bf5c90e4984ca2dfb6a70db551aadd36aadd0f90d3ddb2d16233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a2985266260cfc4e643728d370bb610db142f524051f2b714233db91668620->leave($__internal_f1a2985266260cfc4e643728d370bb610db142f524051f2b714233db91668620_prof);

        
        $__internal_2ffa98c73a8bf5c90e4984ca2dfb6a70db551aadd36aadd0f90d3ddb2d16233f->leave($__internal_2ffa98c73a8bf5c90e4984ca2dfb6a70db551aadd36aadd0f90d3ddb2d16233f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea7a35943c8ce296afcd5e7ba331adad125382305f82b26faa7df04b2665a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea7a35943c8ce296afcd5e7ba331adad125382305f82b26faa7df04b2665a5c->enter($__internal_5ea7a35943c8ce296afcd5e7ba331adad125382305f82b26faa7df04b2665a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f02aaa1c6f615e70d35ca5b543f690aa666cba9ac86b7f09ed152786a28fd6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02aaa1c6f615e70d35ca5b543f690aa666cba9ac86b7f09ed152786a28fd6da->enter($__internal_f02aaa1c6f615e70d35ca5b543f690aa666cba9ac86b7f09ed152786a28fd6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cours list</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Documents</th>
                <th>Idcours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cours_show", array("idcours" => $this->getAttribute($context["cour"], "idcours", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "titre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "documents", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "idcours", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cours_show", array("idcours" => $this->getAttribute($context["cour"], "idcours", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cours_edit", array("idcours" => $this->getAttribute($context["cour"], "idcours", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cours_new");
        echo "\">Create a new cour</a>
        </li>
    </ul>
";
        
        $__internal_f02aaa1c6f615e70d35ca5b543f690aa666cba9ac86b7f09ed152786a28fd6da->leave($__internal_f02aaa1c6f615e70d35ca5b543f690aa666cba9ac86b7f09ed152786a28fd6da_prof);

        
        $__internal_5ea7a35943c8ce296afcd5e7ba331adad125382305f82b26faa7df04b2665a5c->leave($__internal_5ea7a35943c8ce296afcd5e7ba331adad125382305f82b26faa7df04b2665a5c_prof);

    }

    public function getTemplateName()
    {
        return "cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cours list</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Documents</th>
                <th>Idcours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cour in cours %}
            <tr>
                <td><a href=\"{{ path('cours_show', { 'idcours': cour.idcours }) }}\">{{ cour.titre }}</a></td>
                <td>{{ cour.documents }}</td>
                <td>{{ cour.idcours }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cours_show', { 'idcours': cour.idcours }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cours_edit', { 'idcours': cour.idcours }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cours_new') }}\">Create a new cour</a>
        </li>
    </ul>
{% endblock %}
", "cours/index.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\cours\\index.html.twig");
    }
}
