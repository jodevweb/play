<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
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
        $__internal_6bfd5329df43e3859bebf2a1a788e6a17d7aa51876c18823295be36a152732b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfd5329df43e3859bebf2a1a788e6a17d7aa51876c18823295be36a152732b6->enter($__internal_6bfd5329df43e3859bebf2a1a788e6a17d7aa51876c18823295be36a152732b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d35f511a0e5ea28aa817796cb5541dc42a2a0a6ec28a36e68b1f5190497705f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35f511a0e5ea28aa817796cb5541dc42a2a0a6ec28a36e68b1f5190497705f3->enter($__internal_d35f511a0e5ea28aa817796cb5541dc42a2a0a6ec28a36e68b1f5190497705f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6bfd5329df43e3859bebf2a1a788e6a17d7aa51876c18823295be36a152732b6->leave($__internal_6bfd5329df43e3859bebf2a1a788e6a17d7aa51876c18823295be36a152732b6_prof);

        
        $__internal_d35f511a0e5ea28aa817796cb5541dc42a2a0a6ec28a36e68b1f5190497705f3->leave($__internal_d35f511a0e5ea28aa817796cb5541dc42a2a0a6ec28a36e68b1f5190497705f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b996260f19f8b9fb50bf415acf4781925a62030c964bc6751aa0dd740d5f330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b996260f19f8b9fb50bf415acf4781925a62030c964bc6751aa0dd740d5f330->enter($__internal_9b996260f19f8b9fb50bf415acf4781925a62030c964bc6751aa0dd740d5f330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_425b8b0486e2e264763ad0c933d4d58d5f767f9646c7108bc90f9a4d16ebc2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425b8b0486e2e264763ad0c933d4d58d5f767f9646c7108bc90f9a4d16ebc2df->enter($__internal_425b8b0486e2e264763ad0c933d4d58d5f767f9646c7108bc90f9a4d16ebc2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_425b8b0486e2e264763ad0c933d4d58d5f767f9646c7108bc90f9a4d16ebc2df->leave($__internal_425b8b0486e2e264763ad0c933d4d58d5f767f9646c7108bc90f9a4d16ebc2df_prof);

        
        $__internal_9b996260f19f8b9fb50bf415acf4781925a62030c964bc6751aa0dd740d5f330->leave($__internal_9b996260f19f8b9fb50bf415acf4781925a62030c964bc6751aa0dd740d5f330_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bb9f99aa88a7c1d2538ea9824bde362014ecccc4bf9cca91d7bc8f166649961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb9f99aa88a7c1d2538ea9824bde362014ecccc4bf9cca91d7bc8f166649961->enter($__internal_6bb9f99aa88a7c1d2538ea9824bde362014ecccc4bf9cca91d7bc8f166649961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca8f8d441221a17bde3f53ad1c060846e5936128d1a888cec35ce20be90a3bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8f8d441221a17bde3f53ad1c060846e5936128d1a888cec35ce20be90a3bc4->enter($__internal_ca8f8d441221a17bde3f53ad1c060846e5936128d1a888cec35ce20be90a3bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ca8f8d441221a17bde3f53ad1c060846e5936128d1a888cec35ce20be90a3bc4->leave($__internal_ca8f8d441221a17bde3f53ad1c060846e5936128d1a888cec35ce20be90a3bc4_prof);

        
        $__internal_6bb9f99aa88a7c1d2538ea9824bde362014ecccc4bf9cca91d7bc8f166649961->leave($__internal_6bb9f99aa88a7c1d2538ea9824bde362014ecccc4bf9cca91d7bc8f166649961_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c4ff320e32167c6c52350ec179164ecb166965457aa07c06ca24f5e28dd06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4ff320e32167c6c52350ec179164ecb166965457aa07c06ca24f5e28dd06a->enter($__internal_43c4ff320e32167c6c52350ec179164ecb166965457aa07c06ca24f5e28dd06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_729bddaf06accb82fe5f388c042e2fd60fe89b8f0bd8d93926c9dfb39c984ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729bddaf06accb82fe5f388c042e2fd60fe89b8f0bd8d93926c9dfb39c984ee8->enter($__internal_729bddaf06accb82fe5f388c042e2fd60fe89b8f0bd8d93926c9dfb39c984ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_729bddaf06accb82fe5f388c042e2fd60fe89b8f0bd8d93926c9dfb39c984ee8->leave($__internal_729bddaf06accb82fe5f388c042e2fd60fe89b8f0bd8d93926c9dfb39c984ee8_prof);

        
        $__internal_43c4ff320e32167c6c52350ec179164ecb166965457aa07c06ca24f5e28dd06a->leave($__internal_43c4ff320e32167c6c52350ec179164ecb166965457aa07c06ca24f5e28dd06a_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/Play/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
