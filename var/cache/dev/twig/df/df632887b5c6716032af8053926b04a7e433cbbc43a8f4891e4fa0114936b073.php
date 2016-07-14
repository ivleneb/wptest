<?php

/* wapo/freestations.html.twig */
class __TwigTemplate_305c41dd572434d1eef7bc9bcb305ca1e0f566d42a33b0c98495d6ed2fb14ca7 extends Twig_Template
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
        $__internal_55d34f4a513b566cb60f143cf8ab5567d73587204f6c1eccac16c5d885118980 = $this->env->getExtension("native_profiler");
        $__internal_55d34f4a513b566cb60f143cf8ab5567d73587204f6c1eccac16c5d885118980->enter($__internal_55d34f4a513b566cb60f143cf8ab5567d73587204f6c1eccac16c5d885118980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/freestations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d34f4a513b566cb60f143cf8ab5567d73587204f6c1eccac16c5d885118980->leave($__internal_55d34f4a513b566cb60f143cf8ab5567d73587204f6c1eccac16c5d885118980_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5b2702d8fc984cc3563538c8e1cac90f23a50f57356e95e5c9fd72f7142d224 = $this->env->getExtension("native_profiler");
        $__internal_a5b2702d8fc984cc3563538c8e1cac90f23a50f57356e95e5c9fd72f7142d224->enter($__internal_a5b2702d8fc984cc3563538c8e1cac90f23a50f57356e95e5c9fd72f7142d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_a5b2702d8fc984cc3563538c8e1cac90f23a50f57356e95e5c9fd72f7142d224->leave($__internal_a5b2702d8fc984cc3563538c8e1cac90f23a50f57356e95e5c9fd72f7142d224_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1701a3cafad29e3ab01126d6598b28327f7c3bc623105b681ba7078e66ff9d80 = $this->env->getExtension("native_profiler");
        $__internal_1701a3cafad29e3ab01126d6598b28327f7c3bc623105b681ba7078e66ff9d80->enter($__internal_1701a3cafad29e3ab01126d6598b28327f7c3bc623105b681ba7078e66ff9d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1><span class=\"label label-info grumpy\">WAPOSAT > Estaciones libres</span></h1>  
\t<div  class=\"text-center\" style=\"margin-top: 30px\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3902.4723534452255!2d-77.05093360000707!3d-12.010967824177081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1458608154398\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
";
        
        $__internal_1701a3cafad29e3ab01126d6598b28327f7c3bc623105b681ba7078e66ff9d80->leave($__internal_1701a3cafad29e3ab01126d6598b28327f7c3bc623105b681ba7078e66ff9d80_prof);

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
