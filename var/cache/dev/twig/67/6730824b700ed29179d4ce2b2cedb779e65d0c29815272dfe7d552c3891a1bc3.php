<?php

/* wapo/freestations.html.twig */
class __TwigTemplate_0b190443e37e78c217fa3173b90fba318424f79f6cb07280d22afa517ba993b7 extends Twig_Template
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
        $__internal_47db1383997299a69c54c782fb93ef1fae757b51337ac0c68acb72e3123c2187 = $this->env->getExtension("native_profiler");
        $__internal_47db1383997299a69c54c782fb93ef1fae757b51337ac0c68acb72e3123c2187->enter($__internal_47db1383997299a69c54c782fb93ef1fae757b51337ac0c68acb72e3123c2187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/freestations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47db1383997299a69c54c782fb93ef1fae757b51337ac0c68acb72e3123c2187->leave($__internal_47db1383997299a69c54c782fb93ef1fae757b51337ac0c68acb72e3123c2187_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a06682d099faf5d996e37de16bcd2039eb9c3cb96e0dda5340fbe26a748cbdac = $this->env->getExtension("native_profiler");
        $__internal_a06682d099faf5d996e37de16bcd2039eb9c3cb96e0dda5340fbe26a748cbdac->enter($__internal_a06682d099faf5d996e37de16bcd2039eb9c3cb96e0dda5340fbe26a748cbdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_a06682d099faf5d996e37de16bcd2039eb9c3cb96e0dda5340fbe26a748cbdac->leave($__internal_a06682d099faf5d996e37de16bcd2039eb9c3cb96e0dda5340fbe26a748cbdac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b66b34da1eab1b0e5f0c56a372c1aada54f7737712883cb4c9285f4207e3f1 = $this->env->getExtension("native_profiler");
        $__internal_90b66b34da1eab1b0e5f0c56a372c1aada54f7737712883cb4c9285f4207e3f1->enter($__internal_90b66b34da1eab1b0e5f0c56a372c1aada54f7737712883cb4c9285f4207e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1><span class=\"label label-info grumpy\">WAPOSAT > Estaciones libres</span></h1>  
\t<div  class=\"text-center\" style=\"margin-top: 30px\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.4723534452255!2d-77.05093360000707!3d-12.010967824177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1458608154398\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
";
        
        $__internal_90b66b34da1eab1b0e5f0c56a372c1aada54f7737712883cb4c9285f4207e3f1->leave($__internal_90b66b34da1eab1b0e5f0c56a372c1aada54f7737712883cb4c9285f4207e3f1_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
