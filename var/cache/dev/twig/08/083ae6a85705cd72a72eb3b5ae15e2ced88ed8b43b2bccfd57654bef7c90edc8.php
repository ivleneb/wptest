<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e080ae786c4a2da856e244e98972cd2da1652fa2eaac3051c7774fb5dbf3d8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2f922bdb4fdf5b603293d27dfb2d5ac43c87379be36d079d6933c6d350f6bc9 = $this->env->getExtension("native_profiler");
        $__internal_d2f922bdb4fdf5b603293d27dfb2d5ac43c87379be36d079d6933c6d350f6bc9->enter($__internal_d2f922bdb4fdf5b603293d27dfb2d5ac43c87379be36d079d6933c6d350f6bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d2f922bdb4fdf5b603293d27dfb2d5ac43c87379be36d079d6933c6d350f6bc9->leave($__internal_d2f922bdb4fdf5b603293d27dfb2d5ac43c87379be36d079d6933c6d350f6bc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
