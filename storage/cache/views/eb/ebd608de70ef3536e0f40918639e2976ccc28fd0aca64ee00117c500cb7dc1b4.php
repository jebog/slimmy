<?php

/* templates/partials/flash.twig */
class __TwigTemplate_0ef6bae8415581cf74601be84f00dd0d94786e28c211536f06de837f58a9488e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")) {
            // line 2
            echo "    <div class=\"alert alert-info\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")), "html", null, true);
            echo "
    </div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "error"), "method")) {
            // line 8
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "error"), "method")), "html", null, true);
            echo "
    </div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method")) {
            // line 14
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 15
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method")), "html", null, true);
            echo "
    </div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")) {
            // line 20
            echo "    <div class=\"alert alert-success\">
        ";
            // line 21
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "templates/partials/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  38 => 9,  35 => 8,  33 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/partials/flash.twig", "/Users/donmarkus/Code/php/slimmy/resources/views/templates/partials/flash.twig");
    }
}
