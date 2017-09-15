<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_103d24c262a2d8b8dfa7b1a444851fe308b61e0e53756e11db15753b0deded58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103d24c262a2d8b8dfa7b1a444851fe308b61e0e53756e11db15753b0deded58->enter($__internal_103d24c262a2d8b8dfa7b1a444851fe308b61e0e53756e11db15753b0deded58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d721433a4510a1c1efa7f701ae42d6067b91cc8095a74508aacf230d980f339e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d721433a4510a1c1efa7f701ae42d6067b91cc8095a74508aacf230d980f339e->enter($__internal_d721433a4510a1c1efa7f701ae42d6067b91cc8095a74508aacf230d980f339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103d24c262a2d8b8dfa7b1a444851fe308b61e0e53756e11db15753b0deded58->leave($__internal_103d24c262a2d8b8dfa7b1a444851fe308b61e0e53756e11db15753b0deded58_prof);

        
        $__internal_d721433a4510a1c1efa7f701ae42d6067b91cc8095a74508aacf230d980f339e->leave($__internal_d721433a4510a1c1efa7f701ae42d6067b91cc8095a74508aacf230d980f339e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cf7f9946467c5ff3b24ea12366088cf614c3a5560ad100703b0240ea7827639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf7f9946467c5ff3b24ea12366088cf614c3a5560ad100703b0240ea7827639->enter($__internal_6cf7f9946467c5ff3b24ea12366088cf614c3a5560ad100703b0240ea7827639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f4bbfbe7fce9984df045a5c31021709e83af8cb1423c4d5d1d2eaed9ccacec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4bbfbe7fce9984df045a5c31021709e83af8cb1423c4d5d1d2eaed9ccacec2->enter($__internal_6f4bbfbe7fce9984df045a5c31021709e83af8cb1423c4d5d1d2eaed9ccacec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f4bbfbe7fce9984df045a5c31021709e83af8cb1423c4d5d1d2eaed9ccacec2->leave($__internal_6f4bbfbe7fce9984df045a5c31021709e83af8cb1423c4d5d1d2eaed9ccacec2_prof);

        
        $__internal_6cf7f9946467c5ff3b24ea12366088cf614c3a5560ad100703b0240ea7827639->leave($__internal_6cf7f9946467c5ff3b24ea12366088cf614c3a5560ad100703b0240ea7827639_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e8d0f636f3e07972e1283378c47b897db902aee4cafcbe2c481c2362872143d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8d0f636f3e07972e1283378c47b897db902aee4cafcbe2c481c2362872143d->enter($__internal_1e8d0f636f3e07972e1283378c47b897db902aee4cafcbe2c481c2362872143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7a5495c05968b76a4bd4bec0df9e29d1f7d2f33ce06ac447e018f040a5e203c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a5495c05968b76a4bd4bec0df9e29d1f7d2f33ce06ac447e018f040a5e203c->enter($__internal_b7a5495c05968b76a4bd4bec0df9e29d1f7d2f33ce06ac447e018f040a5e203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7a5495c05968b76a4bd4bec0df9e29d1f7d2f33ce06ac447e018f040a5e203c->leave($__internal_b7a5495c05968b76a4bd4bec0df9e29d1f7d2f33ce06ac447e018f040a5e203c_prof);

        
        $__internal_1e8d0f636f3e07972e1283378c47b897db902aee4cafcbe2c481c2362872143d->leave($__internal_1e8d0f636f3e07972e1283378c47b897db902aee4cafcbe2c481c2362872143d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3757700ced42f92100ad45d4b304572bb3c33b20da241db11f583b3e1b5ae7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3757700ced42f92100ad45d4b304572bb3c33b20da241db11f583b3e1b5ae7e->enter($__internal_e3757700ced42f92100ad45d4b304572bb3c33b20da241db11f583b3e1b5ae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98953382462ed3eb62315598f412876e98ffa8fe07eb5e3d886275a5a9cc62ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98953382462ed3eb62315598f412876e98ffa8fe07eb5e3d886275a5a9cc62ac->enter($__internal_98953382462ed3eb62315598f412876e98ffa8fe07eb5e3d886275a5a9cc62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98953382462ed3eb62315598f412876e98ffa8fe07eb5e3d886275a5a9cc62ac->leave($__internal_98953382462ed3eb62315598f412876e98ffa8fe07eb5e3d886275a5a9cc62ac_prof);

        
        $__internal_e3757700ced42f92100ad45d4b304572bb3c33b20da241db11f583b3e1b5ae7e->leave($__internal_e3757700ced42f92100ad45d4b304572bb3c33b20da241db11f583b3e1b5ae7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Play/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
