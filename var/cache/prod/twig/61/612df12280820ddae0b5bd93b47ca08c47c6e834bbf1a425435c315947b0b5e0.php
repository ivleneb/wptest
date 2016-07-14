<?php

/* menu.html.twig */
class __TwigTemplate_49b4065d806755e214ad2e7204637742f5d359af4df8025ea6592635899a3c2c extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
        \t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Gota_Waposat_117x147.png"), "html", null, true);
        echo "\" width=\"45\" height=\"45\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("app_wapo_index");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("WAPOSAT", array(), "messages");
        echo " </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse pull-right\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Menú", array(), "messages");
        echo "  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("app_wapo_index");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
        echo " </a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("app_wapo_about");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Acerca", array(), "messages");
        echo " </a></li>
                      \t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("app_wapo_contact");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contáctanos", array(), "messages");
        echo " </a></li>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("app_wapo_freestations");
        echo "\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Estaciones libres", array(), "messages");
        echo " </a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  64 => 23,  58 => 22,  52 => 21,  47 => 19,  35 => 12,  25 => 5,  19 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*         	<img src="{{ asset('Gota_Waposat_117x147.png') }}" width="45" height="45">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_wapo_index') }}"> {% trans %} WAPOSAT {% endtrans %} </a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {% trans %} Menú {% endtrans %}  <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('app_wapo_index') }}"> {% trans %} Inicio {% endtrans %} </a></li>*/
/*                         <li><a href="{{ path('app_wapo_about') }}"> {% trans %} Acerca {% endtrans %} </a></li>*/
/*                       	<li><a href="{{ path('app_wapo_contact') }}"> {% trans %} Contáctanos {% endtrans %} </a></li>*/
/*                         <li><a href="{{ path('app_wapo_freestations') }}"> {% trans %} Estaciones libres {% endtrans %} </a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
