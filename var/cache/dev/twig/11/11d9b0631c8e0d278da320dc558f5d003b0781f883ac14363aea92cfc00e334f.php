<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_406a890036bff9f12fa32c9b5a295ac268f7bf7ee78ff1cc91200e1af38ed21b extends Twig_Template
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
        $__internal_c0a5c0dc5d44b17658868a929c80dec9cedb7c9cd4dde5d5e0f3a1be7d4b73d6 = $this->env->getExtension("native_profiler");
        $__internal_c0a5c0dc5d44b17658868a929c80dec9cedb7c9cd4dde5d5e0f3a1be7d4b73d6->enter($__internal_c0a5c0dc5d44b17658868a929c80dec9cedb7c9cd4dde5d5e0f3a1be7d4b73d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), true)) : (true))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), true)) : (true))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_c0a5c0dc5d44b17658868a929c80dec9cedb7c9cd4dde5d5e0f3a1be7d4b73d6->leave($__internal_c0a5c0dc5d44b17658868a929c80dec9cedb7c9cd4dde5d5e0f3a1be7d4b73d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 3,  31 => 2,  22 => 1,);
    }
}
/* <div class="sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}">*/
/*     {% if link|default(true) %}<a href="{{ path('_profiler', { token: token, panel: name }) }}">{% endif %}*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*     {% if link|default(true) %}</a>{% endif %}*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
