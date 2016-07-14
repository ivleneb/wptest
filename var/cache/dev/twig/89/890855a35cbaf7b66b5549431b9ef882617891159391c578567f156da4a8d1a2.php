<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_92885ff7b03ee4bba8a9419c18a1f88f5b04a65467d379d69ab0d0557994fbca extends Twig_Template
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
        $__internal_eefab1ccbef3804c3b98e9fd138270d40063d04f82672d936e0d4193962a05e8 = $this->env->getExtension("native_profiler");
        $__internal_eefab1ccbef3804c3b98e9fd138270d40063d04f82672d936e0d4193962a05e8->enter($__internal_eefab1ccbef3804c3b98e9fd138270d40063d04f82672d936e0d4193962a05e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_eefab1ccbef3804c3b98e9fd138270d40063d04f82672d936e0d4193962a05e8->leave($__internal_eefab1ccbef3804c3b98e9fd138270d40063d04f82672d936e0d4193962a05e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
