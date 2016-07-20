<?php

/* security/login.html.twig */
class __TwigTemplate_06da92e5c7a32b856aa2b1aba881b6660a25925a4a79812f539584219938fd5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95544ef115019edbebd2a7e557e70c288301ebb6007abe6250e00b7dc58f28cf = $this->env->getExtension("native_profiler");
        $__internal_95544ef115019edbebd2a7e557e70c288301ebb6007abe6250e00b7dc58f28cf->enter($__internal_95544ef115019edbebd2a7e557e70c288301ebb6007abe6250e00b7dc58f28cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95544ef115019edbebd2a7e557e70c288301ebb6007abe6250e00b7dc58f28cf->leave($__internal_95544ef115019edbebd2a7e557e70c288301ebb6007abe6250e00b7dc58f28cf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa0f0b9f5134c8473e04a295bad54683f900b0e00df12e794b14ea6828cc8516 = $this->env->getExtension("native_profiler");
        $__internal_aa0f0b9f5134c8473e04a295bad54683f900b0e00df12e794b14ea6828cc8516->enter($__internal_aa0f0b9f5134c8473e04a295bad54683f900b0e00df12e794b14ea6828cc8516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
";
        
        $__internal_aa0f0b9f5134c8473e04a295bad54683f900b0e00df12e794b14ea6828cc8516->leave($__internal_aa0f0b9f5134c8473e04a295bad54683f900b0e00df12e794b14ea6828cc8516_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd9fd38ee9f40eb9c786131c74087ffd40b1c1c9c2eeb24f57374b029db4055b = $this->env->getExtension("native_profiler");
        $__internal_dd9fd38ee9f40eb9c786131c74087ffd40b1c1c9c2eeb24f57374b029db4055b->enter($__internal_dd9fd38ee9f40eb9c786131c74087ffd40b1c1c9c2eeb24f57374b029db4055b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "
        <div class=Login>
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/waposat-logo.png"), "html", null, true);
        echo "\">
        <form id=formulario action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <div class=BoxLogin><i class=\"fa fa-user\" aria-hidden=\"true\"></i><input id=\"username\" name=\"_username\"  type=\"text\" placeholder=\"Usuario\"></div>
        <div class=BoxLogin><i class=\"fa fa-lock\" aria-hidden=\"true\"></i><input id=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\"></div>
        <div class=Recordar>
             <label><input type=\"radio\" name=\"_target_path\" value=\"alert\"> Alertas</label>
             <label><input type=\"radio\" name=\"_target_path\" value=\"scada\"> Scada</label><br>
        <!--
            <label><input type=checkbox value=1 name=recordar> Recordar Contraseña</label>
        -->
        </div>
        <input  type=\"submit\" class=ButtonEnter onclick=Login() value=\"Ingresar\">
        </form>
        </div>
        <div class=LoginInfo>Olvide mi contraseña &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necesito una cuenta
        <div class=Respuesta id=\"respuesta\"></div>
        </div>

";
        
        $__internal_dd9fd38ee9f40eb9c786131c74087ffd40b1c1c9c2eeb24f57374b029db4055b->leave($__internal_dd9fd38ee9f40eb9c786131c74087ffd40b1c1c9c2eeb24f57374b029db4055b_prof);

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
        return array (  77 => 16,  73 => 15,  69 => 13,  63 => 11,  61 => 10,  58 => 9,  52 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*         {% if error %}*/
/*             <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/*         <div class=Login>*/
/*         <img src="{{ asset('public/img/waposat-logo.png') }}">*/
/*         <form id=formulario action="{{ path('login') }}" method="post">*/
/*         <div class=BoxLogin><i class="fa fa-user" aria-hidden="true"></i><input id="username" name="_username"  type="text" placeholder="Usuario"></div>*/
/*         <div class=BoxLogin><i class="fa fa-lock" aria-hidden="true"></i><input id="password" id="password" name="_password" placeholder="Contraseña"></div>*/
/*         <div class=Recordar>*/
/*              <label><input type="radio" name="_target_path" value="alert"> Alertas</label>*/
/*              <label><input type="radio" name="_target_path" value="scada"> Scada</label><br>*/
/*         <!--*/
/*             <label><input type=checkbox value=1 name=recordar> Recordar Contraseña</label>*/
/*         -->*/
/*         </div>*/
/*         <input  type="submit" class=ButtonEnter onclick=Login() value="Ingresar">*/
/*         </form>*/
/*         </div>*/
/*         <div class=LoginInfo>Olvide mi contraseña &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necesito una cuenta*/
/*         <div class=Respuesta id="respuesta"></div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
