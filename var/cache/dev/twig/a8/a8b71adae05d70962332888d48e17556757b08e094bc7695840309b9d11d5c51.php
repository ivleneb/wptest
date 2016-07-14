<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7b15b067f2034b122eb1588ea621082a912dd321395fd045d7921d6302e39e02 extends Twig_Template
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
        $__internal_2052e2b40467f173d814174ef00f64b585eb46e0ef358d9facd67d54e676b7e7 = $this->env->getExtension("native_profiler");
        $__internal_2052e2b40467f173d814174ef00f64b585eb46e0ef358d9facd67d54e676b7e7->enter($__internal_2052e2b40467f173d814174ef00f64b585eb46e0ef358d9facd67d54e676b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2052e2b40467f173d814174ef00f64b585eb46e0ef358d9facd67d54e676b7e7->leave($__internal_2052e2b40467f173d814174ef00f64b585eb46e0ef358d9facd67d54e676b7e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
