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

/* Shop/index.html.twig */
class __TwigTemplate_2e041ef53d28f30d65667f6c0a85d0e0591036492b09029ab1eb9a14b2516399 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shop/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Shop/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">

                <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier"), "html", null, true);
        echo "</h2>
                <br>


                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produit"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantité"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Montant"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suprimer"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 25
            echo "                    <tr ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo ">
                        ";
            // line 26
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["produit"], "produitId", [], "any", false, false, false, 26))) {
                // line 27
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produitId", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
                echo " </td>
                            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produitId", [], "any", false, false, false, 28), "quantite", [], "any", false, false, false, 28), "html", null, true);
                echo " </td>
                            <td></td>
                            <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removePanier", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-danger\">";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supprimer ce produit"), "html", null, true);
                echo "</button>
                                </a></td>
                        ";
            }
            // line 34
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tr>
                    </tbody>
                </table>
                <br>
                <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous avez"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 40, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("article(s) dans votre panier"), "html", null, true);
        echo ".</p>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  134 => 36,  127 => 34,  121 => 31,  117 => 30,  112 => 28,  107 => 27,  105 => 26,  100 => 25,  96 => 24,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">

                <h2>{{ \"Panier\" | trans }}</h2>
                <br>


                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">{{ \"Produit\" | trans }}</th>
                        <th scope=\"col\">{{ \"Quantité\" | trans }}</th>
                        <th scope=\"col\">{{ \"Montant\" | trans }}</th>
                        <th scope=\"col\">{{ \"Suprimer\" | trans }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {% for produit in produits %}
                    <tr {{ produit.id }}>
                        {% if produit.produitId is not null %}
                            <td>{{ produit.produitId.nom }} </td>
                            <td>{{ produit.produitId.quantite }} </td>
                            <td></td>
                            <td><a href=\"{{ path(\"removePanier\", {id: produit.id}) }}\">
                                    <button class=\"btn btn-danger\">{{ \"Supprimer ce produit\"| trans }}</button>
                                </a></td>
                        {% endif %}
                    </tr>
                    {% endfor %}
                    </tr>
                    </tbody>
                </table>
                <br>
                <p>{{ \"Vous avez\"| trans }} {{ produits | length }} {{ \"article(s) dans votre panier\"| trans }}.</p>
            </div>
        </div>
    </div>
{% endblock %}
", "Shop/index.html.twig", "/Users/pa/shopSymfony/templates/Shop/index.html.twig");
    }
}
