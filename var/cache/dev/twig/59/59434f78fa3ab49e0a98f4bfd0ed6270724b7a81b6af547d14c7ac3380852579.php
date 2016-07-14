<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_355e29f0c9da045acba7f3b762a7380befbe19f0c14b5274a921aade81639b3f extends Twig_Template
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
        $__internal_7cf85ecda36c71a222d94ee8172fd1b65cd0900ea61126728021871c1cc4dd36 = $this->env->getExtension("native_profiler");
        $__internal_7cf85ecda36c71a222d94ee8172fd1b65cd0900ea61126728021871c1cc4dd36->enter($__internal_7cf85ecda36c71a222d94ee8172fd1b65cd0900ea61126728021871c1cc4dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7cf85ecda36c71a222d94ee8172fd1b65cd0900ea61126728021871c1cc4dd36->leave($__internal_7cf85ecda36c71a222d94ee8172fd1b65cd0900ea61126728021871c1cc4dd36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
