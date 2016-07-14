<?php

/* base.html.twig */
class __TwigTemplate_966c0e5832b6fc2bde452718523085d5120ccb3b8968e2f79e82f121c2123351 extends Twig_Template
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
        $__internal_63b8bb262b80e176cdae4a2e3091a30ce058de80699dd5348cacd779fc4f1293 = $this->env->getExtension("native_profiler");
        $__internal_63b8bb262b80e176cdae4a2e3091a30ce058de80699dd5348cacd779fc4f1293->enter($__internal_63b8bb262b80e176cdae4a2e3091a30ce058de80699dd5348cacd779fc4f1293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_63b8bb262b80e176cdae4a2e3091a30ce058de80699dd5348cacd779fc4f1293->leave($__internal_63b8bb262b80e176cdae4a2e3091a30ce058de80699dd5348cacd779fc4f1293_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9752b3c0d1b3154bb25ffa37823f763d4fbb4cccc1ae8baa4dc5bc92094d2563 = $this->env->getExtension("native_profiler");
        $__internal_9752b3c0d1b3154bb25ffa37823f763d4fbb4cccc1ae8baa4dc5bc92094d2563->enter($__internal_9752b3c0d1b3154bb25ffa37823f763d4fbb4cccc1ae8baa4dc5bc92094d2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9752b3c0d1b3154bb25ffa37823f763d4fbb4cccc1ae8baa4dc5bc92094d2563->leave($__internal_9752b3c0d1b3154bb25ffa37823f763d4fbb4cccc1ae8baa4dc5bc92094d2563_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87a91e0a31b67e8d93e4eec6f6eb3cf5c5f764cd0ea275579b667da682af4821 = $this->env->getExtension("native_profiler");
        $__internal_87a91e0a31b67e8d93e4eec6f6eb3cf5c5f764cd0ea275579b667da682af4821->enter($__internal_87a91e0a31b67e8d93e4eec6f6eb3cf5c5f764cd0ea275579b667da682af4821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_87a91e0a31b67e8d93e4eec6f6eb3cf5c5f764cd0ea275579b667da682af4821->leave($__internal_87a91e0a31b67e8d93e4eec6f6eb3cf5c5f764cd0ea275579b667da682af4821_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3923ceed031fa4cf05189f19f9d997fed5f201aaa5f989b58c6ca523e747223a = $this->env->getExtension("native_profiler");
        $__internal_3923ceed031fa4cf05189f19f9d997fed5f201aaa5f989b58c6ca523e747223a->enter($__internal_3923ceed031fa4cf05189f19f9d997fed5f201aaa5f989b58c6ca523e747223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_3923ceed031fa4cf05189f19f9d997fed5f201aaa5f989b58c6ca523e747223a->leave($__internal_3923ceed031fa4cf05189f19f9d997fed5f201aaa5f989b58c6ca523e747223a_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5cace69db68b356a505930688a66f07177e6d1f2bccce19378fa2f3245437b33 = $this->env->getExtension("native_profiler");
        $__internal_5cace69db68b356a505930688a66f07177e6d1f2bccce19378fa2f3245437b33->enter($__internal_5cace69db68b356a505930688a66f07177e6d1f2bccce19378fa2f3245437b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 20
        echo "            ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        
        $__internal_5cace69db68b356a505930688a66f07177e6d1f2bccce19378fa2f3245437b33->leave($__internal_5cace69db68b356a505930688a66f07177e6d1f2bccce19378fa2f3245437b33_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70fa07a46ead6d2c81fff5b3fe5dc5872a80c70b97e8a3b30f428af00992c492 = $this->env->getExtension("native_profiler");
        $__internal_70fa07a46ead6d2c81fff5b3fe5dc5872a80c70b97e8a3b30f428af00992c492->enter($__internal_70fa07a46ead6d2c81fff5b3fe5dc5872a80c70b97e8a3b30f428af00992c492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_70fa07a46ead6d2c81fff5b3fe5dc5872a80c70b97e8a3b30f428af00992c492->leave($__internal_70fa07a46ead6d2c81fff5b3fe5dc5872a80c70b97e8a3b30f428af00992c492_prof);

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
