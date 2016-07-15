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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_632b6d94368611cc5010b34589800e55487065be26588fc7e7d9e4a06b7ee6c3 = $this->env->getExtension("native_profiler");
        $__internal_632b6d94368611cc5010b34589800e55487065be26588fc7e7d9e4a06b7ee6c3->enter($__internal_632b6d94368611cc5010b34589800e55487065be26588fc7e7d9e4a06b7ee6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        
        $__internal_632b6d94368611cc5010b34589800e55487065be26588fc7e7d9e4a06b7ee6c3->leave($__internal_632b6d94368611cc5010b34589800e55487065be26588fc7e7d9e4a06b7ee6c3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7387811d2cc3afe60587a2c4278753cf01199c5098274499bf04c23c0f26086b = $this->env->getExtension("native_profiler");
        $__internal_7387811d2cc3afe60587a2c4278753cf01199c5098274499bf04c23c0f26086b->enter($__internal_7387811d2cc3afe60587a2c4278753cf01199c5098274499bf04c23c0f26086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7387811d2cc3afe60587a2c4278753cf01199c5098274499bf04c23c0f26086b->leave($__internal_7387811d2cc3afe60587a2c4278753cf01199c5098274499bf04c23c0f26086b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afc719553f8b2926e83f3a49df4134ad7a42af8ee35441cca00923e3b9bfb687 = $this->env->getExtension("native_profiler");
        $__internal_afc719553f8b2926e83f3a49df4134ad7a42af8ee35441cca00923e3b9bfb687->enter($__internal_afc719553f8b2926e83f3a49df4134ad7a42af8ee35441cca00923e3b9bfb687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_afc719553f8b2926e83f3a49df4134ad7a42af8ee35441cca00923e3b9bfb687->leave($__internal_afc719553f8b2926e83f3a49df4134ad7a42af8ee35441cca00923e3b9bfb687_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9174e6b6327a8abeb6797bae5e99ec338617ac574847c06f5b2ae3fcffada87f = $this->env->getExtension("native_profiler");
        $__internal_9174e6b6327a8abeb6797bae5e99ec338617ac574847c06f5b2ae3fcffada87f->enter($__internal_9174e6b6327a8abeb6797bae5e99ec338617ac574847c06f5b2ae3fcffada87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        // line 20
        echo "        ";
        
        $__internal_9174e6b6327a8abeb6797bae5e99ec338617ac574847c06f5b2ae3fcffada87f->leave($__internal_9174e6b6327a8abeb6797bae5e99ec338617ac574847c06f5b2ae3fcffada87f_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40ced529d0a2e703ebb89949f33911c36355ed5c2b812a68a2a8711e6a65e398 = $this->env->getExtension("native_profiler");
        $__internal_40ced529d0a2e703ebb89949f33911c36355ed5c2b812a68a2a8711e6a65e398->enter($__internal_40ced529d0a2e703ebb89949f33911c36355ed5c2b812a68a2a8711e6a65e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_40ced529d0a2e703ebb89949f33911c36355ed5c2b812a68a2a8711e6a65e398->leave($__internal_40ced529d0a2e703ebb89949f33911c36355ed5c2b812a68a2a8711e6a65e398_prof);

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
        return array (  128 => 27,  123 => 26,  117 => 25,  110 => 20,  108 => 19,  102 => 18,  91 => 11,  86 => 10,  80 => 9,  68 => 8,  57 => 29,  55 => 25,  52 => 24,  50 => 21,  48 => 18,  41 => 15,  39 => 9,  35 => 8,  26 => 1,);
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
/*             {#{% include 'menu.html.twig' %}#}*/
/*         {% endblock %}*/
/*         {# {% block footer %}*/
/*             {% include 'footer.html.twig' %}*/
/*         {% endblock %} #}*/
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
