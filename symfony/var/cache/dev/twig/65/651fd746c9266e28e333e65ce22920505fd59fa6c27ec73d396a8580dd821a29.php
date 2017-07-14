<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cdcc69e2cab1e0f9dbe7f07cabd52668c9b5d59ed43eea95e34d40bb6ddb1538 extends Twig_Template
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
        $__internal_9ec0f6f3d9f4844baae1e924d1ba9eb90adc03a202d492f3e569e53f83887e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec0f6f3d9f4844baae1e924d1ba9eb90adc03a202d492f3e569e53f83887e78->enter($__internal_9ec0f6f3d9f4844baae1e924d1ba9eb90adc03a202d492f3e569e53f83887e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_08199a10c1083b754f96918d0e2ba2ffaa2e058a920ed84abdec27393c8ebda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08199a10c1083b754f96918d0e2ba2ffaa2e058a920ed84abdec27393c8ebda2->enter($__internal_08199a10c1083b754f96918d0e2ba2ffaa2e058a920ed84abdec27393c8ebda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9ec0f6f3d9f4844baae1e924d1ba9eb90adc03a202d492f3e569e53f83887e78->leave($__internal_9ec0f6f3d9f4844baae1e924d1ba9eb90adc03a202d492f3e569e53f83887e78_prof);

        
        $__internal_08199a10c1083b754f96918d0e2ba2ffaa2e058a920ed84abdec27393c8ebda2->leave($__internal_08199a10c1083b754f96918d0e2ba2ffaa2e058a920ed84abdec27393c8ebda2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22dc20c27d87eb6eb2102394d8de715ff832208e0f2304705020fbace3fff94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dc20c27d87eb6eb2102394d8de715ff832208e0f2304705020fbace3fff94d->enter($__internal_22dc20c27d87eb6eb2102394d8de715ff832208e0f2304705020fbace3fff94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b120674ff1c9030f26f89d974fcf94e7bd63f36bbbd952a97dc8390811f7eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b120674ff1c9030f26f89d974fcf94e7bd63f36bbbd952a97dc8390811f7eb9->enter($__internal_8b120674ff1c9030f26f89d974fcf94e7bd63f36bbbd952a97dc8390811f7eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8b120674ff1c9030f26f89d974fcf94e7bd63f36bbbd952a97dc8390811f7eb9->leave($__internal_8b120674ff1c9030f26f89d974fcf94e7bd63f36bbbd952a97dc8390811f7eb9_prof);

        
        $__internal_22dc20c27d87eb6eb2102394d8de715ff832208e0f2304705020fbace3fff94d->leave($__internal_22dc20c27d87eb6eb2102394d8de715ff832208e0f2304705020fbace3fff94d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dde5d6d2c7acebf0b7b90739004c7212251a7e045466dfb07bbb4f6f3244f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dde5d6d2c7acebf0b7b90739004c7212251a7e045466dfb07bbb4f6f3244f79->enter($__internal_3dde5d6d2c7acebf0b7b90739004c7212251a7e045466dfb07bbb4f6f3244f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8cccf3d4dada843241c8f8d2221e646609f046e938788dbd004292475fa7d330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cccf3d4dada843241c8f8d2221e646609f046e938788dbd004292475fa7d330->enter($__internal_8cccf3d4dada843241c8f8d2221e646609f046e938788dbd004292475fa7d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8cccf3d4dada843241c8f8d2221e646609f046e938788dbd004292475fa7d330->leave($__internal_8cccf3d4dada843241c8f8d2221e646609f046e938788dbd004292475fa7d330_prof);

        
        $__internal_3dde5d6d2c7acebf0b7b90739004c7212251a7e045466dfb07bbb4f6f3244f79->leave($__internal_3dde5d6d2c7acebf0b7b90739004c7212251a7e045466dfb07bbb4f6f3244f79_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_43478642b9f810be4c426fc6db67e688b11fc32d270e50ee2827652face78efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43478642b9f810be4c426fc6db67e688b11fc32d270e50ee2827652face78efe->enter($__internal_43478642b9f810be4c426fc6db67e688b11fc32d270e50ee2827652face78efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79342077e621a5f47dd786539245157a258299d553718031f72a6d47e8604c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79342077e621a5f47dd786539245157a258299d553718031f72a6d47e8604c56->enter($__internal_79342077e621a5f47dd786539245157a258299d553718031f72a6d47e8604c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79342077e621a5f47dd786539245157a258299d553718031f72a6d47e8604c56->leave($__internal_79342077e621a5f47dd786539245157a258299d553718031f72a6d47e8604c56_prof);

        
        $__internal_43478642b9f810be4c426fc6db67e688b11fc32d270e50ee2827652face78efe->leave($__internal_43478642b9f810be4c426fc6db67e688b11fc32d270e50ee2827652face78efe_prof);

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
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
