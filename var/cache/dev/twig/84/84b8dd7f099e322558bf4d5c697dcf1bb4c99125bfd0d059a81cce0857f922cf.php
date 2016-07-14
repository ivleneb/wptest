<?php

/* base2.html.twig */
class __TwigTemplate_1ae8eb5c66ab3e0c16957c4bae83b3f6afc502ea09f71a15304aff29537653e0 extends Twig_Template
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
        $__internal_8bbeefb67f6c0ace0653359c3699aed4d50a4fc830cbbb5ac3024f056fdc359b = $this->env->getExtension("native_profiler");
        $__internal_8bbeefb67f6c0ace0653359c3699aed4d50a4fc830cbbb5ac3024f056fdc359b->enter($__internal_8bbeefb67f6c0ace0653359c3699aed4d50a4fc830cbbb5ac3024f056fdc359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">  
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>

<body>
";
        
        $__internal_8bbeefb67f6c0ace0653359c3699aed4d50a4fc830cbbb5ac3024f056fdc359b->leave($__internal_8bbeefb67f6c0ace0653359c3699aed4d50a4fc830cbbb5ac3024f056fdc359b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_12f67ffcc8f1eb2c77b8d7e0c61b6ab37204e618fbcc52ae13f9c9fab088de8b = $this->env->getExtension("native_profiler");
        $__internal_12f67ffcc8f1eb2c77b8d7e0c61b6ab37204e618fbcc52ae13f9c9fab088de8b->enter($__internal_12f67ffcc8f1eb2c77b8d7e0c61b6ab37204e618fbcc52ae13f9c9fab088de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12f67ffcc8f1eb2c77b8d7e0c61b6ab37204e618fbcc52ae13f9c9fab088de8b->leave($__internal_12f67ffcc8f1eb2c77b8d7e0c61b6ab37204e618fbcc52ae13f9c9fab088de8b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a4c717d7e25c9382fa633d1c63d257d3c1a4f3007d1be438dd239f67e2adb00 = $this->env->getExtension("native_profiler");
        $__internal_2a4c717d7e25c9382fa633d1c63d257d3c1a4f3007d1be438dd239f67e2adb00->enter($__internal_2a4c717d7e25c9382fa633d1c63d257d3c1a4f3007d1be438dd239f67e2adb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style2.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_2a4c717d7e25c9382fa633d1c63d257d3c1a4f3007d1be438dd239f67e2adb00->leave($__internal_2a4c717d7e25c9382fa633d1c63d257d3c1a4f3007d1be438dd239f67e2adb00_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_39660ab88dbfa586004b25246efe2eb081885b964306547f2cfea2e4eebcfbfb = $this->env->getExtension("native_profiler");
        $__internal_39660ab88dbfa586004b25246efe2eb081885b964306547f2cfea2e4eebcfbfb->enter($__internal_39660ab88dbfa586004b25246efe2eb081885b964306547f2cfea2e4eebcfbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base2.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_39660ab88dbfa586004b25246efe2eb081885b964306547f2cfea2e4eebcfbfb->leave($__internal_39660ab88dbfa586004b25246efe2eb081885b964306547f2cfea2e4eebcfbfb_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_948167bfbc4a12a03733d3e6559d631612dba2e8017b957d5d28ddca363e1bef = $this->env->getExtension("native_profiler");
        $__internal_948167bfbc4a12a03733d3e6559d631612dba2e8017b957d5d28ddca363e1bef->enter($__internal_948167bfbc4a12a03733d3e6559d631612dba2e8017b957d5d28ddca363e1bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base2.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        
        $__internal_948167bfbc4a12a03733d3e6559d631612dba2e8017b957d5d28ddca363e1bef->leave($__internal_948167bfbc4a12a03733d3e6559d631612dba2e8017b957d5d28ddca363e1bef_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aedaaa37bd9d2277aaf896c4b6d06efec361bae7be6385a1ec0c7b39a733056d = $this->env->getExtension("native_profiler");
        $__internal_aedaaa37bd9d2277aaf896c4b6d06efec361bae7be6385a1ec0c7b39a733056d->enter($__internal_aedaaa37bd9d2277aaf896c4b6d06efec361bae7be6385a1ec0c7b39a733056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_aedaaa37bd9d2277aaf896c4b6d06efec361bae7be6385a1ec0c7b39a733056d->leave($__internal_aedaaa37bd9d2277aaf896c4b6d06efec361bae7be6385a1ec0c7b39a733056d_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 27,  142 => 26,  136 => 25,  129 => 23,  126 => 22,  120 => 21,  113 => 20,  110 => 19,  104 => 18,  93 => 11,  88 => 10,  82 => 9,  70 => 8,  59 => 29,  57 => 25,  54 => 24,  51 => 21,  49 => 18,  42 => 15,  40 => 9,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="content-type" content="text/html; charset=UTF-8">  */
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style2.css') }}">*/
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
/* */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* <body>*/
/* */
