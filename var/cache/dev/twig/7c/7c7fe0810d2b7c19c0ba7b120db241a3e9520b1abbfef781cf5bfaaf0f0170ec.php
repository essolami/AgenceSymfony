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

/* bien/show.html.twig */
class __TwigTemplate_4bcf16b39afbe3905df3948c8d4a54faa12b1428e1fb05e796b499f3a5a8a5df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bien/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"/css/show.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "


<div class=\"backGround\">
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"img\"/>
</div>


 <div class=\"container mt-4\">
 
    ";
        // line 33
        echo "    <p>
        ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "
    </p>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h2>Caractéristiques</h2>
            <table class=\"table table-striped\">
                <tr>
                    <td>Surface habitable</td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 42, $this->source); })()), "surface", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Piéces</td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 46, $this->source); })()), "rooms", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Chambre</td>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 50, $this->source); })()), "bedrooms", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 54, $this->source); })()), "floor", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Chaufage</td>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 58, $this->source); })()), "heatType", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
        <div class=\"col-md-4\">
            <h2>Spécification</h2>
            <table class=\"table table-striped\">
                <tr>
                    <td>City</td>
                    <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 67, $this->source); })()), "city", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 71, $this->source); })()), "adress", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 75, $this->source); })()), "postalCode", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"text-primary\">Disponible</td>
                    <td>Oui ! Tu peux réserver</td>
                </tr>
                
            </table>
        </div>
    </div>
</div> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "<script src=\"/js/show.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 89,  219 => 88,  196 => 75,  189 => 71,  182 => 67,  170 => 58,  163 => 54,  156 => 50,  149 => 46,  142 => 42,  131 => 34,  128 => 33,  119 => 14,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{property.title}}{% endblock %}

{% block stylesheets %}
{{parent()}}
<link rel=\"stylesheet\" href=\"/css/show.css\">
{% endblock %}
{% block body %}



<div class=\"backGround\">
    <img src=\"{{property.image}}\" class=\"img\"/>
</div>


 <div class=\"container mt-4\">
 
    {# <div class=\"jumbotron\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <p style=\"padding-top: 15px;\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium neque enim mollitia, nisi aliquam eius dicta. Dolor veritatis est quaerat unde velit iure mollitia recusandae suscipit rem corporis. Eius aspernatur natus distinctio sint inventore omnis quia sunt numquam, laboriosam reprehenderit?</p>
        </div>
        <div class=\"col-md-4\">
            <h1>{{property.title}}</h1>
            <h2>{{property.rooms}} piéces - {{property.surface }} m²</h2>
            <div class=\"text-primary \" style=\"font-size: 2rem;font-weight:bold;\"> {{property.price | number_format(0,'',' ')}} DH </div>
            <a href=\"#\" class=\"btn btn-primary mt-4\">contacter l'agence</a>
        </div>
    </div>
</div> #}
    <p>
        {{property.description}}
    </p>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h2>Caractéristiques</h2>
            <table class=\"table table-striped\">
                <tr>
                    <td>Surface habitable</td>
                    <td>{{property.surface}}</td>
                </tr>
                <tr>
                    <td>Piéces</td>
                    <td>{{property.rooms}}</td>
                </tr>
                <tr>
                    <td>Chambre</td>
                    <td>{{property.bedrooms}}</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>{{property.floor}}</td>
                </tr>
                <tr>
                    <td>Chaufage</td>
                    <td>{{property.heatType}}</td>
                </tr>
            </table>
        </div>
        <div class=\"col-md-4\">
            <h2>Spécification</h2>
            <table class=\"table table-striped\">
                <tr>
                    <td>City</td>
                    <td>{{property.city}}</td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td>{{property.adress}}</td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td>{{property.postalCode}}</td>
                </tr>
                <tr>
                    <td class=\"text-primary\">Disponible</td>
                    <td>Oui ! Tu peux réserver</td>
                </tr>
                
            </table>
        </div>
    </div>
</div> 

{% endblock %}
{% block javascripts %}
<script src=\"/js/show.js\"></script>
{% endblock %}
", "bien/show.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\bien\\show.html.twig");
    }
}
