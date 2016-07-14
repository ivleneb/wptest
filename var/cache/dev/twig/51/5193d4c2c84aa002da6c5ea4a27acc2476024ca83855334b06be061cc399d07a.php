<?php

/* :wapo:about.html.twig */
class __TwigTemplate_01c63c396338811d4bcb6a88d8214b198e798b64c93d9536e2e01a0346f10632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wapo:about.html.twig", 1);
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
        $__internal_234ac9d653246474f72948c9384c00b1f0471334df6a4029acb0ae4486c105c4 = $this->env->getExtension("native_profiler");
        $__internal_234ac9d653246474f72948c9384c00b1f0471334df6a4029acb0ae4486c105c4->enter($__internal_234ac9d653246474f72948c9384c00b1f0471334df6a4029acb0ae4486c105c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wapo:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234ac9d653246474f72948c9384c00b1f0471334df6a4029acb0ae4486c105c4->leave($__internal_234ac9d653246474f72948c9384c00b1f0471334df6a4029acb0ae4486c105c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c412619ec6b12ce04e3652bbb605958b8a0af5c3f435079b4a77a89f6d95290 = $this->env->getExtension("native_profiler");
        $__internal_2c412619ec6b12ce04e3652bbb605958b8a0af5c3f435079b4a77a89f6d95290->enter($__internal_2c412619ec6b12ce04e3652bbb605958b8a0af5c3f435079b4a77a89f6d95290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_2c412619ec6b12ce04e3652bbb605958b8a0af5c3f435079b4a77a89f6d95290->leave($__internal_2c412619ec6b12ce04e3652bbb605958b8a0af5c3f435079b4a77a89f6d95290_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15351bd5d7416e3d3b584e0ea72a6b5da6d905ddb0274061d97c391db3d3a007 = $this->env->getExtension("native_profiler");
        $__internal_15351bd5d7416e3d3b584e0ea72a6b5da6d905ddb0274061d97c391db3d3a007->enter($__internal_15351bd5d7416e3d3b584e0ea72a6b5da6d905ddb0274061d97c391db3d3a007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15351bd5d7416e3d3b584e0ea72a6b5da6d905ddb0274061d97c391db3d3a007->leave($__internal_15351bd5d7416e3d3b584e0ea72a6b5da6d905ddb0274061d97c391db3d3a007_prof);

    }

    public function getTemplateName()
    {
        return ":wapo:about.html.twig";
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
/* 	<h1><span class="label label-danger grumpy">WAPOSAT > Acerca de Nosotros</span></h1>*/
/* 	<div class="text-center" style="margin-top: 40px;">*/
/* 		<h2 class="bg-info">Misión</h2>*/
/* 		<p>Innovar, desarrollar y brindar productos y servicios tecnologicos de informacion en tiempo real de las condiciones reales del agua.</p>*/
/* 		<h2 class="bg-info">Visión</h2>*/
/* 		<p>Ser una empresa tecnológica lider en el control y la mitigación de la contaminación del agua.</p>*/
/* 	</div> */
/* {% endblock %}*/
