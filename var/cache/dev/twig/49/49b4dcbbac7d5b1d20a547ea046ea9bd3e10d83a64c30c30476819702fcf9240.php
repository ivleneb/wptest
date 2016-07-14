<?php

/* :wapo:contact.html.twig */
class __TwigTemplate_dd1b96d98da2696af32a6807f6d07df0202189ab6a8e40047b43cbecef09ee8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wapo:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf07341630e928549f92bc3571b1e8e3e6f216013d8b489c4ba3228c5de8d19a = $this->env->getExtension("native_profiler");
        $__internal_cf07341630e928549f92bc3571b1e8e3e6f216013d8b489c4ba3228c5de8d19a->enter($__internal_cf07341630e928549f92bc3571b1e8e3e6f216013d8b489c4ba3228c5de8d19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wapo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf07341630e928549f92bc3571b1e8e3e6f216013d8b489c4ba3228c5de8d19a->leave($__internal_cf07341630e928549f92bc3571b1e8e3e6f216013d8b489c4ba3228c5de8d19a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f975d7e58b23fe19e21240ceb4d0b3290fef2922e747c97809473d496df2dfde = $this->env->getExtension("native_profiler");
        $__internal_f975d7e58b23fe19e21240ceb4d0b3290fef2922e747c97809473d496df2dfde->enter($__internal_f975d7e58b23fe19e21240ceb4d0b3290fef2922e747c97809473d496df2dfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " WAPOSAT ";
        
        $__internal_f975d7e58b23fe19e21240ceb4d0b3290fef2922e747c97809473d496df2dfde->leave($__internal_f975d7e58b23fe19e21240ceb4d0b3290fef2922e747c97809473d496df2dfde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a10260f99da1cf803bb936b45d3b8f21ec48549da48838f88f3a582bea8e167 = $this->env->getExtension("native_profiler");
        $__internal_0a10260f99da1cf803bb936b45d3b8f21ec48549da48838f88f3a582bea8e167->enter($__internal_0a10260f99da1cf803bb936b45d3b8f21ec48549da48838f88f3a582bea8e167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<h1> <span class=\"label label-success grumpy\">WAPOSAT > Contáctanos</span></h1>  
\t<div class=\"col-md-6 center-block\" style=\"float: none; margin-top:40px;\">
\t\t<form>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Correo Electrónico</label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputPassword1\">Nombre</label>
\t\t    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Nombre completo\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <textarea name=\"mensaje\" rows=\"6\" cols=\"100\" class=\"\"></textarea>
\t\t  </div>
\t\t  <div class=\"checkbox\">
\t\t    <label>
\t\t      <input type=\"checkbox\"> Tambièn deseo suscribirme
\t\t    </label>
\t\t  </div>
\t\t  <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
";
        
        $__internal_0a10260f99da1cf803bb936b45d3b8f21ec48549da48838f88f3a582bea8e167->leave($__internal_0a10260f99da1cf803bb936b45d3b8f21ec48549da48838f88f3a582bea8e167_prof);

    }

    public function getTemplateName()
    {
        return ":wapo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} WAPOSAT {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<h1> <span class="label label-success grumpy">WAPOSAT > Contáctanos</span></h1>  */
/* 	<div class="col-md-6 center-block" style="float: none; margin-top:40px;">*/
/* 		<form>*/
/* 		  <div class="form-group">*/
/* 		    <label for="exampleInputEmail1">Correo Electrónico</label>*/
/* 		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 		    <label for="exampleInputPassword1">Nombre</label>*/
/* 		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre completo">*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 		    <textarea name="mensaje" rows="6" cols="100" class=""></textarea>*/
/* 		  </div>*/
/* 		  <div class="checkbox">*/
/* 		    <label>*/
/* 		      <input type="checkbox"> Tambièn deseo suscribirme*/
/* 		    </label>*/
/* 		  </div>*/
/* 		  <button type="submit" class="btn btn-default">Enviar</button>*/
/* 		</form>*/
/* 	</div>*/
/* {% endblock %}*/
