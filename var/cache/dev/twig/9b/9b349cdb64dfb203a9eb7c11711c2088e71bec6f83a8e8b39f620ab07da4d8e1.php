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

/* Shop/produitSingle.html.twig */
class __TwigTemplate_d2c98a9fb1b25db057a8ca038fb9e7f5ae06a48740f6eb058c5542abf8bb5163 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shop/produitSingle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Shop/produitSingle.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
                <br>
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prix"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 11, $this->source); })()), "prix", [], "any", false, false, false, 11), "html", null, true);
        echo " €
                <br>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantité"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 13, $this->source); })()), "quantite", [], "any", false, false, false, 13), "html", null, true);
        echo "

                <br>
                <br>
                <div>
                    <p style=\"font-size: 22px;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter au panier"), "html", null, true);
        echo "</p>
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPanier"]) || array_key_exists("formPanier", $context) ? $context["formPanier"] : (function () { throw new RuntimeError('Variable "formPanier" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPanier"]) || array_key_exists("formPanier", $context) ? $context["formPanier"] : (function () { throw new RuntimeError('Variable "formPanier" does not exist.', 20, $this->source); })()), 'rest');
        echo "
                    <select name=\"produitId\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 23
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </select>
                    <br>
                    <br>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choisir"), "html", null, true);
        echo "</button>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPanier"]) || array_key_exists("formPanier", $context) ? $context["formPanier"] : (function () { throw new RuntimeError('Variable "formPanier" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
                </div>
                <br>
                <br>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\"><button class=\"btn btn-danger\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supprimer ce produit"), "html", null, true);
        echo "</button></a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Shop/produitSingle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  125 => 29,  121 => 28,  116 => 25,  105 => 23,  101 => 22,  96 => 20,  92 => 19,  88 => 18,  78 => 13,  71 => 11,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">

                <h2>{{ produits.nom }}</h2>
                <br>
                {{ \"Prix\" | trans }} : {{ produits.prix }} €
                <br>
                {{ \"Quantité\" | trans }} : {{ produits.quantite }}

                <br>
                <br>
                <div>
                    <p style=\"font-size: 22px;\">{{ \"Ajouter au panier\"| trans }}</p>
                    {{ form_start(formPanier) }}
                    {{ form_rest(formPanier) }}
                    <select name=\"produitId\">
                        {% for list in lists %}
                            <option value=\"{{ list.id }}\">{{ list.nom}} </option>
                        {% endfor %}
                    </select>
                    <br>
                    <br>
                    <button type=\"submit\" class=\"btn btn-primary\">{{ \"Choisir\"| trans }}</button>
                    {{ form_end(formPanier) }}
                </div>
                <br>
                <br>
                <a href=\"{{path(\"remove\", {id: produits.id})}}\"><button class=\"btn btn-danger\">{{ \"Supprimer ce produit\"| trans }}</button></a>
            </div>
        </div>
    </div>
{% endblock %}
", "Shop/produitSingle.html.twig", "/Users/pa/shopSymfony/templates/Shop/produitSingle.html.twig");
    }
}
