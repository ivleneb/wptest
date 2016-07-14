<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4ad1bba29b48d176bb46e5fc0109f23982e5e58c66f070c8ea11e13eebae6900 extends Twig_Template
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
        $__internal_9f935599bd42e9a9ba3c86ba1451f880b5cf54e8f4d2f163250a3d6d92ba83f9 = $this->env->getExtension("native_profiler");
        $__internal_9f935599bd42e9a9ba3c86ba1451f880b5cf54e8f4d2f163250a3d6d92ba83f9->enter($__internal_9f935599bd42e9a9ba3c86ba1451f880b5cf54e8f4d2f163250a3d6d92ba83f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9f935599bd42e9a9ba3c86ba1451f880b5cf54e8f4d2f163250a3d6d92ba83f9->leave($__internal_9f935599bd42e9a9ba3c86ba1451f880b5cf54e8f4d2f163250a3d6d92ba83f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
