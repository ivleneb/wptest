<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ca8ae8a00678f586ad0deeba102b21e6b409be36df46f365c81522527aac8723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_02449f3121ca23f190327315bd735b21ebee0429de461ee375ce9ea783a5e091 = $this->env->getExtension("native_profiler");
        $__internal_02449f3121ca23f190327315bd735b21ebee0429de461ee375ce9ea783a5e091->enter($__internal_02449f3121ca23f190327315bd735b21ebee0429de461ee375ce9ea783a5e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02449f3121ca23f190327315bd735b21ebee0429de461ee375ce9ea783a5e091->leave($__internal_02449f3121ca23f190327315bd735b21ebee0429de461ee375ce9ea783a5e091_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db3df019883cacabfbea55d8bc65f7cbe6778d13ba682ec684347d381c2f4fcb = $this->env->getExtension("native_profiler");
        $__internal_db3df019883cacabfbea55d8bc65f7cbe6778d13ba682ec684347d381c2f4fcb->enter($__internal_db3df019883cacabfbea55d8bc65f7cbe6778d13ba682ec684347d381c2f4fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db3df019883cacabfbea55d8bc65f7cbe6778d13ba682ec684347d381c2f4fcb->leave($__internal_db3df019883cacabfbea55d8bc65f7cbe6778d13ba682ec684347d381c2f4fcb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8fd4e3bf9a46efc3edc689d1d6f72d8ed589eef20d0d9a966e0076c68c24f1d = $this->env->getExtension("native_profiler");
        $__internal_c8fd4e3bf9a46efc3edc689d1d6f72d8ed589eef20d0d9a966e0076c68c24f1d->enter($__internal_c8fd4e3bf9a46efc3edc689d1d6f72d8ed589eef20d0d9a966e0076c68c24f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8fd4e3bf9a46efc3edc689d1d6f72d8ed589eef20d0d9a966e0076c68c24f1d->leave($__internal_c8fd4e3bf9a46efc3edc689d1d6f72d8ed589eef20d0d9a966e0076c68c24f1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49cfba67a35ea96923e18e79c6f5a19843b040ab3ef8da3742261d40d585f829 = $this->env->getExtension("native_profiler");
        $__internal_49cfba67a35ea96923e18e79c6f5a19843b040ab3ef8da3742261d40d585f829->enter($__internal_49cfba67a35ea96923e18e79c6f5a19843b040ab3ef8da3742261d40d585f829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_49cfba67a35ea96923e18e79c6f5a19843b040ab3ef8da3742261d40d585f829->leave($__internal_49cfba67a35ea96923e18e79c6f5a19843b040ab3ef8da3742261d40d585f829_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
