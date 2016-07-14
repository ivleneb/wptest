<?php

/* base.html.twig */
class __TwigTemplate_dddbeebb5bc7856c102dfca74568146f0a953b39fc1f3611638c6cf145de62ed extends Twig_Template
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
        $__internal_fbdd0f1418b4515b56f60159e31c8b189f1db23035c9a46a79fae0764c3f69da = $this->env->getExtension("native_profiler");
        $__internal_fbdd0f1418b4515b56f60159e31c8b189f1db23035c9a46a79fae0764c3f69da->enter($__internal_fbdd0f1418b4515b56f60159e31c8b189f1db23035c9a46a79fae0764c3f69da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 24
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>

<body>
";
        
        $__internal_fbdd0f1418b4515b56f60159e31c8b189f1db23035c9a46a79fae0764c3f69da->leave($__internal_fbdd0f1418b4515b56f60159e31c8b189f1db23035c9a46a79fae0764c3f69da_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e7bc7e6e1ca88c357c2c3941b95aec0cd7f09c181a0965b011484743e972c9 = $this->env->getExtension("native_profiler");
        $__internal_90e7bc7e6e1ca88c357c2c3941b95aec0cd7f09c181a0965b011484743e972c9->enter($__internal_90e7bc7e6e1ca88c357c2c3941b95aec0cd7f09c181a0965b011484743e972c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_90e7bc7e6e1ca88c357c2c3941b95aec0cd7f09c181a0965b011484743e972c9->leave($__internal_90e7bc7e6e1ca88c357c2c3941b95aec0cd7f09c181a0965b011484743e972c9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5744c87670f486a08c390ac4edf953c0aae6d9a7aec5ae354d4b1b3b5561157 = $this->env->getExtension("native_profiler");
        $__internal_e5744c87670f486a08c390ac4edf953c0aae6d9a7aec5ae354d4b1b3b5561157->enter($__internal_e5744c87670f486a08c390ac4edf953c0aae6d9a7aec5ae354d4b1b3b5561157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "                 <!--Estilos-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/tooltipster.bundle.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/owl.carousel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\">
            <!--Icono-->
            <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
            <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style2.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_e5744c87670f486a08c390ac4edf953c0aae6d9a7aec5ae354d4b1b3b5561157->leave($__internal_e5744c87670f486a08c390ac4edf953c0aae6d9a7aec5ae354d4b1b3b5561157_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_491cfb034896930b0d82fdc76e70baf69dca6c8588b1f79c8605536789eceaf1 = $this->env->getExtension("native_profiler");
        $__internal_491cfb034896930b0d82fdc76e70baf69dca6c8588b1f79c8605536789eceaf1->enter($__internal_491cfb034896930b0d82fdc76e70baf69dca6c8588b1f79c8605536789eceaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "            <div id=\"o-wrapper\"  class=\"o-wrapper\">
                <header></header>
                <section></section>
                <footer></footer>
            </div>     

            <div id=\"c-mask\" class=\"c-mask\"></div>

            <aside class=\"c-menu--push-left\"></aside>
            <aside class=\"c-menu--push-right\"></aside>
        ";
        
        $__internal_491cfb034896930b0d82fdc76e70baf69dca6c8588b1f79c8605536789eceaf1->leave($__internal_491cfb034896930b0d82fdc76e70baf69dca6c8588b1f79c8605536789eceaf1_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d715aee981c6264672522029edc32d96b012bb03346ad633a9d0359ffccb8b8d = $this->env->getExtension("native_profiler");
        $__internal_d715aee981c6264672522029edc32d96b012bb03346ad633a9d0359ffccb8b8d->enter($__internal_d715aee981c6264672522029edc32d96b012bb03346ad633a9d0359ffccb8b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 41)->display($context);
        // line 42
        echo "        ";
        
        $__internal_d715aee981c6264672522029edc32d96b012bb03346ad633a9d0359ffccb8b8d->leave($__internal_d715aee981c6264672522029edc32d96b012bb03346ad633a9d0359ffccb8b8d_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93af9fdcbd18dc59c6b610b4309492c60e3bced8a673a3ef9f3f389597aaf558 = $this->env->getExtension("native_profiler");
        $__internal_93af9fdcbd18dc59c6b610b4309492c60e3bced8a673a3ef9f3f389597aaf558->enter($__internal_93af9fdcbd18dc59c6b610b4309492c60e3bced8a673a3ef9f3f389597aaf558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "             <!--Librerias Javascript-->
            <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>  
            <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/menu.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/loader.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/tooltipster.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_93af9fdcbd18dc59c6b610b4309492c60e3bced8a673a3ef9f3f389597aaf558->leave($__internal_93af9fdcbd18dc59c6b610b4309492c60e3bced8a673a3ef9f3f389597aaf558_prof);

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
        return array (  212 => 52,  208 => 51,  204 => 50,  200 => 49,  196 => 48,  192 => 47,  188 => 46,  184 => 45,  181 => 44,  175 => 43,  168 => 42,  165 => 41,  159 => 40,  142 => 29,  139 => 28,  133 => 27,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  86 => 10,  80 => 9,  68 => 8,  57 => 54,  54 => 43,  51 => 40,  49 => 27,  42 => 24,  40 => 9,  36 => 8,  27 => 1,);
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
/*                  <!--Estilos-->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/tooltipster.bundle.min.css')}}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.min.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/owl.carousel.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome.css') }}">*/
/*             <!--Icono-->*/
/*             <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">*/
/*             <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">*/
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
/*             <div id="o-wrapper"  class="o-wrapper">*/
/*                 <header></header>*/
/*                 <section></section>*/
/*                 <footer></footer>*/
/*             </div>     */
/* */
/*             <div id="c-mask" class="c-mask"></div>*/
/* */
/*             <aside class="c-menu--push-left"></aside>*/
/*             <aside class="c-menu--push-right"></aside>*/
/*         {% endblock %}*/
/*         {% block footer %}*/
/*             {% include 'footer.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*              <!--Librerias Javascript-->*/
/*             <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.4.min.js')}}"></script>  */
/*             <script type="text/javascript" src="{{ asset('public/js/menu.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/loader.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/tooltipster.bundle.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/owl.carousel.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/main.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* <body>*/
/* */
