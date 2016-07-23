<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a4674a11829f20b8a9d4bc61c528554e8f94d3a703c6d471ef3a42a056fb89ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f69d6fc7fc4c5f6dcd176247256a060378505bad453401cd5916530b8594edbb = $this->env->getExtension("native_profiler");
        $__internal_f69d6fc7fc4c5f6dcd176247256a060378505bad453401cd5916530b8594edbb->enter($__internal_f69d6fc7fc4c5f6dcd176247256a060378505bad453401cd5916530b8594edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69d6fc7fc4c5f6dcd176247256a060378505bad453401cd5916530b8594edbb->leave($__internal_f69d6fc7fc4c5f6dcd176247256a060378505bad453401cd5916530b8594edbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fbbf1e2c728ffc786f58a271293fb9f6611a472fd9fc3334cd6631854ad7476 = $this->env->getExtension("native_profiler");
        $__internal_5fbbf1e2c728ffc786f58a271293fb9f6611a472fd9fc3334cd6631854ad7476->enter($__internal_5fbbf1e2c728ffc786f58a271293fb9f6611a472fd9fc3334cd6631854ad7476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fbbf1e2c728ffc786f58a271293fb9f6611a472fd9fc3334cd6631854ad7476->leave($__internal_5fbbf1e2c728ffc786f58a271293fb9f6611a472fd9fc3334cd6631854ad7476_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4757306b7e63d4557520abf782faf3f53ddc62259113e7eab4a90c5489793999 = $this->env->getExtension("native_profiler");
        $__internal_4757306b7e63d4557520abf782faf3f53ddc62259113e7eab4a90c5489793999->enter($__internal_4757306b7e63d4557520abf782faf3f53ddc62259113e7eab4a90c5489793999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4757306b7e63d4557520abf782faf3f53ddc62259113e7eab4a90c5489793999->leave($__internal_4757306b7e63d4557520abf782faf3f53ddc62259113e7eab4a90c5489793999_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66b1c800f2d0b5a4bad13e9c1a2a7a2d19e1267683050ad23816896ab8b456f5 = $this->env->getExtension("native_profiler");
        $__internal_66b1c800f2d0b5a4bad13e9c1a2a7a2d19e1267683050ad23816896ab8b456f5->enter($__internal_66b1c800f2d0b5a4bad13e9c1a2a7a2d19e1267683050ad23816896ab8b456f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66b1c800f2d0b5a4bad13e9c1a2a7a2d19e1267683050ad23816896ab8b456f5->leave($__internal_66b1c800f2d0b5a4bad13e9c1a2a7a2d19e1267683050ad23816896ab8b456f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
