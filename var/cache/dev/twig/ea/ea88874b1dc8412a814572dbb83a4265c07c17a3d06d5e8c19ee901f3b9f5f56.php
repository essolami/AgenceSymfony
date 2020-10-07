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

/* home/home.html.twig */
class __TwigTemplate_6b5670ed67081c7a690eb970f468f07fbc1c3e6dc7ce8fa51ad8c477e96c3c80 extends Template
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
        // line 33
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 33);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " All Properties !!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"/css/card.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
<div class=\"jumbotron\">
   ";
        // line 45
        $this->loadTemplate("/includes/Search.html.twig", "home/home.html.twig", 45)->display($context);
        // line 46
        echo "</div>






<section id=\"boat_services\" class=\"my-5\">
  <div class=\"container\">
    <div class=\"title mb-1\">
      <h2>Hamza Agence - homes around the world</h2>
      <p>Browse a new selection of homes verified for quality & comfort</p>
    </div>
    <div class=\"row\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 61
            echo "            <div class=\"col-md-4\">
                <figure>
                    <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "image", [], "any", false, false, false, 63), "html", null, true);
            echo "\" class=\"mb-2 cardImg\" alt=\"\">
                    <figcaption class=\"inside\"></figcaption>
                    <figcaption class=\"outside\">
                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"like\">
                            ";
            // line 67
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), null)) && twig_get_attribute($this->env, $this->source, $context["property"], "LikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)], "method", false, false, false, 67))) {
                // line 68
                echo "                                <i class=\"fas fa-heart\"></i>
                            ";
            } else {
                // line 70
                echo "                                <i class=\"far fa-heart\"></i>
                            ";
            }
            // line 71
            echo " 
                                <span class=\"js-likes\">";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "likes", [], "any", false, false, false, 72)), "html", null, true);
            echo "</span>
                                <span class=\"js-label\">j'aime</span>
                        </a>
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\"><h2 class=\"text-black\">Homes in ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 75), "html", null, true);
            echo "</h2> </a>
                        <p class=\"medium text-secondary mb-0 font-weight-bold\">";
            // line 76
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 76), 0, "."), "html", null, true);
            echo " DH</p>
                        <p class=\"small text-color mb-0\">Posted By ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                        <p class=\"text-desc\">Modern art and age-old pubs—best explored from homes verified for quality and comfort.</p>
                    </figcaption>
                </figure> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </div>
</div>
</section>     

<div class=\"navigation\">
    ";
        // line 88
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()));
        echo "
</div>












";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        echo "<script src=\"/js/card.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 142,  226 => 141,  201 => 88,  194 => 83,  182 => 77,  178 => 76,  172 => 75,  166 => 72,  163 => 71,  159 => 70,  155 => 68,  153 => 67,  149 => 66,  143 => 63,  139 => 61,  135 => 60,  119 => 46,  117 => 45,  113 => 43,  103 => 42,  90 => 38,  80 => 37,  61 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron text-center\">
    <h1>Essolami Agence Immobiler</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
         velit consectetur minus error explicabo quos quod. Tempore deserunt repellat ab, iure eaque est explicabo neque minima repellendus eos sint maxime exercitationem,
         ratione at eligendi, rem aliquid sit. Cupiditate rem, perferendis recusandae, ad optio ratione distinctio unde maiores tempora repellendus natus.
    </p>
     
</div>
<div class=\"container mt-5\">
    <h2>The Latest Properties</h2>
    <div class=\"row flex mt-2\">
        {% for property in properties %}
        <div class=\"col-4 mt-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <a href=\"{{path('show',{'id':property.id})}}\">{{property.title}}</a>
                    </h5>
                    <p class=\"card-text\" > {{property.city}} ( {{property.postalCode}} )
                        <div class=\"text-primary\" style=\"font-weight: bold; font-size : 1.3rem\">{{property.price | number_format(0,'',' ')}} DH</div>
                    </p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %} #}
{% extends 'base.html.twig' %}

{% block title %} All Properties !!{% endblock %}

{% block stylesheets %}
{{parent()}}
<link rel=\"stylesheet\" href=\"/css/card.css\">
{% endblock %}

{% block body %}

<div class=\"jumbotron\">
   {% include '/includes/Search.html.twig' %}
</div>






<section id=\"boat_services\" class=\"my-5\">
  <div class=\"container\">
    <div class=\"title mb-1\">
      <h2>Hamza Agence - homes around the world</h2>
      <p>Browse a new selection of homes verified for quality & comfort</p>
    </div>
    <div class=\"row\">
        {% for property in pagination %}
            <div class=\"col-md-4\">
                <figure>
                    <img src=\"{{property.image}}\" class=\"mb-2 cardImg\" alt=\"\">
                    <figcaption class=\"inside\"></figcaption>
                    <figcaption class=\"outside\">
                        <a href=\"{{path('like',{'id':property.id})}}\" class=\"like\">
                            {% if app.user != null and property.LikedByUser(app.user) %}
                                <i class=\"fas fa-heart\"></i>
                            {% else %}
                                <i class=\"far fa-heart\"></i>
                            {% endif %} 
                                <span class=\"js-likes\">{{property.likes | length}}</span>
                                <span class=\"js-label\">j'aime</span>
                        </a>
                        <a href=\"{{path('show',{'id':property.id})}}\"><h2 class=\"text-black\">Homes in {{property.city}}</h2> </a>
                        <p class=\"medium text-secondary mb-0 font-weight-bold\">{{ property.price|number_format(0, '.') }} DH</p>
                        <p class=\"small text-color mb-0\">Posted By {{property.user.username}}</p>
                        <p class=\"text-desc\">Modern art and age-old pubs—best explored from homes verified for quality and comfort.</p>
                    </figcaption>
                </figure> 
            </div>
        {% endfor %}
    </div>
</div>
</section>     

<div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
</div>












{# <div class=\"container mt-5\" id=\"container mt-5\">
    <h2>All Properties</h2>
    <div class=\"row flex\">
        {% for property in pagination %}
        <div class=\"col-4 mt-2\">
            <div class=\"card mt-2\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <a href=\"{{path('show',{'id':property.id})}}\">{{property.title}} | {{property.user.username}}</a>
                    </h5>
                    <p class=\"card-text\" > {{property.city}} ( {{property.postalCode}} )
                        <div class=\"text-primary\" style=\"font-weight: bold; font-size : 1.3rem\">{{property.price | number_format(0,'',' ')}} DH</div>
                    </p>
                    <a href=\"{{path('like',{'id':property.id})}}\" class=\"like\">
                        {% if app.user != null and property.LikedByUser(app.user) %}
                        <i class=\"fas fa-thumbs-up\"></i>
                        {% else %}
                        <i class=\"far fa-thumbs-up\"></i>
                        {% endif %}

                        
                        <span class=\"js-likes\">{{property.likes | length}}</span>
                       
                    
                    <span class=\"js-label\">j'aime</span>
                </a>
                </div>
            </div>
            
        </div>
        {% endfor %}
    </div>
</div>
<div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
</div>
#}
{% endblock %}

{% block javascripts %}
<script src=\"/js/card.js\"></script>
{% endblock %} 

", "home/home.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\home\\home.html.twig");
    }
}
