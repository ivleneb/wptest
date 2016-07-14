<?php

/* base.html.twig */
class __TwigTemplate_8497054c1496487c87443f3a7c9cff6fc7816a3515522f9f21f7bbffa5dba1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  103 => 23,  100 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 18,  83 => 17,  80 => 16,  72 => 9,  67 => 8,  64 => 7,  58 => 6,  52 => 26,  49 => 22,  46 => 19,  44 => 16,  37 => 13,  35 => 7,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">*/
/*             <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {% include 'menu.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block footer %}*/
/*             {% include 'footer.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
