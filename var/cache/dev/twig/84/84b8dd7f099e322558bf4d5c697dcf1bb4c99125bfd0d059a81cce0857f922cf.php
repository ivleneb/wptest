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
        $__internal_1822525386dc4408e08a2a8631ef5459df467c7592fa280280fb95f31d2f7755 = $this->env->getExtension("native_profiler");
        $__internal_1822525386dc4408e08a2a8631ef5459df467c7592fa280280fb95f31d2f7755->enter($__internal_1822525386dc4408e08a2a8631ef5459df467c7592fa280280fb95f31d2f7755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        
        $__internal_1822525386dc4408e08a2a8631ef5459df467c7592fa280280fb95f31d2f7755->leave($__internal_1822525386dc4408e08a2a8631ef5459df467c7592fa280280fb95f31d2f7755_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d924d85b7a2406c3ca1587d57998efc5b142cf0faead7638ecc00d4883041d1e = $this->env->getExtension("native_profiler");
        $__internal_d924d85b7a2406c3ca1587d57998efc5b142cf0faead7638ecc00d4883041d1e->enter($__internal_d924d85b7a2406c3ca1587d57998efc5b142cf0faead7638ecc00d4883041d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d924d85b7a2406c3ca1587d57998efc5b142cf0faead7638ecc00d4883041d1e->leave($__internal_d924d85b7a2406c3ca1587d57998efc5b142cf0faead7638ecc00d4883041d1e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_355cb275fd7e151b2bdcf06f3cb253b668b49347b6901fa439b2e835f4b6f631 = $this->env->getExtension("native_profiler");
        $__internal_355cb275fd7e151b2bdcf06f3cb253b668b49347b6901fa439b2e835f4b6f631->enter($__internal_355cb275fd7e151b2bdcf06f3cb253b668b49347b6901fa439b2e835f4b6f631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_355cb275fd7e151b2bdcf06f3cb253b668b49347b6901fa439b2e835f4b6f631->leave($__internal_355cb275fd7e151b2bdcf06f3cb253b668b49347b6901fa439b2e835f4b6f631_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b325a4c9ae80a7a3c082c6d95897f121df93b3aeff817c6cae88741dbbc6fea = $this->env->getExtension("native_profiler");
        $__internal_5b325a4c9ae80a7a3c082c6d95897f121df93b3aeff817c6cae88741dbbc6fea->enter($__internal_5b325a4c9ae80a7a3c082c6d95897f121df93b3aeff817c6cae88741dbbc6fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base2.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_5b325a4c9ae80a7a3c082c6d95897f121df93b3aeff817c6cae88741dbbc6fea->leave($__internal_5b325a4c9ae80a7a3c082c6d95897f121df93b3aeff817c6cae88741dbbc6fea_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_16f304855a83bc05f4c1bef837dd02c7384aced0379e074a34ac54d261673f76 = $this->env->getExtension("native_profiler");
        $__internal_16f304855a83bc05f4c1bef837dd02c7384aced0379e074a34ac54d261673f76->enter($__internal_16f304855a83bc05f4c1bef837dd02c7384aced0379e074a34ac54d261673f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base2.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        
        $__internal_16f304855a83bc05f4c1bef837dd02c7384aced0379e074a34ac54d261673f76->leave($__internal_16f304855a83bc05f4c1bef837dd02c7384aced0379e074a34ac54d261673f76_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dd8fda1a00b8e5bec680fd19ccb9f79b370a69f209a5f77cc931162ecb87a82 = $this->env->getExtension("native_profiler");
        $__internal_7dd8fda1a00b8e5bec680fd19ccb9f79b370a69f209a5f77cc931162ecb87a82->enter($__internal_7dd8fda1a00b8e5bec680fd19ccb9f79b370a69f209a5f77cc931162ecb87a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7dd8fda1a00b8e5bec680fd19ccb9f79b370a69f209a5f77cc931162ecb87a82->leave($__internal_7dd8fda1a00b8e5bec680fd19ccb9f79b370a69f209a5f77cc931162ecb87a82_prof);

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
