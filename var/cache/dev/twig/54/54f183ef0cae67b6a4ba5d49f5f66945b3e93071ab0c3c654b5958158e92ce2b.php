<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5181f99622e6bdbd9dcb5b97f5009bff8e9c53b69dcd116219348c9ca661c129 extends Twig_Template
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
        $__internal_1d085802d7808f92c0fdbd778caba1c8769732124103ca8ce168d2495f2b17ca = $this->env->getExtension("native_profiler");
        $__internal_1d085802d7808f92c0fdbd778caba1c8769732124103ca8ce168d2495f2b17ca->enter($__internal_1d085802d7808f92c0fdbd778caba1c8769732124103ca8ce168d2495f2b17ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d085802d7808f92c0fdbd778caba1c8769732124103ca8ce168d2495f2b17ca->leave($__internal_1d085802d7808f92c0fdbd778caba1c8769732124103ca8ce168d2495f2b17ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
