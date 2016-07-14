<?php

/* wapo/about.html.twig */
class __TwigTemplate_a809e051b08f7f5f920cb802165388aeae5d844ce919d62ed345ff4baf84f806 extends Twig_Template
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
        $__internal_08e8b2c6b44a5f46b482d5541abf86f449be914bed67c4c33689078cd70a43c9 = $this->env->getExtension("native_profiler");
        $__internal_08e8b2c6b44a5f46b482d5541abf86f449be914bed67c4c33689078cd70a43c9->enter($__internal_08e8b2c6b44a5f46b482d5541abf86f449be914bed67c4c33689078cd70a43c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wapo/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e8b2c6b44a5f46b482d5541abf86f449be914bed67c4c33689078cd70a43c9->leave($__internal_08e8b2c6b44a5f46b482d5541abf86f449be914bed67c4c33689078cd70a43c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e792eb71912ed9ae8843fc4737273aae8337053bbec8971d80b463ef741bdd18 = $this->env->getExtension("native_profiler");
        $__internal_e792eb71912ed9ae8843fc4737273aae8337053bbec8971d80b463ef741bdd18->enter($__internal_e792eb71912ed9ae8843fc4737273aae8337053bbec8971d80b463ef741bdd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_e792eb71912ed9ae8843fc4737273aae8337053bbec8971d80b463ef741bdd18->leave($__internal_e792eb71912ed9ae8843fc4737273aae8337053bbec8971d80b463ef741bdd18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede61c0cfac6052ceb6ecdc98774f0f03435142becc3a9b26098a36faff2ace5 = $this->env->getExtension("native_profiler");
        $__internal_ede61c0cfac6052ceb6ecdc98774f0f03435142becc3a9b26098a36faff2ace5->enter($__internal_ede61c0cfac6052ceb6ecdc98774f0f03435142becc3a9b26098a36faff2ace5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ede61c0cfac6052ceb6ecdc98774f0f03435142becc3a9b26098a36faff2ace5->leave($__internal_ede61c0cfac6052ceb6ecdc98774f0f03435142becc3a9b26098a36faff2ace5_prof);

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
