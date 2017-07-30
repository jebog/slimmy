<?php

/* home.twig */
class __TwigTemplate_fdd2c1b65e0f00407b0e6417f2a1ecb6b91cc784bc7bcebd04beca46c09c7912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "home.twig", 1);
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
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, Slimmy!</h1>
            <p>Welcome to slim3 Starter App</p>
            <p>
                <a class=\"btn btn-primary btn-lg\">Learn more</a>
            </p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/Users/donmarkus/Code/php/slimmy/resources/views/home.twig");
    }
}
