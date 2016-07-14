<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_50e673d02009022db6df8241ebdd9eed4d987ce5c0a10a24fba8e6bd90ef99ec extends Twig_Template
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
        $__internal_b7468014c09f7bd50d3b0a16e327a0f15ee3f6fdeba43cf96b3a03f89a17c04a = $this->env->getExtension("native_profiler");
        $__internal_b7468014c09f7bd50d3b0a16e327a0f15ee3f6fdeba43cf96b3a03f89a17c04a->enter($__internal_b7468014c09f7bd50d3b0a16e327a0f15ee3f6fdeba43cf96b3a03f89a17c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b7468014c09f7bd50d3b0a16e327a0f15ee3f6fdeba43cf96b3a03f89a17c04a->leave($__internal_b7468014c09f7bd50d3b0a16e327a0f15ee3f6fdeba43cf96b3a03f89a17c04a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
