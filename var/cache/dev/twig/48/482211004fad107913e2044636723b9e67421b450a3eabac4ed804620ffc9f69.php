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
        $__internal_246fbfbb54ce725987db4dec675a0bd3d9de216606460444340f5d93b328f38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246fbfbb54ce725987db4dec675a0bd3d9de216606460444340f5d93b328f38e->enter($__internal_246fbfbb54ce725987db4dec675a0bd3d9de216606460444340f5d93b328f38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_254e7a194170edb7307f6870ff03cd764cc05a55c6c8a03cdf3494529aa3d6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254e7a194170edb7307f6870ff03cd764cc05a55c6c8a03cdf3494529aa3d6fb->enter($__internal_254e7a194170edb7307f6870ff03cd764cc05a55c6c8a03cdf3494529aa3d6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_246fbfbb54ce725987db4dec675a0bd3d9de216606460444340f5d93b328f38e->leave($__internal_246fbfbb54ce725987db4dec675a0bd3d9de216606460444340f5d93b328f38e_prof);

        
        $__internal_254e7a194170edb7307f6870ff03cd764cc05a55c6c8a03cdf3494529aa3d6fb->leave($__internal_254e7a194170edb7307f6870ff03cd764cc05a55c6c8a03cdf3494529aa3d6fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd3e01c3701a5b2fc45949f1a1b751b6cbd402097e1e9c9d3db12072903e3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd3e01c3701a5b2fc45949f1a1b751b6cbd402097e1e9c9d3db12072903e3ef->enter($__internal_fdd3e01c3701a5b2fc45949f1a1b751b6cbd402097e1e9c9d3db12072903e3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f7a8537bfab4da936aa9ac1f7b28a8858df22b0ba3f70941aff0eb860dec0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7a8537bfab4da936aa9ac1f7b28a8858df22b0ba3f70941aff0eb860dec0f5->enter($__internal_8f7a8537bfab4da936aa9ac1f7b28a8858df22b0ba3f70941aff0eb860dec0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f7a8537bfab4da936aa9ac1f7b28a8858df22b0ba3f70941aff0eb860dec0f5->leave($__internal_8f7a8537bfab4da936aa9ac1f7b28a8858df22b0ba3f70941aff0eb860dec0f5_prof);

        
        $__internal_fdd3e01c3701a5b2fc45949f1a1b751b6cbd402097e1e9c9d3db12072903e3ef->leave($__internal_fdd3e01c3701a5b2fc45949f1a1b751b6cbd402097e1e9c9d3db12072903e3ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a968ef4122d56118da8f6e71db38bf39908b628c7b71809b0488791a2df53c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a968ef4122d56118da8f6e71db38bf39908b628c7b71809b0488791a2df53c7f->enter($__internal_a968ef4122d56118da8f6e71db38bf39908b628c7b71809b0488791a2df53c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dc8b47bfe3300f854a383b761ff55d33961bccc2b08c7b1a143f6cbbd1583484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8b47bfe3300f854a383b761ff55d33961bccc2b08c7b1a143f6cbbd1583484->enter($__internal_dc8b47bfe3300f854a383b761ff55d33961bccc2b08c7b1a143f6cbbd1583484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc8b47bfe3300f854a383b761ff55d33961bccc2b08c7b1a143f6cbbd1583484->leave($__internal_dc8b47bfe3300f854a383b761ff55d33961bccc2b08c7b1a143f6cbbd1583484_prof);

        
        $__internal_a968ef4122d56118da8f6e71db38bf39908b628c7b71809b0488791a2df53c7f->leave($__internal_a968ef4122d56118da8f6e71db38bf39908b628c7b71809b0488791a2df53c7f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6c94f4642d66b9a06f9c98ea00ae63330d7097eea3344e00e2c49f88678b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6c94f4642d66b9a06f9c98ea00ae63330d7097eea3344e00e2c49f88678b20->enter($__internal_ca6c94f4642d66b9a06f9c98ea00ae63330d7097eea3344e00e2c49f88678b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83e9686863997ba154d737a923ed9d4536c3d810ceb2eef84d42476b9c1f8a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e9686863997ba154d737a923ed9d4536c3d810ceb2eef84d42476b9c1f8a27->enter($__internal_83e9686863997ba154d737a923ed9d4536c3d810ceb2eef84d42476b9c1f8a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83e9686863997ba154d737a923ed9d4536c3d810ceb2eef84d42476b9c1f8a27->leave($__internal_83e9686863997ba154d737a923ed9d4536c3d810ceb2eef84d42476b9c1f8a27_prof);

        
        $__internal_ca6c94f4642d66b9a06f9c98ea00ae63330d7097eea3344e00e2c49f88678b20->leave($__internal_ca6c94f4642d66b9a06f9c98ea00ae63330d7097eea3344e00e2c49f88678b20_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcfb8c22559928cd433837b51625b7974a6987207f165e2f7ae69dc5a79a3b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfb8c22559928cd433837b51625b7974a6987207f165e2f7ae69dc5a79a3b5e->enter($__internal_dcfb8c22559928cd433837b51625b7974a6987207f165e2f7ae69dc5a79a3b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d94bc11e88a20f0420e5c9649839792a478ad94eeaa6c7fc78d25d75be372eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94bc11e88a20f0420e5c9649839792a478ad94eeaa6c7fc78d25d75be372eed->enter($__internal_d94bc11e88a20f0420e5c9649839792a478ad94eeaa6c7fc78d25d75be372eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d94bc11e88a20f0420e5c9649839792a478ad94eeaa6c7fc78d25d75be372eed->leave($__internal_d94bc11e88a20f0420e5c9649839792a478ad94eeaa6c7fc78d25d75be372eed_prof);

        
        $__internal_dcfb8c22559928cd433837b51625b7974a6987207f165e2f7ae69dc5a79a3b5e->leave($__internal_dcfb8c22559928cd433837b51625b7974a6987207f165e2f7ae69dc5a79a3b5e_prof);

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
        return array (  129 => 17,  112 => 16,  95 => 6,  77 => 5,  65 => 18,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.css') }}\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Play/app/Resources/views/base.html.twig");
    }
}
