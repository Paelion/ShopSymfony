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

/* Shop/produits.html.twig */
class __TwigTemplate_c652b4e677f9f73b7d50fc196f5fb02749a7e1fa47730183256c04372942ecca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shop/produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Shop/produits.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits"), "html", null, true);
        echo "</h2>
                <br>

                ";
        // line 12
        if (twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Il n'y a pas de produits"), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 15
            echo "                    <ul>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 17
                echo "                            <li ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo ">
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produitSingle", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">
                                    ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 19), "html", null, true);
                echo "
                                    <br>
                                     ";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prix"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 21), "html", null, true);
                echo " €
                                    <br>
                                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantité"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 23), "html", null, true);
                echo "
                                    <br>
                                    <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 25))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
                                </a>
                            </li><br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </ul>
                ";
        }
        // line 31
        echo "
                <div>
                    <p style=\"font-size: 22px;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter un produit"), "html", null, true);
        echo "</p>
                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 35, $this->source); })()), 'rest');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter"), "html", null, true);
        echo "</button>
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                </div>
                <br>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Shop/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 38,  148 => 37,  143 => 35,  139 => 34,  135 => 33,  131 => 31,  127 => 29,  115 => 25,  108 => 23,  101 => 21,  96 => 19,  92 => 18,  87 => 17,  83 => 16,  80 => 15,  74 => 13,  72 => 12,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">

                <h2>{{ \"Produits\" | trans }}</h2>
                <br>

                {% if produits is empty %}
                    <p>{{ \"Il n'y a pas de produits\" | trans }}</p>
                {% else %}
                    <ul>
                        {% for produit in produits %}
                            <li {{ produit.id }}>
                                <a href=\"{{ path('produitSingle', {id: produit.id}) }}\">
                                    {{ produit.nom }}
                                    <br>
                                     {{ \"Prix\" | trans }} : {{ produit.prix }} €
                                    <br>
                                    {{ \"Quantité\" | trans }} : {{ produit.quantite }}
                                    <br>
                                    <img src=\"{{ asset('upload/images/' ~ produit.photo)}}\" class=\"card-img-top\" alt=\"{{produit.nom}}\">
                                </a>
                            </li><br>
                        {% endfor %}
                    </ul>
                {% endif %}

                <div>
                    <p style=\"font-size: 22px;\">{{ \"Ajouter un produit\"| trans }}</p>
                    {{ form_start(formProduit) }}
                    {{ form_rest(formProduit) }}

                    <button type=\"submit\" class=\"btn btn-primary\">{{ \"Ajouter\"| trans }}</button>
                    {{ form_end(formProduit) }}
                </div>
                <br>

            </div>
        </div>
    </div>
{% endblock %}
", "Shop/produits.html.twig", "/Users/pa/shopSymfony/templates/Shop/produits.html.twig");
    }
}
