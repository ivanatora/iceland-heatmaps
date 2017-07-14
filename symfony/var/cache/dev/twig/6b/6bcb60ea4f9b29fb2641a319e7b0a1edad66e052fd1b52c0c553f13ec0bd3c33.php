<?php

/* form/form.html.twig */
class __TwigTemplate_75765f9198f95328a4bfa9451b4093409c5956363daa1cce84d403710d909890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a98517bae18255c06ad387e84de12b7ca3a5611423deae1700f95f95e2d9ebc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98517bae18255c06ad387e84de12b7ca3a5611423deae1700f95f95e2d9ebc5->enter($__internal_a98517bae18255c06ad387e84de12b7ca3a5611423deae1700f95f95e2d9ebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.html.twig"));

        $__internal_60ecafd53f19e788fc829fb3690cd98bd392836cbb439cbaa3fbcfa89a2a7f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ecafd53f19e788fc829fb3690cd98bd392836cbb439cbaa3fbcfa89a2a7f45->enter($__internal_60ecafd53f19e788fc829fb3690cd98bd392836cbb439cbaa3fbcfa89a2a7f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.html.twig"));

        // line 1
        echo "<h1>Form test</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<h2>All products</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 24
            if ($this->getAttribute($context["item"], "category", array())) {
                // line 25
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array()), "html", null, true);
                echo "
            ";
            }
            // line 27
            echo "        </td>
        <td>
            <a href=\"/form/";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">Edit</a> |
            <a href=\"/form/delete/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">Delete</a> |
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
</table>";
        
        $__internal_a98517bae18255c06ad387e84de12b7ca3a5611423deae1700f95f95e2d9ebc5->leave($__internal_a98517bae18255c06ad387e84de12b7ca3a5611423deae1700f95f95e2d9ebc5_prof);

        
        $__internal_60ecafd53f19e788fc829fb3690cd98bd392836cbb439cbaa3fbcfa89a2a7f45->leave($__internal_60ecafd53f19e788fc829fb3690cd98bd392836cbb439cbaa3fbcfa89a2a7f45_prof);

    }

    public function getTemplateName()
    {
        return "form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  89 => 30,  85 => 29,  81 => 27,  75 => 25,  73 => 24,  68 => 22,  64 => 21,  60 => 20,  57 => 19,  53 => 18,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Form test</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

<h2>All products</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>

{% for item in list %}
    <tr>
        <td>{{ item.name }}</td>
        <td>{{ item.price }}</td>
        <td>{{ item.description }}</td>
        <td>
            {% if (item.category) %}
                {{ item.category.name }}
            {% endif %}
        </td>
        <td>
            <a href=\"/form/{{ item.id }}\">Edit</a> |
            <a href=\"/form/delete/{{ item.id }}\">Delete</a> |
        </td>
    </tr>
{% endfor %}

</table>", "form/form.html.twig", "/var/www/symfony/app/Resources/views/form/form.html.twig");
    }
}
