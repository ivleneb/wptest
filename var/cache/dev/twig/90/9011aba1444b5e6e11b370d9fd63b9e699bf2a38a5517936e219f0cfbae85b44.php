<?php

/* wapo/index.html.twig */
class __TwigTemplate_cb0ada7681919d6b7384d372157fb21037f474fc1a8baf9639ed3f82c8a8acee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wapo/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_611e82816c49b3a08e5e5584374bb7a2e92a1dd9808592f1ebb99cb25c048ac8 = $this->env->getExtension("native_profiler");
        $__internal_611e82816c49b3a08e5e5584374bb7a2e92a1dd9808592f1ebb99cb25c048ac8->enter($__internal_611e82816c49b3a08e5e5584374bb7a2e92a1dd9808592f1ebb99cb25c048ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_611e82816c49b3a08e5e5584374bb7a2e92a1dd9808592f1ebb99cb25c048ac8->leave($__internal_611e82816c49b3a08e5e5584374bb7a2e92a1dd9808592f1ebb99cb25c048ac8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f843e33ea50f81eec488752c739aa4bf4741b310e4cfbc0b2cdfe36b5f426a7 = $this->env->getExtension("native_profiler");
        $__internal_3f843e33ea50f81eec488752c739aa4bf4741b310e4cfbc0b2cdfe36b5f426a7->enter($__internal_3f843e33ea50f81eec488752c739aa4bf4741b310e4cfbc0b2cdfe36b5f426a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_3f843e33ea50f81eec488752c739aa4bf4741b310e4cfbc0b2cdfe36b5f426a7->leave($__internal_3f843e33ea50f81eec488752c739aa4bf4741b310e4cfbc0b2cdfe36b5f426a7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b65f4223afe2d0ae3d557cfa4c4ff33265bca479dfa609bcf9d327a6adcbed5 = $this->env->getExtension("native_profiler");
        $__internal_5b65f4223afe2d0ae3d557cfa4c4ff33265bca479dfa609bcf9d327a6adcbed5->enter($__internal_5b65f4223afe2d0ae3d557cfa4c4ff33265bca479dfa609bcf9d327a6adcbed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"carousel-inner text-vertical-center\">
\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("river2.png"), "html", null, true);
        echo "\" class=\"col-md-12 img-responsive\" alt=\"Responsive image\" style=\"max-width: 100%;\">
\t\t<div class=\"carousel-caption\">
\t\t\t<h1 class=\"pacifico title1\">WAPOSAT</h1> 
\t\t\t<h2>Safe water 24 Hrs of day</h2>
\t\t\t<button type=\"button\" class=\"btn\"><a href=\"#\">Descubre más</a></button>\t\t\t
\t\t</div>
\t</div>  
";
        
        $__internal_5b65f4223afe2d0ae3d557cfa4c4ff33265bca479dfa609bcf9d327a6adcbed5->leave($__internal_5b65f4223afe2d0ae3d557cfa4c4ff33265bca479dfa609bcf9d327a6adcbed5_prof);

    }

    public function getTemplateName()
    {
        return "wapo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} WAPOSAT {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<div class="carousel-inner text-vertical-center">*/
/* 		<img src="{{ asset('river2.png') }}" class="col-md-12 img-responsive" alt="Responsive image" style="max-width: 100%;">*/
/* 		<div class="carousel-caption">*/
/* 			<h1 class="pacifico title1">WAPOSAT</h1> */
/* 			<h2>Safe water 24 Hrs of day</h2>*/
/* 			<button type="button" class="btn"><a href="#">Descubre más</a></button>			*/
/* 		</div>*/
/* 	</div>  */
/* {% endblock %}*/
/* */
/* */
