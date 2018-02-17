<?php

/* moniteur/index.html.twig */
class __TwigTemplate_7393e7ac8330c2d380709f55f55a04924db6f6b966856f24ff70e1f28252a1f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "moniteur/index.html.twig", 1);
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
        $__internal_af22b72025e5dd346c6ae825165399ce251e3c4e08cc704616737ead3cba935a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af22b72025e5dd346c6ae825165399ce251e3c4e08cc704616737ead3cba935a->enter($__internal_af22b72025e5dd346c6ae825165399ce251e3c4e08cc704616737ead3cba935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/index.html.twig"));

        $__internal_4a993cef6d9c5e41dab632a3b0d049fdf8c1710f2ac2810e3244cef1a878b442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a993cef6d9c5e41dab632a3b0d049fdf8c1710f2ac2810e3244cef1a878b442->enter($__internal_4a993cef6d9c5e41dab632a3b0d049fdf8c1710f2ac2810e3244cef1a878b442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moniteur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af22b72025e5dd346c6ae825165399ce251e3c4e08cc704616737ead3cba935a->leave($__internal_af22b72025e5dd346c6ae825165399ce251e3c4e08cc704616737ead3cba935a_prof);

        
        $__internal_4a993cef6d9c5e41dab632a3b0d049fdf8c1710f2ac2810e3244cef1a878b442->leave($__internal_4a993cef6d9c5e41dab632a3b0d049fdf8c1710f2ac2810e3244cef1a878b442_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_639932c0b69c1d16a6e8dd57680f4b5532f0660d29f6068c531ccc8041841874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639932c0b69c1d16a6e8dd57680f4b5532f0660d29f6068c531ccc8041841874->enter($__internal_639932c0b69c1d16a6e8dd57680f4b5532f0660d29f6068c531ccc8041841874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb0345fcd556947e0457c28890202a620459766adc2f148134a752b1898ad1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0345fcd556947e0457c28890202a620459766adc2f148134a752b1898ad1b0->enter($__internal_cb0345fcd556947e0457c28890202a620459766adc2f148134a752b1898ad1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moniteurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Cin</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Disponiblite</th>
                <th>Contact</th>
                <th>Idmoniteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moniteurs"]) ? $context["moniteurs"] : $this->getContext($context, "moniteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["moniteur"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_show", array("idmoniteur" => $this->getAttribute($context["moniteur"], "idmoniteur", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "cin", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "disponiblite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "contact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "idmoniteur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_show", array("idmoniteur" => $this->getAttribute($context["moniteur"], "idmoniteur", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_edit", array("idmoniteur" => $this->getAttribute($context["moniteur"], "idmoniteur", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moniteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moniteur_new");
        echo "\">Create a new moniteur</a>
        </li>
    </ul>
";
        
        $__internal_cb0345fcd556947e0457c28890202a620459766adc2f148134a752b1898ad1b0->leave($__internal_cb0345fcd556947e0457c28890202a620459766adc2f148134a752b1898ad1b0_prof);

        
        $__internal_639932c0b69c1d16a6e8dd57680f4b5532f0660d29f6068c531ccc8041841874->leave($__internal_639932c0b69c1d16a6e8dd57680f4b5532f0660d29f6068c531ccc8041841874_prof);

    }

    public function getTemplateName()
    {
        return "moniteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Moniteurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Cin</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Disponiblite</th>
                <th>Contact</th>
                <th>Idmoniteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for moniteur in moniteurs %}
            <tr>
                <td><a href=\"{{ path('moniteur_show', { 'idmoniteur': moniteur.idmoniteur }) }}\">{{ moniteur.cin }}</a></td>
                <td>{{ moniteur.nom }}</td>
                <td>{{ moniteur.prenom }}</td>
                <td>{{ moniteur.disponiblite }}</td>
                <td>{{ moniteur.contact }}</td>
                <td>{{ moniteur.idmoniteur }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('moniteur_show', { 'idmoniteur': moniteur.idmoniteur }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('moniteur_edit', { 'idmoniteur': moniteur.idmoniteur }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('moniteur_new') }}\">Create a new moniteur</a>
        </li>
    </ul>
{% endblock %}
", "moniteur/index.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\moniteur\\index.html.twig");
    }
}
