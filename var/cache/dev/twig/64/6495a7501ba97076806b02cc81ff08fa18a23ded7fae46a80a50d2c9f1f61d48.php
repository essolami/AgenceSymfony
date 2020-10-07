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

/* @ArtgrisFileManager/views/_thumbnail.html.twig */
class __TwigTemplate_d813f360939ae709008c7022404a2ade561f4b1ee2f6f19cd0c50a1d3d89cd70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'select_all' => [$this, 'block_select_all'],
            'file_checkbox' => [$this, 'block_file_checkbox'],
            'file_preview' => [$this, 'block_file_preview'],
            'file_name' => [$this, 'block_file_name'],
            'file_date' => [$this, 'block_file_date'],
            'file_size' => [$this, 'block_file_size'],
            'file_dimension' => [$this, 'block_file_dimension'],
            'list_action' => [$this, 'block_list_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_thumbnail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_thumbnail.html.twig"));

        // line 1
        echo "<div class=\"row margin-bottom thumbnail-blk\">
    ";
        // line 2
        $this->displayBlock('select_all', $context, $blocks);
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fileArray"]) || array_key_exists("fileArray", $context) ? $context["fileArray"] : (function () { throw new RuntimeError('Variable "fileArray" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fileEntity"]) {
            // line 9
            echo "        ";
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["fileEntity"], "file", [], "any", false, false, false, 9);
            // line 10
            echo "        <div class=\"file-wrapper ";
            ((twig_get_attribute($this->env, $this->source, $context["fileEntity"], "isImage", [], "method", false, false, false, 10)) ? (print ("img")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10), "html", null, true))));
            echo " col-xs-6 col-sm-4 col-md-";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 10, $this->source); })()), "tree", [], "any", false, false, false, 10), 0))) ? (3) : (4));
            echo " col-lg-2 text-center thumbnail\">
            ";
            // line 11
            $this->displayBlock('file_checkbox', $context, $blocks);
            // line 16
            echo "            ";
            $this->displayBlock('file_preview', $context, $blocks);
            // line 21
            echo "            <p ";
            echo twig_get_attribute($this->env, $this->source, $context["fileEntity"], "attribut", [], "any", false, false, false, 21);
            echo ">
                ";
            // line 22
            $this->displayBlock('file_name', $context, $blocks);
            // line 25
            echo "                <small>";
            $this->displayBlock('file_date', $context, $blocks);
            echo " ";
            $this->displayBlock('file_size', $context, $blocks);
            echo "</small>
                <br>
                ";
            // line 27
            $this->displayBlock('file_dimension', $context, $blocks);
            // line 30
            echo "                <br>
            </p>
            <div class=\"row\">
                ";
            // line 33
            $this->displayBlock('list_action', $context, $blocks);
            // line 85
            echo "            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "select_all"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "select_all"));

        // line 3
        echo "        <div class=\"col-md-12 select-all\">
            <input type=\"checkbox\" id=\"select-all\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "\"> <label
                    for=\"select-all\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "</label>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_file_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_checkbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_checkbox"));

        // line 12
        echo "                <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\"
                       value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 13, $this->source); })()), "fileName", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                       title=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 14, $this->source); })()), "fileName", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        // line 17
        echo "                <div class=\"thumbnail-img\">
                    ";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 18, $this->source); })()), "preview", [], "any", false, false, false, 18)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 18, $this->source); })()), "preview", [], "any", false, false, false, 18), "html", [], "any", false, false, false, 18)) : (""));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_file_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_name"));

        // line 23
        echo "                    ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, true, false, 23), "folder", [], "any", true, true, false, 23)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 23, $this->source); })()), "preview", [], "any", false, false, false, 23), "folder", [], "any", false, false, false, 23)) : (twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 23, $this->source); })()), "fileName", [], "any", false, false, false, 23)));
        echo "<br>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_file_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_date"));

        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 25, $this->source); })()), "file", [], "any", false, false, false, 25), "mTime", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_file_size($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_size"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_size"));

        ((twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 25, $this->source); })()), "HTMLSize", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, (" - " . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 25, $this->source); })()), "HTMLSize", [], "any", false, false, false, 25))), "html", null, true))) : (print ("")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_file_dimension($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_dimension"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_dimension"));

        // line 28
        echo "                    <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 28, $this->source); })()), "HTMLDimension", [], "any", false, false, false, 28), "html", null, true);
        echo "</small>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_list_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_action"));

        // line 34
        echo "                    <span data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-sm btn-danger js-delete-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-delete\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-href='";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 43, $this->source); })()), "queryParameters", [], "any", false, false, false, 43), ["delete[]" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 43, $this->source); })()), "fileName", [], "any", false, false, false, 43)])), "html", null, true);
        echo "'>
                           <span class=\"far fa-trash-alt\"></span>
                        </button>
                    </span>
                    <span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\">
                    <button type=\"button\"
                            class=\"btn btn-sm btn-default js-rename-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-rename\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-name='";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 56, $this->source); })()), "basename", [0 => ("." . twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 56, $this->source); })()), "extension", [], "any", false, false, false, 56))], "method", false, false, false, 56), "html", null, true);
        echo "'
                            data-extension='";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 57, $this->source); })()), "extension", [], "any", false, false, false, 57), "html", null, true);
        echo "'
                            data-href='";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_rename", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 58, $this->source); })()), "queryParameters", [], "any", false, false, false, 58), ["fileName" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 58, $this->source); })()), "fileName", [], "any", false, false, false, 58)])), "html", null, true);
        echo "'>
                    <span class=\"far fa-edit\"></span>
                    </button>
                </span>
                    ";
        // line 62
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), "file"))) {
            // line 63
            echo "                        <a data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
            echo "\"
                           class=\"btn btn-sm btn-default js-download\"
                           href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_file", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 65, $this->source); })()), "queryParameters", [], "any", false, false, false, 65), ["fileName" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 65, $this->source); })()), "fileName", [], "any", false, false, false, 65)])), "html", null, true);
            echo "\"
                           download>
                            <span class=\"fas fa-download\"></span>
                        </a>
                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 69, $this->source); })()), "isImage", [], "method", false, false, false, 69)) {
                // line 70
                echo "                            <span data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
                echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-sm btn-default js-open-modal\"
                                        data-trigger=\"click\"
                                        data-container=\"body\"
                                        data-toggle=\"modal\"
                                        data-target=\"#js-display-image\"
                                        data-placement=\"left\"
                                        data-href='";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 78, $this->source); })()), "preview", [], "any", false, false, false, 78), "path", [], "any", false, false, false, 78), "html", null, true);
                echo "'>
                                <span class=\"fas fa-eye\"></span>
                                </button>
                            </span>
                        ";
            }
            // line 83
            echo "                    ";
        }
        // line 84
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 84,  402 => 83,  394 => 78,  382 => 70,  380 => 69,  373 => 65,  367 => 63,  365 => 62,  358 => 58,  354 => 57,  350 => 56,  338 => 47,  331 => 43,  318 => 34,  308 => 33,  295 => 28,  285 => 27,  248 => 25,  235 => 23,  225 => 22,  212 => 18,  209 => 17,  199 => 16,  187 => 14,  183 => 13,  180 => 12,  170 => 11,  157 => 5,  153 => 4,  150 => 3,  140 => 2,  129 => 88,  113 => 85,  111 => 33,  106 => 30,  104 => 27,  96 => 25,  94 => 22,  89 => 21,  86 => 16,  84 => 11,  77 => 10,  74 => 9,  56 => 8,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row margin-bottom thumbnail-blk\">
    {% block select_all %}
        <div class=\"col-md-12 select-all\">
            <input type=\"checkbox\" id=\"select-all\" title=\"{{ 'select-all'|trans }}\"> <label
                    for=\"select-all\">{{ 'select-all'|trans }}</label>
        </div>
    {% endblock %}
    {% for fileEntity in fileArray %}
        {% set file = fileEntity.file %}
        <div class=\"file-wrapper {{ fileEntity.isImage() ? 'img' : file.type }} col-xs-6 col-sm-4 col-md-{{ fileManager.tree == 0 ? 3 : 4 }} col-lg-2 text-center thumbnail\">
            {% block file_checkbox %}
                <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\"
                       value=\"{{ file.fileName }}\"
                       title=\"{{ file.fileName }}\">
            {% endblock %}
            {% block file_preview %}
                <div class=\"thumbnail-img\">
                    {{ fileEntity.preview ? fileEntity.preview.html|raw }}
                </div>
            {% endblock %}
            <p {{ fileEntity.attribut|raw }}>
                {% block file_name %}
                    {{ (fileEntity.preview.folder is defined ? fileEntity.preview.folder : file.fileName)|raw }}<br>
                {% endblock %}
                <small>{% block file_date %}{{ fileEntity.file.mTime|date('d/m/Y') }}{% endblock %} {% block file_size %}{{ fileEntity.HTMLSize ? ' - '~fileEntity.HTMLSize|trans|raw }}{% endblock %}</small>
                <br>
                {% block file_dimension %}
                    <small>{{ fileEntity.HTMLDimension }}</small>
                {% endblock %}
                <br>
            </p>
            <div class=\"row\">
                {% block list_action %}
                    <span data-toggle=\"tooltip\" title=\"{{ 'title.delete'|trans }}\">
                        <button type=\"button\"
                                class=\"btn btn-sm btn-danger js-delete-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-delete\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-href='{{ path('file_manager_delete', fileManager.queryParameters|merge({'delete[]':file.fileName})) }}'>
                           <span class=\"far fa-trash-alt\"></span>
                        </button>
                    </span>
                    <span data-toggle=\"tooltip\" title=\"{{ 'title.rename.file'|trans }}\">
                    <button type=\"button\"
                            class=\"btn btn-sm btn-default js-rename-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-rename\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-name='{{ file.basename('.'~file.extension) }}'
                            data-extension='{{ file.extension }}'
                            data-href='{{ path('file_manager_rename', fileManager.queryParameters|merge({'fileName':file.fileName})) }}'>
                    <span class=\"far fa-edit\"></span>
                    </button>
                </span>
                    {% if file.type == \"file\" %}
                        <a data-placement=\"left\" title=\"{{ 'title.download'|trans }}\"
                           class=\"btn btn-sm btn-default js-download\"
                           href=\"{{ path('file_manager_file', fileManager.queryParameters|merge({'fileName':file.fileName})) }}\"
                           download>
                            <span class=\"fas fa-download\"></span>
                        </a>
                        {% if fileEntity.isImage() %}
                            <span data-toggle=\"tooltip\" title=\"{{ 'title.preview.file'|trans }}\">
                                <button type=\"button\"
                                        class=\"btn btn-sm btn-default js-open-modal\"
                                        data-trigger=\"click\"
                                        data-container=\"body\"
                                        data-toggle=\"modal\"
                                        data-target=\"#js-display-image\"
                                        data-placement=\"left\"
                                        data-href='{{ fileEntity.preview.path }}'>
                                <span class=\"fas fa-eye\"></span>
                                </button>
                            </span>
                        {% endif %}
                    {% endif %}
                {% endblock %}
            </div>
        </div>
    {% endfor %}
</div>
", "@ArtgrisFileManager/views/_thumbnail.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_thumbnail.html.twig");
    }
}
