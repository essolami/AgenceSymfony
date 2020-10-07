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

/* @ArtgrisFileManager/views/_list.html.twig */
class __TwigTemplate_23cf7b9023fcc36505a4403bbcef2f7d44d1677cf4298aba879b2d65d092b99d extends Template
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
            'file_action' => [$this, 'block_file_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_list.html.twig"));

        // line 1
        echo "<div class=\"table-responsive list-blk\">
    <table class=\"table\">
        <colgroup>
            <col>
            <col>
            <col class=\"col-lg-7\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-2\">
        </colgroup>
        <thead class=\"thead-default\">
        <tr>
            <th>
                ";
        // line 15
        $this->displayBlock('select_all', $context, $blocks);
        // line 18
        echo "            </th>
            <th></th>
            <th>
                ";
        // line 21
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 21, $this->source); })()), "name");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 24
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 24, $this->source); })()), "date");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 27
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 27, $this->source); })()), "size");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 30
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 30, $this->source); })()), "dimension");
        echo "
            </th>
            <th class=\"text-right\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fileArray"]) || array_key_exists("fileArray", $context) ? $context["fileArray"] : (function () { throw new RuntimeError('Variable "fileArray" does not exist.', 36, $this->source); })()));
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
            // line 37
            echo "            ";
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["fileEntity"], "file", [], "any", false, false, false, 37);
            // line 38
            echo "            <tr class=\"file-wrapper ";
            ((twig_get_attribute($this->env, $this->source, $context["fileEntity"], "isImage", [], "method", false, false, false, 38)) ? (print ("img")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "html", null, true))));
            echo "\">
                <td>
                    ";
            // line 40
            $this->displayBlock('file_checkbox', $context, $blocks);
            // line 44
            echo "                </td>
                <td>
                    ";
            // line 46
            $this->displayBlock('file_preview', $context, $blocks);
            // line 49
            echo "                </td>
                <td data-value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 50, $this->source); })()), "fileName", [], "any", false, false, false, 50), "html", null, true);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, $context["fileEntity"], "attribut", [], "any", false, false, false, 50);
            echo ">
                    ";
            // line 51
            $this->displayBlock('file_name', $context, $blocks);
            // line 54
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 56
            $this->displayBlock('file_date', $context, $blocks);
            // line 59
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 61
            $this->displayBlock('file_size', $context, $blocks);
            // line 64
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 66
            $this->displayBlock('file_dimension', $context, $blocks);
            // line 69
            echo "                </td>
                <td class=\"text-right\">
                    ";
            // line 71
            $this->displayBlock('file_action', $context, $blocks);
            // line 123
            echo "                </td>
            </tr>
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
        // line 126
        echo "        </tbody>
    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "select_all"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "select_all"));

        // line 16
        echo "                    <input type=\"checkbox\" id=\"select-all\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "\">
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_file_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_checkbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_checkbox"));

        // line 41
        echo "                        <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 41, $this->source); })()), "fileName", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
                               title=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 42, $this->source); })()), "fileName", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        // line 47
        echo "                        ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 47, $this->source); })()), "preview", [], "any", false, false, false, 47)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 47, $this->source); })()), "preview", [], "any", false, false, false, 47), "html", [], "any", false, false, false, 47)) : (""));
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_file_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_name"));

        // line 52
        echo "                        ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, true, false, 52), "folder", [], "any", true, true, false, 52)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 52, $this->source); })()), "preview", [], "any", false, false, false, 52), "folder", [], "any", false, false, false, 52)) : (twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 52, $this->source); })()), "fileName", [], "any", false, false, false, 52)));
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_file_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_date"));

        // line 57
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 57, $this->source); })()), "mTime", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
        echo "</small>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_file_size($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_size"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_size"));

        // line 62
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 62, $this->source); })()), "HTMLSize", [], "any", false, false, false, 62), "html", null, true);
        echo "</small>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_file_dimension($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_dimension"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_dimension"));

        // line 67
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 67, $this->source); })()), "HTMLDimension", [], "any", false, false, false, 67), "html", null, true);
        echo "</small>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_file_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_action"));

        // line 72
        echo "                        <span data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-xs btn-danger js-delete-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-delete\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-href='";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 81, $this->source); })()), "queryParameters", [], "any", false, false, false, 81), ["delete[]" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 81, $this->source); })()), "fileName", [], "any", false, false, false, 81)])), "html", null, true);
        echo "'>
                        <span class=\"far fa-trash-alt\"></span>
                        </button>
                    </span>
                        <span data-toggle=\"tooltip\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-xs btn-default js-rename-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-rename\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-name='";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 94, $this->source); })()), "basename", [0 => ("." . twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 94, $this->source); })()), "extension", [], "any", false, false, false, 94))], "method", false, false, false, 94), "html", null, true);
        echo "'
                                data-extension='";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 95, $this->source); })()), "extension", [], "any", false, false, false, 95), "html", null, true);
        echo "'
                                data-href='";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_rename", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 96, $this->source); })()), "queryParameters", [], "any", false, false, false, 96), ["fileName" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 96, $this->source); })()), "fileName", [], "any", false, false, false, 96)])), "html", null, true);
        echo "'>
                        <span class=\"far fa-edit\"></span>
                        </button>
                    </span>
                        ";
        // line 100
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 100, $this->source); })()), "type", [], "any", false, false, false, 100), "file"))) {
            // line 101
            echo "                            <a data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
            echo "\"
                               class=\"btn btn-xs btn-default js-download\"
                               href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_file", twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 103, $this->source); })()), "queryParameters", [], "any", false, false, false, 103), ["fileName" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 103, $this->source); })()), "fileName", [], "any", false, false, false, 103)])), "html", null, true);
            echo "\"
                               download>
                                <span class=\"fas fa-download\"></span>
                            </a>
                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 107, $this->source); })()), "isImage", [], "method", false, false, false, 107)) {
                // line 108
                echo "                                <span data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
                echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-xs btn-default js-open-modal\"
                                        data-trigger=\"click\"
                                        data-container=\"body\"
                                        data-toggle=\"modal\"
                                        data-target=\"#js-display-image\"
                                        data-placement=\"left\"
                                        data-href='";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fileEntity"]) || array_key_exists("fileEntity", $context) ? $context["fileEntity"] : (function () { throw new RuntimeError('Variable "fileEntity" does not exist.', 116, $this->source); })()), "preview", [], "any", false, false, false, 116), "path", [], "any", false, false, false, 116), "html", null, true);
                echo "'>
                                <span class=\"fas fa-eye\"></span>
                                </button>
                            </span>
                            ";
            }
            // line 121
            echo "                        ";
        }
        // line 122
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 122,  460 => 121,  452 => 116,  440 => 108,  438 => 107,  431 => 103,  425 => 101,  423 => 100,  416 => 96,  412 => 95,  408 => 94,  396 => 85,  389 => 81,  376 => 72,  366 => 71,  353 => 67,  343 => 66,  330 => 62,  320 => 61,  307 => 57,  297 => 56,  284 => 52,  274 => 51,  261 => 47,  251 => 46,  239 => 42,  234 => 41,  224 => 40,  211 => 16,  201 => 15,  189 => 126,  173 => 123,  171 => 71,  167 => 69,  165 => 66,  161 => 64,  159 => 61,  155 => 59,  153 => 56,  149 => 54,  147 => 51,  141 => 50,  138 => 49,  136 => 46,  132 => 44,  130 => 40,  124 => 38,  121 => 37,  104 => 36,  97 => 32,  92 => 30,  86 => 27,  80 => 24,  74 => 21,  69 => 18,  67 => 15,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive list-blk\">
    <table class=\"table\">
        <colgroup>
            <col>
            <col>
            <col class=\"col-lg-7\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-2\">
        </colgroup>
        <thead class=\"thead-default\">
        <tr>
            <th>
                {% block select_all %}
                    <input type=\"checkbox\" id=\"select-all\" title=\"{{ 'select-all'|trans }}\">
                {% endblock %}
            </th>
            <th></th>
            <th>
                {{ order(fileManager, 'name') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'date') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'size') }}
            </th>
            <th class=\"hidden-xs\">
                {{ order(fileManager, 'dimension') }}
            </th>
            <th class=\"text-right\">{{ 'table.actions'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for fileEntity in fileArray %}
            {% set file = fileEntity.file %}
            <tr class=\"file-wrapper {{ fileEntity.isImage() ? 'img' : file.type }}\">
                <td>
                    {% block file_checkbox %}
                        <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\" value=\"{{ file.fileName }}\"
                               title=\"{{ file.fileName }}\">
                    {% endblock %}
                </td>
                <td>
                    {% block file_preview %}
                        {{ fileEntity.preview ? fileEntity.preview.html|raw }}
                    {% endblock %}
                </td>
                <td data-value=\"{{ file.fileName }}\" {{ fileEntity.attribut|raw }}>
                    {% block file_name %}
                        {{ (fileEntity.preview.folder is defined ? fileEntity.preview.folder : file.fileName)|raw }}
                    {% endblock %}
                </td>
                <td class=\"hidden-xs\">
                    {% block file_date %}
                        <small>{{ file.mTime|date('d/m/Y') }}</small>
                    {% endblock %}
                </td>
                <td class=\"hidden-xs\">
                    {% block file_size %}
                        <small>{{ fileEntity.HTMLSize }}</small>
                    {% endblock %}
                </td>
                <td class=\"hidden-xs\">
                    {% block file_dimension %}
                        <small>{{ fileEntity.HTMLDimension }}</small>
                    {% endblock %}
                </td>
                <td class=\"text-right\">
                    {% block file_action %}
                        <span data-toggle=\"tooltip\" title=\"{{ 'title.delete'|trans }}\">
                        <button type=\"button\"
                                class=\"btn btn-xs btn-danger js-delete-modal\"
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
                                class=\"btn btn-xs btn-default js-rename-modal\"
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
                               class=\"btn btn-xs btn-default js-download\"
                               href=\"{{ path('file_manager_file', fileManager.queryParameters|merge({'fileName':file.fileName})) }}\"
                               download>
                                <span class=\"fas fa-download\"></span>
                            </a>
                            {% if fileEntity.isImage() %}
                                <span data-toggle=\"tooltip\" title=\"{{ 'title.preview.file'|trans }}\">
                                <button type=\"button\"
                                        class=\"btn btn-xs btn-default js-open-modal\"
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
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>", "@ArtgrisFileManager/views/_list.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_list.html.twig");
    }
}
