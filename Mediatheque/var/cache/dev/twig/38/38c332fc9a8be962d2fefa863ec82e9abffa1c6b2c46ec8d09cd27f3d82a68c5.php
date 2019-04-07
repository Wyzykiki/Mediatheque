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

/* SyliusAdminBundle:Product:_position.html.twig */
class __TwigTemplate_3629df1ee935822af2dd1923b8902d2258a841e209d35a6412db32e14c4dee76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        // line 1
        if ((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new RuntimeError('Variable "taxonId" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "productTaxons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
                // line 3
                echo "        ";
                if (((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new RuntimeError('Variable "taxonId" does not exist.', 3, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "taxon", []), "id", []))) {
                    // line 4
                    echo "            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "position", []), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "id", []), "html", null, true);
                    echo "\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  55 => 6,  51 => 4,  48 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if taxonId %}
    {% for productTaxon in product.productTaxons%}
        {% if taxonId == productTaxon.taxon.id %}
            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"{{ productTaxon.position }}\" data-id=\"{{ productTaxon.id }}\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endif %}
", "SyliusAdminBundle:Product:_position.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_position.html.twig");
    }
}