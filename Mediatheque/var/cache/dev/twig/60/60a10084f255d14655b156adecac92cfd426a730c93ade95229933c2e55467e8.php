<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusUi/Macro/common.html.twig */
class __TwigTemplate_528535c5344013d216f6e021f43fdded0012a26d49cae47244388b053dd6e416 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/common.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/common.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 2, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 4,  72 => 3,  67 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}
", "@SyliusUi/Macro/common.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/common.html.twig");
    }
}