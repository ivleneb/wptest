<?php

/* wapo/freestations.html.twig */
class __TwigTemplate_1d84e52322a5d19e44ff55febec6b441f5a0f4075b6b80de487cc5ffb767961b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wapo/freestations.html.twig", 1);
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
\t<h1><span class=\"label label-info grumpy\">WAPOSAT > Estaciones libres</span></h1>  
\t<div  class=\"text-center\" style=\"margin-top: 30px\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.4723534452255!2d-77.05093360000707!3d-12.010967824177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1458608154398\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "wapo/freestations.html.twig";
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
/* 	<h1><span class="label label-info grumpy">WAPOSAT > Estaciones libres</span></h1>  */
/* 	<div  class="text-center" style="margin-top: 30px">*/
/* 		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.4723534452255!2d-77.05093360000707!3d-12.010967824177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1458608154398" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/* 	</div>*/
/* {% endblock %}*/
