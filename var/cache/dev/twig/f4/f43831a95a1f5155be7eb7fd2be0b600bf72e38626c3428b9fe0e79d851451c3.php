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
        $__internal_3cc1e314edcf76cb446edba3f10d91ff84a2a564750e784183190605681a6864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc1e314edcf76cb446edba3f10d91ff84a2a564750e784183190605681a6864->enter($__internal_3cc1e314edcf76cb446edba3f10d91ff84a2a564750e784183190605681a6864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        $__internal_637c067c510ef85d9064676ac986fe46f5c887590dcf6e170bede8938d9706f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637c067c510ef85d9064676ac986fe46f5c887590dcf6e170bede8938d9706f4->enter($__internal_637c067c510ef85d9064676ac986fe46f5c887590dcf6e170bede8938d9706f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc1e314edcf76cb446edba3f10d91ff84a2a564750e784183190605681a6864->leave($__internal_3cc1e314edcf76cb446edba3f10d91ff84a2a564750e784183190605681a6864_prof);

        
        $__internal_637c067c510ef85d9064676ac986fe46f5c887590dcf6e170bede8938d9706f4->leave($__internal_637c067c510ef85d9064676ac986fe46f5c887590dcf6e170bede8938d9706f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b33c47b99150f3e8f6d1eb59a095e13771d6981ceb8f84c361ad02a21264af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b33c47b99150f3e8f6d1eb59a095e13771d6981ceb8f84c361ad02a21264af->enter($__internal_15b33c47b99150f3e8f6d1eb59a095e13771d6981ceb8f84c361ad02a21264af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fc2b67d118119de7aee98a11cfc16928920ead99cc5bf819c32e2dc049a5168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc2b67d118119de7aee98a11cfc16928920ead99cc5bf819c32e2dc049a5168->enter($__internal_6fc2b67d118119de7aee98a11cfc16928920ead99cc5bf819c32e2dc049a5168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6fc2b67d118119de7aee98a11cfc16928920ead99cc5bf819c32e2dc049a5168->leave($__internal_6fc2b67d118119de7aee98a11cfc16928920ead99cc5bf819c32e2dc049a5168_prof);

        
        $__internal_15b33c47b99150f3e8f6d1eb59a095e13771d6981ceb8f84c361ad02a21264af->leave($__internal_15b33c47b99150f3e8f6d1eb59a095e13771d6981ceb8f84c361ad02a21264af_prof);

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
