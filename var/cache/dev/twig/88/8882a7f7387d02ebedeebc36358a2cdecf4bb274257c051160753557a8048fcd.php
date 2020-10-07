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

/* @ArtgrisFileManager/views/preview.html.twig */
class __TwigTemplate_c752edc40cc29ecaacff297e2dc55ea73f653ca159d09e1012615144f4b1a469 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/preview.html.twig"));

        // line 1
        if ((isset($context["lazy"]) || array_key_exists("lazy", $context) ? $context["lazy"] : (function () { throw new RuntimeError('Variable "lazy" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            if ((isset($context["twig_extension"]) || array_key_exists("twig_extension", $context) ? $context["twig_extension"] : (function () { throw new RuntimeError('Variable "twig_extension" does not exist.', 2, $this->source); })())) {
                // line 3
                echo "        ";
                $context["filename"] = twig_include($this->env, $context, twig_template_from_string($this->env, (("{{" . (isset($context["image_template"]) || array_key_exists("image_template", $context) ? $context["image_template"] : (function () { throw new RuntimeError('Variable "image_template" does not exist.', 3, $this->source); })())) . "}}")));
                // line 4
                echo "    ";
            }
            // line 5
            echo "    <img class=\"lazy\" data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 5, $this->source); })())), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\">
";
        } else {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if lazy %}
    {% if twig_extension %}
        {% set filename = include(template_from_string(\"{{\"~image_template~\"}}\")) %}
    {% endif %}
    <img class=\"lazy\" data-src=\"{{ asset(filename) }}\" height=\"{{ size }}\">
{% else %}
    <img src=\"{{ asset(filename) }}\" height=\"{{ size }}\">
{% endif %}
", "@ArtgrisFileManager/views/preview.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\preview.html.twig");
    }
}
