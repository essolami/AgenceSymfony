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

/* @ArtgrisFileManager/manager.html.twig */
class __TwigTemplate_caf0214fa629d93648313e34a785c656ab22375dcf892c7afd3eddddff8aa4b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'progress_bar' => [$this, 'block_progress_bar'],
            'actions' => [$this, 'block_actions'],
            'display' => [$this, 'block_display'],
            'tree' => [$this, 'block_tree'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/manager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/manager.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_3_layout.html.twig"], true);
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formRename"]) || array_key_exists("formRename", $context) ? $context["formRename"] : (function () { throw new RuntimeError('Variable "formRename" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_layout.html.twig"], true);
        // line 3
        echo "<!doctype html>
<html lang=\"en\" id=\"dropzone\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 200
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\"
              href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
              integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jstree/dist/themes/default/style.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/css/manager.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "File Manager";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    <div class=\"container-fluid \">
        ";
        // line 28
        $this->displayBlock('progress_bar', $context, $blocks);
        // line 36
        echo "        <div class=\"row top-bar\" id=\"top-bar\">
            ";
        // line 37
        $this->displayBlock('actions', $context, $blocks);
        // line 94
        echo "            ";
        $this->displayBlock('display', $context, $blocks);
        // line 117
        echo "        </div>
        <div class=\"row\">
            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 119, $this->source); })()), "tree", [], "any", false, false, false, 119)) {
            // line 120
            echo "            <div class=\"col-xs-12  col-sm-4 col-md-3 col-lg-2\">
                ";
            // line 121
            $this->displayBlock('tree', $context, $blocks);
            // line 126
            echo "            </div>
            <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 no-tree-blk\">
                ";
        } else {
            // line 129
            echo "                <div class=\"col-lg-12\">
                    ";
        }
        // line 131
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "                </div>
            </div>
        </div>
        ";
        // line 139
        $this->loadTemplate("@ArtgrisFileManager/views/_modals.html.twig", "@ArtgrisFileManager/manager.html.twig", 139)->display($context);
        // line 140
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_progress_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progress_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progress_bar"));

        // line 29
        echo "            <div class=\"row\">
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0\" aria-valuenow=\"0\" aria-valuemin=\"0\"
                         aria-valuemax=\"100\"></div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 38
        echo "                <a type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.tree"), "html", null, true);
        echo "\"
                   href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 39, $this->source); })()), "queryParameters", [], "any", false, false, false, 39), ["tree" => (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 39, $this->source); })()), "tree", [], "any", false, false, false, 39), true))) ? (0) : (1))])), "html", null, true);
        echo "\"
                   class=\"btn btn-sm btn-default ";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 40, $this->source); })()), "tree", [], "any", false, false, false, 40)) ? ("active") : (""));
        echo "\">
                    <span class=\"fas fa-bars\"></span>
                </a>
                ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 43, $this->source); })()), "parent", [], "any", false, false, false, 43)) {
            // line 44
            echo "                    <a class=\"btn btn-default btn-sm\"
                       title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.parent"), "html", null, true);
            echo "\"
                       href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 46, $this->source); })()), "parent", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                        <span class=\"fas fa-level-up-alt\"></span></a>
                ";
        }
        // line 49
        echo "                <button type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.refresh"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm \"
                        onClick=\"window.location.reload()\">
                    <span class=\"fas fa-sync\"></span>
                </button>

                <span class=\"btn btn-success btn-sm fileinput-button btn-action\">
                    <span class=\"far fa-file\"></span>
                    <span class=\"bar-action\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add.files"), "html", null, true);
        echo "</span>
                        <input id=\"fileupload\" type=\"file\"
                               data-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_upload", twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 58, $this->source); })()), "queryParameters", [], "any", false, false, false, 58)), "html", null, true);
        echo "\"
                               name=\"files[]\" multiple=\"\"
                               accept=\"";
        // line 60
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "configuration", [], "any", false, true, false, 60), "accept", [], "any", true, true, false, 60)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 60, $this->source); })()), "configuration", [], "any", false, false, false, 60), "accept", [], "any", false, false, false, 60), "html", null, true))) : (print (((twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60)) ? ($this->extensions['Artgris\Bundle\FileManagerBundle\Twig\FileTypeExtension']->accept(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60))) : ("")))));
        echo "\">
                </span>
                <button type=\"button\" class=\"btn btn-primary btn-sm btn-action\" data-toggle=\"modal\"
                        data-target=\"#addFolder\">
                    <span class=\"far fa-folder-open\"></span>
                    <span class=\"bar-action\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add.folder"), "html", null, true);
        echo "</span>
                </button>
                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 67, $this->source); })()), "parent", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <button type=\"button\"
                            class=\"btn btn-sm btn-danger btn-action js-delete-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-delete\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-href='";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 76, $this->source); })()), "queryParameters", [], "any", false, false, false, 76)), "html", null, true);
            echo "'>
                        <span class=\"far fa-trash-alt\"></span>
                        <span class=\"bar-action\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete.current"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 81
        echo "                <a id=\"js-delete-multiple-modal\"
                   class=\"btn btn-sm btn-danger btn-action disabled\"
                   type=\"button\"
                   data-trigger=\"click\"
                   data-container=\"body\"
                   data-toggle=\"modal\"
                   data-target=\"#js-confirm-delete\"
                   data-placement=\"left\"
                   data-html=\"true\">
                    <span class=\"far fa-check-square\"></span>
                    <span class=\"bar-action\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete.selected"), "html", null, true);
        echo "</span>
                </a>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_display($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display"));

        // line 95
        echo "                <div class=\"btn-group pull-right\">
                    <input type=\"search\" class=\"form-control search\"
                           name=\"search\" id=\"search\" placeholder=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.placeholder"), "html", null, true);
        echo "\" aria-describedby=\"search\">

                    ";
        // line 99
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 99, $this->source); })()), "view", [], "any", false, false, false, 99), "list"))) {
            // line 100
            echo "                        ";
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 100, $this->source); })()), "name");
            echo "
                        ";
            // line 101
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 101, $this->source); })()), "date");
            echo "
                        ";
            // line 102
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 102, $this->source); })()), "size");
            echo "
                        ";
            // line 103
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 103, $this->source); })()), "dimension");
            echo "
                    ";
        }
        // line 105
        echo "                    <a type=\"button\"
                       href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 106, $this->source); })()), "queryParameters", [], "any", false, false, false, 106), ["view" => "list"])), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 107
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 107, $this->source); })()), "view", [], "any", false, false, false, 107), "list"))) ? ("active") : (""));
        echo "\">
                        <span class=\"fas fa-th-list\"></span>
                    </a>
                    <a type=\"button\"
                       href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 111, $this->source); })()), "queryParameters", [], "any", false, false, false, 111), ["view" => "thumbnail"])), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 112
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 112, $this->source); })()), "view", [], "any", false, false, false, 112), "thumbnail"))) ? ("active") : (""));
        echo "\">
                        <span class=\"fas fa-th\"></span>
                    </a>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_tree($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tree"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tree"));

        // line 122
        echo "                    <div class=\"table-responsive\">
                        <div id=\"tree\"></div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 132
        echo "                        <form id=\"form-multiple-delete\">
                            ";
        // line 133
        $this->loadTemplate("@ArtgrisFileManager/views/_manager_view.html.twig", "@ArtgrisFileManager/manager.html.twig", 133)->display(twig_to_array(["fileManager" => (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 133, $this->source); })()), "fileArray" => (isset($context["fileArray"]) || array_key_exists("fileArray", $context) ? $context["fileArray"] : (function () { throw new RuntimeError('Variable "fileArray" does not exist.', 133, $this->source); })()), "formDelete" => (isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 133, $this->source); })())]));
        // line 134
        echo "                        </form>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jstree/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/sticky-kit/jquery.sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jquery-lazy/jquery.lazy.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var treedata = ";
        // line 156
        echo (isset($context["treeData"]) || array_key_exists("treeData", $context) ? $context["treeData"] : (function () { throw new RuntimeError('Variable "treeData" does not exist.', 156, $this->source); })());
        echo ";
        var tree = ";
        // line 157
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 157, $this->source); })()), "tree", [], "any", false, false, false, 157)) ? ("true") : ("false"));
        echo "
        var moduleName = '";
        // line 158
        ((twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 158, $this->source); })()), "module", [], "any", false, false, false, 158)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 158, $this->source); })()), "module", [], "any", false, false, false, 158), "html", null, true))) : (print (0)));
        echo "';
        var successMessage = '";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file.add.success"), "html", null, true);
        echo "';
        var url = \"";
        // line 160
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 160, $this->source); })()), "queryParameters", [], "any", false, false, false, 160), ["json" => true])), "js"), "html", null, true);
        echo "\"
        var urldelete = \"";
        // line 161
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 161, $this->source); })()), "queryParameters", [], "any", false, false, false, 161)), "js"), "html", null, true);
        echo "\"
        var deleteMessage = \"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\"
        var renameMessage = \"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\"
        var downloadMessage = \"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
        echo "\"
        var previewMessage = \"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
        echo "\"
    </script>
    <script>
        // display alert
        function displayAlert(type, msg) {
            \$.notify({
                message: msg
            }, {
                type: type,
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

        // display session flash messages
        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "session", [], "any", false, false, false, 192), "flashbag", [], "any", false, false, false, 192), "all", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 193
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 194
                echo "        displayAlert('";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "js"), "html", null, true);
                echo "')
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "    </script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/js/manager.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 198,  637 => 197,  631 => 196,  620 => 194,  615 => 193,  611 => 192,  581 => 165,  577 => 164,  573 => 163,  569 => 162,  565 => 161,  561 => 160,  557 => 159,  553 => 158,  549 => 157,  545 => 156,  540 => 154,  535 => 152,  531 => 151,  527 => 150,  523 => 149,  519 => 148,  515 => 147,  511 => 146,  507 => 145,  503 => 144,  498 => 143,  488 => 142,  477 => 134,  475 => 133,  472 => 132,  462 => 131,  449 => 122,  439 => 121,  424 => 112,  420 => 111,  413 => 107,  409 => 106,  406 => 105,  401 => 103,  397 => 102,  393 => 101,  388 => 100,  386 => 99,  381 => 97,  377 => 95,  367 => 94,  354 => 91,  342 => 81,  336 => 78,  331 => 76,  321 => 68,  319 => 67,  314 => 65,  306 => 60,  301 => 58,  296 => 56,  285 => 49,  279 => 46,  275 => 45,  272 => 44,  270 => 43,  264 => 40,  260 => 39,  255 => 38,  245 => 37,  229 => 29,  219 => 28,  208 => 140,  206 => 139,  201 => 136,  198 => 131,  194 => 129,  189 => 126,  187 => 121,  184 => 120,  182 => 119,  178 => 117,  175 => 94,  173 => 37,  170 => 36,  168 => 28,  165 => 27,  155 => 26,  136 => 23,  124 => 21,  119 => 19,  115 => 18,  110 => 16,  102 => 11,  99 => 10,  89 => 9,  77 => 200,  75 => 142,  73 => 26,  66 => 23,  64 => 9,  56 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% form_theme formRename 'bootstrap_3_layout.html.twig' %}
<!doctype html>
<html lang=\"en\" id=\"dropzone\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/artgrisfilemanager/libs/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
              integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/artgrisfilemanager/libs/jstree/dist/themes/default/style.min.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/css/jquery.fileupload.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/artgrisfilemanager/css/manager.css') }}\">
        <link rel=\"stylesheet\"
              href=\"{{ asset('bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css') }}\">
    {% endblock %}
    <title>{% block title %}File Manager{% endblock %}</title>
</head>
<body>
{% block body %}
    <div class=\"container-fluid \">
        {% block progress_bar %}
            <div class=\"row\">
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0\" aria-valuenow=\"0\" aria-valuemin=\"0\"
                         aria-valuemax=\"100\"></div>
                </div>
            </div>
        {% endblock %}
        <div class=\"row top-bar\" id=\"top-bar\">
            {% block actions %}
                <a type=\"button\" title=\"{{ 'button.tree'|trans }}\"
                   href=\"{{ path('file_manager', fileManager.queryParameters|merge({'tree': fileManager.tree == true ? 0 : 1 })) }}\"
                   class=\"btn btn-sm btn-default {{ fileManager.tree ? 'active' }}\">
                    <span class=\"fas fa-bars\"></span>
                </a>
                {% if fileManager.parent %}
                    <a class=\"btn btn-default btn-sm\"
                       title=\"{{ 'button.parent'|trans }}\"
                       href=\"{{ fileManager.parent }}\">
                        <span class=\"fas fa-level-up-alt\"></span></a>
                {% endif %}
                <button type=\"button\" title=\"{{ 'button.refresh'|trans }}\" class=\"btn btn-default btn-sm \"
                        onClick=\"window.location.reload()\">
                    <span class=\"fas fa-sync\"></span>
                </button>

                <span class=\"btn btn-success btn-sm fileinput-button btn-action\">
                    <span class=\"far fa-file\"></span>
                    <span class=\"bar-action\">{{ 'button.add.files'|trans }}</span>
                        <input id=\"fileupload\" type=\"file\"
                               data-url=\"{{ path('file_manager_upload', fileManager.queryParameters) }}\"
                               name=\"files[]\" multiple=\"\"
                               accept=\"{{ fileManager.configuration.accept is defined ? fileManager.configuration.accept : (fileManager.type ? accept(fileManager.type)) }}\">
                </span>
                <button type=\"button\" class=\"btn btn-primary btn-sm btn-action\" data-toggle=\"modal\"
                        data-target=\"#addFolder\">
                    <span class=\"far fa-folder-open\"></span>
                    <span class=\"bar-action\">{{ 'button.add.folder'|trans }}</span>
                </button>
                {% if fileManager.parent %}
                    <button type=\"button\"
                            class=\"btn btn-sm btn-danger btn-action js-delete-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-delete\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-href='{{ path('file_manager_delete', fileManager.queryParameters) }}'>
                        <span class=\"far fa-trash-alt\"></span>
                        <span class=\"bar-action\">{{ 'button.delete.current'|trans }}</span>
                    </button>
                {% endif %}
                <a id=\"js-delete-multiple-modal\"
                   class=\"btn btn-sm btn-danger btn-action disabled\"
                   type=\"button\"
                   data-trigger=\"click\"
                   data-container=\"body\"
                   data-toggle=\"modal\"
                   data-target=\"#js-confirm-delete\"
                   data-placement=\"left\"
                   data-html=\"true\">
                    <span class=\"far fa-check-square\"></span>
                    <span class=\"bar-action\">{{ 'button.delete.selected'|trans }}</span>
                </a>
            {% endblock %}
            {% block display %}
                <div class=\"btn-group pull-right\">
                    <input type=\"search\" class=\"form-control search\"
                           name=\"search\" id=\"search\" placeholder=\"{{ 'search.placeholder'|trans }}\" aria-describedby=\"search\">

                    {% if fileManager.view != \"list\" %}
                        {{ order(fileManager, 'name') }}
                        {{ order(fileManager, 'date') }}
                        {{ order(fileManager, 'size') }}
                        {{ order(fileManager, 'dimension') }}
                    {% endif %}
                    <a type=\"button\"
                       href=\"{{ path('file_manager', fileManager.queryParameters|merge({'view':\"list\"})) }}\"
                       class=\"btn btn-sm btn-default {{ fileManager.view == 'list' ? 'active' }}\">
                        <span class=\"fas fa-th-list\"></span>
                    </a>
                    <a type=\"button\"
                       href=\"{{ path('file_manager', fileManager.queryParameters|merge({'view':'thumbnail'})) }}\"
                       class=\"btn btn-sm btn-default {{ fileManager.view == 'thumbnail' ? 'active' }}\">
                        <span class=\"fas fa-th\"></span>
                    </a>
                </div>
            {% endblock %}
        </div>
        <div class=\"row\">
            {% if fileManager.tree %}
            <div class=\"col-xs-12  col-sm-4 col-md-3 col-lg-2\">
                {% block tree %}
                    <div class=\"table-responsive\">
                        <div id=\"tree\"></div>
                    </div>
                {% endblock %}
            </div>
            <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 no-tree-blk\">
                {% else %}
                <div class=\"col-lg-12\">
                    {% endif %}
                    {% block content %}
                        <form id=\"form-multiple-delete\">
                            {% include '@ArtgrisFileManager/views/_manager_view.html.twig' with {'fileManager' :fileManager,  'fileArray' : fileArray, 'formDelete' : formDelete} only %}
                        </form>
                    {% endblock %}
                </div>
            </div>
        </div>
        {% include '@ArtgrisFileManager/views/_modals.html.twig' %}
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/jquery/dist/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/jstree/dist/jstree.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload-process.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/sticky-kit/jquery.sticky-kit.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/artgrisfilemanager/libs/jquery-lazy/jquery.lazy.min.js') }}\"></script>
    <script>
        var treedata = {{ treeData|raw }};
        var tree = {{ fileManager.tree ? 'true' : 'false' }}
        var moduleName = '{{ fileManager.module ? fileManager.module : 0 }}';
        var successMessage = '{{ 'file.add.success'|trans }}';
        var url = \"{{ path('file_manager', fileManager.queryParameters|merge({'json':true}))|e('js') }}\"
        var urldelete = \"{{ path('file_manager_delete', fileManager.queryParameters )|e('js') }}\"
        var deleteMessage = \"{{ 'title.delete'|trans }}\"
        var renameMessage = \"{{ 'title.rename.file'|trans }}\"
        var downloadMessage = \"{{ 'title.download'|trans }}\"
        var previewMessage = \"{{ 'title.preview.file'|trans }}\"
    </script>
    <script>
        // display alert
        function displayAlert(type, msg) {
            \$.notify({
                message: msg
            }, {
                type: type,
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

        // display session flash messages
        {% for type, messages in app.session.flashbag.all %}
        {% for message in messages %}
        displayAlert('{{ type }}', '{{ message|trans|e('js') }}')
        {% endfor %}
        {% endfor %}
    </script>
    <script src=\"{{ asset('bundles/artgrisfilemanager/js/manager.js') }}\"></script>
{% endblock %}
</body>
</html>
", "@ArtgrisFileManager/manager.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\manager.html.twig");
    }
}
