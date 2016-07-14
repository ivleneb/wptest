<?php

/* footer.html.twig */
class __TwigTemplate_20a3de55201e301c47941a5304b97aa80d90700d3d3fee3913de32b3ea07f1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468976fb0e8f10fa995d15377c86da8a62a3566b5f3359dc12e827331953b335 = $this->env->getExtension("native_profiler");
        $__internal_468976fb0e8f10fa995d15377c86da8a62a3566b5f3359dc12e827331953b335->enter($__internal_468976fb0e8f10fa995d15377c86da8a62a3566b5f3359dc12e827331953b335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"text-center col-md-12 inline-block\" style=\"margin-top: 25px\">
\t<nav>
        <ul class=\"nav navbar-nav center-block\" style=\"float: none;\">
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_wapo_index");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_wapo_about");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Acerca", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_wapo_contact");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contáctanos", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("app_wapo_freestations");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Estaciones libres", array(), "messages");
        echo " </a></li>
        </ul>
\t</nav>
\t<div class=\"col-md-12 bg-primary\">
\t\t<h4>© All Rights Reserved</h4>
\t</div>
</footer>";
        
        $__internal_468976fb0e8f10fa995d15377c86da8a62a3566b5f3359dc12e827331953b335->leave($__internal_468976fb0e8f10fa995d15377c86da8a62a3566b5f3359dc12e827331953b335_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  39 => 6,  33 => 5,  27 => 4,  22 => 1,);
    }
}
/* <footer class="text-center col-md-12 inline-block" style="margin-top: 25px">*/
/* 	<nav>*/
/*         <ul class="nav navbar-nav center-block" style="float: none;">*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_wapo_index') }}"> {% trans %} Inicio {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_wapo_about') }}"> {% trans %} Acerca {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_wapo_contact') }}"> {% trans %} Contáctanos {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_wapo_freestations') }}"> {% trans %} Estaciones libres {% endtrans %} </a></li>*/
/*         </ul>*/
/* 	</nav>*/
/* 	<div class="col-md-12 bg-primary">*/
/* 		<h4>© All Rights Reserved</h4>*/
/* 	</div>*/
/* </footer>*/
