<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_50e336f4e9b257d537410588fb2c2d69721dc240be0a93e1d68eff9ec699f6cb extends Twig_Template
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
        $__internal_98d9f3d45195da1b8ec73c30c8d2ab6341561de9986ba61ef67562bdd7e7b3f1 = $this->env->getExtension("native_profiler");
        $__internal_98d9f3d45195da1b8ec73c30c8d2ab6341561de9986ba61ef67562bdd7e7b3f1->enter($__internal_98d9f3d45195da1b8ec73c30c8d2ab6341561de9986ba61ef67562bdd7e7b3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_98d9f3d45195da1b8ec73c30c8d2ab6341561de9986ba61ef67562bdd7e7b3f1->leave($__internal_98d9f3d45195da1b8ec73c30c8d2ab6341561de9986ba61ef67562bdd7e7b3f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
