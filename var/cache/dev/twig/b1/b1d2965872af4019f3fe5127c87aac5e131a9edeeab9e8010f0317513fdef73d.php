<?php

/* :wapo:freestations.html.twig */
class __TwigTemplate_d669d9b191e22e4458020637f2b22fd28ff7fd00bbe078a36270a2471b4a42b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wapo:freestations.html.twig", 1);
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
        $__internal_49df0c9689b0e5043c8b88c9a4858d63d0c734867855a2bec526c061767cd6e8 = $this->env->getExtension("native_profiler");
        $__internal_49df0c9689b0e5043c8b88c9a4858d63d0c734867855a2bec526c061767cd6e8->enter($__internal_49df0c9689b0e5043c8b88c9a4858d63d0c734867855a2bec526c061767cd6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wapo:freestations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49df0c9689b0e5043c8b88c9a4858d63d0c734867855a2bec526c061767cd6e8->leave($__internal_49df0c9689b0e5043c8b88c9a4858d63d0c734867855a2bec526c061767cd6e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f9146c93f729b69d5c12c6d15fbf56eecb5a653c73e10e331515586ecba8a78 = $this->env->getExtension("native_profiler");
        $__internal_0f9146c93f729b69d5c12c6d15fbf56eecb5a653c73e10e331515586ecba8a78->enter($__internal_0f9146c93f729b69d5c12c6d15fbf56eecb5a653c73e10e331515586ecba8a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_0f9146c93f729b69d5c12c6d15fbf56eecb5a653c73e10e331515586ecba8a78->leave($__internal_0f9146c93f729b69d5c12c6d15fbf56eecb5a653c73e10e331515586ecba8a78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c842e2d0ee8cc9f2f01a20f0c60f5161aa46fa598fa543542184f77bc47407b = $this->env->getExtension("native_profiler");
        $__internal_7c842e2d0ee8cc9f2f01a20f0c60f5161aa46fa598fa543542184f77bc47407b->enter($__internal_7c842e2d0ee8cc9f2f01a20f0c60f5161aa46fa598fa543542184f77bc47407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1><span class=\"label label-info grumpy\">WAPOSAT > Estaciones libres</span></h1>  
\t<div  class=\"text-center\" style=\"margin-top: 30px\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.4723534452255!2d-77.05093360000707!3d-12.010967824177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1458608154398\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
";
        
        $__internal_7c842e2d0ee8cc9f2f01a20f0c60f5161aa46fa598fa543542184f77bc47407b->leave($__internal_7c842e2d0ee8cc9f2f01a20f0c60f5161aa46fa598fa543542184f77bc47407b_prof);

    }

    public function getTemplateName()
    {
        return ":wapo:freestations.html.twig";
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
