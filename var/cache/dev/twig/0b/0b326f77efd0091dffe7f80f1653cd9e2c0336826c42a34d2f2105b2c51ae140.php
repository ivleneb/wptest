<?php

/* wapo/index.html.twig */
class __TwigTemplate_577d41f982700ebae8a08292af7d7b9076fa89a82605784e2de508af3fc3d597 extends Twig_Template
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
        $__internal_56f5aa602883ac5e177fa2ae08a69d4d57256b1c22038ec35176bb0fa7cec58a = $this->env->getExtension("native_profiler");
        $__internal_56f5aa602883ac5e177fa2ae08a69d4d57256b1c22038ec35176bb0fa7cec58a->enter($__internal_56f5aa602883ac5e177fa2ae08a69d4d57256b1c22038ec35176bb0fa7cec58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f5aa602883ac5e177fa2ae08a69d4d57256b1c22038ec35176bb0fa7cec58a->leave($__internal_56f5aa602883ac5e177fa2ae08a69d4d57256b1c22038ec35176bb0fa7cec58a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e191e090e26045207c2029c3a528c10a01daea240495252d288fc74f3a687907 = $this->env->getExtension("native_profiler");
        $__internal_e191e090e26045207c2029c3a528c10a01daea240495252d288fc74f3a687907->enter($__internal_e191e090e26045207c2029c3a528c10a01daea240495252d288fc74f3a687907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_e191e090e26045207c2029c3a528c10a01daea240495252d288fc74f3a687907->leave($__internal_e191e090e26045207c2029c3a528c10a01daea240495252d288fc74f3a687907_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c66d12abb794eb6f30be06d076338f1d200259dff1b18a719d7e36d11fa69d88 = $this->env->getExtension("native_profiler");
        $__internal_c66d12abb794eb6f30be06d076338f1d200259dff1b18a719d7e36d11fa69d88->enter($__internal_c66d12abb794eb6f30be06d076338f1d200259dff1b18a719d7e36d11fa69d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c66d12abb794eb6f30be06d076338f1d200259dff1b18a719d7e36d11fa69d88->leave($__internal_c66d12abb794eb6f30be06d076338f1d200259dff1b18a719d7e36d11fa69d88_prof);

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
