<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_182457f536daf435e1083fbf24dfe2545e57a628f73efc504a3034488f779908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2b95765e02e3b9f6effe2cb8fd3b59be4d99fce46a5729be74be9badbb30763 = $this->env->getExtension("native_profiler");
        $__internal_b2b95765e02e3b9f6effe2cb8fd3b59be4d99fce46a5729be74be9badbb30763->enter($__internal_b2b95765e02e3b9f6effe2cb8fd3b59be4d99fce46a5729be74be9badbb30763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b95765e02e3b9f6effe2cb8fd3b59be4d99fce46a5729be74be9badbb30763->leave($__internal_b2b95765e02e3b9f6effe2cb8fd3b59be4d99fce46a5729be74be9badbb30763_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba853b9165ca66370837d96d9860540154a3a8b92f21388b43381141d226bf2a = $this->env->getExtension("native_profiler");
        $__internal_ba853b9165ca66370837d96d9860540154a3a8b92f21388b43381141d226bf2a->enter($__internal_ba853b9165ca66370837d96d9860540154a3a8b92f21388b43381141d226bf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba853b9165ca66370837d96d9860540154a3a8b92f21388b43381141d226bf2a->leave($__internal_ba853b9165ca66370837d96d9860540154a3a8b92f21388b43381141d226bf2a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_271e73b7e3119531c0e072db0b109af3358f1d5b7b969a5c3282bbe9c30d8a36 = $this->env->getExtension("native_profiler");
        $__internal_271e73b7e3119531c0e072db0b109af3358f1d5b7b969a5c3282bbe9c30d8a36->enter($__internal_271e73b7e3119531c0e072db0b109af3358f1d5b7b969a5c3282bbe9c30d8a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_271e73b7e3119531c0e072db0b109af3358f1d5b7b969a5c3282bbe9c30d8a36->leave($__internal_271e73b7e3119531c0e072db0b109af3358f1d5b7b969a5c3282bbe9c30d8a36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
