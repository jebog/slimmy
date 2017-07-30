<?php

/* templates/app.twig */
class __TwigTemplate_75aa201f0ed17554a1d444707fe79b9d389a2177ecade09e7b7669635b51fe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Slimmy</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css\" rel=\"stylesheet\"/>
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl("/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 65px;
        }


    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

";
        // line 34
        $this->loadTemplate("templates/partials/navigation.twig", "templates/app.twig", 34)->display($context);
        // line 35
        echo "
<div class=\"container\">

    ";
        // line 38
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 38)->display($context);
        // line 39
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/app.js\"></script>
</body>
</html>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  80 => 48,  70 => 40,  67 => 39,  65 => 38,  60 => 35,  58 => 34,  35 => 14,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/app.twig", "/Users/donmarkus/Code/php/slimmy/resources/views/templates/app.twig");
    }
}
