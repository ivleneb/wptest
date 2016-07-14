<?php

/* wapo/index.html.twig */
class __TwigTemplate_1a4a4db2646fef77c53cde78849aa5611af75f3c54470f31a1161729ede02ceb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " WAPOSAT ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        return array (  44 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
