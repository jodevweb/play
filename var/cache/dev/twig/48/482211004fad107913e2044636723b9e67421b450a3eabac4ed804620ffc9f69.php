<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_b62492d79a7dc4d932d15d6dfd8e2c05b6ad9101266c84c619f6e090028d3a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62492d79a7dc4d932d15d6dfd8e2c05b6ad9101266c84c619f6e090028d3a4d->enter($__internal_b62492d79a7dc4d932d15d6dfd8e2c05b6ad9101266c84c619f6e090028d3a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a8df8245719cc1a573a9d23761ac741f12881b18832058840e4a15209ab9e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8df8245719cc1a573a9d23761ac741f12881b18832058840e4a15209ab9e89d->enter($__internal_a8df8245719cc1a573a9d23761ac741f12881b18832058840e4a15209ab9e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_b62492d79a7dc4d932d15d6dfd8e2c05b6ad9101266c84c619f6e090028d3a4d->leave($__internal_b62492d79a7dc4d932d15d6dfd8e2c05b6ad9101266c84c619f6e090028d3a4d_prof);

        
        $__internal_a8df8245719cc1a573a9d23761ac741f12881b18832058840e4a15209ab9e89d->leave($__internal_a8df8245719cc1a573a9d23761ac741f12881b18832058840e4a15209ab9e89d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7264902b3b2a50511fc3ff848ab297c261d5a430ecb66003c3dbe7451baca11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7264902b3b2a50511fc3ff848ab297c261d5a430ecb66003c3dbe7451baca11->enter($__internal_f7264902b3b2a50511fc3ff848ab297c261d5a430ecb66003c3dbe7451baca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8981c8b5770e1e8b099ad73a33e52d8dda6b8805e9c62311cb2fd6d2d3860300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8981c8b5770e1e8b099ad73a33e52d8dda6b8805e9c62311cb2fd6d2d3860300->enter($__internal_8981c8b5770e1e8b099ad73a33e52d8dda6b8805e9c62311cb2fd6d2d3860300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8981c8b5770e1e8b099ad73a33e52d8dda6b8805e9c62311cb2fd6d2d3860300->leave($__internal_8981c8b5770e1e8b099ad73a33e52d8dda6b8805e9c62311cb2fd6d2d3860300_prof);

        
        $__internal_f7264902b3b2a50511fc3ff848ab297c261d5a430ecb66003c3dbe7451baca11->leave($__internal_f7264902b3b2a50511fc3ff848ab297c261d5a430ecb66003c3dbe7451baca11_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dc0dcda4d56bdc9d7c787f2c53bc8b96d111995579301ffdd8b15b2799b285a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc0dcda4d56bdc9d7c787f2c53bc8b96d111995579301ffdd8b15b2799b285a->enter($__internal_0dc0dcda4d56bdc9d7c787f2c53bc8b96d111995579301ffdd8b15b2799b285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f361ba50e8351e91c3173c06cfc96a50db526929c9f4eb0ca0d350fc57921d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f361ba50e8351e91c3173c06cfc96a50db526929c9f4eb0ca0d350fc57921d8->enter($__internal_6f361ba50e8351e91c3173c06cfc96a50db526929c9f4eb0ca0d350fc57921d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f361ba50e8351e91c3173c06cfc96a50db526929c9f4eb0ca0d350fc57921d8->leave($__internal_6f361ba50e8351e91c3173c06cfc96a50db526929c9f4eb0ca0d350fc57921d8_prof);

        
        $__internal_0dc0dcda4d56bdc9d7c787f2c53bc8b96d111995579301ffdd8b15b2799b285a->leave($__internal_0dc0dcda4d56bdc9d7c787f2c53bc8b96d111995579301ffdd8b15b2799b285a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_662addee95ded6b8cff1ff015d599231fa9ea7bde86f9a14da4c265bbe473ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662addee95ded6b8cff1ff015d599231fa9ea7bde86f9a14da4c265bbe473ee4->enter($__internal_662addee95ded6b8cff1ff015d599231fa9ea7bde86f9a14da4c265bbe473ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b404d89e11576b8fc6a18fedc3413468d2df542529821e106e37dc72017376e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b404d89e11576b8fc6a18fedc3413468d2df542529821e106e37dc72017376e2->enter($__internal_b404d89e11576b8fc6a18fedc3413468d2df542529821e106e37dc72017376e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b404d89e11576b8fc6a18fedc3413468d2df542529821e106e37dc72017376e2->leave($__internal_b404d89e11576b8fc6a18fedc3413468d2df542529821e106e37dc72017376e2_prof);

        
        $__internal_662addee95ded6b8cff1ff015d599231fa9ea7bde86f9a14da4c265bbe473ee4->leave($__internal_662addee95ded6b8cff1ff015d599231fa9ea7bde86f9a14da4c265bbe473ee4_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_807cc6b6c5775eb2d02cc2ca31c325b78fc7555afbddde0660445a50f25e01e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807cc6b6c5775eb2d02cc2ca31c325b78fc7555afbddde0660445a50f25e01e9->enter($__internal_807cc6b6c5775eb2d02cc2ca31c325b78fc7555afbddde0660445a50f25e01e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e862ec43b6da4cd59bf675b26fb6593ed297c99652e97d2d142559f01025fd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e862ec43b6da4cd59bf675b26fb6593ed297c99652e97d2d142559f01025fd75->enter($__internal_e862ec43b6da4cd59bf675b26fb6593ed297c99652e97d2d142559f01025fd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e862ec43b6da4cd59bf675b26fb6593ed297c99652e97d2d142559f01025fd75->leave($__internal_e862ec43b6da4cd59bf675b26fb6593ed297c99652e97d2d142559f01025fd75_prof);

        
        $__internal_807cc6b6c5775eb2d02cc2ca31c325b78fc7555afbddde0660445a50f25e01e9->leave($__internal_807cc6b6c5775eb2d02cc2ca31c325b78fc7555afbddde0660445a50f25e01e9_prof);

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
        return array (  125 => 16,  108 => 15,  91 => 6,  73 => 5,  61 => 17,  58 => 16,  56 => 15,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <script
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/script.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Play/app/Resources/views/base.html.twig");
    }
}
