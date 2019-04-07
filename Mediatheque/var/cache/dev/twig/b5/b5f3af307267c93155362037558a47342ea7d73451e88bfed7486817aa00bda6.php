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

/* SyliusShopBundle:Checkout:selectShipping.html.twig */
class __TwigTemplate_462506c3d2904b834cdbf9baf5a83c00eff57a02b7ce6f1493304b472e617c68 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 6)->display(twig_array_merge($context, ["active" => "select_shipping", "orderTotal" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "total", [])]));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.after_steps", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })())]]);
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.before_form", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })())]]);
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 19
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_form.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 19)->display($context);
        // line 20
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.before_navigation", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })())]]);
        echo "

                    ";
        // line 24
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_navigation.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 24)->display($context);
        // line 25
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "_token", []), 'row');
        echo "
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.before_summary", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })())]]);
        echo "

            ";
        // line 33
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 33)->display(twig_array_merge($context, ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })())]));
        // line 34
        echo "
            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.before_support", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })())]]);
        echo "

            ";
        // line 37
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 37)->display($context);
        // line 38
        echo "
            ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sylius.shop.checkout.select_shipping.after_support", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })())]]);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:selectShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  141 => 38,  139 => 37,  134 => 35,  131 => 34,  129 => 33,  124 => 31,  117 => 27,  113 => 26,  110 => 25,  108 => 24,  103 => 22,  99 => 20,  97 => 19,  91 => 16,  87 => 15,  82 => 13,  74 => 8,  71 => 7,  68 => 6,  59 => 5,  49 => 1,  47 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_shipping', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_shipping'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectShipping/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_navigation', {'order': order}) }}

                    {% include '@SyliusShop/Checkout/SelectShipping/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectShipping.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/selectShipping.html.twig");
    }
}