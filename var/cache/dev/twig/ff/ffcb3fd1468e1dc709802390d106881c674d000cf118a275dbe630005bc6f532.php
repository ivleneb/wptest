<?php

/* footer.html.twig */
class __TwigTemplate_d23339e92ff827e4ee0405ed623f40278ad505351dc77f2a9a34835faeecac69 extends Twig_Template
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
        $__internal_333d96335747766fa63c8d2edf58c6c38e3d3e0b9b3d4dc9e6900e94ccde0ce9 = $this->env->getExtension("native_profiler");
        $__internal_333d96335747766fa63c8d2edf58c6c38e3d3e0b9b3d4dc9e6900e94ccde0ce9->enter($__internal_333d96335747766fa63c8d2edf58c6c38e3d3e0b9b3d4dc9e6900e94ccde0ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"text-center col-md-12 inline-block\" style=\"margin-top: 25px\">
\t<nav>
        <ul class=\"nav navbar-nav center-block\" style=\"float: none;\">
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_view_index");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_view_about");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Acerca", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_view_contact");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contáctanos", array(), "messages");
        echo " </a></li>
\t        <li style=\"float: none;display: inline-block; text-align: center;\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("app_view_freestations");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Estaciones libres", array(), "messages");
        echo " </a></li>
        </ul>
\t</nav>
\t<div class=\"col-md-12 bg-primary\">
\t\t<h4>© All Rights Reserved</h4>
\t</div>
</footer>";
        
        $__internal_333d96335747766fa63c8d2edf58c6c38e3d3e0b9b3d4dc9e6900e94ccde0ce9->leave($__internal_333d96335747766fa63c8d2edf58c6c38e3d3e0b9b3d4dc9e6900e94ccde0ce9_prof);

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
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_view_index') }}"> {% trans %} Inicio {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_view_about') }}"> {% trans %} Acerca {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_view_contact') }}"> {% trans %} Contáctanos {% endtrans %} </a></li>*/
/* 	        <li style="float: none;display: inline-block; text-align: center;"><a href="{{ path('app_view_freestations') }}"> {% trans %} Estaciones libres {% endtrans %} </a></li>*/
/*         </ul>*/
/* 	</nav>*/
/* 	<div class="col-md-12 bg-primary">*/
/* 		<h4>© All Rights Reserved</h4>*/
/* 	</div>*/
/* </footer>*/
