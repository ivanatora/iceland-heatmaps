<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ef2863c8e707ee99f107bd24f91bc77860e6c545f536aaf8a46589d9fe42d0fc extends Twig_Template
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
        $__internal_86bc48faa88823a70780d628dfd39fa1b4f1301168b53c42cc55f30058e8f491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86bc48faa88823a70780d628dfd39fa1b4f1301168b53c42cc55f30058e8f491->enter($__internal_86bc48faa88823a70780d628dfd39fa1b4f1301168b53c42cc55f30058e8f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8e16262c8d4c9c37ebbad25774a38d081a90d8a5bc0e7d0d2d85109b61bf1a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e16262c8d4c9c37ebbad25774a38d081a90d8a5bc0e7d0d2d85109b61bf1a81->enter($__internal_8e16262c8d4c9c37ebbad25774a38d081a90d8a5bc0e7d0d2d85109b61bf1a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86bc48faa88823a70780d628dfd39fa1b4f1301168b53c42cc55f30058e8f491->leave($__internal_86bc48faa88823a70780d628dfd39fa1b4f1301168b53c42cc55f30058e8f491_prof);

        
        $__internal_8e16262c8d4c9c37ebbad25774a38d081a90d8a5bc0e7d0d2d85109b61bf1a81->leave($__internal_8e16262c8d4c9c37ebbad25774a38d081a90d8a5bc0e7d0d2d85109b61bf1a81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cc9d2dbf1745793672af54cabdcdbca4ceeba20245ca048bdb457757ce3410c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc9d2dbf1745793672af54cabdcdbca4ceeba20245ca048bdb457757ce3410c->enter($__internal_2cc9d2dbf1745793672af54cabdcdbca4ceeba20245ca048bdb457757ce3410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9c540d0cf1c2e8b19e0bde09eec277e9a81f4f4eef76c9c0f0afe4ebe26345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c540d0cf1c2e8b19e0bde09eec277e9a81f4f4eef76c9c0f0afe4ebe26345f->enter($__internal_e9c540d0cf1c2e8b19e0bde09eec277e9a81f4f4eef76c9c0f0afe4ebe26345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e9c540d0cf1c2e8b19e0bde09eec277e9a81f4f4eef76c9c0f0afe4ebe26345f->leave($__internal_e9c540d0cf1c2e8b19e0bde09eec277e9a81f4f4eef76c9c0f0afe4ebe26345f_prof);

        
        $__internal_2cc9d2dbf1745793672af54cabdcdbca4ceeba20245ca048bdb457757ce3410c->leave($__internal_2cc9d2dbf1745793672af54cabdcdbca4ceeba20245ca048bdb457757ce3410c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb51e05880ed36d06d2900965083720aeba0c3e73baee79aaa34780810c55d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb51e05880ed36d06d2900965083720aeba0c3e73baee79aaa34780810c55d39->enter($__internal_eb51e05880ed36d06d2900965083720aeba0c3e73baee79aaa34780810c55d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3d3d67a76769acb128548b92425dcd6f620fa6a4977aef3199f362fc8f33319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d3d67a76769acb128548b92425dcd6f620fa6a4977aef3199f362fc8f33319->enter($__internal_d3d3d67a76769acb128548b92425dcd6f620fa6a4977aef3199f362fc8f33319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d3d3d67a76769acb128548b92425dcd6f620fa6a4977aef3199f362fc8f33319->leave($__internal_d3d3d67a76769acb128548b92425dcd6f620fa6a4977aef3199f362fc8f33319_prof);

        
        $__internal_eb51e05880ed36d06d2900965083720aeba0c3e73baee79aaa34780810c55d39->leave($__internal_eb51e05880ed36d06d2900965083720aeba0c3e73baee79aaa34780810c55d39_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba60e962367ee42430e88ae51ba834cac4ddae1f89d3280868ed6402f07fb1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba60e962367ee42430e88ae51ba834cac4ddae1f89d3280868ed6402f07fb1fc->enter($__internal_ba60e962367ee42430e88ae51ba834cac4ddae1f89d3280868ed6402f07fb1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_967e88b7d149320a3d4e75a4954d4c30508f60b997b01aebff7bebe070cb9dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967e88b7d149320a3d4e75a4954d4c30508f60b997b01aebff7bebe070cb9dbc->enter($__internal_967e88b7d149320a3d4e75a4954d4c30508f60b997b01aebff7bebe070cb9dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_967e88b7d149320a3d4e75a4954d4c30508f60b997b01aebff7bebe070cb9dbc->leave($__internal_967e88b7d149320a3d4e75a4954d4c30508f60b997b01aebff7bebe070cb9dbc_prof);

        
        $__internal_ba60e962367ee42430e88ae51ba834cac4ddae1f89d3280868ed6402f07fb1fc->leave($__internal_ba60e962367ee42430e88ae51ba834cac4ddae1f89d3280868ed6402f07fb1fc_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
