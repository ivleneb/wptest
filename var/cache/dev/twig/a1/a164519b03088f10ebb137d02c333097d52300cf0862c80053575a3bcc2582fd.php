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
        $__internal_5760604ad284ca839b6fab4d11f04a18fceb3850e2911342e6d7bb471ff4d1aa = $this->env->getExtension("native_profiler");
        $__internal_5760604ad284ca839b6fab4d11f04a18fceb3850e2911342e6d7bb471ff4d1aa->enter($__internal_5760604ad284ca839b6fab4d11f04a18fceb3850e2911342e6d7bb471ff4d1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5760604ad284ca839b6fab4d11f04a18fceb3850e2911342e6d7bb471ff4d1aa->leave($__internal_5760604ad284ca839b6fab4d11f04a18fceb3850e2911342e6d7bb471ff4d1aa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e23998c66bed5407a2842549be666417830beb34ad0070e3763a0c214df0f0b = $this->env->getExtension("native_profiler");
        $__internal_1e23998c66bed5407a2842549be666417830beb34ad0070e3763a0c214df0f0b->enter($__internal_1e23998c66bed5407a2842549be666417830beb34ad0070e3763a0c214df0f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
";
        
        $__internal_1e23998c66bed5407a2842549be666417830beb34ad0070e3763a0c214df0f0b->leave($__internal_1e23998c66bed5407a2842549be666417830beb34ad0070e3763a0c214df0f0b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab1421c11f669feef645165b6481580a23ebda07ae95529c489ef7747257ed8 = $this->env->getExtension("native_profiler");
        $__internal_2ab1421c11f669feef645165b6481580a23ebda07ae95529c489ef7747257ed8->enter($__internal_2ab1421c11f669feef645165b6481580a23ebda07ae95529c489ef7747257ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
        
        <div id=\"o-wrapper\" class=\"o-wrapper\">
            <div class=Login>
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/waposat-logo.png"), "html", null, true);
        echo "\">
                <form id=formulario action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
                <div class=BoxLogin><i class=\"fa fa-user\" aria-hidden=\"true\"></i><input id=\"username\" name=\"_username\"  type=\"text\" placeholder=\"Usuario\"></div>
                <div class=BoxLogin><i class=\"fa fa-lock\" aria-hidden=\"true\"></i><input id=\"password\" type=\"password\" name=\"_password\" placeholder=\"Contraseña\"></div>
                <div class=Recordar>
                     <label><input type=\"radio\" name=\"_target_path\" value=\"alert\" checked=\"\"> Alertas</label>
                     <label><input type=\"radio\" name=\"_target_path\" value=\"scada\"> Scada</label><br>
                <!--
                    <label><input type=checkbox value=1 name=recordar> Recordar Contraseña</label>
                -->
                </div>
                <input  type=\"submit\" class=ButtonEnter onclick=Login() value=\"Ingresar\">
                </form>
            </div>
            <div class=LoginInfo>Olvide mi contraseña &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necesito una cuenta
                <div class=Respuesta id=\"respuesta\">
        ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 30
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 32
        echo "                    
                </div>
            </div>
        </div>

";
        
        $__internal_2ab1421c11f669feef645165b6481580a23ebda07ae95529c489ef7747257ed8->leave($__internal_2ab1421c11f669feef645165b6481580a23ebda07ae95529c489ef7747257ed8_prof);

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
        return array (  94 => 32,  88 => 30,  86 => 29,  68 => 14,  64 => 13,  58 => 9,  52 => 8,  41 => 4,  35 => 3,  11 => 1,);
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
/*         */
/*         <div id="o-wrapper" class="o-wrapper">*/
/*             <div class=Login>*/
/*                 <img src="{{ asset('public/img/waposat-logo.png') }}">*/
/*                 <form id=formulario action="{{ path('login') }}" method="post">*/
/*                 <div class=BoxLogin><i class="fa fa-user" aria-hidden="true"></i><input id="username" name="_username"  type="text" placeholder="Usuario"></div>*/
/*                 <div class=BoxLogin><i class="fa fa-lock" aria-hidden="true"></i><input id="password" type="password" name="_password" placeholder="Contraseña"></div>*/
/*                 <div class=Recordar>*/
/*                      <label><input type="radio" name="_target_path" value="alert" checked=""> Alertas</label>*/
/*                      <label><input type="radio" name="_target_path" value="scada"> Scada</label><br>*/
/*                 <!--*/
/*                     <label><input type=checkbox value=1 name=recordar> Recordar Contraseña</label>*/
/*                 -->*/
/*                 </div>*/
/*                 <input  type="submit" class=ButtonEnter onclick=Login() value="Ingresar">*/
/*                 </form>*/
/*             </div>*/
/*             <div class=LoginInfo>Olvide mi contraseña &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necesito una cuenta*/
/*                 <div class=Respuesta id="respuesta">*/
/*         {% if error %}*/
/*             <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
