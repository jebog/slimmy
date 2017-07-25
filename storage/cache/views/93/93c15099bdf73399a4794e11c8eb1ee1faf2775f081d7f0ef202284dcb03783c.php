<?php

/* auth/login.twig */
class __TwigTemplate_a1043c07c1290051a28d40ce73767e8824c4cba2775988902da64afbaa4f3425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Login</div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\"
                              action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login.post"), "html", null, true);
        echo "\">

                            <div class=\"form-group\" ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())) ? ("has-error") : (""));
        echo ">
                                <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>

                                <div class=\"col-md-6\">
                                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\"
                                           value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "email", array()), "html", null, true);
        echo "\" required autofocus>

                                    ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())) {
            // line 21
            echo "                                        <span class=\"help-block\">
                                            <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())), "html", null, true);
            echo "</strong>
                                        </span>
                                    ";
        }
        // line 25
        echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-md-4 control-label\">Password</label>

                                <div class=\"col-md-6\">
                                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>

                                    ";
        // line 35
        echo "                                    ";
        // line 36
        echo "                                    ";
        // line 37
        echo "                                    ";
        // line 38
        echo "                                    ";
        // line 39
        echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-md-offset-4\">
                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" name=\"remember\"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 52
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                            <div class=\"form-group\">
                                <div class=\"col-md-8 col-md-offset-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Login
                                    </button>

                                    ";
        // line 60
        echo "                                    ";
        // line 61
        echo "                                    ";
        // line 62
        echo "                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 62,  115 => 61,  113 => 60,  103 => 52,  88 => 39,  86 => 38,  84 => 37,  82 => 36,  80 => 35,  69 => 25,  63 => 22,  60 => 21,  58 => 20,  53 => 18,  45 => 13,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.twig", "/Users/donmarkus/Code/php/slimmy/resources/views/auth/login.twig");
    }
}
