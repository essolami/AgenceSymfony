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

/* @ArtgrisFileManager/extension/_order.html.twig */
class __TwigTemplate_6938347e850dfe9bc2ebfa26dc2fba18b789b6a0b837e5e987fd303e5bb99385 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/extension/_order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/extension/_order.html.twig"));

        // line 1
        echo "<a class=\"";
        (( !(isset($context["islist"]) || array_key_exists("islist", $context) ? $context["islist"] : (function () { throw new RuntimeError('Variable "islist" does not exist.', 1, $this->source); })())) ? (print (twig_escape_filter($this->env, ("btn btn-sm btn-default" . (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })())) ? (" active") : (""))), "html", null, true))) : (print ("")));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("table." . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })()))), "html", null, true);
        echo "
    <span class=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        echo (((isset($context["islist"]) || array_key_exists("islist", $context) ? $context["islist"] : (function () { throw new RuntimeError('Variable "islist" does not exist.', 3, $this->source); })())) ? ("pull-right") : (""));
        echo " fas fa-sort";
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"></span>
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/extension/_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"{{ not islist ? ('btn btn-sm btn-default'~(active ? ' active'))  }}\" href=\"{{ href }}\">
    {{ ('table.'~type)|trans }}
    <span class=\"{{ active }} {{ islist ? 'pull-right'}} fas fa-sort{{ icon }}\"></span>
</a>
", "@ArtgrisFileManager/extension/_order.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\extension\\_order.html.twig");
    }
}
