<?php

/* wapo/about.html.twig */
class __TwigTemplate_946c16020009cd512ebc46220bd064a3507fe547f93a7deed141b95d9817d1fc extends Twig_Template
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
        $__internal_7a2652c191134ba10fc42ce4e651750f002b71f456770085bdff7c706fa92771 = $this->env->getExtension("native_profiler");
        $__internal_7a2652c191134ba10fc42ce4e651750f002b71f456770085bdff7c706fa92771->enter($__internal_7a2652c191134ba10fc42ce4e651750f002b71f456770085bdff7c706fa92771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2652c191134ba10fc42ce4e651750f002b71f456770085bdff7c706fa92771->leave($__internal_7a2652c191134ba10fc42ce4e651750f002b71f456770085bdff7c706fa92771_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd104ecfedcb2da4f82d4eff27a1fb3aee70fa2182e8a9165afff181587785a = $this->env->getExtension("native_profiler");
        $__internal_9bd104ecfedcb2da4f82d4eff27a1fb3aee70fa2182e8a9165afff181587785a->enter($__internal_9bd104ecfedcb2da4f82d4eff27a1fb3aee70fa2182e8a9165afff181587785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_9bd104ecfedcb2da4f82d4eff27a1fb3aee70fa2182e8a9165afff181587785a->leave($__internal_9bd104ecfedcb2da4f82d4eff27a1fb3aee70fa2182e8a9165afff181587785a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e29d0480b3c466d6fe075afa923dfd37beb824e901410ea2be68480f9e90857 = $this->env->getExtension("native_profiler");
        $__internal_8e29d0480b3c466d6fe075afa923dfd37beb824e901410ea2be68480f9e90857->enter($__internal_8e29d0480b3c466d6fe075afa923dfd37beb824e901410ea2be68480f9e90857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e29d0480b3c466d6fe075afa923dfd37beb824e901410ea2be68480f9e90857->leave($__internal_8e29d0480b3c466d6fe075afa923dfd37beb824e901410ea2be68480f9e90857_prof);

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
