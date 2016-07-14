<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ef94b8cd93e002c70f2944b671a578a9bb58d85bc1fd9380f27bebe1858f592a extends Twig_Template
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
        $__internal_401a976a8e8857d5a0380d0f15485e42b9a2ca19c5d81623742373abc9e668f0 = $this->env->getExtension("native_profiler");
        $__internal_401a976a8e8857d5a0380d0f15485e42b9a2ca19c5d81623742373abc9e668f0->enter($__internal_401a976a8e8857d5a0380d0f15485e42b9a2ca19c5d81623742373abc9e668f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_401a976a8e8857d5a0380d0f15485e42b9a2ca19c5d81623742373abc9e668f0->leave($__internal_401a976a8e8857d5a0380d0f15485e42b9a2ca19c5d81623742373abc9e668f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
