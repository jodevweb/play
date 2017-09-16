<?php

/* core/index.html.twig */
class __TwigTemplate_e666306f39477c695f300642b8d89c1f6c0822a019465588906f38e3b8007e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "core/index.html.twig", 1);
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
        $__internal_bc67e64f62a154a3b0a72645def159aced46550158093b0b4c407f9203df46ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc67e64f62a154a3b0a72645def159aced46550158093b0b4c407f9203df46ba->enter($__internal_bc67e64f62a154a3b0a72645def159aced46550158093b0b4c407f9203df46ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        $__internal_ccf2ff87b6ffb0c1428003eea8b6fe584355afd41a3c06db490abb75d612f474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf2ff87b6ffb0c1428003eea8b6fe584355afd41a3c06db490abb75d612f474->enter($__internal_ccf2ff87b6ffb0c1428003eea8b6fe584355afd41a3c06db490abb75d612f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc67e64f62a154a3b0a72645def159aced46550158093b0b4c407f9203df46ba->leave($__internal_bc67e64f62a154a3b0a72645def159aced46550158093b0b4c407f9203df46ba_prof);

        
        $__internal_ccf2ff87b6ffb0c1428003eea8b6fe584355afd41a3c06db490abb75d612f474->leave($__internal_ccf2ff87b6ffb0c1428003eea8b6fe584355afd41a3c06db490abb75d612f474_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11926ac334358c1d4c102bd4655d85f3fda55c8ca891d3907f173235c48c1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11926ac334358c1d4c102bd4655d85f3fda55c8ca891d3907f173235c48c1f9->enter($__internal_a11926ac334358c1d4c102bd4655d85f3fda55c8ca891d3907f173235c48c1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfad8690e136b71965c679714b553caf857d9c5694078742442aa4f7ff4b41ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfad8690e136b71965c679714b553caf857d9c5694078742442aa4f7ff4b41ac->enter($__internal_bfad8690e136b71965c679714b553caf857d9c5694078742442aa4f7ff4b41ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"numbers\">
        <input type=\"submit\" id=\"number_0\" value=\"1\">
        <input type=\"submit\" id=\"number_1\" value=\"2\">
        <input type=\"submit\" id=\"number_2\" value=\"3\">
        <input type=\"submit\" id=\"number_3\" value=\"4\">
        <input type=\"submit\" id=\"number_4\" value=\"5\">
        <input type=\"submit\" id=\"number_5\" value=\"6\">
        <input type=\"submit\" id=\"number_6\" value=\"7\">
        <input type=\"submit\" id=\"number_7\" value=\"8\">
        <input type=\"submit\" id=\"number_8\" value=\"9\">
        <input type=\"submit\" id=\"number_9\" value=\"10\">
    </div>

    <div id=\"user\"></div>
    <div id=\"bot\"></div>
";
        
        $__internal_bfad8690e136b71965c679714b553caf857d9c5694078742442aa4f7ff4b41ac->leave($__internal_bfad8690e136b71965c679714b553caf857d9c5694078742442aa4f7ff4b41ac_prof);

        
        $__internal_a11926ac334358c1d4c102bd4655d85f3fda55c8ca891d3907f173235c48c1f9->leave($__internal_a11926ac334358c1d4c102bd4655d85f3fda55c8ca891d3907f173235c48c1f9_prof);

    }

    public function getTemplateName()
    {
        return "core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"numbers\">
        <input type=\"submit\" id=\"number_0\" value=\"1\">
        <input type=\"submit\" id=\"number_1\" value=\"2\">
        <input type=\"submit\" id=\"number_2\" value=\"3\">
        <input type=\"submit\" id=\"number_3\" value=\"4\">
        <input type=\"submit\" id=\"number_4\" value=\"5\">
        <input type=\"submit\" id=\"number_5\" value=\"6\">
        <input type=\"submit\" id=\"number_6\" value=\"7\">
        <input type=\"submit\" id=\"number_7\" value=\"8\">
        <input type=\"submit\" id=\"number_8\" value=\"9\">
        <input type=\"submit\" id=\"number_9\" value=\"10\">
    </div>

    <div id=\"user\"></div>
    <div id=\"bot\"></div>
{% endblock %}
", "core/index.html.twig", "/var/www/html/Play/app/Resources/views/core/index.html.twig");
    }
}
