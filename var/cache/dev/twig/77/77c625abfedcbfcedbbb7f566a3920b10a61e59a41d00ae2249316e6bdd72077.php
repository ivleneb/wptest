<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3d3ae73852a67246312691d6a81632ca2b09be03cdd12d6472348ac7f75ec9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_03d0b917310edcda66b3c4a6e5e8e1850f2fb76aa53fde86ba93b0cde234e670 = $this->env->getExtension("native_profiler");
        $__internal_03d0b917310edcda66b3c4a6e5e8e1850f2fb76aa53fde86ba93b0cde234e670->enter($__internal_03d0b917310edcda66b3c4a6e5e8e1850f2fb76aa53fde86ba93b0cde234e670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d0b917310edcda66b3c4a6e5e8e1850f2fb76aa53fde86ba93b0cde234e670->leave($__internal_03d0b917310edcda66b3c4a6e5e8e1850f2fb76aa53fde86ba93b0cde234e670_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2733d2162e603c1061764d8151fe5397f54d3bb5902d8ba56ddda03a51b3afa3 = $this->env->getExtension("native_profiler");
        $__internal_2733d2162e603c1061764d8151fe5397f54d3bb5902d8ba56ddda03a51b3afa3->enter($__internal_2733d2162e603c1061764d8151fe5397f54d3bb5902d8ba56ddda03a51b3afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2733d2162e603c1061764d8151fe5397f54d3bb5902d8ba56ddda03a51b3afa3->leave($__internal_2733d2162e603c1061764d8151fe5397f54d3bb5902d8ba56ddda03a51b3afa3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f32cbf46aad1b82f9ae91cc8e4f2cfb64daff45e14b0ad0efc68518db87fa9d2 = $this->env->getExtension("native_profiler");
        $__internal_f32cbf46aad1b82f9ae91cc8e4f2cfb64daff45e14b0ad0efc68518db87fa9d2->enter($__internal_f32cbf46aad1b82f9ae91cc8e4f2cfb64daff45e14b0ad0efc68518db87fa9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f32cbf46aad1b82f9ae91cc8e4f2cfb64daff45e14b0ad0efc68518db87fa9d2->leave($__internal_f32cbf46aad1b82f9ae91cc8e4f2cfb64daff45e14b0ad0efc68518db87fa9d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0087e0e788db8260ba3d2e574519c01239fff071a8f1d662f28755ef4d517219 = $this->env->getExtension("native_profiler");
        $__internal_0087e0e788db8260ba3d2e574519c01239fff071a8f1d662f28755ef4d517219->enter($__internal_0087e0e788db8260ba3d2e574519c01239fff071a8f1d662f28755ef4d517219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0087e0e788db8260ba3d2e574519c01239fff071a8f1d662f28755ef4d517219->leave($__internal_0087e0e788db8260ba3d2e574519c01239fff071a8f1d662f28755ef4d517219_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
