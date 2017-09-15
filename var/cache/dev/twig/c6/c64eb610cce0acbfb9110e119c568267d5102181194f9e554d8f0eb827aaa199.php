<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79ae917f56b7d6e4ca8f7a9fa7b4b583fc411438b7811a8d886d424f6dad839b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ae917f56b7d6e4ca8f7a9fa7b4b583fc411438b7811a8d886d424f6dad839b->enter($__internal_79ae917f56b7d6e4ca8f7a9fa7b4b583fc411438b7811a8d886d424f6dad839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bacdfb51c47c4401fc92022709f2e03c4d1b260edd4b39b960a9fa60a34b7649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacdfb51c47c4401fc92022709f2e03c4d1b260edd4b39b960a9fa60a34b7649->enter($__internal_bacdfb51c47c4401fc92022709f2e03c4d1b260edd4b39b960a9fa60a34b7649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ae917f56b7d6e4ca8f7a9fa7b4b583fc411438b7811a8d886d424f6dad839b->leave($__internal_79ae917f56b7d6e4ca8f7a9fa7b4b583fc411438b7811a8d886d424f6dad839b_prof);

        
        $__internal_bacdfb51c47c4401fc92022709f2e03c4d1b260edd4b39b960a9fa60a34b7649->leave($__internal_bacdfb51c47c4401fc92022709f2e03c4d1b260edd4b39b960a9fa60a34b7649_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e73b5ca3311a171e644ebd823acb8dcd8167466be700f14e435d89b5d7e1add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e73b5ca3311a171e644ebd823acb8dcd8167466be700f14e435d89b5d7e1add->enter($__internal_8e73b5ca3311a171e644ebd823acb8dcd8167466be700f14e435d89b5d7e1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b4ddbcbf16dad3b5e348c070c42c2f48085010817a7985a3fa50b4b69110e7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ddbcbf16dad3b5e348c070c42c2f48085010817a7985a3fa50b4b69110e7ed->enter($__internal_b4ddbcbf16dad3b5e348c070c42c2f48085010817a7985a3fa50b4b69110e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b4ddbcbf16dad3b5e348c070c42c2f48085010817a7985a3fa50b4b69110e7ed->leave($__internal_b4ddbcbf16dad3b5e348c070c42c2f48085010817a7985a3fa50b4b69110e7ed_prof);

        
        $__internal_8e73b5ca3311a171e644ebd823acb8dcd8167466be700f14e435d89b5d7e1add->leave($__internal_8e73b5ca3311a171e644ebd823acb8dcd8167466be700f14e435d89b5d7e1add_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c57c7221b3b141951aa5ad019d3b642ce357b06ea6dd9c3e42a03690f151785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c57c7221b3b141951aa5ad019d3b642ce357b06ea6dd9c3e42a03690f151785->enter($__internal_2c57c7221b3b141951aa5ad019d3b642ce357b06ea6dd9c3e42a03690f151785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4055d1841c939e0c27a18866976fc4025f383c96eb7f41ea59f99dc93429b095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4055d1841c939e0c27a18866976fc4025f383c96eb7f41ea59f99dc93429b095->enter($__internal_4055d1841c939e0c27a18866976fc4025f383c96eb7f41ea59f99dc93429b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4055d1841c939e0c27a18866976fc4025f383c96eb7f41ea59f99dc93429b095->leave($__internal_4055d1841c939e0c27a18866976fc4025f383c96eb7f41ea59f99dc93429b095_prof);

        
        $__internal_2c57c7221b3b141951aa5ad019d3b642ce357b06ea6dd9c3e42a03690f151785->leave($__internal_2c57c7221b3b141951aa5ad019d3b642ce357b06ea6dd9c3e42a03690f151785_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8e4f13d9529a135b759ec20d1a21569d745699ee4e115220c1581505e985442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e4f13d9529a135b759ec20d1a21569d745699ee4e115220c1581505e985442->enter($__internal_f8e4f13d9529a135b759ec20d1a21569d745699ee4e115220c1581505e985442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af32ef83d8f4d1afb06c3303d77f15d4504fa5f4350d0ece9f5050f249229379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af32ef83d8f4d1afb06c3303d77f15d4504fa5f4350d0ece9f5050f249229379->enter($__internal_af32ef83d8f4d1afb06c3303d77f15d4504fa5f4350d0ece9f5050f249229379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_af32ef83d8f4d1afb06c3303d77f15d4504fa5f4350d0ece9f5050f249229379->leave($__internal_af32ef83d8f4d1afb06c3303d77f15d4504fa5f4350d0ece9f5050f249229379_prof);

        
        $__internal_f8e4f13d9529a135b759ec20d1a21569d745699ee4e115220c1581505e985442->leave($__internal_f8e4f13d9529a135b759ec20d1a21569d745699ee4e115220c1581505e985442_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Play/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
