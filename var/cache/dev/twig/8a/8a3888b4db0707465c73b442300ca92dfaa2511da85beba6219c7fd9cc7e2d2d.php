<?php

/* wapo/index.html.twig */
class __TwigTemplate_138fbdce2650ac8902a6501eb7df9e7def45d302823488aaed576979c3172bff extends Twig_Template
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
        $__internal_bd6b5e01f6c8c315d1039306455098eebcdfc2ab7fbe88c96122ccb2acda4deb = $this->env->getExtension("native_profiler");
        $__internal_bd6b5e01f6c8c315d1039306455098eebcdfc2ab7fbe88c96122ccb2acda4deb->enter($__internal_bd6b5e01f6c8c315d1039306455098eebcdfc2ab7fbe88c96122ccb2acda4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6b5e01f6c8c315d1039306455098eebcdfc2ab7fbe88c96122ccb2acda4deb->leave($__internal_bd6b5e01f6c8c315d1039306455098eebcdfc2ab7fbe88c96122ccb2acda4deb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83452b038685e28aa1da4058bb6fb17051cb3e8bb47e0512aebf852a05d6dd2 = $this->env->getExtension("native_profiler");
        $__internal_b83452b038685e28aa1da4058bb6fb17051cb3e8bb47e0512aebf852a05d6dd2->enter($__internal_b83452b038685e28aa1da4058bb6fb17051cb3e8bb47e0512aebf852a05d6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_b83452b038685e28aa1da4058bb6fb17051cb3e8bb47e0512aebf852a05d6dd2->leave($__internal_b83452b038685e28aa1da4058bb6fb17051cb3e8bb47e0512aebf852a05d6dd2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa5333c08790a4b5ce38e36207b37a639bac45bbc517e69583042ace7da9a76 = $this->env->getExtension("native_profiler");
        $__internal_afa5333c08790a4b5ce38e36207b37a639bac45bbc517e69583042ace7da9a76->enter($__internal_afa5333c08790a4b5ce38e36207b37a639bac45bbc517e69583042ace7da9a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afa5333c08790a4b5ce38e36207b37a639bac45bbc517e69583042ace7da9a76->leave($__internal_afa5333c08790a4b5ce38e36207b37a639bac45bbc517e69583042ace7da9a76_prof);

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
