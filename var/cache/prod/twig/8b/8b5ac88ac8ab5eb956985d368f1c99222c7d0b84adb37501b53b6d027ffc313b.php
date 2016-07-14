<?php

/* wapo/about.html.twig */
class __TwigTemplate_8d3f77eb5d79b59724232f31d78710c5b09df65515972c81271a214059c4d3f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wapo/about.html.twig", 1);
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
\t<h1><span class=\"label label-danger grumpy\">WAPOSAT > Acerca de Nosotros</span></h1>
\t<div class=\"text-center\" style=\"margin-top: 40px;\">
\t\t<h2 class=\"bg-info\">Misión</h2>
\t\t<p>Innovar, desarrollar y brindar productos y servicios tecnologicos de informacion en tiempo real de las condiciones reales del agua.</p>
\t\t<h2 class=\"bg-info\">Visión</h2>
\t\t<p>Ser una empresa tecnológica lider en el control y la mitigación de la contaminación del agua.</p>
\t</div> 
";
    }

    public function getTemplateName()
    {
        return "wapo/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} WAPOSAT {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<h1><span class="label label-danger grumpy">WAPOSAT > Acerca de Nosotros</span></h1>*/
/* 	<div class="text-center" style="margin-top: 40px;">*/
/* 		<h2 class="bg-info">Misión</h2>*/
/* 		<p>Innovar, desarrollar y brindar productos y servicios tecnologicos de informacion en tiempo real de las condiciones reales del agua.</p>*/
/* 		<h2 class="bg-info">Visión</h2>*/
/* 		<p>Ser una empresa tecnológica lider en el control y la mitigación de la contaminación del agua.</p>*/
/* 	</div> */
/* {% endblock %}*/
