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

/* @ArtgrisMedia/form/_btn_manager.html.twig */
class __TwigTemplate_a62f7906b5c988015faf9e7d234f7c368995bf0a37ce01cc3a3d439063342a1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/_btn_manager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/_btn_manager.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "required", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <button class=\"btn btn-light artgris-media-button-erase\" type=\"button\">
        <span class=\"fas fa-eraser text-danger\"></span>
    </button>
";
        }
        // line 6
        echo "
<span class=\"btn btn-light fileinput-button\">
    <span class=\"fas fa-plus text-success\"></span>
    <input class=\"fileupload ";
        // line 9
        echo ((array_key_exists("collection", $context)) ? ("alone") : (""));
        echo "\" type=\"file\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_upload", ["conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\" name=\"files[]\" multiple=\"\">
</span>

";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "display_file_manager", [], "any", false, false, false, 12)) {
            // line 13
            echo "    <button type=\"button\" class=\"btn btn-light artgris-media-button-upload btn-manager\" data-toggle=\"modal\" data-target=\"#artgris-filemanager-modal-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\">
        <span class=\"far fa-folder-open\"></span>
    </button>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/form/_btn_manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  56 => 9,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not form.vars.required %}
    <button class=\"btn btn-light artgris-media-button-erase\" type=\"button\">
        <span class=\"fas fa-eraser text-danger\"></span>
    </button>
{% endif %}

<span class=\"btn btn-light fileinput-button\">
    <span class=\"fas fa-plus text-success\"></span>
    <input class=\"fileupload {{ collection is defined ? 'alone' }}\" type=\"file\" data-url=\"{{ path('file_manager_upload', {conf:conf}) }}\" name=\"files[]\" multiple=\"\">
</span>

{% if form.vars.display_file_manager %}
    <button type=\"button\" class=\"btn btn-light artgris-media-button-upload btn-manager\" data-toggle=\"modal\" data-target=\"#artgris-filemanager-modal-{{ id }}\">
        <span class=\"far fa-folder-open\"></span>
    </button>
{% endif %}", "@ArtgrisMedia/form/_btn_manager.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\media-bundle\\Resources\\views\\form\\_btn_manager.html.twig");
    }
}
