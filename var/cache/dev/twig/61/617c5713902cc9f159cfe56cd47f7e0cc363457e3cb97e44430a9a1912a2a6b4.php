<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_de754ba47e0010f06d5d6e5cf228e111075647f3c7ccb591a6e03f868220c0cb extends Twig_Template
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
        $__internal_80769af6d1a09b84da5f16f7441ebfe8df4279a2e321b96b35f596cf677cf871 = $this->env->getExtension("native_profiler");
        $__internal_80769af6d1a09b84da5f16f7441ebfe8df4279a2e321b96b35f596cf677cf871->enter($__internal_80769af6d1a09b84da5f16f7441ebfe8df4279a2e321b96b35f596cf677cf871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_80769af6d1a09b84da5f16f7441ebfe8df4279a2e321b96b35f596cf677cf871->leave($__internal_80769af6d1a09b84da5f16f7441ebfe8df4279a2e321b96b35f596cf677cf871_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
