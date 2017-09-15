<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73cac3cd0b57a486c7bd2a2eb77a1b76dec30bf881d8a9b243d4e4006e06ff98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cac3cd0b57a486c7bd2a2eb77a1b76dec30bf881d8a9b243d4e4006e06ff98->enter($__internal_73cac3cd0b57a486c7bd2a2eb77a1b76dec30bf881d8a9b243d4e4006e06ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_060517cc8e6fb4d681d9055864dcfe8bc0d85fd1867524e7cf348ae372a11266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060517cc8e6fb4d681d9055864dcfe8bc0d85fd1867524e7cf348ae372a11266->enter($__internal_060517cc8e6fb4d681d9055864dcfe8bc0d85fd1867524e7cf348ae372a11266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73cac3cd0b57a486c7bd2a2eb77a1b76dec30bf881d8a9b243d4e4006e06ff98->leave($__internal_73cac3cd0b57a486c7bd2a2eb77a1b76dec30bf881d8a9b243d4e4006e06ff98_prof);

        
        $__internal_060517cc8e6fb4d681d9055864dcfe8bc0d85fd1867524e7cf348ae372a11266->leave($__internal_060517cc8e6fb4d681d9055864dcfe8bc0d85fd1867524e7cf348ae372a11266_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b202c1e35913571cf5437be83bc152ba2ea234a3660f73b1416999e07c95d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b202c1e35913571cf5437be83bc152ba2ea234a3660f73b1416999e07c95d4a->enter($__internal_5b202c1e35913571cf5437be83bc152ba2ea234a3660f73b1416999e07c95d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_caffd8b3a6614c71accc7921d0f2fc271f1195377e9b93fc05442770e6faefc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caffd8b3a6614c71accc7921d0f2fc271f1195377e9b93fc05442770e6faefc2->enter($__internal_caffd8b3a6614c71accc7921d0f2fc271f1195377e9b93fc05442770e6faefc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_caffd8b3a6614c71accc7921d0f2fc271f1195377e9b93fc05442770e6faefc2->leave($__internal_caffd8b3a6614c71accc7921d0f2fc271f1195377e9b93fc05442770e6faefc2_prof);

        
        $__internal_5b202c1e35913571cf5437be83bc152ba2ea234a3660f73b1416999e07c95d4a->leave($__internal_5b202c1e35913571cf5437be83bc152ba2ea234a3660f73b1416999e07c95d4a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f54dff9427277d6e691907a2bec0148af61478b3f40709d7a139eeec9c91e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f54dff9427277d6e691907a2bec0148af61478b3f40709d7a139eeec9c91e9f->enter($__internal_1f54dff9427277d6e691907a2bec0148af61478b3f40709d7a139eeec9c91e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6c5b63feb8d88bac984b6811cf1c677f7aa6e998d058cef1b46f359405a46c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c5b63feb8d88bac984b6811cf1c677f7aa6e998d058cef1b46f359405a46c5->enter($__internal_e6c5b63feb8d88bac984b6811cf1c677f7aa6e998d058cef1b46f359405a46c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6c5b63feb8d88bac984b6811cf1c677f7aa6e998d058cef1b46f359405a46c5->leave($__internal_e6c5b63feb8d88bac984b6811cf1c677f7aa6e998d058cef1b46f359405a46c5_prof);

        
        $__internal_1f54dff9427277d6e691907a2bec0148af61478b3f40709d7a139eeec9c91e9f->leave($__internal_1f54dff9427277d6e691907a2bec0148af61478b3f40709d7a139eeec9c91e9f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a32b1db79a1f593b28123a6db06d3c0e0742e13dcfd6d0d1cab540d475ef5bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32b1db79a1f593b28123a6db06d3c0e0742e13dcfd6d0d1cab540d475ef5bac->enter($__internal_a32b1db79a1f593b28123a6db06d3c0e0742e13dcfd6d0d1cab540d475ef5bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e063a7c8354e7d4d919a968715486d1c3ce03236aebdf898a0a5979db50fdbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e063a7c8354e7d4d919a968715486d1c3ce03236aebdf898a0a5979db50fdbd8->enter($__internal_e063a7c8354e7d4d919a968715486d1c3ce03236aebdf898a0a5979db50fdbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e063a7c8354e7d4d919a968715486d1c3ce03236aebdf898a0a5979db50fdbd8->leave($__internal_e063a7c8354e7d4d919a968715486d1c3ce03236aebdf898a0a5979db50fdbd8_prof);

        
        $__internal_a32b1db79a1f593b28123a6db06d3c0e0742e13dcfd6d0d1cab540d475ef5bac->leave($__internal_a32b1db79a1f593b28123a6db06d3c0e0742e13dcfd6d0d1cab540d475ef5bac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Play/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
