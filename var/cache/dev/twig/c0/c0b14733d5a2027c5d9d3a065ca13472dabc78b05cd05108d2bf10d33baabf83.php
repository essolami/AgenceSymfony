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

/* base.html.twig */
class __TwigTemplate_e4e76dc208c03c952d2554bb7871e30230974c09d19a19c24a0891ff80399d2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        
  </head>
  <body>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
      <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Mon Agence</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\"> 
          ";
        // line 26
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), null))) {
            // line 27
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "              <li class=\"nav-item \">
                <a class=\"nav-link ";
                // line 29
                if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 29, $this->source); })()), "admin")))) {
                    echo " active ";
                }
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin Panel</a>
              </li>
            ";
            }
            // line 32
            echo "              <li class=\"nav-item \">
                <a class=\"nav-link ";
            // line 33
            if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 33, $this->source); })()), "properties")))) {
                echo " active ";
            }
            echo "\" href=\"/bien\"> My Properties <span class=\"sr-only\">(current)</span></a>
              </li> 
              ";
            // line 38
            echo "              <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a>
              </li>
            ";
        } else {
            // line 42
            echo "              <li class=\"nav-item ";
            if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 42, $this->source); })()), "login")))) {
                echo " active ";
            }
            echo "\">
                <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
              </li>
              <li class=\"nav-item \">
                <a class=\"nav-link ";
            // line 46
            if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 46, $this->source); })()), "registration")))) {
                echo " active ";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Registre</a>
              </li>
            ";
        }
        // line 49
        echo "        </ul>
      </div>
    </nav>
    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.js\" integrity=\"sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=\" crossorigin=\"anonymous\"></script>
    ";
        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js\"></script>
    <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js\"></script>  
    <script src=\"/js/scripts.js\"></script> 
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"/js/search.js\"></script>
    <script src=\"https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js\"></script>
    <script>  ClassicEditor.create( document.querySelector( 'textarea' ), {
              heading: {
                      options: [
                          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                          { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                          { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                      ]
                  }
              } )
              .catch( error => {
                  console.log( error );
              } );     
    </script>
    ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Essolami Agence";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 80,  232 => 52,  214 => 13,  195 => 5,  183 => 81,  181 => 80,  157 => 58,  155 => 57,  150 => 53,  148 => 52,  143 => 49,  133 => 46,  127 => 43,  120 => 42,  114 => 39,  111 => 38,  104 => 33,  101 => 32,  91 => 29,  88 => 28,  85 => 27,  83 => 26,  73 => 19,  66 => 14,  64 => 13,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Essolami Agence{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    {% block stylesheets %}{% endblock %}
        
  </head>
  <body>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
      <a class=\"navbar-brand\" href=\"{{path('home')}}\">Mon Agence</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\"> 
          {% if app.user != null %}
            {% if is_granted('ROLE_ADMIN') %}
              <li class=\"nav-item \">
                <a class=\"nav-link {% if( current_menu is defined and current_menu=='admin') %} active {% endif %}\" href=\"{{path('admin')}}\">Admin Panel</a>
              </li>
            {% endif %}
              <li class=\"nav-item \">
                <a class=\"nav-link {% if( current_menu is defined and current_menu=='properties') %} active {% endif %}\" href=\"/bien\"> My Properties <span class=\"sr-only\">(current)</span></a>
              </li> 
              {# <li class=\"nav-item \">
                <a class=\"nav-link {% if( current_menu is defined and current_menu=='registration') %} active {% endif %}\" href=\"{{path('new')}}\">Add Property</a>
              </li> #}
              <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{path('logout')}}\">Logout</a>
              </li>
            {% else %}
              <li class=\"nav-item {% if( current_menu is defined and current_menu=='login') %} active {% endif %}\">
                <a class=\"nav-link\" href=\"{{path('login')}}\">Login</a>
              </li>
              <li class=\"nav-item \">
                <a class=\"nav-link {% if( current_menu is defined and current_menu=='registration') %} active {% endif %}\" href=\"{{path('security_registration')}}\">Registre</a>
              </li>
            {% endif %}
        </ul>
      </div>
    </nav>
    {% block body %}{% endblock %}
    

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.js\" integrity=\"sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=\" crossorigin=\"anonymous\"></script>
    {# <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script> #}
    {# <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js\" integrity=\"sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==\" crossorigin=\"anonymous\"></script> #}
    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js\"></script>
    <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js\"></script>  
    <script src=\"/js/scripts.js\"></script> 
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"/js/search.js\"></script>
    <script src=\"https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js\"></script>
    <script>  ClassicEditor.create( document.querySelector( 'textarea' ), {
              heading: {
                      options: [
                          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                          { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                          { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                      ]
                  }
              } )
              .catch( error => {
                  console.log( error );
              } );     
    </script>
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\base.html.twig");
    }
}
