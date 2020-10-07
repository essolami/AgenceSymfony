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

/* @ArtgrisFileManager/views/_modals.html.twig */
class __TwigTemplate_3946110b126bdd8e1d2062c6a4659ddd265be43ee37da804a0d836a6476e2372 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'delete_modal' => [$this, 'block_delete_modal'],
            'rename_modal' => [$this, 'block_rename_modal'],
            'add_modal' => [$this, 'block_add_modal'],
            'preview_modal' => [$this, 'block_preview_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_modals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_modals.html.twig"));

        // line 1
        $this->displayBlock('delete_modal', $context, $blocks);
        // line 24
        $this->displayBlock('rename_modal', $context, $blocks);
        // line 48
        $this->displayBlock('add_modal', $context, $blocks);
        // line 72
        $this->displayBlock('preview_modal', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_delete_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        // line 2
        echo "    <div class=\"modal fade\" id=\"js-confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"), "html", null, true);
        echo "
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "pull-right"]]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 15, $this->source); })()), 'widget');
        echo "
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
                    <button type=\"button\" class=\"btn btn-default pull-left\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "\"
                            data-dismiss=\"modal\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_rename_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rename_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rename_modal"));

        // line 25
        echo "    <div class=\"modal fade\" id=\"js-confirm-rename\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRename"]) || array_key_exists("formRename", $context) ? $context["formRename"] : (function () { throw new RuntimeError('Variable "formRename" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRename"]) || array_key_exists("formRename", $context) ? $context["formRename"] : (function () { throw new RuntimeError('Variable "formRename" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRename"]) || array_key_exists("formRename", $context) ? $context["formRename"] : (function () { throw new RuntimeError('Variable "formRename" does not exist.', 41, $this->source); })()), "send", [], "any", false, false, false, 41), 'row');
        echo "
                </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRename"]) || array_key_exists("formRename", $context) ? $context["formRename"] : (function () { throw new RuntimeError('Variable "formRename" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_add_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "add_modal"));

        // line 49
        echo "    <div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add.folder"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "send", [], "any", false, false, false, 65), 'row');
        echo "
                </div>
                ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_preview_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview_modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview_modal"));

        // line 73
        echo "    <div class=\"modal fade\" id=\"js-display-image\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <img src=\"\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_modals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 85,  255 => 73,  245 => 72,  230 => 67,  225 => 65,  220 => 63,  213 => 59,  207 => 56,  200 => 52,  195 => 49,  185 => 48,  170 => 43,  165 => 41,  160 => 39,  153 => 35,  147 => 32,  140 => 28,  135 => 25,  125 => 24,  109 => 18,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  87 => 11,  81 => 8,  73 => 2,  63 => 1,  53 => 72,  51 => 48,  49 => 24,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block delete_modal %}
    <div class=\"modal fade\" id=\"js-confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">{{ 'title.delete'|trans }}</h4>
                </div>
                <div class=\"modal-body\">
                    {{ 'confirm.delete'|trans }}
                </div>
                <div class=\"modal-footer\">
                    {{ form_start(formDelete, {\"attr\" : {'class':'pull-right'}}) }}
                    {{ form_widget(formDelete) }}
                    {{ form_end(formDelete) }}
                    <button type=\"button\" class=\"btn btn-default pull-left\" title=\"{{ 'button.cancel'|trans }}\"
                            data-dismiss=\"modal\"> {{ 'button.cancel'|trans }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block rename_modal %}
    <div class=\"modal fade\" id=\"js-confirm-rename\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                {{ form_start(formRename) }}
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">{{ 'title.rename.file'|trans }}</h4>
                </div>
                <div class=\"modal-body\">
                    {{ form_row(formRename.name) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">{{ 'button.cancel'|trans }}
                    </button>
                    {{ form_row(formRename.send) }}
                </div>
                {{ form_end(formRename) }}
            </div>
        </div>
    </div>
{% endblock %}
{% block add_modal %}
    <div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                {{ form_start(form) }}
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">{{ 'title.add.folder'|trans }}</h4>
                </div>
                <div class=\"modal-body\">
                    {{ form_row(form.name) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">{{ 'button.cancel'|trans }}
                    </button>
                    {{ form_row(form.send) }}
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
{% block preview_modal %}
    <div class=\"modal fade\" id=\"js-display-image\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <img src=\"\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">{{ 'button.cancel'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@ArtgrisFileManager/views/_modals.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_modals.html.twig");
    }
}
