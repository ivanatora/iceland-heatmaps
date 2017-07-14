<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_401320bf1a123d31af5ec3be6afe4af9f28e9e7cb6ce0b5f9dab18727ce18acf extends Twig_Template
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
        $__internal_9765c8b91a6e6a11d058d6c2199c964d084e8003b3201a865009599d2806b709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9765c8b91a6e6a11d058d6c2199c964d084e8003b3201a865009599d2806b709->enter($__internal_9765c8b91a6e6a11d058d6c2199c964d084e8003b3201a865009599d2806b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_626756509eac1b843c2f6a313303e077a1a5498bcd98f2445abb677b3926fa65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626756509eac1b843c2f6a313303e077a1a5498bcd98f2445abb677b3926fa65->enter($__internal_626756509eac1b843c2f6a313303e077a1a5498bcd98f2445abb677b3926fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9765c8b91a6e6a11d058d6c2199c964d084e8003b3201a865009599d2806b709->leave($__internal_9765c8b91a6e6a11d058d6c2199c964d084e8003b3201a865009599d2806b709_prof);

        
        $__internal_626756509eac1b843c2f6a313303e077a1a5498bcd98f2445abb677b3926fa65->leave($__internal_626756509eac1b843c2f6a313303e077a1a5498bcd98f2445abb677b3926fa65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1447a3811e218f9c3654d31bb5cbd5c01de97a57866021d5c14ca3a693a526d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1447a3811e218f9c3654d31bb5cbd5c01de97a57866021d5c14ca3a693a526d->enter($__internal_d1447a3811e218f9c3654d31bb5cbd5c01de97a57866021d5c14ca3a693a526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07eac48363eff05e437b3f7b1e7c05b3f33149336196e7e0928436bbf3d2959b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eac48363eff05e437b3f7b1e7c05b3f33149336196e7e0928436bbf3d2959b->enter($__internal_07eac48363eff05e437b3f7b1e7c05b3f33149336196e7e0928436bbf3d2959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07eac48363eff05e437b3f7b1e7c05b3f33149336196e7e0928436bbf3d2959b->leave($__internal_07eac48363eff05e437b3f7b1e7c05b3f33149336196e7e0928436bbf3d2959b_prof);

        
        $__internal_d1447a3811e218f9c3654d31bb5cbd5c01de97a57866021d5c14ca3a693a526d->leave($__internal_d1447a3811e218f9c3654d31bb5cbd5c01de97a57866021d5c14ca3a693a526d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9352e158ca381033fb3c8941bd84319a509fb579925358dcbf016ff0ff2b67dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9352e158ca381033fb3c8941bd84319a509fb579925358dcbf016ff0ff2b67dd->enter($__internal_9352e158ca381033fb3c8941bd84319a509fb579925358dcbf016ff0ff2b67dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_444efccc7baeb7c00e9f6b64808e1974e3b7139d64b3bfa7f529db4f0d312693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444efccc7baeb7c00e9f6b64808e1974e3b7139d64b3bfa7f529db4f0d312693->enter($__internal_444efccc7baeb7c00e9f6b64808e1974e3b7139d64b3bfa7f529db4f0d312693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_444efccc7baeb7c00e9f6b64808e1974e3b7139d64b3bfa7f529db4f0d312693->leave($__internal_444efccc7baeb7c00e9f6b64808e1974e3b7139d64b3bfa7f529db4f0d312693_prof);

        
        $__internal_9352e158ca381033fb3c8941bd84319a509fb579925358dcbf016ff0ff2b67dd->leave($__internal_9352e158ca381033fb3c8941bd84319a509fb579925358dcbf016ff0ff2b67dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94c583fe1cb86aabfc19fc9091f59ea90a1af19119fe2039c7b32c4ffbc4975f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c583fe1cb86aabfc19fc9091f59ea90a1af19119fe2039c7b32c4ffbc4975f->enter($__internal_94c583fe1cb86aabfc19fc9091f59ea90a1af19119fe2039c7b32c4ffbc4975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66032c0c60633e07b42da2573c21858742ad50fe32c68d237cf25da629135374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66032c0c60633e07b42da2573c21858742ad50fe32c68d237cf25da629135374->enter($__internal_66032c0c60633e07b42da2573c21858742ad50fe32c68d237cf25da629135374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66032c0c60633e07b42da2573c21858742ad50fe32c68d237cf25da629135374->leave($__internal_66032c0c60633e07b42da2573c21858742ad50fe32c68d237cf25da629135374_prof);

        
        $__internal_94c583fe1cb86aabfc19fc9091f59ea90a1af19119fe2039c7b32c4ffbc4975f->leave($__internal_94c583fe1cb86aabfc19fc9091f59ea90a1af19119fe2039c7b32c4ffbc4975f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
