<?php

/* ChapitreBundle:Default:index.html.twig */
class __TwigTemplate_af8be88b5322ca172ee54ab5fcee85d777759e5271b699b6ec6d8b13b17940c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70dbf07f4acf1f32f408a77a16098df1694be0b61243ab88dc5cbc3853744fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dbf07f4acf1f32f408a77a16098df1694be0b61243ab88dc5cbc3853744fa1->enter($__internal_70dbf07f4acf1f32f408a77a16098df1694be0b61243ab88dc5cbc3853744fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChapitreBundle:Default:index.html.twig"));

        $__internal_b8f81194e7fb7a3c1d7b3349106ebdb2db92ebaaf505e5f061d9d7f7cc6f92c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f81194e7fb7a3c1d7b3349106ebdb2db92ebaaf505e5f061d9d7f7cc6f92c7->enter($__internal_b8f81194e7fb7a3c1d7b3349106ebdb2db92ebaaf505e5f061d9d7f7cc6f92c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ChapitreBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_70dbf07f4acf1f32f408a77a16098df1694be0b61243ab88dc5cbc3853744fa1->leave($__internal_70dbf07f4acf1f32f408a77a16098df1694be0b61243ab88dc5cbc3853744fa1_prof);

        
        $__internal_b8f81194e7fb7a3c1d7b3349106ebdb2db92ebaaf505e5f061d9d7f7cc6f92c7->leave($__internal_b8f81194e7fb7a3c1d7b3349106ebdb2db92ebaaf505e5f061d9d7f7cc6f92c7_prof);

    }

    public function getTemplateName()
    {
        return "ChapitreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ChapitreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\CR\\src\\ChapitreBundle/Resources/views/Default/index.html.twig");
    }
}
