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

/* @ArtgrisMedia/form/_crop_modal.html.twig */
class __TwigTemplate_71286aa601a131d45387c2ac323fbaeb22f36506fc6ee5c07443ff9db56e12f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/_crop_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/_crop_modal.html.twig"));

        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade artgris-media-crop-modal\" id=\"crop-modal-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"crop-modal-label\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image crop"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" data-ratio=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", false, false, false, 12))) : ("")), "html", null, true);
        echo "\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"btn-toolbar pb-3\">
                            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["crop_options"]) || array_key_exists("crop_options", $context) ? $context["crop_options"] : (function () { throw new RuntimeError('Variable "crop_options" does not exist.', 16, $this->source); })()), "allow_rotation", [], "any", false, false, false, 16)) {
            // line 17
            echo "                                <div class=\"btn-group  mr-2\">
                                    <a href=\"#\" class=\"btn btn-secondary js-rotate-left\"><span class=\"fas fa-undo\"></span></a>
                                    <a href=\"#\" class=\"btn btn-secondary js-rotate-right\"><span class=\"fas fa-redo\"></span></a>
                                </div>
                            ";
        }
        // line 22
        echo "
                            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["crop_options"]) || array_key_exists("crop_options", $context) ? $context["crop_options"] : (function () { throw new RuntimeError('Variable "crop_options" does not exist.', 23, $this->source); })()), "allow_flip", [], "any", false, false, false, 23)) {
            // line 24
            echo "                                <div class=\"btn-group  mr-2\">
                                    <a href=\"#\" class=\"btn btn-secondary js-flip-x\"><span class=\"fas fa-chevron-left\"></span></a>
                                    <a href=\"#\" class=\"btn btn-secondary js-flip-y\"><span class=\"fas fa-chevron-right\"></span></a>
                                </div>
                            ";
        }
        // line 29
        echo "                        </div>
                    </div>
                    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["crop_options"]) || array_key_exists("crop_options", $context) ? $context["crop_options"] : (function () { throw new RuntimeError('Variable "crop_options" does not exist.', 31, $this->source); })()), "display_crop_data", [], "any", false, false, false, 31)) {
            // line 32
            echo "                        <div class=\"col-md-6\">
                            <div class=\"float-right image-data py-2 \">
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => "x", 1 => "y", 2 => "width", 3 => "height"]);
            foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
                // line 35
                echo "                                    <span class=\"label\"> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_capitalize_string_filter($this->env, ($context["el"] . ":"))), "html", null, true);
                echo " <span class=\"js-";
                echo twig_escape_filter($this->env, $context["el"], "html", null, true);
                echo "\">0</span></span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                ";
            if (((twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", false, false, false, 37))) : (""))) {
                // line 38
                echo "                                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ratio: ") . twig_round(twig_get_attribute($this->env, $this->source, (isset($context["crop_options"]) || array_key_exists("crop_options", $context) ? $context["crop_options"] : (function () { throw new RuntimeError('Variable "crop_options" does not exist.', 38, $this->source); })()), "ratio", [], "any", false, false, false, 38), 2)), "html", null, true);
                echo "  </span>
                                ";
            }
            // line 40
            echo "                            </div>
                        </div>
                    ";
        }
        // line 43
        echo "                </div>
                <div class=\"modal-crop-container\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary js-save\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/form/_crop_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  135 => 47,  129 => 43,  124 => 40,  118 => 38,  115 => 37,  104 => 35,  100 => 34,  96 => 32,  94 => 31,  90 => 29,  83 => 24,  81 => 23,  78 => 22,  71 => 17,  69 => 16,  62 => 12,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div class=\"modal fade artgris-media-crop-modal\" id=\"crop-modal-{{ form.vars.id }}\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"crop-modal-label\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'Image crop'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" data-ratio=\"{{ crop_options.ratio|default }}\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"btn-toolbar pb-3\">
                            {% if crop_options.allow_rotation %}
                                <div class=\"btn-group  mr-2\">
                                    <a href=\"#\" class=\"btn btn-secondary js-rotate-left\"><span class=\"fas fa-undo\"></span></a>
                                    <a href=\"#\" class=\"btn btn-secondary js-rotate-right\"><span class=\"fas fa-redo\"></span></a>
                                </div>
                            {% endif %}

                            {% if crop_options.allow_flip %}
                                <div class=\"btn-group  mr-2\">
                                    <a href=\"#\" class=\"btn btn-secondary js-flip-x\"><span class=\"fas fa-chevron-left\"></span></a>
                                    <a href=\"#\" class=\"btn btn-secondary js-flip-y\"><span class=\"fas fa-chevron-right\"></span></a>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    {% if crop_options.display_crop_data %}
                        <div class=\"col-md-6\">
                            <div class=\"float-right image-data py-2 \">
                                {% for el in ['x', 'y', 'width', 'height'] %}
                                    <span class=\"label\"> {{ (el ~ ':')|capitalize|trans }} <span class=\"js-{{ el }}\">0</span></span>
                                {% endfor %}
                                {% if crop_options.ratio|default %}
                                    <span class=\"label label-primary\"> {{ 'Ratio: '|trans ~ crop_options.ratio|round(2) }}  </span>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}
                </div>
                <div class=\"modal-crop-container\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ 'Cancel'|trans }}</button>
                <button type=\"button\" class=\"btn btn-primary js-save\">{{ 'Apply'|trans }}</button>
            </div>
        </div>
    </div>
</div>
", "@ArtgrisMedia/form/_crop_modal.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\media-bundle\\Resources\\views\\form\\_crop_modal.html.twig");
    }
}
