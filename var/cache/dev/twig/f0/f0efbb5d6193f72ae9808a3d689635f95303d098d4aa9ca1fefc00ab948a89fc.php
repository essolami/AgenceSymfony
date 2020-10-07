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
class __TwigTemplate_be6745fcae54c65c0e5df4268bfe3e8f8d296958ff08b534187bf2ec4f9b8f03 extends Template
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
        echo "

";
        // line 6
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        
      ";
        // line 16
        echo "
        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
        ";
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "        ";
        // line 27
        echo "
      ";
        // line 29
        echo "
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" 
        integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\"
         integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
         <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css\">
         <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css\">
         <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap\">
         <link rel=\"stylesheet\" href=\"/css/style.css\">

        ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "        
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Mon Agence</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      
      <li class=\"nav-item \">
        <a class=\"nav-link ";
        // line 54
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 54, $this->source); })()), "properties")))) {
            echo " active ";
        }
        echo "\" href=\"/bien\"> My Properties <span class=\"sr-only\">(current)</span></a>
      </li>  

      
      ";
        // line 58
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), null))) {
            // line 59
            echo "      ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 60
                echo "      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin Panel</a>
        </li>
        ";
            }
            // line 64
            echo "        <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a>
        </li>
       ";
        } else {
            // line 68
            echo "       <li class=\"nav-item ";
            if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 68, $this->source); })()), "login")))) {
                echo " active ";
            }
            echo "\">
       <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
       </li>
       <li class=\"nav-item \">
       <a class=\"nav-link ";
            // line 72
            if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 72, $this->source); })()), "registration")))) {
                echo " active ";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Registre</a>
       </li>
       ";
        }
        // line 75
        echo "       
      
    </ul>
    
  </div>
</nav>

        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "        








      ";
        // line 95
        echo "              ";
        // line 96
        echo "              <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
              ";
        // line 98
        echo "              <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
              <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
              ";
        // line 101
        echo "              <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
              ";
        // line 103
        echo "              <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
              ";
        // line 105
        echo "              <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrismedia/libs/cropperjs-1.4.1/cropper.min.js"), "html", null, true);
        echo "\"></script>
              ";
        // line 107
        echo "              ";
        $this->loadTemplate("@ArtgrisMedia/assets/include_js.html.twig", "base.html.twig", 107)->display($context);
        // line 108
        echo "      ";
        // line 109
        echo "

        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.js\" 
        integrity=\"sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=\" crossorigin=\"anonymous\"></script>
        
        ";
        // line 116
        echo "        
        ";
        // line 119
        echo "        
        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js\"></script>
        <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js\"></script>
        <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js\"></script>  
        <script src=\"/js/scripts.js\"></script> 
        <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
        <script src=\"/js/search.js\"></script>

        <script src=\"https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js\"></script>

        <script>
                        ClassicEditor
                                .create( document.querySelector( 'textarea' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                
                                    ";
        // line 144
        echo "                                
                                
                                
                                
                </script>
   
        ";
        // line 150
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
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

    // line 40
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

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
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
        return array (  339 => 150,  328 => 83,  318 => 82,  300 => 40,  281 => 11,  269 => 151,  267 => 150,  259 => 144,  234 => 119,  231 => 116,  224 => 109,  222 => 108,  219 => 107,  214 => 105,  209 => 103,  206 => 101,  202 => 98,  199 => 96,  197 => 95,  186 => 85,  184 => 82,  175 => 75,  165 => 72,  159 => 69,  152 => 68,  146 => 65,  143 => 64,  137 => 61,  134 => 60,  131 => 59,  129 => 58,  120 => 54,  108 => 45,  102 => 41,  100 => 40,  87 => 29,  84 => 27,  82 => 26,  80 => 25,  78 => 24,  76 => 23,  74 => 22,  71 => 20,  68 => 18,  65 => 16,  58 => 11,  51 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{# git remote add origin https://github.com/essolami/SymfonyGestionAgence.git
git branch -M master
git push -u origin master #}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Essolami Agence{% endblock %}</title>


        
      {# ARTGRIS BUNDLE CSS  #}

        {# Bootstrap #}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
        {# Font Awesome #}
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
        {# Artgris FileManager #}
        {# <link rel=\"stylesheet\" href=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/css/jquery.fileupload.css') }}\"> #}
        {# Import fengyuanchen/cropper #}
        {# <link rel=\"stylesheet\" href=\"{{ asset('bundles/artgrismedia/libs/cropperjs-1.4.1/cropper.min.css') }}\"> #}
        {# Then the default bundle's CSS #}
        {# <link rel=\"stylesheet\" href=\"{{ asset('bundles/artgrismedia/css/media.css') }}\"> #}

      {# ARTGRIS BUNDLE CSS  #}

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" 
        integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\"
         integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />
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
      
      <li class=\"nav-item \">
        <a class=\"nav-link {% if( current_menu is defined and current_menu=='properties') %} active {% endif %}\" href=\"/bien\"> My Properties <span class=\"sr-only\">(current)</span></a>
      </li>  

      
      {% if app.user != null %}
      {% if is_granted('ROLE_ADMIN') %}
      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"{{path('admin')}}\">Admin Panel</a>
        </li>
        {% endif %}
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

        {% block body %}
        
        {% endblock %}
        








      {# ARTGRIS JAVASCRIPT #}
              {# jQuery #}
              <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
              {#  Bootstrap #}
              <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
              <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
              {#  Jqueri UI #}
              <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
              {# jquery.collection.js #}
              <script type=\"text/javascript\" src=\"{{ asset('js/jquery.collection.js') }}\"></script>
              {# Import fengyuanchen/cropper #}
              <script src=\"{{ asset('bundles/artgrismedia/libs/cropperjs-1.4.1/cropper.min.js') }}\"></script>
              {# Then the default bundle's JavaScript: #}
              {% include '@ArtgrisMedia/assets/include_js.html.twig' %}
      {# ARTGRIS JAVASCRIPT #}


        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.js\" 
        integrity=\"sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=\" crossorigin=\"anonymous\"></script>
        
        {# <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" 
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script> #}
        
        {# <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js\" 
        integrity=\"sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==\" crossorigin=\"anonymous\"></script> #}
        
        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js\"></script>
        <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js\"></script>
        <script src=\"https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js\"></script>  
        <script src=\"/js/scripts.js\"></script> 
        <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
        <script src=\"/js/search.js\"></script>

        <script src=\"https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js\"></script>

        <script>
                        ClassicEditor
                                .create( document.querySelector( 'textarea' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                
                                
                                    {# \$(\"input[name='produit[prix_vente]']\").attr('required',false);
                                    \$(\"input[name='produit[prix_achat]']\").attr('required',false); #}
                                
                                
                                
                                
                </script>
   
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\base.html.twig");
    }
}
