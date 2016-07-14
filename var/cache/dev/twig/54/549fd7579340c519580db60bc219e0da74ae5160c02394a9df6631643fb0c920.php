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
        $__internal_4b2ab3763dc55fbd6ad2de81087540498e1136afdc85d56da2ecf71560b152c5 = $this->env->getExtension("native_profiler");
        $__internal_4b2ab3763dc55fbd6ad2de81087540498e1136afdc85d56da2ecf71560b152c5->enter($__internal_4b2ab3763dc55fbd6ad2de81087540498e1136afdc85d56da2ecf71560b152c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2ab3763dc55fbd6ad2de81087540498e1136afdc85d56da2ecf71560b152c5->leave($__internal_4b2ab3763dc55fbd6ad2de81087540498e1136afdc85d56da2ecf71560b152c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c525647dfdbdceb5c05ad4e1d177885fa7a1c6b7c6f4af977d169739010dc9d6 = $this->env->getExtension("native_profiler");
        $__internal_c525647dfdbdceb5c05ad4e1d177885fa7a1c6b7c6f4af977d169739010dc9d6->enter($__internal_c525647dfdbdceb5c05ad4e1d177885fa7a1c6b7c6f4af977d169739010dc9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c525647dfdbdceb5c05ad4e1d177885fa7a1c6b7c6f4af977d169739010dc9d6->leave($__internal_c525647dfdbdceb5c05ad4e1d177885fa7a1c6b7c6f4af977d169739010dc9d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2911da485076d3f61bd7a645cc4828bbe1abeb65a9629f7aba3cf3324beca373 = $this->env->getExtension("native_profiler");
        $__internal_2911da485076d3f61bd7a645cc4828bbe1abeb65a9629f7aba3cf3324beca373->enter($__internal_2911da485076d3f61bd7a645cc4828bbe1abeb65a9629f7aba3cf3324beca373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2911da485076d3f61bd7a645cc4828bbe1abeb65a9629f7aba3cf3324beca373->leave($__internal_2911da485076d3f61bd7a645cc4828bbe1abeb65a9629f7aba3cf3324beca373_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5840f2e4cc65231603784708c0ecd054b74494b38dc58db103b1e4c00ae2fb5 = $this->env->getExtension("native_profiler");
        $__internal_f5840f2e4cc65231603784708c0ecd054b74494b38dc58db103b1e4c00ae2fb5->enter($__internal_f5840f2e4cc65231603784708c0ecd054b74494b38dc58db103b1e4c00ae2fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5840f2e4cc65231603784708c0ecd054b74494b38dc58db103b1e4c00ae2fb5->leave($__internal_f5840f2e4cc65231603784708c0ecd054b74494b38dc58db103b1e4c00ae2fb5_prof);

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
