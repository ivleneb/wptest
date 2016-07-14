<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e2992cc6af1c1cc558e2df3c50f12578e77c8f8113f74155b7bfe3c8fb1dfa29 extends Twig_Template
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
        $__internal_4061db76bc2e121b89098c4a0e971c9093e7c4ccb0e75b8e631d96a50df59b11 = $this->env->getExtension("native_profiler");
        $__internal_4061db76bc2e121b89098c4a0e971c9093e7c4ccb0e75b8e631d96a50df59b11->enter($__internal_4061db76bc2e121b89098c4a0e971c9093e7c4ccb0e75b8e631d96a50df59b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4061db76bc2e121b89098c4a0e971c9093e7c4ccb0e75b8e631d96a50df59b11->leave($__internal_4061db76bc2e121b89098c4a0e971c9093e7c4ccb0e75b8e631d96a50df59b11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
