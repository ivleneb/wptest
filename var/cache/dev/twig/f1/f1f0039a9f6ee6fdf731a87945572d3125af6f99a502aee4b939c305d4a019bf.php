<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_584d24baa340404201f02468b7ef397e46674c4bbed8b18e382b10aca958fae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d9d638514529ff2ab53f795a761f507721d10c937f9b1edbefa6564ba629151 = $this->env->getExtension("native_profiler");
        $__internal_4d9d638514529ff2ab53f795a761f507721d10c937f9b1edbefa6564ba629151->enter($__internal_4d9d638514529ff2ab53f795a761f507721d10c937f9b1edbefa6564ba629151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d9d638514529ff2ab53f795a761f507721d10c937f9b1edbefa6564ba629151->leave($__internal_4d9d638514529ff2ab53f795a761f507721d10c937f9b1edbefa6564ba629151_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_96cf07b83426e1393c63423dae92b816761d4cbe58fd4eac8dfa8809731c7747 = $this->env->getExtension("native_profiler");
        $__internal_96cf07b83426e1393c63423dae92b816761d4cbe58fd4eac8dfa8809731c7747->enter($__internal_96cf07b83426e1393c63423dae92b816761d4cbe58fd4eac8dfa8809731c7747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_96cf07b83426e1393c63423dae92b816761d4cbe58fd4eac8dfa8809731c7747->leave($__internal_96cf07b83426e1393c63423dae92b816761d4cbe58fd4eac8dfa8809731c7747_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
