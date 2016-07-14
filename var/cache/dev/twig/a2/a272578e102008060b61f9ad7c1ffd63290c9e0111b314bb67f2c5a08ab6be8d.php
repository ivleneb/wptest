<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_458fe289d8b4cdf25c7a9a4e7b671e634cb74e67e953559c3ba0bb3eb8506497 extends Twig_Template
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
        $__internal_fe6a29f33dc5061f6f2baf9a2a851e732b29789eb9fdc7e8bf454592c02a1c3f = $this->env->getExtension("native_profiler");
        $__internal_fe6a29f33dc5061f6f2baf9a2a851e732b29789eb9fdc7e8bf454592c02a1c3f->enter($__internal_fe6a29f33dc5061f6f2baf9a2a851e732b29789eb9fdc7e8bf454592c02a1c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe6a29f33dc5061f6f2baf9a2a851e732b29789eb9fdc7e8bf454592c02a1c3f->leave($__internal_fe6a29f33dc5061f6f2baf9a2a851e732b29789eb9fdc7e8bf454592c02a1c3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2636f6c60b0bcb860e3912c952011fa6bbffebb98708d07ad03a8be8b623efe = $this->env->getExtension("native_profiler");
        $__internal_b2636f6c60b0bcb860e3912c952011fa6bbffebb98708d07ad03a8be8b623efe->enter($__internal_b2636f6c60b0bcb860e3912c952011fa6bbffebb98708d07ad03a8be8b623efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2636f6c60b0bcb860e3912c952011fa6bbffebb98708d07ad03a8be8b623efe->leave($__internal_b2636f6c60b0bcb860e3912c952011fa6bbffebb98708d07ad03a8be8b623efe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67f8f49391ed97aba95eaed1334994b580252f8cbe35969ec2518b4130119a30 = $this->env->getExtension("native_profiler");
        $__internal_67f8f49391ed97aba95eaed1334994b580252f8cbe35969ec2518b4130119a30->enter($__internal_67f8f49391ed97aba95eaed1334994b580252f8cbe35969ec2518b4130119a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67f8f49391ed97aba95eaed1334994b580252f8cbe35969ec2518b4130119a30->leave($__internal_67f8f49391ed97aba95eaed1334994b580252f8cbe35969ec2518b4130119a30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13e532fb17876163a03640b1208c8c365e60c4944a44daaf8fbcb083cb68cafa = $this->env->getExtension("native_profiler");
        $__internal_13e532fb17876163a03640b1208c8c365e60c4944a44daaf8fbcb083cb68cafa->enter($__internal_13e532fb17876163a03640b1208c8c365e60c4944a44daaf8fbcb083cb68cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13e532fb17876163a03640b1208c8c365e60c4944a44daaf8fbcb083cb68cafa->leave($__internal_13e532fb17876163a03640b1208c8c365e60c4944a44daaf8fbcb083cb68cafa_prof);

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
