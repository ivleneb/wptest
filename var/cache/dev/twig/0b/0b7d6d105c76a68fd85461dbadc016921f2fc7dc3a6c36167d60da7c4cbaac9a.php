<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_791159947773542c5effe4e3ad27e8c9c8b9150ca6f30ae4a21684f9c2f5a4e8 extends Twig_Template
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
        $__internal_e5acb52bcb0cfa1e9a37cb2dd97733c75c2cdb549da065f2ab3c2bc48584da55 = $this->env->getExtension("native_profiler");
        $__internal_e5acb52bcb0cfa1e9a37cb2dd97733c75c2cdb549da065f2ab3c2bc48584da55->enter($__internal_e5acb52bcb0cfa1e9a37cb2dd97733c75c2cdb549da065f2ab3c2bc48584da55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5acb52bcb0cfa1e9a37cb2dd97733c75c2cdb549da065f2ab3c2bc48584da55->leave($__internal_e5acb52bcb0cfa1e9a37cb2dd97733c75c2cdb549da065f2ab3c2bc48584da55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29dbbfcb615bd1f7d3e04e4eae51311de2c9f5c3ab7334e23d27fdc3bd5d2b5d = $this->env->getExtension("native_profiler");
        $__internal_29dbbfcb615bd1f7d3e04e4eae51311de2c9f5c3ab7334e23d27fdc3bd5d2b5d->enter($__internal_29dbbfcb615bd1f7d3e04e4eae51311de2c9f5c3ab7334e23d27fdc3bd5d2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29dbbfcb615bd1f7d3e04e4eae51311de2c9f5c3ab7334e23d27fdc3bd5d2b5d->leave($__internal_29dbbfcb615bd1f7d3e04e4eae51311de2c9f5c3ab7334e23d27fdc3bd5d2b5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9a332a5cc5ec4977c03c3cc14980c0fdb774fd5a8bc8e2c6663f8253d5fe056 = $this->env->getExtension("native_profiler");
        $__internal_d9a332a5cc5ec4977c03c3cc14980c0fdb774fd5a8bc8e2c6663f8253d5fe056->enter($__internal_d9a332a5cc5ec4977c03c3cc14980c0fdb774fd5a8bc8e2c6663f8253d5fe056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9a332a5cc5ec4977c03c3cc14980c0fdb774fd5a8bc8e2c6663f8253d5fe056->leave($__internal_d9a332a5cc5ec4977c03c3cc14980c0fdb774fd5a8bc8e2c6663f8253d5fe056_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_783ce21e3781ea3111d213dea9fef4bbcfd7d385640859ece12bfcbaed1fb382 = $this->env->getExtension("native_profiler");
        $__internal_783ce21e3781ea3111d213dea9fef4bbcfd7d385640859ece12bfcbaed1fb382->enter($__internal_783ce21e3781ea3111d213dea9fef4bbcfd7d385640859ece12bfcbaed1fb382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_783ce21e3781ea3111d213dea9fef4bbcfd7d385640859ece12bfcbaed1fb382->leave($__internal_783ce21e3781ea3111d213dea9fef4bbcfd7d385640859ece12bfcbaed1fb382_prof);

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
