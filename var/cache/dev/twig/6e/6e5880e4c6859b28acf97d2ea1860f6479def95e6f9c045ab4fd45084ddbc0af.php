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

/* @ArtgrisMedia/assets/include_js.html.twig */
class __TwigTemplate_2b2cf5a0ede37396ab94209a8ca5ebeeda6281ead5cbe0d2fb5e0a9aa856630f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/assets/include_js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/assets/include_js.html.twig"));

        // line 1
        echo "<script>
    var url = '";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_icon");
        echo "';
    var crop_url = '";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajax_crop");
        echo "';
    var addStr = '";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "';
    var successMessage = '";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file.add.success"), "html", null, true);
        echo "';
</script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrismedia/js/media.js"), "html", null, true);
        echo "\"></script>

<script>
    // display alert
    function displayAlert(type, msg) {
        \$.notify({
            message: msg
        }, {
            type: type,
            z_index: 10000,
            placement: {
                from: \"bottom\",
                align: \"left\"
            },
            template: '<div data-notify=\"container\" class=\"col-xs-5 col-md-4 col-lg-3 alert alert-{0}\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
    }

    // Global functions
    // display error alert
    function displayError(msg) {
        displayAlert('danger', msg)
    }

    // display success alert
    function displaySuccess(msg) {
        displayAlert('success', msg)
    }
</script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/assets/include_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  108 => 46,  104 => 45,  63 => 7,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var url = '{{ path('admin_ajax_icon') }}';
    var crop_url = '{{ path('admin_ajax_crop') }}';
    var addStr = '{{ 'Add'|trans }}';
    var successMessage = '{{ 'file.add.success'|trans }}';
</script>
<script src=\"{{ asset('bundles/artgrismedia/js/media.js') }}\"></script>

<script>
    // display alert
    function displayAlert(type, msg) {
        \$.notify({
            message: msg
        }, {
            type: type,
            z_index: 10000,
            placement: {
                from: \"bottom\",
                align: \"left\"
            },
            template: '<div data-notify=\"container\" class=\"col-xs-5 col-md-4 col-lg-3 alert alert-{0}\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
            '<span data-notify=\"icon\"></span> ' +
            '<span data-notify=\"title\">{1}</span> ' +
            '<span data-notify=\"message\">{2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
            '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
            '</div>'
        });
    }

    // Global functions
    // display error alert
    function displayError(msg) {
        displayAlert('danger', msg)
    }

    // display success alert
    function displaySuccess(msg) {
        displayAlert('success', msg)
    }
</script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js') }}\"></script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js') }}\"></script>
<script src=\"{{ asset('bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}\"></script>
", "@ArtgrisMedia/assets/include_js.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\media-bundle\\Resources\\views\\assets\\include_js.html.twig");
    }
}
