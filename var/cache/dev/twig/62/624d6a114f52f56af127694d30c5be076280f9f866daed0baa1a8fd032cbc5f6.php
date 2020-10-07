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

/* @ArtgrisFileManager/views/_manager_view.html.twig */
class __TwigTemplate_ad1ecfdbcc644d0362196cb92683e4acc609e150217931c2df9e5048868cb6e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_manager_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_manager_view.html.twig"));

        // line 1
        $this->loadTemplate((("@ArtgrisFileManager/views/_" . twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 1, $this->source); })()), "view", [], "any", false, false, false, 1)) . ".html.twig"), "@ArtgrisFileManager/views/_manager_view.html.twig", 1)->display(twig_to_array(["fileManager" => (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 1, $this->source); })()), "fileArray" => (isset($context["fileArray"]) || array_key_exists("fileArray", $context) ? $context["fileArray"] : (function () { throw new RuntimeError('Variable "fileArray" does not exist.', 1, $this->source); })()), "formDelete" => (isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 1, $this->source); })())]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_manager_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@ArtgrisFileManager/views/_'~fileManager.view~'.html.twig' with {'fileManager' :fileManager,  'fileArray' : fileArray, 'formDelete' : formDelete} only %}
", "@ArtgrisFileManager/views/_manager_view.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_manager_view.html.twig");
    }
}
