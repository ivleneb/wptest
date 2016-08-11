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
        $__internal_a79365fa120b269772897563f6815df274f50daa26730ab7880c9d94c5f8ece2 = $this->env->getExtension("native_profiler");
        $__internal_a79365fa120b269772897563f6815df274f50daa26730ab7880c9d94c5f8ece2->enter($__internal_a79365fa120b269772897563f6815df274f50daa26730ab7880c9d94c5f8ece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79365fa120b269772897563f6815df274f50daa26730ab7880c9d94c5f8ece2->leave($__internal_a79365fa120b269772897563f6815df274f50daa26730ab7880c9d94c5f8ece2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e67b7c17727e77240a9cedfd10c0e0ec0a4efe998d356423bb49066b4941e453 = $this->env->getExtension("native_profiler");
        $__internal_e67b7c17727e77240a9cedfd10c0e0ec0a4efe998d356423bb49066b4941e453->enter($__internal_e67b7c17727e77240a9cedfd10c0e0ec0a4efe998d356423bb49066b4941e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e67b7c17727e77240a9cedfd10c0e0ec0a4efe998d356423bb49066b4941e453->leave($__internal_e67b7c17727e77240a9cedfd10c0e0ec0a4efe998d356423bb49066b4941e453_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e85eb32f257642aadec7300cedb751c5fb52d5467e1c292001e0d0063b166943 = $this->env->getExtension("native_profiler");
        $__internal_e85eb32f257642aadec7300cedb751c5fb52d5467e1c292001e0d0063b166943->enter($__internal_e85eb32f257642aadec7300cedb751c5fb52d5467e1c292001e0d0063b166943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e85eb32f257642aadec7300cedb751c5fb52d5467e1c292001e0d0063b166943->leave($__internal_e85eb32f257642aadec7300cedb751c5fb52d5467e1c292001e0d0063b166943_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65aa82bf96513934de11b66d983998f2b0cd2734612e7328fa8f1a88a5d4e322 = $this->env->getExtension("native_profiler");
        $__internal_65aa82bf96513934de11b66d983998f2b0cd2734612e7328fa8f1a88a5d4e322->enter($__internal_65aa82bf96513934de11b66d983998f2b0cd2734612e7328fa8f1a88a5d4e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65aa82bf96513934de11b66d983998f2b0cd2734612e7328fa8f1a88a5d4e322->leave($__internal_65aa82bf96513934de11b66d983998f2b0cd2734612e7328fa8f1a88a5d4e322_prof);

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
