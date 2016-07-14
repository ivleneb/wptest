<?php

/* security/login.html.twig */
class __TwigTemplate_06da92e5c7a32b856aa2b1aba881b6660a25925a4a79812f539584219938fd5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a00be931f9dd7e16c8bc08dde58e37911f4dc97642dfd6bcc1bfb0a26a37e532 = $this->env->getExtension("native_profiler");
        $__internal_a00be931f9dd7e16c8bc08dde58e37911f4dc97642dfd6bcc1bfb0a26a37e532->enter($__internal_a00be931f9dd7e16c8bc08dde58e37911f4dc97642dfd6bcc1bfb0a26a37e532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00be931f9dd7e16c8bc08dde58e37911f4dc97642dfd6bcc1bfb0a26a37e532->leave($__internal_a00be931f9dd7e16c8bc08dde58e37911f4dc97642dfd6bcc1bfb0a26a37e532_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d1a7240c616f014e63a4ef977542c273934b9927bfd5e3be55d80f531e50e3f = $this->env->getExtension("native_profiler");
        $__internal_3d1a7240c616f014e63a4ef977542c273934b9927bfd5e3be55d80f531e50e3f->enter($__internal_3d1a7240c616f014e63a4ef977542c273934b9927bfd5e3be55d80f531e50e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style2.css"), "html", null, true);
        echo "\">
    <link href='https://fonts.googleapis.com/css?family=New+Rocker' rel='stylesheet' type='text/css'>
";
        
        $__internal_3d1a7240c616f014e63a4ef977542c273934b9927bfd5e3be55d80f531e50e3f->leave($__internal_3d1a7240c616f014e63a4ef977542c273934b9927bfd5e3be55d80f531e50e3f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b621876731c995f1492f4b0cfbf42b67bf0e7b702bf0f3da621f7245b8c50e = $this->env->getExtension("native_profiler");
        $__internal_b3b621876731c995f1492f4b0cfbf42b67bf0e7b702bf0f3da621f7245b8c50e->enter($__internal_b3b621876731c995f1492f4b0cfbf42b67bf0e7b702bf0f3da621f7245b8c50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "<div class=\"image-container col-xs-6 col-md-6\" style=\"height: 100vh;\">
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("river2.png"), "html", null, true);
        echo "\" height=\"120%\">
</div>
<div class=\" col-xs-6 col-md-6 text-center center-block\">
    <figure>
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Gota_Waposat_117x147.png"), "html", null, true);
        echo "\">
        <figcaption style=\"margin-left: 20%;margin-right: 20%;\">
            <h2 class=\"rock bigFont azulwapo\">LogIn</h2>
            <h3>To mark your attendance just type your data or passes your card</h3>
        </figcaption>
    </figure>
    <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" class=\"col-md-4 col-md-offset-4\" style=\"margin-top: 40px;\">
        <div class=\"form-group\">
            <label for=\"username\" class=\"col-sm-2 control-label\">Email:</label>
            <!--<div class=\"col-sm-10\">-->
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
           <!-- </div>-->    
        </div>
        <div class=\"form-group\">
            <label for=\"password\" class=\"col-sm-2 control-label\">Password:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />   
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"homePage\" />
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">login</button>
            </div>    
        </div>
    </form>
</div>
    
";
        
        $__internal_b3b621876731c995f1492f4b0cfbf42b67bf0e7b702bf0f3da621f7245b8c50e->leave($__internal_b3b621876731c995f1492f4b0cfbf42b67bf0e7b702bf0f3da621f7245b8c50e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  89 => 24,  80 => 18,  73 => 14,  70 => 13,  64 => 11,  62 => 10,  56 => 9,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style2.css') }}">*/
/*     <link href='https://fonts.googleapis.com/css?family=New+Rocker' rel='stylesheet' type='text/css'>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% if error %}*/
/*     <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="image-container col-xs-6 col-md-6" style="height: 100vh;">*/
/*     <img src="{{ asset('river2.png') }}" height="120%">*/
/* </div>*/
/* <div class=" col-xs-6 col-md-6 text-center center-block">*/
/*     <figure>*/
/*         <img src="{{ asset('Gota_Waposat_117x147.png') }}">*/
/*         <figcaption style="margin-left: 20%;margin-right: 20%;">*/
/*             <h2 class="rock bigFont azulwapo">LogIn</h2>*/
/*             <h3>To mark your attendance just type your data or passes your card</h3>*/
/*         </figcaption>*/
/*     </figure>*/
/*     <form action="{{ path('login') }}" method="post" class="col-md-4 col-md-offset-4" style="margin-top: 40px;">*/
/*         <div class="form-group">*/
/*             <label for="username" class="col-sm-2 control-label">Email:</label>*/
/*             <!--<div class="col-sm-10">-->*/
/*             <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" />*/
/*            <!-- </div>-->    */
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="password" class="col-sm-2 control-label">Password:</label>*/
/*             <input type="password" class="form-control" id="password" name="_password" />   */
/*         </div>*/
/*         <input type="hidden" name="_target_path" value="homePage" />*/
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-default">login</button>*/
/*             </div>    */
/*         </div>*/
/*     </form>*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
