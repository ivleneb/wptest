<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_34a863c766d3d8d0ebb0d3df70e0f316b798496172d8f3e9694e24429612b2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3c42ed81249a0d4eb38205025e19b630dbfb62f4cf64bfdc2fad52093c72009e = $this->env->getExtension("native_profiler");
        $__internal_3c42ed81249a0d4eb38205025e19b630dbfb62f4cf64bfdc2fad52093c72009e->enter($__internal_3c42ed81249a0d4eb38205025e19b630dbfb62f4cf64bfdc2fad52093c72009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c42ed81249a0d4eb38205025e19b630dbfb62f4cf64bfdc2fad52093c72009e->leave($__internal_3c42ed81249a0d4eb38205025e19b630dbfb62f4cf64bfdc2fad52093c72009e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9919d75cb4c91ba89ca8181bb9b0929c2ee73ffcefb7b4d45d65f08db3314bde = $this->env->getExtension("native_profiler");
        $__internal_9919d75cb4c91ba89ca8181bb9b0929c2ee73ffcefb7b4d45d65f08db3314bde->enter($__internal_9919d75cb4c91ba89ca8181bb9b0929c2ee73ffcefb7b4d45d65f08db3314bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9919d75cb4c91ba89ca8181bb9b0929c2ee73ffcefb7b4d45d65f08db3314bde->leave($__internal_9919d75cb4c91ba89ca8181bb9b0929c2ee73ffcefb7b4d45d65f08db3314bde_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_378c61533e04856ea8517195c9ce466cd44ff618e84a0379949cbfb9940b08a9 = $this->env->getExtension("native_profiler");
        $__internal_378c61533e04856ea8517195c9ce466cd44ff618e84a0379949cbfb9940b08a9->enter($__internal_378c61533e04856ea8517195c9ce466cd44ff618e84a0379949cbfb9940b08a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_378c61533e04856ea8517195c9ce466cd44ff618e84a0379949cbfb9940b08a9->leave($__internal_378c61533e04856ea8517195c9ce466cd44ff618e84a0379949cbfb9940b08a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a6f4d8b98ff721d33aa0ea491eeb136437971d8ed5b189940a1ba2073ea8733 = $this->env->getExtension("native_profiler");
        $__internal_7a6f4d8b98ff721d33aa0ea491eeb136437971d8ed5b189940a1ba2073ea8733->enter($__internal_7a6f4d8b98ff721d33aa0ea491eeb136437971d8ed5b189940a1ba2073ea8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7a6f4d8b98ff721d33aa0ea491eeb136437971d8ed5b189940a1ba2073ea8733->leave($__internal_7a6f4d8b98ff721d33aa0ea491eeb136437971d8ed5b189940a1ba2073ea8733_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
