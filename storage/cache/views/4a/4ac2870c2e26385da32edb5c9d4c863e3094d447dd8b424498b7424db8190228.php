<?php

/* templates/partials/navigation.twig */
class __TwigTemplate_3e082f3f3c6924275368d8e468d1b92786df68ea4ccef1cf013ab03198a4ed86 extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Slimmy</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <!-- Authentication Links -->
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 21
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "user", array()), "name", array()), "html", null, true);
            echo " <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li>
                                <a href=\"/logout\">
                                    Logout
                                </a>

                                <form id=\"logout-form\" action=\"\" method=\"POST\" style=\"display: none;\"></form>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 37
            echo "                    <li><a href=\"/login\">Login</a></li>
                    <li><a href=\"/register\">Register</a></li>
                ";
        }
        // line 40
        echo "            </ul>

        </div><!--/.nav-collapse -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/partials/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 40,  63 => 37,  46 => 23,  42 => 21,  40 => 20,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/partials/navigation.twig", "/Users/donmarkus/Code/php/slimmy/resources/views/templates/partials/navigation.twig");
    }
}
