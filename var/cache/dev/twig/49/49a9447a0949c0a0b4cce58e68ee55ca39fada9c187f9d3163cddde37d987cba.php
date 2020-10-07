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
class __TwigTemplate_a5b43088491051bcc296c0c60dc58848658c5e4d3b8ea72bde588b94d1145282 extends Template
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

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 15
        echo "
<div class=\"body-blackout\"></div>
<div class=\"popup-modal shadow\">
  <center style=\"font-size: 16px; line-height: 20px;\"><i class=\"close popup-modal__close\"></i> <i class=\"icon-acadomia\"> <img width=\"200\"  heigth=\"200\" src=\"https://www.cleen.com:443/img/logo.png\" alt=\"Coach to CLEEN\"></i> 
    <br>
    <p>Plateforme officielle du CLEEN&trade;<br /></p><br>
    <p style=\"font-size: 17px; font-weight: bold;  \">TOUS CONTRE LE COVID-19  </p><br> 
    <p style=\"font-size: 24px; font-weight: bold; color: #e85244;\">Coach to CLEEN se mobilise </p><br>
    <p style=\"font-size:14px;\"> Dans cette période anxiogène, Coach to CLEEN propose des solutions d'accompagnement à la gestion de stress et la libération des émotions négatives aux personnels de santé et aux personnes en situation de détresse médicale en ligne et en toute sécurité avec nos coachs praticiens CLEEN&trade; certifiés.</p><br>
    <h1 style=\"font-size: 17px; font-weight: bold;\">Nous offrons un accès gratuit aux séances CLEEN&trade; <br>jusqu’au 20 avril 2020</h1><br>
    <p style=\"font-size:14px;\">Pour plus d’information, contactez-nous :</p>
    <br>
    <p><a class=\"btnrdv\" href=\"<?php echo \$this->Url->build([\"controller\" => \"Pages\", \"action\" => \"offres\"]); ?>\"> Prendre un rendez-vous maintenant ! </a></p>
    <br>
    <p  style=\"font-size: 17px; font-weight: bold; color: #87c5b2;\">L’Equipe de Coach To CLEEN </br>
    </p><br>
    <a href=\"https://www.instagram.com/coachtocleen\"><img  width=\"20\"  heigth=\"20\" src=\"data:image/jpeg;base64,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 \" ></a>   
    <a href=\"https://www.facebook.com/admincleen/\" ><img width=\"20\"  heigth=\"20\"  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Facebook_logo_36x36.svg/36px-Facebook_logo_36x36.svg.png\" ></a> 
    <a href=\"https://www.linkedin.com/company/coach-to-cleen/about/?viewAsMember=true\" ><img  width=\"20\"  heigth=\"20\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAMAAAC93eDPAAAAY1BMVEUAd7X////o8/kAZawAb7EAaa/r8/n0+fv4/f4AdbQefLgneLbd6vOPudf4+/1KjcAAT6TV5fAAYqygv9p/rtGYvNmqx99wps2Js9S30OTF2enN4O1PlMNcm8c/h71blsRqnsj7RfWhAAACWklEQVR4nO3bbVODMAwA4ALlJR1jsneYIv//VwrqWBPKhLvS6pl82Cm12yO0aSg3EXgP4RvABCYwgQnPCaHDMBPCl8hZvIRmQiScRcQEJjCBCUxgAhNsEgDAKwEkbDab7tUbQYpDWQRZfuh+8kOQx6H9atGwgCBPj/bgbM8wnyAvgR5Ha4b5hDhFhMzakJxN0AaC5eEwn1ARQu2cACUh5MLSpZhLAMgpQTkmCLgRQun6LAh5JoTK/Vh4JYQ35wQR4ytRekhN0CSaoGjcp6ZuNLw/8mPa+lgjOoOqv5vrxs9K2Vcszbaqq21jtWZZWLiB7MNu6fYXy1cmeCcAjqmG4aCM97J73Ufx8/G7IDvucDzeFh3+WsJBivb8vbyH1bWJnyAWrBFhoUdyT06gUu1w0MJn/jjr2Twobu30mVhAQG8apEN+VJl+vMvcAFtc6vZxU1MJdQWCVLTG+4ysjZ0Rduh3LU5mg3XCezO+CPcw3/5YJ1xomauHsciwTsB/RSI3bU5YJzwP0y2YY0JoOA2OCcHFP6EeT8z1CEmeG6ZnNk7UKxGS004J1Rhm6KsjQtXXl9BXmvQ20DAnViFco6FqiA+kbbxJtQYBfQqQXDXeGVmBkKK5j/bpuihdjIUD+j9B4dZxjl6BQMZ8hPu5IBTkM+IaNbsgJHvcj8xLF4ScpGC5ZQITmMAEJjCBCUxgAhOYwIR/TSA7Rw8CPp6TruTufrztt+CRyAYHTDQo2k9M9FtOmPtgaLyx+EPz33o8xgQmMIEJTGACEwaC/y+w/YKv8fkKJjCBCUz4hYQPrSRHDIj6MbQAAAAASUVORK5CYII=\" ></a> 
    <a href=\"#\" ><img width=\"20\"  heigth=\"20\"src=\"https://cleen.com/blog/wp-content/uploads/2020/03/pinterest.png\" ></a> 
  </center>
</div>

";
        // line 43
        echo "<div class=\"main\">
    <div class=\"left-icon\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 45, $this->source); })()), "gallery", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 46
            echo "            <div>
                <img onclick=\"document.getElementById('img-holder').style.backgroundImage = 'url(";
            // line 47
            echo twig_escape_filter($this->env, $context["gallery"], "html", null, true);
            echo ")'\"src=";
            echo twig_escape_filter($this->env, $context["gallery"], "html", null, true);
            echo " id=\"left-circle\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
    <div class=\"row\">
        <div class=\"column\">
            <div id=\"img-holder\" style=\"background-image:url('";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53), "html", null, true);
        echo "')\"></div>
        </div>
        <div class=\"column\" style=\"background: #f2f2f2;padding: 20px;\">
            <h2>Home in ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 56, $this->source); })()), "city", [], "any", false, false, false, 56), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 56, $this->source); })()), "surface", [], "any", false, false, false, 56), "html", null, true);
        echo "m²)</h2>
            <p>Publié le : ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "m/d/Y"), "html", null, true);
        echo "</p>
            <h4 class=\"price\">  Price : ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58), 0, "."), "html", null, true);
        echo " DH </h4> <br>
            ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59);
        echo "
            <button class=\"price-button contact\">Contact Seller</button>
            <button class=\"price-button buy\">Buy It Now</button>
        </div>
    </div>
    <div class=\"row mt-4 mb-5\">
        <div class=\"col-md-8 \">
            <h2>Caractéristiques</h2>
            <table class=\"table table-striped\">
                <tr>
                    <td>Surface habitable</td>
                    <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 70, $this->source); })()), "surface", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Piéces</td>
                    <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 74, $this->source); })()), "rooms", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Chambre</td>
                    <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 78, $this->source); })()), "bedrooms", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 82, $this->source); })()), "floor", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Chaufage</td>
                    <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 86, $this->source); })()), "heatType", [], "any", false, false, false, 86), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 95, $this->source); })()), "city", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 99, $this->source); })()), "adress", [], "any", false, false, false, 99), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 103, $this->source); })()), "postalCode", [], "any", false, false, false, 103), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"text-primary\">Disponible</td>
                    <td>Oui ! Tu peux réserver</td>
                </tr>
                
            </table>
        </div>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "    <script src=\"/js/show.js\"></script>
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
        return array (  287 => 121,  277 => 120,  256 => 103,  249 => 99,  242 => 95,  230 => 86,  223 => 82,  216 => 78,  209 => 74,  202 => 70,  188 => 59,  184 => 58,  180 => 57,  174 => 56,  168 => 53,  163 => 50,  152 => 47,  149 => 46,  145 => 45,  141 => 43,  116 => 15,  113 => 13,  103 => 12,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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

{# ------------------------------------------- POP UP ------------------------------------------- #}

<div class=\"body-blackout\"></div>
<div class=\"popup-modal shadow\">
  <center style=\"font-size: 16px; line-height: 20px;\"><i class=\"close popup-modal__close\"></i> <i class=\"icon-acadomia\"> <img width=\"200\"  heigth=\"200\" src=\"https://www.cleen.com:443/img/logo.png\" alt=\"Coach to CLEEN\"></i> 
    <br>
    <p>Plateforme officielle du CLEEN&trade;<br /></p><br>
    <p style=\"font-size: 17px; font-weight: bold;  \">TOUS CONTRE LE COVID-19  </p><br> 
    <p style=\"font-size: 24px; font-weight: bold; color: #e85244;\">Coach to CLEEN se mobilise </p><br>
    <p style=\"font-size:14px;\"> Dans cette période anxiogène, Coach to CLEEN propose des solutions d'accompagnement à la gestion de stress et la libération des émotions négatives aux personnels de santé et aux personnes en situation de détresse médicale en ligne et en toute sécurité avec nos coachs praticiens CLEEN&trade; certifiés.</p><br>
    <h1 style=\"font-size: 17px; font-weight: bold;\">Nous offrons un accès gratuit aux séances CLEEN&trade; <br>jusqu’au 20 avril 2020</h1><br>
    <p style=\"font-size:14px;\">Pour plus d’information, contactez-nous :</p>
    <br>
    <p><a class=\"btnrdv\" href=\"<?php echo \$this->Url->build([\"controller\" => \"Pages\", \"action\" => \"offres\"]); ?>\"> Prendre un rendez-vous maintenant ! </a></p>
    <br>
    <p  style=\"font-size: 17px; font-weight: bold; color: #87c5b2;\">L’Equipe de Coach To CLEEN </br>
    </p><br>
    <a href=\"https://www.instagram.com/coachtocleen\"><img  width=\"20\"  heigth=\"20\" src=\"data:image/jpeg;base64,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 \" ></a>   
    <a href=\"https://www.facebook.com/admincleen/\" ><img width=\"20\"  heigth=\"20\"  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Facebook_logo_36x36.svg/36px-Facebook_logo_36x36.svg.png\" ></a> 
    <a href=\"https://www.linkedin.com/company/coach-to-cleen/about/?viewAsMember=true\" ><img  width=\"20\"  heigth=\"20\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAMAAAC93eDPAAAAY1BMVEUAd7X////o8/kAZawAb7EAaa/r8/n0+fv4/f4AdbQefLgneLbd6vOPudf4+/1KjcAAT6TV5fAAYqygv9p/rtGYvNmqx99wps2Js9S30OTF2enN4O1PlMNcm8c/h71blsRqnsj7RfWhAAACWklEQVR4nO3bbVODMAwA4ALlJR1jsneYIv//VwrqWBPKhLvS6pl82Cm12yO0aSg3EXgP4RvABCYwgQnPCaHDMBPCl8hZvIRmQiScRcQEJjCBCUxgAhNsEgDAKwEkbDab7tUbQYpDWQRZfuh+8kOQx6H9atGwgCBPj/bgbM8wnyAvgR5Ha4b5hDhFhMzakJxN0AaC5eEwn1ARQu2cACUh5MLSpZhLAMgpQTkmCLgRQun6LAh5JoTK/Vh4JYQ35wQR4ytRekhN0CSaoGjcp6ZuNLw/8mPa+lgjOoOqv5vrxs9K2Vcszbaqq21jtWZZWLiB7MNu6fYXy1cmeCcAjqmG4aCM97J73Ufx8/G7IDvucDzeFh3+WsJBivb8vbyH1bWJnyAWrBFhoUdyT06gUu1w0MJn/jjr2Twobu30mVhAQG8apEN+VJl+vMvcAFtc6vZxU1MJdQWCVLTG+4ysjZ0Rduh3LU5mg3XCezO+CPcw3/5YJ1xomauHsciwTsB/RSI3bU5YJzwP0y2YY0JoOA2OCcHFP6EeT8z1CEmeG6ZnNk7UKxGS004J1Rhm6KsjQtXXl9BXmvQ20DAnViFco6FqiA+kbbxJtQYBfQqQXDXeGVmBkKK5j/bpuihdjIUD+j9B4dZxjl6BQMZ8hPu5IBTkM+IaNbsgJHvcj8xLF4ScpGC5ZQITmMAEJjCBCUxgAhOYwIR/TSA7Rw8CPp6TruTufrztt+CRyAYHTDQo2k9M9FtOmPtgaLyx+EPz33o8xgQmMIEJTGACEwaC/y+w/YKv8fkKJjCBCUz4hYQPrSRHDIj6MbQAAAAASUVORK5CYII=\" ></a> 
    <a href=\"#\" ><img width=\"20\"  heigth=\"20\"src=\"https://cleen.com/blog/wp-content/uploads/2020/03/pinterest.png\" ></a> 
  </center>
</div>

{# ------------------------------------------ END POP UP ---------------------------------------- #}


{#---------------------------------------- BODY DETAILS -------------------------------------------------#}

<div class=\"main\">
    <div class=\"left-icon\">
        {% for gallery in property.gallery %}
            <div>
                <img onclick=\"document.getElementById('img-holder').style.backgroundImage = 'url({{gallery}})'\"src={{gallery}} id=\"left-circle\">
            </div>
        {% endfor %}
    </div>
    <div class=\"row\">
        <div class=\"column\">
            <div id=\"img-holder\" style=\"background-image:url('{{property.image}}')\"></div>
        </div>
        <div class=\"column\" style=\"background: #f2f2f2;padding: 20px;\">
            <h2>Home in {{property.city}} ({{property.surface}}m²)</h2>
            <p>Publié le : {{ property.createdAt|date(\"m/d/Y\") }}</p>
            <h4 class=\"price\">  Price : {{ property.price|number_format(0, '.') }} DH </h4> <br>
            {{ property.description | raw }}
            <button class=\"price-button contact\">Contact Seller</button>
            <button class=\"price-button buy\">Buy It Now</button>
        </div>
    </div>
    <div class=\"row mt-4 mb-5\">
        <div class=\"col-md-8 \">
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

{#------------------------------------- END  BODY DETAILS -----------------------------------------------#}

{% endblock %}


{% block javascripts %}
    <script src=\"/js/show.js\"></script>
{% endblock %}
", "bien/show.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\bien\\show.html.twig");
    }
}
