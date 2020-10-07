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

/* includes/MenuAdmin.html.twig */
class __TwigTemplate_8dadcb396459c5e2e32f32291bb012c9540c120ff8f9f5084455bb7f6099caa6 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/MenuAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/MenuAdmin.html.twig"));

        // line 1
        echo "<div class=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<nav class=\"sidebar\">
\t\t\t\t
\t\t\t\t<!-- close sidebar menu -->
\t\t\t\t<div class=\"dismiss\">
\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<h3><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Bootstrap 4 Template with Sidebar Menu</a></h3>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<ul class=\"list-unstyled menu-elements\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a class=\"scroll-link\" href='";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "'><i class=\"fas fa-home\"></i> Gerer Les Biens </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"scroll-link\" href='";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "'><i class=\"fas fa-users\"></i> Gerer Les Users </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"to-top\">
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-3\" href=\"#\" role=\"button\">
\t                    <i class=\"fas fa-arrow-up\"></i> Top
\t                </a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"dark-light-buttons\">
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-4 btn-customized-dark\" href=\"#\" role=\"button\">Dark</a>
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-4 btn-customized-light\" href=\"#\" role=\"button\">Light</a>
\t\t\t\t</div>
\t\t\t
\t\t\t</nav>
\t\t\t<!-- End sidebar -->
\t\t\t
\t\t\t<!-- Dark overlay -->
    \t\t<div class=\"overlay\"></div>

\t\t\t<!-- Content -->
\t\t\t<div class=\"content\">
\t\t\t
\t\t\t\t<!-- open sidebar menu -->
\t\t\t\t<a class=\"btn btn-primary btn-customized open-menu\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-align-left\"></i> <span>Menu</span>
                </a>
\t\t\t
\t\t        <!-- Top content -->
\t\t        
\t\t
\t\t        <!-- Section 1 -->
\t\t      
\t\t
\t\t        <!-- Section 2 -->
\t\t       
\t\t
\t\t\t\t<!-- Section 3 -->
\t\t       
\t\t
\t\t\t\t<!-- Section 4 -->
\t\t     
\t\t        
\t\t        <!-- Section 5 -->
\t\t       
\t\t        
\t\t        <!-- Section 6 -->
\t\t        
\t\t
\t\t        <!-- Footer -->
\t\t        
\t        
\t        </div>
\t        <!-- End content -->
        
 \t</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/MenuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  64 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<nav class=\"sidebar\">
\t\t\t\t
\t\t\t\t<!-- close sidebar menu -->
\t\t\t\t<div class=\"dismiss\">
\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<h3><a href=\"{{ path(\"admin\")}}\">Bootstrap 4 Template with Sidebar Menu</a></h3>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<ul class=\"list-unstyled menu-elements\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a class=\"scroll-link\" href='{{ path(\"admin\")}}'><i class=\"fas fa-home\"></i> Gerer Les Biens </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"scroll-link\" href='{{ path(\"user_index\")}}'><i class=\"fas fa-users\"></i> Gerer Les Users </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"to-top\">
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-3\" href=\"#\" role=\"button\">
\t                    <i class=\"fas fa-arrow-up\"></i> Top
\t                </a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"dark-light-buttons\">
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-4 btn-customized-dark\" href=\"#\" role=\"button\">Dark</a>
\t\t\t\t\t<a class=\"btn btn-primary btn-customized-4 btn-customized-light\" href=\"#\" role=\"button\">Light</a>
\t\t\t\t</div>
\t\t\t
\t\t\t</nav>
\t\t\t<!-- End sidebar -->
\t\t\t
\t\t\t<!-- Dark overlay -->
    \t\t<div class=\"overlay\"></div>

\t\t\t<!-- Content -->
\t\t\t<div class=\"content\">
\t\t\t
\t\t\t\t<!-- open sidebar menu -->
\t\t\t\t<a class=\"btn btn-primary btn-customized open-menu\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-align-left\"></i> <span>Menu</span>
                </a>
\t\t\t
\t\t        <!-- Top content -->
\t\t        
\t\t
\t\t        <!-- Section 1 -->
\t\t      
\t\t
\t\t        <!-- Section 2 -->
\t\t       
\t\t
\t\t\t\t<!-- Section 3 -->
\t\t       
\t\t
\t\t\t\t<!-- Section 4 -->
\t\t     
\t\t        
\t\t        <!-- Section 5 -->
\t\t       
\t\t        
\t\t        <!-- Section 6 -->
\t\t        
\t\t
\t\t        <!-- Footer -->
\t\t        
\t        
\t        </div>
\t        <!-- End content -->
        
 \t</div>
", "includes/MenuAdmin.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\templates\\includes\\MenuAdmin.html.twig");
    }
}
