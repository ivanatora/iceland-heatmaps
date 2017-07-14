<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bac2de80e8fa7f8fb726945dc35461914ec818981b6985bf4ce363537c3e2549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23cb4a82f763f1099d0a709d14a95f93c3ac0712bc9a94fde971e770493ac41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cb4a82f763f1099d0a709d14a95f93c3ac0712bc9a94fde971e770493ac41b->enter($__internal_23cb4a82f763f1099d0a709d14a95f93c3ac0712bc9a94fde971e770493ac41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6052e209cfd12022693ec3d2ee92f93912ac28ffdd4d2d36f8a876bf60e1ab6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6052e209cfd12022693ec3d2ee92f93912ac28ffdd4d2d36f8a876bf60e1ab6a->enter($__internal_6052e209cfd12022693ec3d2ee92f93912ac28ffdd4d2d36f8a876bf60e1ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cb4a82f763f1099d0a709d14a95f93c3ac0712bc9a94fde971e770493ac41b->leave($__internal_23cb4a82f763f1099d0a709d14a95f93c3ac0712bc9a94fde971e770493ac41b_prof);

        
        $__internal_6052e209cfd12022693ec3d2ee92f93912ac28ffdd4d2d36f8a876bf60e1ab6a->leave($__internal_6052e209cfd12022693ec3d2ee92f93912ac28ffdd4d2d36f8a876bf60e1ab6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0d20f35a05afab154ea916025f3c729cba3bd763a30f15bc9385c03f232eae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d20f35a05afab154ea916025f3c729cba3bd763a30f15bc9385c03f232eae0->enter($__internal_b0d20f35a05afab154ea916025f3c729cba3bd763a30f15bc9385c03f232eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5971367f786e2b43d072777d2d044a63bb17c72dd9aea244fbcc13635bc18a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5971367f786e2b43d072777d2d044a63bb17c72dd9aea244fbcc13635bc18a28->enter($__internal_5971367f786e2b43d072777d2d044a63bb17c72dd9aea244fbcc13635bc18a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5971367f786e2b43d072777d2d044a63bb17c72dd9aea244fbcc13635bc18a28->leave($__internal_5971367f786e2b43d072777d2d044a63bb17c72dd9aea244fbcc13635bc18a28_prof);

        
        $__internal_b0d20f35a05afab154ea916025f3c729cba3bd763a30f15bc9385c03f232eae0->leave($__internal_b0d20f35a05afab154ea916025f3c729cba3bd763a30f15bc9385c03f232eae0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
