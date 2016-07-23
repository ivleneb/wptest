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
        $__internal_db18db4e1c3dbc7d61ac08ecd8375c80aec279d07798f7bee7eb3fc6c138830e = $this->env->getExtension("native_profiler");
        $__internal_db18db4e1c3dbc7d61ac08ecd8375c80aec279d07798f7bee7eb3fc6c138830e->enter($__internal_db18db4e1c3dbc7d61ac08ecd8375c80aec279d07798f7bee7eb3fc6c138830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db18db4e1c3dbc7d61ac08ecd8375c80aec279d07798f7bee7eb3fc6c138830e->leave($__internal_db18db4e1c3dbc7d61ac08ecd8375c80aec279d07798f7bee7eb3fc6c138830e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a233a8a8da09233061be120cbfaaeefa59ed33677a3bd54bbf4ad8b13bcacc4d = $this->env->getExtension("native_profiler");
        $__internal_a233a8a8da09233061be120cbfaaeefa59ed33677a3bd54bbf4ad8b13bcacc4d->enter($__internal_a233a8a8da09233061be120cbfaaeefa59ed33677a3bd54bbf4ad8b13bcacc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a233a8a8da09233061be120cbfaaeefa59ed33677a3bd54bbf4ad8b13bcacc4d->leave($__internal_a233a8a8da09233061be120cbfaaeefa59ed33677a3bd54bbf4ad8b13bcacc4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ec5cd651db2a5b4d53a3329b97f1911760b909734945832d8bdcb5dd9a31291 = $this->env->getExtension("native_profiler");
        $__internal_0ec5cd651db2a5b4d53a3329b97f1911760b909734945832d8bdcb5dd9a31291->enter($__internal_0ec5cd651db2a5b4d53a3329b97f1911760b909734945832d8bdcb5dd9a31291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ec5cd651db2a5b4d53a3329b97f1911760b909734945832d8bdcb5dd9a31291->leave($__internal_0ec5cd651db2a5b4d53a3329b97f1911760b909734945832d8bdcb5dd9a31291_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99de9aab29f5cf71560c2b34e0d8a79fa160337121e9a04b75404b0f79b990cd = $this->env->getExtension("native_profiler");
        $__internal_99de9aab29f5cf71560c2b34e0d8a79fa160337121e9a04b75404b0f79b990cd->enter($__internal_99de9aab29f5cf71560c2b34e0d8a79fa160337121e9a04b75404b0f79b990cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99de9aab29f5cf71560c2b34e0d8a79fa160337121e9a04b75404b0f79b990cd->leave($__internal_99de9aab29f5cf71560c2b34e0d8a79fa160337121e9a04b75404b0f79b990cd_prof);

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
