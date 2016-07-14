<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_06a95fc23ac636455f5b1086b45058778f726159c8f1bf8bc5d37ce46dc6e839 extends Twig_Template
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
        $__internal_bdff1af3f1440b3ab323b234c59e946ff6a40f3cc5769f76f278ade778c2b31e = $this->env->getExtension("native_profiler");
        $__internal_bdff1af3f1440b3ab323b234c59e946ff6a40f3cc5769f76f278ade778c2b31e->enter($__internal_bdff1af3f1440b3ab323b234c59e946ff6a40f3cc5769f76f278ade778c2b31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bdff1af3f1440b3ab323b234c59e946ff6a40f3cc5769f76f278ade778c2b31e->leave($__internal_bdff1af3f1440b3ab323b234c59e946ff6a40f3cc5769f76f278ade778c2b31e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
