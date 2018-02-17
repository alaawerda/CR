<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
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
        $__internal_5c4511236d0339ef75ab0495f7384582027ce8eb72a73919a2f1113f41ba0a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4511236d0339ef75ab0495f7384582027ce8eb72a73919a2f1113f41ba0a67->enter($__internal_5c4511236d0339ef75ab0495f7384582027ce8eb72a73919a2f1113f41ba0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_92f44c9f0b96c63459b4c4563fa881921c5589dc5d85f80135e13196e82ef9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f44c9f0b96c63459b4c4563fa881921c5589dc5d85f80135e13196e82ef9b3->enter($__internal_92f44c9f0b96c63459b4c4563fa881921c5589dc5d85f80135e13196e82ef9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5c4511236d0339ef75ab0495f7384582027ce8eb72a73919a2f1113f41ba0a67->leave($__internal_5c4511236d0339ef75ab0495f7384582027ce8eb72a73919a2f1113f41ba0a67_prof);

        
        $__internal_92f44c9f0b96c63459b4c4563fa881921c5589dc5d85f80135e13196e82ef9b3->leave($__internal_92f44c9f0b96c63459b4c4563fa881921c5589dc5d85f80135e13196e82ef9b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55462b6e6d04b77f6dba522824ed1e773cc65b0262cff6bc3dc75a514e00b2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55462b6e6d04b77f6dba522824ed1e773cc65b0262cff6bc3dc75a514e00b2c8->enter($__internal_55462b6e6d04b77f6dba522824ed1e773cc65b0262cff6bc3dc75a514e00b2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56aba2826af95f37ed8b25252b65a099933a11ad5150da9efd7443657e150630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aba2826af95f37ed8b25252b65a099933a11ad5150da9efd7443657e150630->enter($__internal_56aba2826af95f37ed8b25252b65a099933a11ad5150da9efd7443657e150630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_56aba2826af95f37ed8b25252b65a099933a11ad5150da9efd7443657e150630->leave($__internal_56aba2826af95f37ed8b25252b65a099933a11ad5150da9efd7443657e150630_prof);

        
        $__internal_55462b6e6d04b77f6dba522824ed1e773cc65b0262cff6bc3dc75a514e00b2c8->leave($__internal_55462b6e6d04b77f6dba522824ed1e773cc65b0262cff6bc3dc75a514e00b2c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4283e7246c0ada98411ce871bfed8f2de10ff2750ba03df2839d2ca169f3dddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4283e7246c0ada98411ce871bfed8f2de10ff2750ba03df2839d2ca169f3dddd->enter($__internal_4283e7246c0ada98411ce871bfed8f2de10ff2750ba03df2839d2ca169f3dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1189c36a04ede768893559f4a92a5c1d08a81a43284ea7ecef24b5c86b4a1c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1189c36a04ede768893559f4a92a5c1d08a81a43284ea7ecef24b5c86b4a1c54->enter($__internal_1189c36a04ede768893559f4a92a5c1d08a81a43284ea7ecef24b5c86b4a1c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1189c36a04ede768893559f4a92a5c1d08a81a43284ea7ecef24b5c86b4a1c54->leave($__internal_1189c36a04ede768893559f4a92a5c1d08a81a43284ea7ecef24b5c86b4a1c54_prof);

        
        $__internal_4283e7246c0ada98411ce871bfed8f2de10ff2750ba03df2839d2ca169f3dddd->leave($__internal_4283e7246c0ada98411ce871bfed8f2de10ff2750ba03df2839d2ca169f3dddd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fdc03c674be085b4515b262750356a6623d16e3660ec1c546424da3f30bf9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdc03c674be085b4515b262750356a6623d16e3660ec1c546424da3f30bf9b8->enter($__internal_3fdc03c674be085b4515b262750356a6623d16e3660ec1c546424da3f30bf9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae141191ab73b8a8ca4a3bf4a517000eca50336d4ad36769353fa42de3b68390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae141191ab73b8a8ca4a3bf4a517000eca50336d4ad36769353fa42de3b68390->enter($__internal_ae141191ab73b8a8ca4a3bf4a517000eca50336d4ad36769353fa42de3b68390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae141191ab73b8a8ca4a3bf4a517000eca50336d4ad36769353fa42de3b68390->leave($__internal_ae141191ab73b8a8ca4a3bf4a517000eca50336d4ad36769353fa42de3b68390_prof);

        
        $__internal_3fdc03c674be085b4515b262750356a6623d16e3660ec1c546424da3f30bf9b8->leave($__internal_3fdc03c674be085b4515b262750356a6623d16e3660ec1c546424da3f30bf9b8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9df8bfa2032aea6e1cde15a8bda4de08733754266392d763a285f5188f98ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9df8bfa2032aea6e1cde15a8bda4de08733754266392d763a285f5188f98ae8->enter($__internal_c9df8bfa2032aea6e1cde15a8bda4de08733754266392d763a285f5188f98ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_caaf28d32a61805a0df1dedf0ad81050afc13c0a117970919ab8aa79995f8627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaf28d32a61805a0df1dedf0ad81050afc13c0a117970919ab8aa79995f8627->enter($__internal_caaf28d32a61805a0df1dedf0ad81050afc13c0a117970919ab8aa79995f8627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_caaf28d32a61805a0df1dedf0ad81050afc13c0a117970919ab8aa79995f8627->leave($__internal_caaf28d32a61805a0df1dedf0ad81050afc13c0a117970919ab8aa79995f8627_prof);

        
        $__internal_c9df8bfa2032aea6e1cde15a8bda4de08733754266392d763a285f5188f98ae8->leave($__internal_c9df8bfa2032aea6e1cde15a8bda4de08733754266392d763a285f5188f98ae8_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\CR\\app\\Resources\\views\\base.html.twig");
    }
}
