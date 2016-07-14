<?php

/* base.html.twig */
class __TwigTemplate_76b35066fff84c1804fac8c4da68d3e634018a696f21859d08a1ca50e092165d extends Twig_Template
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
        $__internal_0b2f47a8463acc831ff30f0648252448e153f2412912833365c9afed4cd7b054 = $this->env->getExtension("native_profiler");
        $__internal_0b2f47a8463acc831ff30f0648252448e153f2412912833365c9afed4cd7b054->enter($__internal_0b2f47a8463acc831ff30f0648252448e153f2412912833365c9afed4cd7b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0b2f47a8463acc831ff30f0648252448e153f2412912833365c9afed4cd7b054->leave($__internal_0b2f47a8463acc831ff30f0648252448e153f2412912833365c9afed4cd7b054_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b59886628c2888529b7cfe49a38fb26d5c8205a8f07dda586563db2592a8539a = $this->env->getExtension("native_profiler");
        $__internal_b59886628c2888529b7cfe49a38fb26d5c8205a8f07dda586563db2592a8539a->enter($__internal_b59886628c2888529b7cfe49a38fb26d5c8205a8f07dda586563db2592a8539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b59886628c2888529b7cfe49a38fb26d5c8205a8f07dda586563db2592a8539a->leave($__internal_b59886628c2888529b7cfe49a38fb26d5c8205a8f07dda586563db2592a8539a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d6d7b891fabb43063f7825d3494bc7b63df953412b8a0acc104e05a681fcf77 = $this->env->getExtension("native_profiler");
        $__internal_8d6d7b891fabb43063f7825d3494bc7b63df953412b8a0acc104e05a681fcf77->enter($__internal_8d6d7b891fabb43063f7825d3494bc7b63df953412b8a0acc104e05a681fcf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8d6d7b891fabb43063f7825d3494bc7b63df953412b8a0acc104e05a681fcf77->leave($__internal_8d6d7b891fabb43063f7825d3494bc7b63df953412b8a0acc104e05a681fcf77_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c17dd5bd6abe5ca23dc1a0d00ca344a9b6e8eddb17a64cc01cfb231a9f240fa5 = $this->env->getExtension("native_profiler");
        $__internal_c17dd5bd6abe5ca23dc1a0d00ca344a9b6e8eddb17a64cc01cfb231a9f240fa5->enter($__internal_c17dd5bd6abe5ca23dc1a0d00ca344a9b6e8eddb17a64cc01cfb231a9f240fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_c17dd5bd6abe5ca23dc1a0d00ca344a9b6e8eddb17a64cc01cfb231a9f240fa5->leave($__internal_c17dd5bd6abe5ca23dc1a0d00ca344a9b6e8eddb17a64cc01cfb231a9f240fa5_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dc55722ec3acb039e953c18af798a2a7582105ebe44faa77313382f12b899279 = $this->env->getExtension("native_profiler");
        $__internal_dc55722ec3acb039e953c18af798a2a7582105ebe44faa77313382f12b899279->enter($__internal_dc55722ec3acb039e953c18af798a2a7582105ebe44faa77313382f12b899279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 20
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        
        $__internal_dc55722ec3acb039e953c18af798a2a7582105ebe44faa77313382f12b899279->leave($__internal_dc55722ec3acb039e953c18af798a2a7582105ebe44faa77313382f12b899279_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_265711b9257bb88ddab24f1e490de47624aa15e56a712a36cd14fe1000be61e3 = $this->env->getExtension("native_profiler");
        $__internal_265711b9257bb88ddab24f1e490de47624aa15e56a712a36cd14fe1000be61e3->enter($__internal_265711b9257bb88ddab24f1e490de47624aa15e56a712a36cd14fe1000be61e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_265711b9257bb88ddab24f1e490de47624aa15e56a712a36cd14fe1000be61e3->leave($__internal_265711b9257bb88ddab24f1e490de47624aa15e56a712a36cd14fe1000be61e3_prof);

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
        return array (  141 => 24,  136 => 23,  130 => 22,  123 => 21,  120 => 20,  114 => 19,  107 => 18,  104 => 17,  98 => 16,  87 => 9,  82 => 8,  76 => 7,  64 => 6,  55 => 26,  52 => 22,  49 => 19,  47 => 16,  40 => 13,  38 => 7,  34 => 6,  27 => 1,);
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
