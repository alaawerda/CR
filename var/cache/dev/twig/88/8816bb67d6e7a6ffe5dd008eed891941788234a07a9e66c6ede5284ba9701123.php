<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aa9c4d6c5db96806e959156b8c529d3fa3457f6d545115de09f9639a179ca5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa9c4d6c5db96806e959156b8c529d3fa3457f6d545115de09f9639a179ca5c->enter($__internal_0aa9c4d6c5db96806e959156b8c529d3fa3457f6d545115de09f9639a179ca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_563493b3f3520aa63d263eb55558ed396b4c4c2d2d248049fdf1ed7a028e3a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563493b3f3520aa63d263eb55558ed396b4c4c2d2d248049fdf1ed7a028e3a05->enter($__internal_563493b3f3520aa63d263eb55558ed396b4c4c2d2d248049fdf1ed7a028e3a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0aa9c4d6c5db96806e959156b8c529d3fa3457f6d545115de09f9639a179ca5c->leave($__internal_0aa9c4d6c5db96806e959156b8c529d3fa3457f6d545115de09f9639a179ca5c_prof);

        
        $__internal_563493b3f3520aa63d263eb55558ed396b4c4c2d2d248049fdf1ed7a028e3a05->leave($__internal_563493b3f3520aa63d263eb55558ed396b4c4c2d2d248049fdf1ed7a028e3a05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19c7a8a58d30dd9ff7a04f1186fc993a8d691ba66e26066810c487a140c69f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c7a8a58d30dd9ff7a04f1186fc993a8d691ba66e26066810c487a140c69f13->enter($__internal_19c7a8a58d30dd9ff7a04f1186fc993a8d691ba66e26066810c487a140c69f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e57b0adc2970cbf3da8bbb200f8e57e7f9d3e77b474aec89da9b8706967daf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e57b0adc2970cbf3da8bbb200f8e57e7f9d3e77b474aec89da9b8706967daf8->enter($__internal_5e57b0adc2970cbf3da8bbb200f8e57e7f9d3e77b474aec89da9b8706967daf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e57b0adc2970cbf3da8bbb200f8e57e7f9d3e77b474aec89da9b8706967daf8->leave($__internal_5e57b0adc2970cbf3da8bbb200f8e57e7f9d3e77b474aec89da9b8706967daf8_prof);

        
        $__internal_19c7a8a58d30dd9ff7a04f1186fc993a8d691ba66e26066810c487a140c69f13->leave($__internal_19c7a8a58d30dd9ff7a04f1186fc993a8d691ba66e26066810c487a140c69f13_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b72c755ee0922b7a9b9db22ed13cd608d3c9b883e130be4af53877be3f5a76d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72c755ee0922b7a9b9db22ed13cd608d3c9b883e130be4af53877be3f5a76d3->enter($__internal_b72c755ee0922b7a9b9db22ed13cd608d3c9b883e130be4af53877be3f5a76d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1977b138bbc438df1dd55ec61f56941b5d8bb8647f1f868953a2dfdc0ad0610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1977b138bbc438df1dd55ec61f56941b5d8bb8647f1f868953a2dfdc0ad0610->enter($__internal_f1977b138bbc438df1dd55ec61f56941b5d8bb8647f1f868953a2dfdc0ad0610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f1977b138bbc438df1dd55ec61f56941b5d8bb8647f1f868953a2dfdc0ad0610->leave($__internal_f1977b138bbc438df1dd55ec61f56941b5d8bb8647f1f868953a2dfdc0ad0610_prof);

        
        $__internal_b72c755ee0922b7a9b9db22ed13cd608d3c9b883e130be4af53877be3f5a76d3->leave($__internal_b72c755ee0922b7a9b9db22ed13cd608d3c9b883e130be4af53877be3f5a76d3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4934a7010f0578cdcac4582325f7c47084007c139a99a902fce7aa2e403d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4934a7010f0578cdcac4582325f7c47084007c139a99a902fce7aa2e403d53->enter($__internal_0e4934a7010f0578cdcac4582325f7c47084007c139a99a902fce7aa2e403d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d46c7f028bb87161d41bad79396a67e8b4016325d3186d3851d8ee9203bf5a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46c7f028bb87161d41bad79396a67e8b4016325d3186d3851d8ee9203bf5a07->enter($__internal_d46c7f028bb87161d41bad79396a67e8b4016325d3186d3851d8ee9203bf5a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d46c7f028bb87161d41bad79396a67e8b4016325d3186d3851d8ee9203bf5a07->leave($__internal_d46c7f028bb87161d41bad79396a67e8b4016325d3186d3851d8ee9203bf5a07_prof);

        
        $__internal_0e4934a7010f0578cdcac4582325f7c47084007c139a99a902fce7aa2e403d53->leave($__internal_0e4934a7010f0578cdcac4582325f7c47084007c139a99a902fce7aa2e403d53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\CR\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
