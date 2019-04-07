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

/* @SyliusShop/Product/_box.html.twig */
class __TwigTemplate_4d43cd36a0e44d31180d03ae5619392abdf5f717c00634d687daa5841bfeeb94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_box.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.product.index.before_box", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })())]]);
        echo "

<div class=\"ui fluid card\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "slug", []), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "translation", []), "locale", [])]), "html", null, true);
        echo "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>
        ";
        // line 14
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_box.html.twig", 14)->display(twig_array_merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })())]));
        // line 15
        echo "    </a>
    <div class=\"content\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "slug", []), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "translation", []), "locale", [])]), "html", null, true);
        echo "\" class=\"header sylius-product-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "name", []), "html", null, true);
        echo "</a>
        ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "variants", []), "empty", [], "method")) {
            // line 19
            echo "            <div class=\"sylius-product-price\">";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), [(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })())]));
            echo "</div>
        ";
        }
        // line 21
        echo "    </div>
</div>

";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.product.index.after_box", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })())]]);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  86 => 21,  80 => 19,  78 => 18,  72 => 17,  68 => 15,  66 => 14,  59 => 10,  52 => 6,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}

<div class=\"ui fluid card\">
    <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">{{ 'sylius.ui.view_more'|trans }}</div>
                </div>
            </div>
        </div>
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
    </a>
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"header sylius-product-name\">{{ product.name }}</a>
        {% if not product.variants.empty() %}
            <div class=\"sylius-product-price\">{{ money.calculatePrice(product|sylius_resolve_variant) }}</div>
        {% endif %}
    </div>
</div>

{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "@SyliusShop/Product/_box.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_box.html.twig");
    }
}