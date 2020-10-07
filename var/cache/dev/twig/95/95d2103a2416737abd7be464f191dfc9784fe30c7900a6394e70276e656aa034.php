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

/* @ArtgrisMedia/form/field_media.html.twig */
class __TwigTemplate_01fedc55293e938b2e1bd2cc7a503ca50e5f4c07870513f199b18b90bf4d4263 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'artgris_media_widget' => [$this, 'block_artgris_media_widget'],
            'artgris_media_collection_widget' => [$this, 'block_artgris_media_collection_widget'],
            'render_media' => [$this, 'block_render_media'],
            'file_preview' => [$this, 'block_file_preview'],
            'fields' => [$this, 'block_fields'],
            'media_buttons_collection' => [$this, 'block_media_buttons_collection'],
            'media_buttons' => [$this, 'block_media_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/field_media.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/field_media.html.twig"));

        // line 1
        $this->displayBlock('artgris_media_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('artgris_media_collection_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 54
        $this->displayBlock('render_media', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_artgris_media_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artgris_media_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artgris_media_widget"));

        // line 2
        echo "
    ";
        // line 3
        ob_start();
        // line 4
        echo "        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "collection" => false, "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 4, $this->source); })())];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 4, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = [];
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        // line 5
        echo "            ";
        $this->displayBlock("render_media", $context, $blocks);
        echo "
        ";
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 7
        echo "    ";
        $___internal_f9b6a3ee1c12521955877be3f8a76c6b502d543d9d2613da06c6a77c9d0bb206_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_f9b6a3ee1c12521955877be3f8a76c6b502d543d9d2613da06c6a77c9d0bb206_);
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@ArtgrisMedia/form/_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->loadTemplate("@ArtgrisMedia/form/_crop_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 10)->display(twig_array_merge($context, ["crop_options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "crop_options", [], "any", false, false, false, 10)]));
        // line 11
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_artgris_media_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artgris_media_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artgris_media_collection_widget"));

        // line 15
        echo "
    ";
        // line 16
        ob_start();
        // line 17
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 18
            echo "            ";
            ob_start();
            // line 19
            echo "                ";
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
            $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["form" => (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 19, $this->source); })()), "collection" => true, "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 19, $this->source); })())];
            if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 19, $this->getSourceContext());
            }
            $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
            $context = [];
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
            // line 20
            echo "                    ";
            $this->displayBlock("render_media", $context, $blocks);
            echo "
                ";
            $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            // line 22
            echo "            ";
            $context["data_prototype"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 23, $this->source); })()), ["data-prototype" => (isset($context["data_prototype"]) || array_key_exists("data_prototype", $context) ? $context["data_prototype"] : (function () { throw new RuntimeError('Variable "data_prototype" does not exist.', 23, $this->source); })())]);
            // line 24
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 24, $this->source); })()), ["data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24)]);
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 26, $this->source); })()), ["data-allow-add" => (((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 26, $this->source); })())) ? (1) : (0))]);
        // line 27
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 27, $this->source); })()), ["data-max" => (((isset($context["data_max"]) || array_key_exists("data_max", $context) ? $context["data_max"] : (function () { throw new RuntimeError('Variable "data_max" does not exist.', 27, $this->source); })())) ? ((isset($context["data_max"]) || array_key_exists("data_max", $context) ? $context["data_max"] : (function () { throw new RuntimeError('Variable "data_max" does not exist.', 27, $this->source); })())) : (100))]);
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["data-min" => (((isset($context["data_min"]) || array_key_exists("data_min", $context) ? $context["data_min"] : (function () { throw new RuntimeError('Variable "data_min" does not exist.', 28, $this->source); })())) ? ((isset($context["data_min"]) || array_key_exists("data_min", $context) ? $context["data_min"] : (function () { throw new RuntimeError('Variable "data_min" does not exist.', 28, $this->source); })())) : (0))]);
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 29, $this->source); })()), ["data-init-with-n-elements" => (((isset($context["data_init_with_n_elements"]) || array_key_exists("data_init_with_n_elements", $context) ? $context["data_init_with_n_elements"] : (function () { throw new RuntimeError('Variable "data_init_with_n_elements" does not exist.', 29, $this->source); })())) ? ((isset($context["data_init_with_n_elements"]) || array_key_exists("data_init_with_n_elements", $context) ? $context["data_init_with_n_elements"] : (function () { throw new RuntimeError('Variable "data_init_with_n_elements" does not exist.', 29, $this->source); })())) : (1))]);
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()), ["data-add-at-the-end" => (((isset($context["data_add_at_the_end"]) || array_key_exists("data_add_at_the_end", $context) ? $context["data_add_at_the_end"] : (function () { throw new RuntimeError('Variable "data_add_at_the_end" does not exist.', 30, $this->source); })())) ? ((isset($context["data_add_at_the_end"]) || array_key_exists("data_add_at_the_end", $context) ? $context["data_add_at_the_end"] : (function () { throw new RuntimeError('Variable "data_add_at_the_end" does not exist.', 30, $this->source); })())) : (false))]);
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["data-allow-remove" => (((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 31, $this->source); })())) ? (1) : (0))]);
        // line 32
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 32, $this->source); })()), ["data-name-prefix" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 32, $this->source); })())]);
        // line 33
        echo "
        <div id=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\" class=\"artgris-media-list artgris-media-collection\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 36
            echo "            ";
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context;
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ["form" => $context["media"], "collection" => true, "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 36, $this->source); })())];
            if (!twig_test_iterable($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 36, $this->getSourceContext());
            }
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_to_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
            $context = [];
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666));
            // line 37
            echo "                ";
            $this->displayBlock("render_media", $context, $blocks);
            echo "
            ";
            $context = $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4;
            // line 39
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>

        ";
        // line 42
        $this->loadTemplate("@ArtgrisMedia/form/_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 42)->display($context);
        // line 43
        echo "        ";
        $this->loadTemplate("@ArtgrisMedia/form/_crop_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 43)->display(twig_array_merge($context, ["crop_options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "prototype", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "crop_options", [], "any", false, false, false, 43)]));
        // line 44
        echo "
    ";
        $___internal_50488e3e7ecd5972428687ee44c25279c94b260b69c2d63b6a27fe94507b3340_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo twig_spaceless($___internal_50488e3e7ecd5972428687ee44c25279c94b260b69c2d63b6a27fe94507b3340_);
        // line 46
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_render_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "render_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "render_media"));

        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        <div class=\"artgris-media container-fluid mb-2 ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)), 0))) {
            echo "error";
        }
        echo "\">

            <div class=\"row border bg-white align-items-center p-2\">
                ";
        // line 59
        if ((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "                    <div class=\"col-md-1\">
                        <table class=\"table-sort\">
                            <tr class=\"table-sort-up\">
                                <td><a href=\"#\" class=\"collection-up btn btn-light btn-x-sm\"><span class=\"fas fa-chevron-up\"></span></a></td>
                            </tr>
                            <tr class=\"table-sort-down\">
                                <td><a href=\"#\" class=\"collection-down btn btn-light btn-x-sm\"><span class=\"fas fa-chevron-down\"></span></a></td>
                            </tr>
                        </table>
                    </div>
                ";
        }
        // line 71
        echo "
                ";
        // line 72
        $context["base_path"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "allow_crop", [], "any", false, false, false, 72)) ? ($this->extensions['Artgris\Bundle\MediaBundle\Service\FileManagerConfigurationService']->getWebPath((isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 72, $this->source); })()))) : (1));
        // line 73
        echo "                ";
        $this->displayBlock('file_preview', $context, $blocks);
        // line 87
        echo "
                ";
        // line 89
        echo "                <div class=\"";
        if ((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 89, $this->source); })())) {
            echo "col-md-6";
        } else {
            echo "col-md-7";
        }
        echo "\">
                    ";
        // line 90
        $this->displayBlock('fields', $context, $blocks);
        // line 95
        echo "                </div>

                ";
        // line 97
        if ((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "                    <div class=\"col-md-2 p-2 text-center\">
                        <div class=\"btn-group\" role=\"group\">
                            ";
            // line 100
            $this->displayBlock('media_buttons_collection', $context, $blocks);
            // line 103
            echo "                        </div>
                    </div>
                ";
        } else {
            // line 106
            echo "                    <div class=\"col-md-3 p-2 text-center\">
                        <div class=\"btn-group artgris-browse-group\" role=\"group\">
                            ";
            // line 108
            $this->displayBlock('media_buttons', $context, $blocks);
            // line 111
            echo "                        </div>
                    </div>
                ";
        }
        // line 114
        echo "                ";
        if ((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 114, $this->source); })())) {
            // line 115
            echo "                    <div class=\"col-md-1 p-0 align-top order-md-last order-first\">
                        <a href=\"#\" class=\"float-right js-remove-collection artgris-collection-remove btn btn-sm btn-danger collection-remove collection-action\">
                            <span class=\"fas fa-times\"></span></a>
                    </div>
                ";
        }
        // line 120
        echo "            </div>

            ";
        // line 122
        if (((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 122, $this->source); })()) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "vars", [], "any", false, false, false, 122), "errors", [], "any", false, false, false, 122)), 0)))) {
            // line 123
            echo "                <div class=\"m-2 text-danger\">
                    <b> ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'errors');
            echo "</b>
                </div>
            ";
        }
        // line 127
        echo "
        </div>
    ";
        $___internal_1ef13c0b8efd638f2a6335d693b50e87adc30cef43a6444533e480688852f966_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo twig_spaceless($___internal_1ef13c0b8efd638f2a6335d693b50e87adc30cef43a6444533e480688852f966_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        // line 74
        echo "                    <div class=\"img-preview text-center col-md-2 p-2\" id=\"preview-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\" data-conf=\"";
        echo twig_escape_filter($this->env, (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\"
                         data-base-path=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\">
                        ";
        // line 76
        $context["preview"] = twig_get_attribute($this->env, $this->source, $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\FileTypeExtension']->fileIcon(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "data", [], "any", false, false, false, 76)), "html", [], "any", false, false, false, 76);
        // line 77
        echo "                        ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "allow_crop", [], "any", false, false, false, 77) && twig_in_filter("<img", (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 77, $this->source); })()))) && !twig_in_filter(".svg", (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 77, $this->source); })()))) && (0 === twig_compare(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "data", [], "any", false, false, false, 77), 0, twig_length_filter($this->env, (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 77, $this->source); })()))), (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 77, $this->source); })()))))) {
            // line 78
            echo "                            <a href=\"#\" class=\"js-crop crop-hover\" data-toggle=\"modal\" data-target=\"#crop-modal-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "\" data-backdrop=\"static\">
                                <span class=\"artgris-media-crop-wrapper\"><i class=\"fas fa-crop\"></i></span>
                                ";
            // line 80
            echo (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 80, $this->source); })());
            echo "
                            </a>
                        ";
        } else {
            // line 83
            echo "                            ";
            echo (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 83, $this->source); })());
            echo "
                        ";
        }
        // line 85
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fields"));

        // line 91
        echo "                        <input type=\"text\" class=\"form-control artgris-media-path\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "full_name", [], "any", false, false, false, 91), "html", null, true);
        echo "\"
                               ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "vars", [], "any", false, false, false, 92), "required", [], "any", false, false, false, 92)) {
            echo "required=\"required\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "vars", [], "any", false, false, false, 92), "value", [], "any", false, false, false, 92), "html", null, true);
        echo "\"
                               placeholder=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("artgris.media.path.placeholder"), "html", null, true);
        echo "\" ";
        echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 93), "readonly", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 93), "readonly", [], "any", false, false, false, 93))) : (""))) ? ("readonly=\"readonly\"") : (""));
        echo ">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_media_buttons_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons_collection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons_collection"));

        // line 101
        echo "                                ";
        $this->loadTemplate("@ArtgrisMedia/form/_btn_manager.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 101)->display(twig_to_array(["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 101, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 101, $this->source); })())]));
        // line 102
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_media_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons"));

        // line 109
        echo "                                ";
        $this->loadTemplate("@ArtgrisMedia/form/_btn_manager.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 109)->display(twig_to_array(["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 109, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 109, $this->source); })()), "collection" => false]));
        // line 110
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/form/field_media.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  547 => 110,  544 => 109,  534 => 108,  524 => 102,  521 => 101,  511 => 100,  497 => 93,  489 => 92,  482 => 91,  472 => 90,  461 => 85,  455 => 83,  449 => 80,  443 => 78,  440 => 77,  438 => 76,  434 => 75,  425 => 74,  415 => 73,  405 => 55,  400 => 127,  394 => 124,  391 => 123,  389 => 122,  385 => 120,  378 => 115,  375 => 114,  370 => 111,  368 => 108,  364 => 106,  359 => 103,  357 => 100,  353 => 98,  351 => 97,  347 => 95,  345 => 90,  336 => 89,  333 => 87,  330 => 73,  328 => 72,  325 => 71,  312 => 60,  310 => 59,  301 => 56,  298 => 55,  288 => 54,  277 => 46,  275 => 16,  271 => 44,  268 => 43,  266 => 42,  262 => 40,  248 => 39,  242 => 37,  232 => 36,  215 => 35,  198 => 34,  195 => 33,  192 => 32,  189 => 31,  186 => 30,  183 => 29,  180 => 28,  177 => 27,  174 => 26,  171 => 25,  168 => 24,  165 => 23,  162 => 22,  156 => 20,  146 => 19,  143 => 18,  140 => 17,  138 => 16,  135 => 15,  125 => 14,  114 => 11,  111 => 10,  109 => 9,  106 => 8,  104 => 3,  101 => 7,  95 => 5,  85 => 4,  83 => 3,  80 => 2,  70 => 1,  60 => 54,  57 => 48,  55 => 14,  52 => 13,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block artgris_media_widget %}

    {% apply spaceless %}
        {% with {'form': form, 'collection': false, 'id': form.vars.id, 'conf': conf } only %}
            {{ block('render_media') }}
        {% endwith %}
    {% endapply %}

    {% include '@ArtgrisMedia/form/_modal.html.twig' %}
    {% include '@ArtgrisMedia/form/_crop_modal.html.twig' with {crop_options: form.vars.crop_options} %}

{% endblock %}

{% block artgris_media_collection_widget %}

    {% apply spaceless %}
        {% if prototype is defined %}
            {% set data_prototype  %}
                {% with {'form': prototype, 'collection': true, 'id': form.vars.id, 'conf': conf } only %}
                    {{ block('render_media') }}
                {% endwith %}
            {% endset %}
            {% set attr = attr|merge({'data-prototype': data_prototype}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-max': data_max ? data_max : 100}) %}
        {% set attr = attr|merge({'data-min': data_min ? data_min : 0}) %}
        {% set attr = attr|merge({'data-init-with-n-elements': data_init_with_n_elements ? data_init_with_n_elements : 1}) %}
        {% set attr = attr|merge({'data-add-at-the-end': data_add_at_the_end ? data_add_at_the_end : false}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}

        <div id=\"{{ form.vars.id }}\" class=\"artgris-media-list artgris-media-collection\" {% for k, v in attr %} {{ k }}=\"{{ v|e }}\"{% endfor %}>
        {% for media in form %}
            {% with {'form': media, 'collection': true, 'id': form.vars.id, 'conf': conf } only %}
                {{ block('render_media') }}
            {% endwith %}
        {% endfor %}
        </div>

        {% include '@ArtgrisMedia/form/_modal.html.twig' %}
        {% include '@ArtgrisMedia/form/_crop_modal.html.twig' with {crop_options: form.vars.prototype.vars.crop_options} %}

    {% endapply %}

{% endblock %}

{#
{% with {'form': form, 'collection': true, 'id': form.vars.id, 'conf': conf } only %}
    {{ block('render_media') }}
{% endwith %}
#}
{% block render_media %}
    {% apply spaceless %}
        <div class=\"artgris-media container-fluid mb-2 {% if form.vars.errors|length > 0 %}error{% endif %}\">

            <div class=\"row border bg-white align-items-center p-2\">
                {% if collection %}
                    <div class=\"col-md-1\">
                        <table class=\"table-sort\">
                            <tr class=\"table-sort-up\">
                                <td><a href=\"#\" class=\"collection-up btn btn-light btn-x-sm\"><span class=\"fas fa-chevron-up\"></span></a></td>
                            </tr>
                            <tr class=\"table-sort-down\">
                                <td><a href=\"#\" class=\"collection-down btn btn-light btn-x-sm\"><span class=\"fas fa-chevron-down\"></span></a></td>
                            </tr>
                        </table>
                    </div>
                {% endif %}

                {% set base_path = form.vars.allow_crop ? get_web_path(conf) : 1 %}
                {% block file_preview %}
                    <div class=\"img-preview text-center col-md-2 p-2\" id=\"preview-{{ form.vars.id }}\" data-id=\"{{ id }}\" data-conf=\"{{ conf }}\"
                         data-base-path=\"{{ base_path }}\">
                        {% set preview = fileIcon(form.vars.data).html %}
                        {% if form.vars.allow_crop and '<img' in preview and '.svg' not in preview and form.vars.data[:base_path|length] == base_path %}
                            <a href=\"#\" class=\"js-crop crop-hover\" data-toggle=\"modal\" data-target=\"#crop-modal-{{ id }}\" data-backdrop=\"static\">
                                <span class=\"artgris-media-crop-wrapper\"><i class=\"fas fa-crop\"></i></span>
                                {{ preview|raw }}
                            </a>
                        {% else %}
                            {{ preview|raw }}
                        {% endif %}
                    </div>
                {% endblock %}

                {#label + input#}
                <div class=\"{% if collection %}col-md-6{% else %}col-md-7{% endif %}\">
                    {% block fields %}
                        <input type=\"text\" class=\"form-control artgris-media-path\" id=\"{{ form.vars.id }}\" name=\"{{ form.vars.full_name }}\"
                               {% if form.vars.required %}required=\"required\"{% endif %} value=\"{{ form.vars.value }}\"
                               placeholder=\"{{ 'artgris.media.path.placeholder'|trans }}\" {{ form.vars.readonly|default ? 'readonly=\"readonly\"' }}>
                    {% endblock %}
                </div>

                {% if collection %}
                    <div class=\"col-md-2 p-2 text-center\">
                        <div class=\"btn-group\" role=\"group\">
                            {% block media_buttons_collection %}
                                {% include '@ArtgrisMedia/form/_btn_manager.html.twig' with {'id' : id, 'form' : form, 'conf': conf} only %}
                            {% endblock %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-md-3 p-2 text-center\">
                        <div class=\"btn-group artgris-browse-group\" role=\"group\">
                            {% block media_buttons %}
                                {% include '@ArtgrisMedia/form/_btn_manager.html.twig' with {'id' : id, 'form' : form, 'conf': conf, 'collection': false} only %}
                            {% endblock %}
                        </div>
                    </div>
                {% endif %}
                {% if collection %}
                    <div class=\"col-md-1 p-0 align-top order-md-last order-first\">
                        <a href=\"#\" class=\"float-right js-remove-collection artgris-collection-remove btn btn-sm btn-danger collection-remove collection-action\">
                            <span class=\"fas fa-times\"></span></a>
                    </div>
                {% endif %}
            </div>

            {% if collection and form.vars.errors|length > 0 %}
                <div class=\"m-2 text-danger\">
                    <b> {{ form_errors(form) }}</b>
                </div>
            {% endif %}

        </div>
    {% endapply %}
{% endblock %}
", "@ArtgrisMedia/form/field_media.html.twig", "C:\\Users\\Hamza\\Desktop\\Symfony\\agence\\vendor\\artgris\\media-bundle\\Resources\\views\\form\\field_media.html.twig");
    }
}
